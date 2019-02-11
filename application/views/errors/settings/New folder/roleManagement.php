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
                        <a href="role" aria-haspopup="true" style="background-color: darkgoldenrod;">
                            <span class="sidenav-icon icon icon-briefcase" style="color: #fff"></span>
                            <span class="sidenav-label" style="font-size: 11px; color: #fff">Role Management</span>
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
                        <a href="data" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-edit"></span>
                            <span class="sidenav-label" style="font-size: 11px" >Data Utilities</span>
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
                            <span class="sidenav-label" style="font-size: 11px">Onboard An Organization</span>
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
              <span class="d-ib">Role Management</span>

            </h1>
            <p class="title-bar-description">
              <small  style ="color:darkgoldenrod">Utilities</small>

            </p>
          </div>
          <div class="row">


              <div class ="col-xs-4">
              <div class = "row">
                  <div class = "col-lg-12">

                      <div class="col-md-6">
                          <div class="card" style="background-color: darkgoldenrod; color: #fff">
                              <div class="card-values">
                                  <div class="p-x">
                                      <small>Total Roles <i class = "icon icon-group" style = "color: #fff"></i></small><br><br>
                                      <h3 class="card-title fw-l"><?php echo $totalroles;?></h3>
                                  </div>
                              </div>
                              <div class="card-chart">
                                  <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                              </div>
                          </div>

                      </div></div></div>



              <div class="row">
                  <div class = "col-lg-12">

                      <div class="col-md-6">
                          <div class="card" style="background-color: darkgoldenrod; color: #fff">
                              <div class="card-values">
                                  <div class="p-x">
                                      <small>Roles With User Accounts <i class = "icon icon-users" style = "color: #fff"></i> <span> (46%)</span></small><br><br>
                                      <h3 class="card-title fw-l"><?php echo $rolewithusers;?></h3>
                                  </div>
                              </div>
                              <div class="card-chart">
                                  <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [116196, 145160, 124419, 147004, 134740, 120846, 137225]}]' data-scales='{"yAxes": [{ "ticks": {"max": 158029}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="card" style="background-color: darkgoldenrod; color: #fff">
                              <div class="card-values">
                                  <div class="p-x">
                                      <small>Roles Without User Accounts <i class = "" style = "color: #fff"></i><span> (46%)</span></small><br><br>
                                      <h3 class="card-title fw-l"><?php echo $freeRoles;?></h3>
                                  </div>
                              </div>
                              <div class="card-chart">
                                  <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [13590442, 12362934, 13639564, 13055677, 12915203, 11009940, 11542408]}]' data-scales='{"yAxes": [{ "ticks": {"max": 14662531}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                              </div>
                          </div>
                      </div>
                  </div></div></div>


          </div>
<br><hr>
          <div class="pull-left">
              <button class=" btn  btn-success" style = "text-transform: capitalize; background-color: darkgoldenrod; border-color: darkgoldenrod" data-toggle="modal" data-target="#newRole" type="button"> <i class = "icon icon-group"></i> &nbsp New Role</button>


          </div>
          <br><br>
<div class="row">
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
                        <th>Role ID</th>
                        <th>Role Name</th>
                        <th>User Management</th>
                        <th>Collection Agents</th>
                        <th>Organization Onboarding</th>
                        <th>Subscribers Utilities</th>
                        <th>Revenue Reporting</th>
                        <th>Action</th>

                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                         <?php foreach($all_roles as $record):?>
                              <tr>

                                      <td>

                                            <?php echo $record->roleID;?>
                                        </td>
                                        <td>
                                            <?php echo $record->roleName;?>
                                        </td>

                                        
                                          <?php if($record->userMan==''){?>
                                            <td><i class="icon icon-close" style="color: maroon"></i></td>
                                        <?php }?>

                                        <?php if($record->userMan=='on'){?>
                                         <td><i class="icon icon-check" style="color: forestgreen"></i></td>
                                        <?php }?>



                                          <?php if($record->agents==''){?>
                                            <td><i class="icon icon-close" style="color: maroon"></i></td>
                                        <?php }?>
                                        
                                        <?php if($record->agents=='on'){?>
                                         <td><i class="icon icon-check" style="color: forestgreen"></i></td>
                                        <?php }?>


                                          <?php if($record->orgs==''){?>
                                            <td><i class="icon icon-close" style="color: maroon"></i></td>
                                        <?php }?>
                                        
                                        <?php if($record->orgs=='on'){?>
                                         <td><i class="icon icon-check" style="color: forestgreen"></i></td>
                                        <?php }?>


                                             <?php if($record->subs==''){?>
                                            <td><i class="icon icon-close" style="color: maroon"></i></td>
                                        <?php }?>
                                        
                                        <?php if($record->subs=='on'){?>
                                         <td><i class="icon icon-check" style="color: forestgreen"></i></td>
                                        <?php }?>

                                               <?php if($record->revReps==''){?>
                                            <td><i class="icon icon-close" style="color: maroon"></i></td>
                                        <?php }?>
                                        
                                        <?php if($record->revReps=='on'){?>
                                         <td><i class="icon icon-check" style="color: forestgreen"></i></td>
                                        <?php }?>




                                          
                                           </td>
                                                                                
                                           
                                           

                                    
                        <td>
                          


                                       <button class="btndelete btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"     
                                       data-rolename="<?php echo $record->roleName;?>"
                                      data-id="<?php echo $record->roleID;?>"

                                      > <i class = "icon icon-trash"></i></button></td>

                    </tr>
                   

 <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div></div>


<?php include ('modals.php') ;?>

  


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






          <div id="newRole" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                          <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                              <span aria-hidden="true" style="color: #fff">×</span>
                              <span class="sr-only">Close</span>
                          </button>
                          <div class="text-center">
                              <span class="icon icon-group icon-5x m-y-lg"></span>
                              <h4 class="modal-title" style="font-size: 12px">New Role</h4>

                          </div>
                      </div>
                      <div class="modal-tabs">


                          <div class="tab-content">
                              <div class="tab-pane fade active in" id="display9">
                               <form action="RoleManagementController/newrol" method="post" >
                                      <div class="form-group">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">Role Name</label>
                                                  <input id="form-control-12" name="rolename" class="form-control" type="text" style="font-size: 11px" required=""></div>

<hr>

                                          </div></div>
                                      <div class="form-group">
                                
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox" name="User" > User Management
                                                      </label>
                                                  </div>

                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox" name="Collection" > Collection Agent
                                                      </label>
                                                  </div>

                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox" name="Subsdcribers" > Subsdcribers Utilities
                                                      </label>
                                                  </div>
                                                 

                                              </div>


                                              <div class="col-md-6">
                                                 <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox" name="Revenue" > Revenue Reporting
                                                      </label>
                                                  </div>
                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox" name="Organization" > Organization Onboarding
                                                      </label>
                                                  </div>
                                                  
                                              </div>

                                          </div>
                                      </div>



                              </div>

                          </div>
                      </div>
                      <div class="modal-footer">

                          <button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-save"></i> Create Role</button>
                      </div>
                    </form>
                  </div>
              </div>
          </div>


                  <div id="delUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Delete User Role</h4>

                        </div>
                    </div>
                    <form action="RoleManagementController/deleteRole" method="post" >
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete <span id="spanfullnamedelete" style="color: red"></span> Role?</a></li>

                        </ul>

                        <input type="hidden" id="txtiddelete" name="id">

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                  </from>
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


       <script>
        $(document).on('click','.btndelete',function(){
            $('#txtiddelete').val($(this).data('id'));
           var rolenamedelete=$(this).data('rolename');

            $('#spanfullnamedelete').html(rolenamedelete);
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
                             // alert(result);
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