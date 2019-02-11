        <?php include ('header.php') ;?>



    <div class="layout-main">
      <div class="layout-sidebar" >
        <div class="layout-sidebar-backdrop" ></div>
        <div class="layout-sidebar-body" >
          <div class="custom-scrollbar" >
            <nav id="sidenav" class="sidenav-collapse collapse" >
              <ul class="sidenav">
                  <li class="sidenav-heading" style="color: #000"><b><u>User Management</u></b></li>
                  <li class="sidenav-item" >
                      <a href="user" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" ></span>
                          <span class="sidenav-label" style="font-size: 11px; " >Accounts Utilities</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="role" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-briefcase"></span>
                          <span class="sidenav-label" style="font-size: 11px">Role Management</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-users"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Create A New User</span>
                      </a>

                  </li>

                  <li class="sidenav-heading" style="color: #000"><b><u>Collection Agents Management</u></b></li>
                  <li class="sidenav-item">
                      <a href="data" aria-haspopup="true" style="background-color: darkgoldenrod;">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Data Utilities</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                       <a href="cashin" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-money"></span>
                          <span class="sidenav-label" style="font-size: 11px" >Collections Cash-In</span>
                      </a> 

                  </li>


                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-users"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#RegAgent">Register A New Agent</span>
                      </a>

                  </li>

                   <li class="sidenav-heading" style="color: #000"><b><u>Register Suscriber</u></b></li>
                  <li class="sidenav-item">
                      <a href="registerSuscriber" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit"></span>
                          <span class="sidenav-label" style="font-size: 11px" >New Suscriber</span>
                      </a>

                  </li>

                  <li class="sidenav-item">
                      <a href="suscriberCashin" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit"></span>
                          <span class="sidenav-label" style="font-size: 11px" >Suscriber Cashin</span>
                      </a>

                  </li>


                  <li class="sidenav-heading" style="color: #000"><b><u>Onboarded Organizations</u></b></li>
                  <li class="sidenav-item ">
                      <a href="utilities" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-globe"></span>
                          <span class="sidenav-label" style="font-size: 11px">Organizations Utilities</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="onboarding" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-user"></span>
                          <span class="sidenav-label" style="font-size: 11px" >Onboard An Organization</span>
                      </a>

                  </li>

                <li class="sidenav-heading" style="color: #000"><b><u>Subscribers Analytics &amp Insights</u></b></li>
                <li class="sidenav-item ">
                  <a href="suscribers" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-users"></span>
                    <span class="sidenav-label" style="font-size: 11px">Subscribers Data Mart</span>
                  </a>
                                 </li>
                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-sort-numeric-asc"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#subscribersaccountbalance">Subscriber Account Balance</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-sort-numeric-asc"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#">Redeem Insurance</span>
                      </a>

                  </li>


                  <li class="sidenav-item  ">
                      <a href="ministatement" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-file-archive-o"></span>
                          <span class="sidenav-label" style="font-size: 11px">Subscriber Mini Statement</span>
                      </a>
                  </li>



             

                  <li class="sidenav-heading" style="color: #000"><b><u>Revenue Reporting &amp Analytics</u></b></li>
                        <li class="sidenav-item ">
                            <a href="agcall" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-line-chart"></span>
                                <span class="sidenav-label" style="font-size: 11px">Agent Collections RE</span>
                            </a>

                        </li>
                        <li class="sidenav-item ">
                            <a href="orgcoll" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-pie-chart"></span>
                                <span class="sidenav-label" style="font-size: 11px">Organizations Contributions RE</span>
                            </a>

                        </li>
                        <li class="sidenav-item ">
                            <a href="mobilecoll" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-area-chart"></span>
                                <span class="sidenav-label" style="font-size: 11px">Mobile Money Contributions RE</span>
                            </a>

                        </li>

                        <li class="sidenav-item ">
                            <a href="cashout" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-bar-chart"></span>
                                <span class="sidenav-label" style="font-size: 11px">Cash Out RE</span>
                            </a>

                        </li>





              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">Collection Agents Management</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:darkgoldenrod">Utilities</small>

            </p>
          </div>
          <div class="row gutter-xs">
              <div class="col-xs-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="card-actions">

                              <button type="button" class="card-action card-reload" title="Reload"></button>

                          </div>

                      </div>
                      <div class="card-body">


                         <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                              <thead>
                              <tr>
                                 <th>Suspense A/C</th>
                                  <th>Phone Number</th>
                                  <th>Agent Name</th>
                                  <th>Registered On</th>
                                  <th>Sex</th>
                                  <th>Status</th>
                                  <th><Center> Actions</Center></th>

                              </tr>
                              </thead>
                              <tbody>
                                  <?php foreach($all_Agents as $record):?>
                              <tr>

                                        <td>
                                            <?php echo $record->suspenseAccountNumber;?>
                                        </td>

                                       
                                        <td>
                                            <?php echo $record->agentPhoneNumber;?>
                                        </td>
                                        <td>
                                            <?php echo $record->accountName;?>
                                        </td>
                                       
                                        <td>
                                            <?php echo $record->CreatedOn;?>
                                        </td>
                                        <td>
                                            <?php echo $record->Sex;?>
                                        </td>

                                        <?php if($record->accountStatus=='A'){?>
                                            <td style = "text-transform: capitalize; background-color: green; color: white">
                                                <center>Active</center> 
                                             </td>
                                           <?php }?>
                                        <?php if($record->accountStatus=='D'){?>
                                            <td style = "text-transform: capitalize; background-color: red; color: white">
                                                <center>Locked </center>
                                              </td>
                                        <?php }?>
                                        <td>
                                    <Center>
                                   <button class="bntedit  btn  btn-warning" style = "text-transform: capitalize; background-color: goldenrod; ; border-color: goldenrod"  type="button" data-toggle="modal" data-target="#editAgent"
                                    data-AgPhoneNumber="<?php echo $record->agentPhoneNumber;?>"
                                                    data-id="<?php echo $record->agentEmail;?>"
                                                    data-AgfullName="<?php echo $record->accountName;?>"
                                                      data-Sex="<?php echo $record->Sex;?>"
                                                    > <i class = "icon icon-edit"></i></button> |
                                                   
                                                      <?php if($record->accountStatus=='A'){?>|

                                                     <button class="btndisable btn  btn-warning" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disAgent"
                                                      data-AgPhoneNumber="<?php echo $record->agentPhoneNumber;?>"
                                                    data-id="<?php echo $record->agentEmail;?>"
                                                    data-AgfullName="<?php echo $record->accountName;?>"
                                                    > <i class = "icon icon-lock"></i></button> |
                                                    <?php }?>

                                                      <?php if($record->accountStatus=='D'){?>|
                                                       <button class="btndelete btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUseronpage"  data-AgPhoneNumber="<?php echo $record->agentPhoneNumber;?>"
                                                    data-id="<?php echo $record->agentEmail;?>"
                                                    data-AgfullName="<?php echo $record->accountName;?>"> <i class = "icon icon-unlock" 
                                                        
                                                    ></i></button>
                                                         <?php }?>
                                                        <button class="yourbalance btn  btn-warning" style = "text-transform: capitalize;  background-color: royalblue; border-color: royalblue"  type="button" data-toggle="modal" data-target="#checkbalance"  data-AgPhoneNumber="<?php echo $record->agentPhoneNumber;?>"
                                                    data-id="<?php echo $record->agentEmail;?>"
                                                    data-suspenseAccountNumber="<?php echo $record->suspenseAccountNumber;?>">
                                                    <input type="hidden" id="suspenseAccountNumber" value="<?php echo $record->suspenseAccountNumber;?>" > <i class = "icon icon-money" 
                                                        
                                                    ></i></button>

                                                  </Center>

                                                </td>


                              </tr>

 <?php endforeach;?>
                              </tbody>
                          </table>












                          
                      </div>
                  </div>
              </div>
          </div>

            <div class="divider">
                <div class="divider-content " style = "color: darkgoldenrod"><b><i class="icon icon-line-chart"></i> Statistics</b></div>
            </div>
          <div class="row">


              <div class="col-md-6">
                  <div class="panel panel-body" data-toggle="match-height">
                      <h6 class="text-left m-t-0">Gender Distribution</h6>
                      <div class="row">

                          <div class="col-xs-3">
                              <br><br>
                              <ul class="list-unstyled">
                                  <li class="m-b">
                                      <small class="nowrap">
                                          <span class="icon icon-square icon-fw" style="color: darkgoldenrod"></span>
                                          Male
                                      </small>
                                  </li>
                                  <li class="m-b">
                                      <small class="nowrap">
                                          <span class="icon icon-square icon-fw" style="color: gainsboro"></span>
                                          Female
                                      </small>
                                  </li>


                              </ul>
                          </div>
                          <div class="col-xs-6">
                              <canvas data-chart="pie" data-labels='["Male", "Female"]' data-values='[{"backgroundColor": ["darkgoldenrod", "gainsboro"], "data": [<?php echo $totalMales;?>, <?php echo $totalFemales;?>]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
                          </div>
                      </div>
                  </div></div>


                  <div class="col-md-6">
                      <div class="panel panel-body" data-toggle="match-height">
                          <h6 class="text-left m-t-0">Account Status Distribution</h6>
                          <div class="row">

                              <div class="col-xs-3">
                                  <br><br>
                                  <ul class="list-unstyled">
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: darkgoldenrod"></span>
                                              Active
                                          </small>
                                      </li>
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: gainsboro"></span>
                                              Disabled
                                          </small>
                                      </li>


                                  </ul>
                              </div>
                              <div class="col-xs-6">
                                  <canvas data-chart="pie" data-labels='["Active", "Disabled"]' data-values='[{"backgroundColor": ["darkgoldenrod", "gainsboro"], "data": [<?php echo $totalActive;?>, <?php echo $totalNotActive;?>]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
                              </div>
                          </div>
                      </div>
                  </div>





          </div></div>


