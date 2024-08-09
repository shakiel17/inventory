<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                
            </form>
            <ul class="navbar-nav navbar-right">                
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="<?=base_url();?>design/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                    <?php
                    if($this->session->user_login){
                        ?>
                        <div class="d-sm-none d-lg-inline-block"><?=$this->session->fullname;?></div></a>
                        <?php
                    }else{
                        ?>
                        <div class="d-sm-none d-lg-inline-block">User Login</div></a>
                        <?php
                    }
                    ?>                    
                    <div class="dropdown-menu dropdown-menu-right">
                    <?php
                    if($this->session->user_login){
                        ?>
                        <div class="dropdown-title">Logged in 5 min ago</div>
                        <a href="features-profile.html" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                        <a href="features-activities.html" class="dropdown-item has-icon"><i class="fas fa-bolt"></i> Activities</a>
                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?=base_url();?>logout" class="dropdown-item has-icon text-danger" onclick="return confirm('Do you wish to logout?');return false;"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        <?php
                    }else{
                        ?>
                        <div class="dropdown-title">Please login</div>                        
                        <div class="dropdown-divider"></div>
                        <a href="<?=base_url();?>login" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Login</a>
                        <?php
                    }
                    ?>                        
                    </div>
                </li>
            </ul>
        </nav>