<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url();?>main"><i class="fa fa-home"></i> Home</a>                    
                  </li>
                  <li><a><i class="fa fa-television"></i> Attendance <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url();?>daily_monitoring">Attendance Monitoring</a></li>
                      <!-- <li><a href="form_advanced.html">Manage Attendance</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Payroll <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url();?>manage_payroll">Manage Payroll</a></li>
                      <li><a href="#" data-toggle="modal" data-target=".printPayrollSummary">Print Payroll Summary</a></li>                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cogs"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url();?>manage_deductions">Deductions</a></li>
                      <li><a href="<?=base_url();?>manage_payroll_period">Payroll Period</a></li>                      
                      <li><a href="<?=base_url();?>manage_advances">Advances</a></li>
                    </ul>
                  </li>                  
                </ul>
              </div>

            </div>