<?php include ('modals.php') ;?>



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
                        <h4 class="modal-title" style="font-size: 14px">System Logout</h4>

                    </div>
                </div>
                <div class="modal-tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Logout From LoyalStar?</a></li>

                    </ul>

                </div>
                <div class="modal-footer">
<center><button type="button" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                </div>
            </div>
        </div>
    </div>
<!--

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
                              <form action="/">
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">User's Full Name</label>
                                      <input id="form-control-6" class="form-control" type="password" style="font-size: 11px"></div>

                                          <div class="col-md-4">
                                              <label  class="form-label" style="font-size: 12px">Sex</label>

                                              <select id="demo-select2-2" class="form-control" style="font-size: 11px">
                                                  <option value="administrator" >Male</option>
                                                  <option value="author">Sex</option>
                                                  <option value="contributor">Other</option>

                                              </select>
                                          </div>

                                  </div></div>
                                  <div class="form-group">
                                      <div class="row">
<div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">User Email</label>
                                      <input id="form-control-7" class="form-control" type="password" style="font-size: 11px">
</div>


                                      <div class="col-md-4">
                                          <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                          <input id="form-control-10" class="form-control" type="password" style="font-size: 11px">
                                      </div>

                                  </div>
</div><hr style="border-color: darkgoldenrod">

                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">User Role</label>
                                              <select id="demo-select2-3" class="form-control" style="font-size: 11px">
                                                  <option value="administrator" >Male</option>
                                                  <option value="author">Sex</option>
                                                  <option value="contributor">Other</option>

                                              </select>
                                          </div>



                                      </div>
                                  </div>


                              </form>

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="button" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Save</button>
                  </div>
              </div>
          </div>
      </div>
