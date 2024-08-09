<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        Inventory System
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>User Login</h4>
                        </div>
                        <div class="card-body">                            
                                <?=form_open(base_url()."authentication",array('class' => 'needs-validation','novalidate' => ''));?>
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input type="text" class="form-control" name="username" tabindex="1" required autofocus autocomplete="off">
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>                                        
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required >
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                    </button>
                                </div>
                            <?=form_close();?>
                            <div class="text-center mt-4 mb-3">
                                <a class="text-job text-muted" href="<?=base_url();?>">Back to Main</a>
                            </div>                            
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Don't have an account? <a href="<?=base_url();?>register">Create One</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; MedMatrix e-Health Solutions
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>