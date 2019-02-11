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
                          <span class="sidenav-label" style="font-size: 11px" >Accounts Utilities</span>
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
                      <a href="utilities" aria-haspopup="true" style="background-color: darkgoldenrod;">
                          <span class="sidenav-icon icon icon-building" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff">Organizations Utilities</span>
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
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Redeem Insurance</span>
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
              <span class="d-ib">Oragnizations Data</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:darkgoldenrod">Utilities</small>

            </p>
          </div>

            <div class = "row">
                <div class = "col-lg-12">

                    <div class="col-md-2">
                        <div class="card" style="background-color: darkgoldenrod; color: #fff">
                            <div class="card-values">
                                <div class="p-x">
                                    <small>Total Onbooarded <i class = "icon icon-building" style = "color: #fff"></i></small><br><br>
                                    <h3 class="card-title fw-l"><?php echo $countBusinesses;?></h3>
                                </div>
                            </div>
                     
                            <div class="card-chart">
                                <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                            </div>
                        </div>

                    </div></div></div>
          <div class="divider">
              <div class="divider-content " style = "color: darkgoldenrod"><b><i class="icon icon-files-o"></i> Records</b></div>
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
                                  <th>Organization Code</th>
                                  <th>Organization Name</th>
                                  <th>Created On</th>
                                  <th>Admin Email</th>
                                  <th>Admin Contact</th>
                                 
                                  <th>Status</th>
                                  <th><Center> Actions</Center></th>


                              </tr>
                              </thead>
                              <tbody>

                               <?php foreach($all_Business as $record):?>
                              <tr>
                                        <td>
                                            <?php echo $record->orgCode;?>
                                        </td>
                                        <td>
                                            <?php echo $record->orgName;?>
                                        </td>
                                        <td>
                                            <?php echo $record->CreatedOn;?>
                                        </td>
                                        <td>
                                            <?php echo $record->adminEmail;?>
                                        </td>
                                        <td>
                                            <?php echo $record->adminContact;?>
                                        </td>




                                           <?php if($record->orgStatus=='A'){?>
                                            <td style = "text-transform: capitalize; background-color: green; color: white">
                                                <center>Active</center> </td>
                                        <?php }?>
                                        <?php if($record->orgStatus=='D'){?>
                                            <td style = "text-transform: capitalize; background-color: red; color: white">
                                                <center>Locked </center></td>
                                        <?php }?>
                                  <td><Center> <button class="bntedit btn  btn-warning" style = "text-transform: capitalize; background-color: goldenrod; ; border-color: goldenrod"  type="button" data-toggle="modal" data-target="#editUser"
                                                    data-Adminemail="<?php echo $record->adminEmail;?>"
                                                    data-Adminfullname="<?php echo $record->adminfullname;?>"
                                                    data-Admincontact="<?php echo $record->adminContact;?>"
                                                    data-Bname="<?php echo $record->orgName;?>"
                                                    data-Btype="<?php echo $record->orgType;?>"
                                                     data-BdigitalAddress="<?php echo $record->orgdigitalAddress;?>"
                                                    data-Bcontact="<?php echo $record->orgcontact;?>"
                                                    data-Bemail="<?php echo $record->orgmail;?>"

                                                    data-OrganizationCode="<?php echo $record->orgCode;?>"

                                                    
                                                    > <i class = "icon icon-edit"></i></button> 

                                              

                                              <?php if($record->orgStatus=='A'){?>|

                                                     <button class="btndisable btn  btn-warning" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"
                                                      data-OrganizationCode="<?php echo $record->orgCode;?>"
                                                    data-Bname="<?php echo $record->orgName;?>"

                                                    > <i class = "icon icon-lock"></i></button> 
                                                    <?php }?>

                                                      <?php if($record->orgStatus=='D'){?>|

                                                     <button class="btndelete btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUseronpage "
                                                    data-OrganizationCode="<?php echo $record->orgCode;?>"
                                                    data-Bname="<?php echo $record->orgName;?>"

                                                    > <i class = "icon icon-unlock"></i></button><?php }?></Center></td>




                              </tr>
                             

                <?php endforeach;?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>


          </div>
        </div>

    





   
            <div id="disUser" class="modal fade" tabindex="-1" role="dialog">
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
                    <form action="OrganisationUtilities/disable" method="post">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable <span id="spanfullname" style="color: red"></span> ?</a></li>

                        </ul>
                        <input type="hidden" id="txtiddisable" name="id">

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                  </form>
                </div>
            </div>
        </div>







        <div id="editUser" class="modal fade" tabindex="-1" role="dialog">
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
                      <form method="post" action="OrganisationUtilities/editbusinnessinfo">
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-md-12">
                                      <label  class="form-label" style="font-size: 12px">Business Name</label>
                                      <input id="txtbname" name="txtbname"  class="form-control" type="text" style="font-size: 11px" required=""></div>
                              </div></div>
                          <div class="form-group">
                              <div class="row">
                                  <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Business Type</label>
                              <select id="txtbtype" name="txtbtype" class="form-control" style="font-size: 11px" required="">
                                                    <option selected="" disabled="">--Company Type--</option>
                                                      <option value="Gorvement" >Gorvement</option>
                                                      <option value="Privately Held">Privately Held</option>
                              </select>


                                  </div>


                                  <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Digital Address</label>
                                      <input id="txtbdigitaladdress" name="txtbdigitaladdress" class="form-control" type="text" style="font-size: 11px" required="" maxlength="13">
                                  </div>

                              </div>
                          </div>

                          

                          <div class="form-group">
                              <div class="row">
                                  <div class="col-md-6">
                                     <label  class="form-label" style="font-size: 12px">Business Phone Number</label>
                                      <input id="txtbcontact" name="txtbcontact" class="form-control" type="text" style="font-size: 11px" required="" max="10">
                                     
                                  </div>


                                  <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Business Email</label>
                                      <input id="txtbemail" name="txtbemail" class="form-control" type="text" style="font-size: 11px" required="">
                                  </div>

                              </div>
                          </div>
                          <hr>
                            <div class="form-group">
                              <div class="row">
                                  <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Admin FullName</label>

                                     <input id="txtadminfullname" name="txtadminfullname" class="form-control" type="text" style="font-size: 11px" required="">
                                  </div>


                                  <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Admin Contact</label>
                                      <input id="txtadmincontact" name="txtadmincontact" class="form-control" type="text" style="font-size: 11px" required="" max="10">

                                      <input id="txtadminemail" name="txtadminemail" class="form-control" type="hidden" style="font-size: 11px">

                                      <input id="txtorganizationcode" name="txtorganizationcode" class="form-control" type="hidden" style="font-size: 11px">
                                  </div>

                              </div>
                          </div>
                    

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