-->
<!--
      

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
                          <h4 class="modal-title" style="font-size: 12px">Change Password</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display">
                              <form action="/">
                                  <div class="form-group">

                                      <label  class="form-label" style="font-size: 12px">Old Password</label>
                                      <input id="form-control-1" class="form-control" type="password" style="font-size: 11px">

                                  </div>
                                  <div class="row">
                                  <div class="form-group">
                                      <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">New Password</label>
                                      <input id="form-control-2" class="form-control" type="password" style="font-size: 11px">

                              </div>


                                      <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Confirm Password</label>
                                      <input id="form-control-3" class="form-control" type="password" style="font-size: 11px"></div>

                                  </div></div>
                              </form>

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="button" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Save</button>
                  </div>
              </div>
          </div>
      </div>




-->
        <div id="delUseronpage" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-unlock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">User Account Delete</h4>

                        </div>
                    </div>
                  <form action="DataUtilitiesController/unlock" method="post">
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete <span id="spanfullnamedelete" style="color: red"></span> From LoyalStar?</a></li>

                        </ul>
 <input type="hidden" id="txtiddelete" name="id">

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                  </form>
                </div>
            </div>
        </div>


                <div id="checkbalance" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-money icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Your Balance</h4>

                        </div>
                    </div>
                  <form action="DataUtilitiesController/unlock" method="post">
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Your Balance is GHC.<span id="yourbalance" style="color: red"></span></a></li>

                        </ul>
 <input type="hidden" id="txtiddelete" name="id">

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                    <center><img  id="loadingbalance" src="assets/images/745.gif" style="display: none;  "/></center>
                  </form>
                </div>
            </div>
        </div>



      <!--  <div id="delAent" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Collection Agent Account Delete</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete This Agent() From The mmInsurance Platform?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="button" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </div>
            </div>
        </div>-->


       

   <!--     <div id="disUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Disable User Account</h4>

                        </div>
                    </div>
                
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable <span id="spanfullname" style="color: red"></span>?</a></li>

                        </ul>
                       

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
               
                </div>
            </div>
        </div>-->


    <!--    <div id="editUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-edit icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">Edit User's Details</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display4">
                                <form action="/">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">User's Full Name</label>
                                                <input id="form-control-9" class="form-control" type="password" style="font-size: 11px"></div>



                                        </div></div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Sex</label>

                                                <select id="demo-select2-10" class="form-control" style="font-size: 11px">
                                                    <option value="administrator" >Male</option>
                                                    <option value="author">Sex</option>
                                                    <option value="contributor">Other</option>

                                                </select>
                                            </div>


                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                                <input id="form-control-11" class="form-control" type="password" style="font-size: 11px">
                                            </div>

                                        </div>
                                    </div><hr style="border-color: darkgoldenrod">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">User Role</label>
                                                <select id="demo-select2-9" class="form-control" style="font-size: 11px">
                                                    <option value="administrator" >Male</option>
                                                    <option value="author">Sex</option>
                                                    <option value="contributor">Other</option>

                                                </select>
                                            </div>



                                        </div>
                                    </div>


                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>

