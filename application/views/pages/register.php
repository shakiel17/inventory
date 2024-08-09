<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        INVENTORY SYSTEM
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                            <?=form_open(base_url()."save_user");?>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="frist_name">Full Name</label>
                                        <input id="first_name" type="text" class="form-control" name="fullname" autofocus required>
                                    </div>                                    
                                </div>
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input id="email" type="text" class="form-control" name="username" required>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control password" name="password" required>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control password-confirm" name="password-confirm" required>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnregister">Register</button>
                                </div>
                            <?=form_close();?>
                        </div>                        
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Member already? <a href="<?=base_url();?>login">Login</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; MedMatrix e-Health Solutions
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>