<!--////////////////////////////////////////////////////////////////////////////////////////////-->
        <div id="delUseronpage" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: darkgoldenrod">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Unlock User Account</h4>

                        </div>
                    </div>
                  <form method="post" action="OrganisationUtilities/unlock">
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete <span id="spanfullnamedelete" style="color: red"></span> ?</a></li>

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


<!-- ///////////for selecting individual data//////////////////////////-->
    <script>
        $(document).on('click','.bntedit',function(){
          
          $('#txtorganizationcode').val($(this).data('organizationcode'));

            $('#txtadminemail').val($(this).data('adminemail'));
            $('#txtadminfullname').val($(this).data('adminfullname'));
            $('#txtadmincontact').val($(this).data('admincontact'));

            $('#txtbname').val($(this).data('bname'));
            $('#txtbtype').val($(this).data('btype'));
            $('#txtbdigitaladdress').val($(this).data('bdigitaladdress'));
            $('#txtbcontact').val($(this).data('bcontact'));
            $('#txtbemail').val($(this).data('bemail'));
           // var fullname=$(this).data('adminemail');

           // alert(fullname);
     
        });
    </script>
      <!-- ///////////showing delete modal//////////////////////////-->
    <script>
        $(document).on('click','.btndisable',function(){
         //alert("hii");


           $('#txtiddisable').val($(this).data('organizationcode'));
           var fullname=$(this).data('bname');

            $('#spanfullname').html(fullname);

          });
    </script>

       <script>
        $(document).on('click','.btndelete',function(){
            $('#txtiddelete').val($(this).data('organizationcode'));
           var bnamedelete=$(this).data('bname');
          // alert(bnamedelete);

            $('#spanfullnamedelete').html(bnamedelete);
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
                              //alert(result);
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

         // alert('hii');
             
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


<?php include ('modals.php') ;?>
  </body>
</html>