-->

        <div id="editAgent" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-edit icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">Edit Agent's Details</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display44">
                                 <form action="DataUtilitiesController/editAgent" method="post" >
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">Agent's Full Name</label>
                             <input id="txtAgfullName" name="txtAgfullName" class="form-control" type="text" style="font-size: 11px" required=""></div>



                                        </div></div>
                                          <input type="hidden" id="txtid" name="txtidedit">
                                    <div class="form-group">
                                        <div class="row">



                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                                <input id="txtAgPhoneNumber" name="txtAgPhoneNumber" class="form-control" type="text" style="font-size: 11px" required="" maxlength="10">
                                            </div>



                                             <div class="col-md-6">
                                              <label  class="form-label" style="font-size: 12px">Gender</label>
                          <select id="txtAggender" name="txtAggender" class="form-control" style="font-size: 11px" required="">
                                                    <option value="Male" >Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                
                                            </div>



                                        </div>
                                    </div><hr style="border-color: darkgoldenrod">
                             

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Save</button>
                    </div>
                       </form>
                </div>
            </div>
        </div>

         <div id="disAgent" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Disable Collection Agent Account</h4>

                        </div>
                    </div>
                   <form action="DataUtilitiesController/DisableAgent" method="post" >
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable <span id="spanfullname" style="color: red"></span> From The mmInsurance Platform?</a></li>

                        </ul>
                        <input type="hidden" id="txtiddisable" name="DisableAgentid">

                    </div>
                  

                   <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                  </form>
                </div>
            </div>
        </div>



    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/elephant.min.js"></script>
    <script src="assets/js/application.min.js"></script>
    <script src="assets/js/demo.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>


    <!-- ///////////showing balance//////////////////////////-->
    <script>
        $(document).on('click','.yourbalance',function(){
         //alert("hii");


           $('#suspenseAccountNumber').val($(this).data('suspenseaccountnumber'));
          
            
        });
    </script>

     <!-- ///////////showing delete modal//////////////////////////-->
    <script>
        $(document).on('click','.bntedit',function(){
         //alert("hii");


           $('#txtid').val($(this).data('id'));
            $('#txtAgfullName').val($(this).data('agfullname'));

            $('#txtAggender').val($(this).data('sex'));

            

            $('#txtAgPhoneNumber').val($(this).data('agphonenumber'));

            
        });
    </script>
      <!-- ///////////showing delete modal//////////////////////////-->
    <script>
        $(document).on('click','.btndisable',function(){
         //alert("hii");


           $('#txtiddisable').val($(this).data('id'));
           var fullname=$(this).data('agfullname');

            $('#spanfullname').html(fullname);

          });
    </script>

       <script>
        $(document).on('click','.btndelete',function(){
            $('#txtiddelete').val($(this).data('id'));
           var fullnamedelete=$(this).data('agfullname');
         //  alert(fullnamedelete);

            $('#spanfullnamedelete').html(fullnamedelete);
        });
    </script>

 <script>
    $(document).on('click','#subm',function(e) {
            var password= $('#old_pass').val();
           var new_pass = $('#new_pass').val();
           var new_pass_confirm = $('#new_pass_confirm').val();
            var user_email=$('#my_email_address').val();
           if(password=="")
           {

           }
           else if(new_pass=="")
           {

           }
           else if(new_pass_confirm=="")
           {
            
           }
           else{
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{password:password,user_email:user_email,new_pass:new_pass,new_pass_confirm:new_pass_confirm },
                            url:'<?php echo site_url('UsersManagementController/change_password'); ?>',
                            success:function(result)
                            {
                                    if(result==1)

                                    {
                                     $('#error_exist').html("Password Change successful");
                                     location.reload();
                                    
                                   
                                    }
                                   else if(result==2) {
                                       // window
                                     $('#error_exist').html("Your New password Confirmation dont Match!!");
                                          //location.reload();

                                }
                                else{
                                      // window
                                     $('#error_exist').html("Old Password is Wrong!!");
                                        //location.reload();

                                }

                            }
                    });
}
           
              });
