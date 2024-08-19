<!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="<?=base_url();?>">Inventory System</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown <?=$home;?>">
                        <a href="<?=base_url();?>" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a>                        
                    </li>  
                    <?php
                    if($this->session->user_login){
                    ?>
                    <li class="dropdown <?=$receive;?>">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> <span>Receiving</span></a>
                        <ul class="dropdown-menu">
                            <li class="<?=$receive;?>"><a class="nav-link" href="<?=base_url();?>manual_receiving">Manual Receiving</a></li>                            
                        </ul>
                    </li>       
                    <li class="dropdown <?=$product;?>">
                        <a href="#" class="nav-link has-dropdown"><i class="fa fa-wrench"></i> <span>Production</span></a> 
                        <ul class="dropdown-menu">
                        <li class="<?=$item;?>"><a class="nav-link" href="<?=base_url();?>manage_items">Manage Items</a></li>
                            <li class="<?=$prod;?>"><a class="nav-link" href="<?=base_url();?>manage_production">Production</a></li>
                            <li class="<?=$kit;?>"><a class="nav-link" href="<?=base_url();?>kit_assembly">Kit Assembly</a></li>                            
                        </ul>                       
                    </li>             
                    <li class="dropdown <?=$inventory;?>">
                        <a href="#" class="nav-link has-dropdown"><i class="fa fa-database"></i> <span>Inventory</span></a>
                        <ul class="dropdown-menu">
                            <li class="<?=$card;?>"><a class="nav-link" href="<?=base_url();?>stock_card">e-Stock Card</a></li>
                            <li class="<?=$sheet;?>"><a class="nav-link" href="<?=base_url();?>count_sheet">Count Sheet</a></li>                            
                        </ul>
                    </li>                                        
                    <li class="dropdown <?=$report;?>">
                        <a href="#" class="nav-link has-dropdown"><i class="fa fa-file-o"></i> <span>Reports</span></a>
                        <ul class="dropdown-menu">
                            <li class="<?=$rr;?>"><a class="nav-link" href="<?=base_url();?>receiving_report">Receiving Report</a></li>
                            <li class="<?=$prodrep;?>"><a class="nav-link" href="<?=base_url();?>production">Production</a></li>                            
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                </ul>                
            </aside>
        </div>