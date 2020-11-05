<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Auth_model');
    }

    public function index()
    {
        //Title
        $data['title'] = "Login - Auth";

        //Cek Ada Session Atau Tidak
        if ($this->session->userdata('username')) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('Dashboard');
            } else if ($this->session->userdata('role_id') == 2) {
                redirect('landing');
            }
        }

        //Form Validation
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer');
        } else {
            //jika validasi sukses
            $this->_login();
        }
    }

    public function register()
    {
        //Title
        $data['title'] = "Register - Auth";

        //Cek Ada Session Atau Tidak
        if ($this->session->userdata('username')) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('Dashboard');
            } else if ($this->session->userdata('role_id') == 2) {
                redirect('landing');
            }
        }

        //Form Validation
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('templates/auth_footer');
        } else {
            //jika validasi sukses
            $this->Auth_model->register();
            redirect('auth');
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user  = $this->Auth_model->login($email);

        //usernya ada
        if ($user) {
            //usernya aktif
            if ($email == $user["email"] || $email == $user["username"]) {

                //cek password
                if (password_verify($password, $user['password'])) {

                    //buat Session User
                    $data = [
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    //Halaman yang di arahkan
                    if ($user['role_id'] == 1) {
                        redirect('Dashboard');
                    } else if ($user['role_id'] == 2) {
                        redirect('landing');
                    } else {
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Password Salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Username/Email Salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Akun Tidak Terdaftar</div>');
            redirect('auth');
        }
    }

    public function forgotpass()
    {
        //Title
        $data['title'] = "Forgot Password - Auth";

        //Cek Ada Session Atau Tidak
        if ($this->session->userdata('username')) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('Dashboard');
            }
        }

        //Form Validation
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/forgotpassword', $data);
            $this->load->view('templates/auth_footer');
        } else {
            //jika validasi sukses
            $this->_resetpassword();
        }
    }

    private function _resetpassword()
    {
        $email = $this->input->post('email');

        $Emaildb = $this->Auth_model->_resetpassword($email);

        $nama = $Emaildb["nama"];
        $username = $Emaildb["username"];

        if ($Emaildb["email"] == $email) {
            $this->_sendEmail($nama, $username, $email);
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Silahkan Periksa Email Untuk Ganti Password</div>');
            redirect('auth/lupapassword');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Email Tidak Terdaftar</div>');
            redirect('auth/lupapassword');
        }
    }

    private function _sendEmail($nama, $username, $email)
    {
        $config = [
            'protocol' => 'SMTP',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'dkm.jatisawit.lor@gmail.com',
            'smtp_pass' => 'Jrbbn-4q997',
            'smtp_crypto' => 'ssl',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'clrf' => "\r\n"
        ];

        $token = base64_encode(random_bytes(32));
        $user_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
        ];

        $to_email = $email;
        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('dkm@jatisawit-lor.com', 'Exodus Drugstore');
        $this->email->to($to_email);

        $this->email->subject('Reset Password Verifikasi');
        $this->email->message('Nama : ' . $nama . '<br>' . 'Username : ' . $username . '<br>' . 'Email : ' . $email . '<br>' . 'Klik Link Reset Password : <a href="' . base_url() . 'Auth/resetpass?email=' . $to_email . '&token=' . urlencode($token) . '">Reset</a>');

        //Insert Token Ke Database
        $this->db->insert('reset_token', $user_token);

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function resetpass()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->Auth_model->resetpass($email);

        if ($user) {
            $user_token = $this->Auth_model->resetpasstoken($token);
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->session->set_userdata('reset_email', $email);

                    redirect('auth/ubahpassword');
                } else {
                    $this->db->delete('reset_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Reset Password Gagal, Token Kadaluarsa</div>');
                    redirect('auth/lupapassword');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Reset Password Gagal, Token Salah</div>');
                redirect('auth/lupapassword');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Reset Password Gagal, Email Salah</div>');
            redirect('auth/lupapassword');
        }
    }

    public function ubahpassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth/lupapassword');
        }

        $data['title'] = "Ubah Password - Auth";

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|required|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/Header', $data);
            $this->load->view('auth/ubahpassword', $data);
            $this->load->view('templates/Footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('users');

            $this->db->delete('reset_token', ['email' => $email]);
            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Diganti</div>');
            redirect('auth');
        }
    }

    public function blocked()
    {
        $data['title'] = "Di Blokir";

        $this->load->view('templates/Header', $data);
        $this->load->view('auth/blocked', $data);
        $this->load->view('templates/Footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Keluar Sukses!!!</div>');
        redirect('auth');
    }
}