</script>

<script>
    $(document).on('click','#mysubmit',function(e) {
             // alert('hii');
            var Agentname= $('#Agentname').val();
           var Agnetsex = $('#Agnetsex').val();
           var agentEmail = $('#agentEmail').val();
            var Agentcontact=$('#Agentcontact').val();
             
            if((Agentname=="")||(Agnetsex=="") ||(agentEmail=="")||(Agentcontact==""))
            {

              $('#userExist').html("Please all field are required");
            }
            else
            {
                  $("#agent").show();



                              e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{Agentname:Agentname,Agnetsex:Agnetsex,agentEmail:agentEmail,Agentcontact:Agentcontact },
                            url:'<?php echo site_url('dataUtilitiesController/addAgent'); ?>',
                            success:function(result)
                            {
                              alert(result);
                                 $("#agent").hide();
                                    if(result==1)
                                    {
                                    $('#userExist').html("");
                                     location.reload();
                                    }
                                   
                                else{
                                      // window
                                     $('#userExist').html("Please This Agent Has Already Been Regsitered!!");
                                        //location.reload();

                                }

                            }
                    });

            }
           


           
              });
</script>

<script>
    $(document).on('click','.yourbalance',function(e) {
             // alert('hii');
            var suspenseAccountNumber= $('#suspenseAccountNumber').val();
             $("#loadingbalance").show();
           
           
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{suspenseAccountNumber:suspenseAccountNumber},
                            url:'<?php echo site_url('dataUtilitiesController/agentBalance'); ?>',
                            success:function(result)
                            {
                              var mybalance=result; //
                             

                              var numberOfCharacters = mybalance.trim();
                              var res = numberOfCharacters.substring(0, 1);
                               $("#loadingbalance").hide();
                                  if(res==".")
                                  {

                                    var addZero="0";
                                    var balance=addZero.concat(mybalance);
                                    $('#yourbalance').html(balance);
                                  }
                                  else
                                  {
                                    $('#yourbalance').html(mybalance);

                                  }

                             
                                 

                            }
                    });

           
              });
