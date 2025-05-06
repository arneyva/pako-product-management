<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="col-12">
        <div class="row justify-content-center g-0">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="bg-white rounded10 shadow-lg">
                    <div class="content-top-agile p-20 pb-0">
                        <h2 class="text-primary">Get started with Us</h2>
                        <p class="mb-0">Register a new membership</p>
                    </div>
                    <div class="p-40">
                        <form method="POST" action="<?= base_url('auth/register'); ?>">
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                    <input type="text" class="form-control ps-15 bg-transparent" placeholder="Username" name="username" id="username" value="<?= set_value('username'); ?>">
                                </div>
                                <small class="text-danger"><?= form_error('username'); ?></small>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                    <input type="text" class="form-control ps-15 bg-transparent" id="email" name="email"
                                        placeholder="Email Address" value="<?= set_value('email'); ?>">
                                </div>
                                <small class="text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                    <input type="password" class="form-control ps-15 bg-transparent" placeholder="Password" id="password1" name="password1">
                                </div>
                                <small class="text-danger"><?= form_error('password1'); ?></small>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                    <input type="password" class="form-control ps-15 bg-transparent" placeholder="Retype Password" id="password2" name="password2">
                                </div>
                            </div>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-info margin-top-10">SIGN IN</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="mt-15 mb-0">Already have an account?<a href="<?= base_url() ?>auth" class="text-danger ms-5"> Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>