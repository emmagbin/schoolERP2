


    <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

      <div id="createUser" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">Create A New User</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                              <form>
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">User's Full Name</label>
                                      <input id="fullname" name="fullname" class="form-control" type="text" style="font-size: 11px" required=""></div>

                                          <div class="col-md-4">
                                              <label  class="form-label" style="font-size: 12px">Sex</label>
                                  <select id="gender" name="gender" class="form-control" style="font-size: 11px" required="">
                                    <option value="" class="form-control" disabled="" selected="" >--select Gender</option>
                                                  <option value="Male" >Male</option>
                                                  <option value="Female">Female</option>
                                                  

                                              </select>
                                          </div>

                                          <!-- <?php echo form_dropdown('roles',$roles,'class="form-control"'); ?>-->

                                  </div></div>
                                  <div class="form-group">
                                      <div class="row">
                              <div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">User Email</label>
                              <input id="userEmail" name="userEmail"  class="form-control" type="text" style="font-size: 11px" required="">
</div>


                                      <div class="col-md-4">
                                          <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                          <input id="contact" name="contact" maxlength="10" class="form-control" type="text" style="font-size: 11px" required="">
                                      </div>

                                  </div>
</div><hr style="border-color: darkgoldenrod">

                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-12">
                                   <select id="role" name="role" class="form-control" style="font-size: 11px" required="">
                                    <option value="" class="form-control" disabled="" selected="" >--select Role</option>
                                                    <?php foreach($roles as $record):?>
                                                       
                            <option value="<?php echo $record->rolename;?>"><?php echo $record->rolename;?></option>
                                                     
                                                 
                                                   <?php endforeach;?>
                                              </select>
                                          </div>



                                      </div>
                                  </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="button"  class="addnewuser btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Save</button>
                  </div>
                   </form>
                   <center><img  id="loading" src="assets/images/294.gif" style="display: none;  "/></center>
                   <center> <span id="newUser" style="color:red; font-family: Verdana; font-size: 11px "></span>  </center>

              </div>
          </div>
      </div>








      <!--//////////////////////////////////////////////////////////////////////////////////////-->
       <div id="pwdChange" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-edit icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">Change Password modal</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">
                <form>

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display">
                        
                                <input type="hidden" id="my_email_address" value="<?php echo $userEmail;?>" name="email">
                                  <div class="form-group">

                                      <label  class="form-label" style="font-size: 12px">Old Password</label>
                                      <input id="old_pass" name="password" class="form-control" type="password" style="font-size: 11px" required="">

                                  </div>
                                  <div class="row">
                                  <div class="form-group">
                                      <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">New Password</label>
                                      <input id="new_pass" name="newpassword" class="form-control" type="password" style="font-size: 11px" required="">

                              </div>


                                      <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Confirm Password</label>
                                      <input id="new_pass_confirm" name="confirmpassword" class="form-control" type="password" style="font-size: 11px" required=""></div>

                                  </div></div>
                          

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="submit" id="subm" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Save</button>
                      <br>
                       <center> <span id="error_exist" style="color:red; "></span>  </center>
                  </div>

                  
                </form>
              </div>
          </div>
      </div>

<!--////////////////////////////////////////////////////////////////////////////////////////////-->



<!--////////////////////////////////////////////////////////////////////////////////////////////-->
          <div id="logout" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-lock icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 14px">System Logout modal</h4>

                    </div>
                </div>
              <form method="post" action="login_controller/logout"  >
                <div class="modal-tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Logout From The System?</a></li>

                    </ul>

                </div>
                <div class="modal-footer">
<center><button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                </div>
              </form>
            </div>
        </div>
    </div>





    <!--///////////////////////////////////////////////////////////////////////////////////////-->
      <div id="RegAgent" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">Register A New Agent</h4>

                        </div>
                    </div>
                    
                    <div class="modal-tabs">

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="displayagent">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label  class="form-label" style="font-size: 12px">Agent's Full Name</label>
                                                <input id="Agentname" name="Agentname" class="form-control" type="text" style="font-size: 11px" required=""></div>

                                            <div class="col-md-4">
                                                <label  class="form-label" style="font-size: 12px">Gender</label>

                                                <select id="Agnetsex" name="Agnetsex" class="form-control" style="font-size: 11px" required="">
                                                   <option selected="" disabled="">--Gender--</option>

                                                    <option value="Male" >Male</option>
                                                    <option value="Female">Female</option>
                                                   
                                                </select>
                                            </div>


                            <input type="hidden" value="<?php echo $userEmail;?>" name="regby">
                                        </div></div>
                                    <div class="form-group">
                                        <div class="row">


                                            <div class="col-md-8">
                                                <label  class="form-label" style="font-size: 12px">Email</label>
                                                <input id="agentEmail" name="agentEmail" class="form-control" type="text" style="font-size: 11px" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                                <input id="Agentcontact" name="Agentcontact" class="form-control" type="text" style="font-size: 11px" required="" maxlength="10">
                                            </div>

                                        </div>
                                    </div><hr style="border-color: darkgoldenrod">
                           </div>

                        </div>
                    </div>
                    <div class="modal-footer">


                        <button type="button" id="mysubmit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Register Agent</button>
                    </div>

                     
                       </form><br>
                      <div class="row" style="background-color: maroon; color: #fff">
                        <center><img  id="agent" src="assets/images/294.gif" style="display: none;  "/></center>
                        <center> <span id="userExist" style="color:#fff; font-family: Verdana; font-size: 11px "></span></center>
                      </div>
                      
                </div>
            </div>
        </div>

<!--/////////////////////////////////////////////////////////////////////////////////////-->



         <div id="subscribersaccountbalance" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-money icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">Check Balance</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                              <form>
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">Suspense Account Number</label>
                                      <input id="suspenseaccountnumber"  name="suspenseaccountnumber" class="form-control" type="text" style="font-size: 11px" required="" maxlength="10"></div>

                                         <div class="col-md-4">
                                          <br>
                                         <button type="button" class="subbalance btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Check</button></div>


                                    
                                  </div></div>

                                         <div class="row">
                                          <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Actual Balance</label>
                                      <input id="subscribersaccountbalancetext" name="subbalance" class="form-control" type="text" style="font-size: 11px" readonly></div>
                                       <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Bonus Balance</label>
                                      <input id="bobsubscribersaccountbalancetext" name="subbalance" class="form-control" type="text" style="font-size: 11px" readonly></div> 
                                  </div></div>
                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">
              <center><img  id="loadingsubscribersbalance" src="assets/images/745.gif" style="display: none;  "/></center>
               <center> <span id="subscribersbalance" style="color:white; font-family: Verdana; font-size: 11px "></span>  </center>

<!--                       <button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Save</button> -->
                  </div>
                   </form>
              </div>
          </div>
      </div>






      