</script>

<script>
    $(document).on('click','.subbalance',function(e) {
             //PICKING THE SUBSCRIBERS PHONE NUMBER
            var suspenseaccountnumber= $('#suspenseaccountnumber').val();
              $("#loadingsubscribersbalance").show();
           
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{suspenseaccountnumber:suspenseaccountnumber},
                            url:'<?php echo site_url('subscribersAnalytics/SubBalance'); ?>',
                            success:function(result)
                            {

                              

                                    // $("#loadingsubscribersbalance").hide();
                                    //alert(result);
                                    //$('#requiredPhoneNumber').html(" ");
                                    var arraylist = result.split("|");
                                    var acbalance=arraylist[1];
                                    var bobalance=arraylist[2];


                                    //CHECK FOR SUBSCRIBER ACCOUNT BALLANCE AND BONOS BALLANCE 
                                    if((acbalance=="")||(bobalance=="")){
                                      //STOP THE LOADER
                                      $("#loadingsubscribersbalance").hide();
                                      //SHOW THE ERROR MESSAGE
                                      $('#subscribersbalance').html("Subscriber Does Not Exist ");
                                      

                                    }
                                    else{



                                      //HIDE THE LOADER
                                       $("#loadingsubscribersbalance").hide();
                                       //EMPTY THE THE ERROR TEXT
                                       $('#subscribersbalance').html("");
                                       //SHOW THE ACTUAL BALANCE IN THE TEXT BOX
                                       $('#subscribersaccountbalancetext').val(acbalance);
                                       //SHOW THE BONUS BALANCE IN THE TEXT BOX
                                       $('#bobsubscribersaccountbalancetext').val(bobalance);

                                    }
                            } 
                    });

           
              });
</script>
<script>
    $(document).on('click','.addnewuser',function(e) {
             
            var fullname= $('#fullname').val();
            var userEmail= $('#userEmail').val();
            var contact= $('#contact').val();
            var role= $('#role').val();
            var gender= $('#gender').val();
            //alert(gender);
              
            

            if((fullname=="") || (userEmail=="") || (contact=="") || (role=="") || (gender==""))
            {
              //alert('hii');
               $('#newUser').html("Please Fields are required!!");
            }
            else
            {
               $("#loading").show();


            // alert(suspenseaccountnumber);
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{fullname:fullname,userEmail:userEmail,contact:contact,role:role,gender:gender},
                            url:'<?php echo site_url('UsersManagementController/addUser'); ?>',
                            success:function(result)
                            {
                                 $("#loading").hide();
                                if(result==0)
                                    {
                                    $('#newUser').html("User with this email exist");
                           
                                    }
                                   
                                else{
                                      // window
                                     $('#newUser').html("successful");
                                      location.reload();
                                        //location.reload();

                                }
                                 

                           
                            }
                    });

                }

           
              });
</script>




  </body>
</html>

