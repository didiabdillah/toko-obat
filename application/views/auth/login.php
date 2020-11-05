<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="<?php echo base_url(); ?>">
                    <h1 class="align-content">Exodus Drugstore</h1>
                </a>
            </div>
            <div class="login-form">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Username/Email address</label>
                        <input type="text" class="form-control" placeholder="Username/Email" name="email">
                        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="checkbox">
                        <label class="pull-right">
                            <a href="<?php echo base_url('auth/forgotpass/'); ?>">Forgotten Password?</a>
                        </label>

                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>

                    <div class="register-link m-t-15 text-center">
                        <p>Don't have account ? <a href="<?php echo base_url('Auth/register'); ?>"> Sign Up Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>