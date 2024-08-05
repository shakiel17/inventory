
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Shopping | Administrator</title>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>design/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url();?>design/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url();?>design/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=base_url();?>design/admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url();?>design/admin/build/css/custom.min.css" rel="stylesheet">
    <link rel="icon" href="<?=base_url();?>design/img/pclogo.png" type="img/png">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?=form_open(base_url().'admin_auth');?>
              <h1>Administrator Login</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required= />
              </div>
              <div>
                <input type="submit" class="btn btn-info btn-sm" value="Log in">                
              </div>

              <div class="clearfix"></div>            
            <?=form_close();?>
          </section>
          <?php
          if($this->session->login_remarks){
          ?>
          <div class="alert alert-danger"><?=$this->session->login_remarks;?></div>
          <?php
          }
          ?>
        </div>                
      </div>
    </div>
  </body>
</html>
