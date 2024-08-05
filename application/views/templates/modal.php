                  <div class="modal fade logout" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Logout</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <h4>Do you wish to logout?</h4>                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No, I want to stay!</button>
                          <?=form_open(base_url()."logout");?>
                          <button type="submit" class="btn btn-primary">Yes, I need to go</button>
                          <?=form_close();?>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="modal fade changepassword" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                      <?=form_open(base_url()."change_password");?>
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Change Password</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" name="oldpass" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="newpass" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmpass" class="form-control">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                          
                          <button type="submit" class="btn btn-primary">Update</button>
                          <?=form_close();?>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="modal fade manageEmployee" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <?=form_open(base_url()."save_employee",array("id" => "demo-form2", "class" => "form-horizontal form-label-left", "data-parsley-validate"));?>
                        <input type="hidden" name="id" id="employee_id">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Manage Employee</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">                              
                              <div class="x_content">
                                <br />
                                <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Employee ID <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9">
                                      <input type="text" name="empid" required="required" class="form-control" id="empid">
                                    </div>
                                  </div>
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <input type="text" name="lastname" required="required" class="form-control"  id="lastname">
                                    </div>
                                  </div>
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <input type="text" required="required" class="form-control" name="firstname"  id="firstname">
                                    </div>
                                  </div>                                  
                                  <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Middle Name</label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <input class="form-control" type="text" name="middlename"  id="middlename">
                                    </div>
                                  </div>
                                  <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Suffix</label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <input id="suffix" class="form-control" type="text" name="suffix">
                                    </div>
                                  </div>
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input type="radio" name="gender" value="M" class="join-btn"  id="male"> &nbsp; Male &nbsp;
                                        </label>
                                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input type="radio" name="gender" value="F" class="join-btn" id="female"> Female
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <input id="birthday" name="birthdate" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                      <script>
                                        function timeFunctionLong(input) {
                                          setTimeout(function() {
                                            input.type = 'text';
                                          }, 60000);
                                        }
                                      </script>
                                    </div>
                                  </div> 
                                  <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <textarea class="form-control" name="address" id="address"></textarea>
                                    </div>
                                  </div>
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contact No. <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <input type="text" required="required" class="form-control" name="contactno" id="contactno">
                                    </div>
                                  </div> 
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SSS No. <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <input type="text" required="required" class="form-control" name="sss" id="sssno">
                                    </div>
                                  </div> 
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Philhealth No. <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <input type="text" required="required" class="form-control" name="phic" id="phicno">
                                    </div>
                                  </div> 
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Salary <span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                      <input type="text" required="required" class="form-control" name="salary" id="salary">
                                    </div>
                                  </div>                                                                                               
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" onclick="return confirm('Do you want to submit employee profile?');return false;">Save changes</button>
                        </div>
                        <?=form_close();?>
                      </div>
                    </div>
                  </div>
                  
                  <div class="modal fade dailyAttendance" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                      <?=form_open(base_url()."view_attendance");?>
                      <input type="hidden" name="empid" id="att_empid">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Select Date Range</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Start Date</label>
                            <input type="date" name="startdate" class="form-control" value="<?=date('Y-m-d');?>">
                          </div>
                          <div class="form-group">
                            <label>End Date</label>
                            <input type="date" name="enddate" class="form-control" value="<?=date('Y-m-d');?>">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                          
                          <button type="submit" class="btn btn-primary">Generate</button>                          
                        </div>
                        <?=form_close();?>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade manageAttendance" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                      <?=form_open(base_url()."save_attendance");?>
                      <input type="hidden" name="id" id="ma_id">
                      <input type="hidden" name="empid" id="ma_empid">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Manage Attendance</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="datearray" class="form-control" id="att_datearray">
                          </div>
                          <div class="form-group">
                            <label>Time in</label>
                            <input type="time" name="timein" class="form-control" id="att_time_in">
                          </div>
                          <div class="form-group">
                            <label>Time out</label>
                            <input type="time" name="timeout" class="form-control" id="att_time_out">
                          </div>
                          <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control"  id="att_status">
                              <option value="REGULAR">REGULAR</option>
                              <option value="VL">VL</option>
                              <option value="OT">OT</option>
                              <option value="SL">SL</option>
                            </select>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                          
                          <button type="submit" class="btn btn-primary">Submit</button>                          
                        </div>
                        <?=form_close();?>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade managePayrollPeriod" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                      <?=form_open(base_url()."save_period");?>
                      <input type="hidden" name="id" id="pp_id">                      
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Manage Payroll Period</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Start Date</label>
                            <input type="date" name="startdate" class="form-control" id="pp_date_from">
                          </div>
                          <div class="form-group">
                            <label>End Date</label>
                            <input type="date" name="enddate" class="form-control" id="pp_date_to">
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                          
                          <button type="submit" class="btn btn-primary">Submit</button>                          
                        </div>
                        <?=form_close();?>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade manageDeductions" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                      <?=form_open(base_url()."save_deductions");?>
                      <input type="hidden" name="empid" id="ded_empid">                      
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Manage Deductions</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" id="ded_description">
                          </div>
                          <div class="form-group">
                            <label>Amount</label>
                            <input type="text" name="amount" class="form-control" id="ded_amount">
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                          
                          <button type="submit" class="btn btn-primary">Submit</button>                          
                        </div>
                        <?=form_close();?>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade managePayroll" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                      <?=form_open(base_url()."submit_payroll");?>
                      <input type="hidden" name="empid" id="pay_empid">                      
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Manage Payroll</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Payroll Period</label>
                            <select name="period" class="form-control" required>
                              <option value="">Select Period</option>
                            <?php
                            $period=$this->Payroll_model->getAllPayrollPeriod();
                            foreach($period as $item){
                              echo "<option value='$item[id]'>".date('M-d',strtotime($item['date_from']))." - ".date('M-d Y',strtotime($item['date_to']))."</option>";
                            }
                            ?>
                            </select>
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                          
                          <button type="submit" class="btn btn-primary">Submit</button>                          
                        </div>
                        <?=form_close();?>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade manageAdvances" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                      <?=form_open(base_url()."save_advances");?>
                      <input type="hidden" name="empid" id="adv_empid">                      
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Manage Advances</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="datearray" class="form-control" value="<?=date('Y-m-d');?>">
                          </div>
                          <div class="form-group">
                            <label>Amount</label>
                            <input type="text" name="amount" class="form-control">
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                          
                          <button type="submit" class="btn btn-primary">Submit</button>                          
                        </div>
                        <?=form_close();?>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade printPayslip" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                      <?=form_open(base_url()."print_payslip",array('target' => '_blank'));?>
                      <input type="hidden" name="empid" id="slip_empid">                      
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Print Payslip</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Payroll Period</label>
                            <select name="period" class="form-control" required>
                              <option value="">Select Period</option>
                            <?php
                            $period=$this->Payroll_model->getAllPayrollPeriod();
                            foreach($period as $item){
                              echo "<option value='$item[id]'>".date('M-d',strtotime($item['date_from']))." - ".date('M-d Y',strtotime($item['date_to']))."</option>";
                            }
                            ?>
                            </select>
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                          
                          <button type="submit" class="btn btn-primary">Submit</button>                          
                        </div>
                        <?=form_close();?>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade printPayrollSummary" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                      <?=form_open(base_url()."print_payroll_summary",array('target' => '_blank'));?>                      
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Print Payroll Summary</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Payroll Period</label>
                            <select name="period" class="form-control" required>
                              <option value="">Select Period</option>
                            <?php
                            $period=$this->Payroll_model->getAllPayrollPeriod();
                            foreach($period as $item){
                              echo "<option value='$item[id]'>".date('M-d',strtotime($item['date_from']))." - ".date('M-d Y',strtotime($item['date_to']))."</option>";
                            }
                            ?>
                            </select>
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                          
                          <button type="submit" class="btn btn-primary">Submit</button>                          
                        </div>
                        <?=form_close();?>
                      </div>
                    </div>
                  </div>