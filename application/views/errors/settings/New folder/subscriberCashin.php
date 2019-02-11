        <?php include ('header.php') ;?>

               <?php include ('modals.php') ;?>


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
                  
                 
                  <li class="sidenav-item ">
                       <a href="data" aria-haspopup="true" <a href="onboarding" aria-haspopup="true" >
                          <span class="sidenav-icon icon icon-money"></span>
                          <span class="sidenav-label" style="font-size: 11px" >Data Utilities</span>
                      </a> 
                  </li>

                    <li class="sidenav-item ">
                       <a href="cashin" aria-haspopup="true" <a href="onboarding" aria-haspopup="true" >
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
                      <a href="suscriberCashin" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit"></span>
                          <span class="sidenav-label" style="font-size: 11px" >New Suscriber</span>
                      </a>

                  </li>

                  <li class="sidenav-item">
                      <a href="cashin" aria-haspopup="true" style="background-color: darkgoldenrod;">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Suscriber Cashin</span>
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
              <span class="d-ib">Subscribers Cash-IN</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:darkgoldenrod">

              </small>

            </p>
          </div>


          <div class="divider">
              <div class="divider-content " style = "color: darkgoldenrod"><b><i class="icon icon-files-o"></i> Paying Agent's Cash Into Account</b></div>
          </div>

          <div class="row gutter-xs">
              <div class="col-md-1"></div>
              <div class="col-xs-10">
                  <div class="card">
                      <div class="card-header">
                          <div class="card-actions">



                          </div>

                      </div>
                      <div class="card-body">
                          <form>
                              <div class="form-group">
                                  <div class="row" style="border-left:5px solid #000">
                                      <div class="col-md-5">
                                          <div class="panel-heading">
                                              <div class="panel-title" style="font-family: Calibri;"><i class ="icon icon-search" style="color: darkgoldenrod;" ></i> <b>Search Engine</b>

                                              </div>
                                              <h4 style="font-family: Calibri">Search By Subscriber's Phone Number</h4>
                                          </div>
                                      </div>

                                      <div class="col-md-7">
                                          <div class="row">
                                              <div class="col-md-8">
                                                  <label  class="form-label"  style="font-size: 12px">Phone Number</label>

                                                  <input id="phonenumber" name="agentPhoneNumber" class="form-control" type="text" style="font-size: 11px" required="" maxlength="10">
                                                  <br>
                                                   <center> <span id="requiredPhoneNumber" style="color:red; font-family: Verdana; font-size: 11px "></span>  </center>

                                                </div>

                                              <div class="col-md-4">
                                                  <label  class="form-label" style="font-size: 12px">&nbsp</label>
                                                  <button type="button" id="detailsofagent" class="btn btn-primary text-capitalize" style="background-color: forestgreen; border-color: forestgreen; width: 100%"><i class="icon icon-search"></i>&nbsp &nbsp Generate Details &nbsp &nbsp</button>
                                          </div>
                                           <center><img  id="loadingnewSubscriber" src="assets/images/745.gif" style="display: none;  "/></center>
                             <center> <span id="newSubscriber" style="color:red; font-family: Verdana; font-size: 11px "></span>  </center>
                                        </div>
                    
                                        


                                          <br><br><br><br>
                                      </div></div>
                                  <hr>

                                  <div class="row" style="border-left:5px solid #000">
                                      <div class="col-md-5">
                                          <div class="panel-heading">
                                              <div class="panel-title" style="font-family: Calibri;"><i class ="icon icon-list" style="color: darkgoldenrod;" ></i> <b>Search Results</b>

                                              </div>
                                              <h4 style="font-family: Calibri">Details Of The Agent & Balance</h4>
                                          </div>
                                         </div>

                                      <div class="col-md-7">
                                          <div class="row">
                                              <div class="col-md-12">
                                          <label  class="form-label" style="font-size: 12px">Full Name</label>

                                                  <input id="accountname" class="form-control" type="text" style="font-size: 11px" readonly></div>
                                      </div>
<br>
                                          <div class="row">
                                              <div class="col-md-4">
                                                  <label  class="form-label" style="font-size: 12px">Suspense A/C No.</label>

                                                  <input id="Suspenseaccount" name="accountNUmber" class="form-control" type="text" style="font-size: 11px" readonly></div>

                                                  <div class="col-md-4">
                                                  <label  class="form-label" style="font-size: 12px"> Actual Balance</label>

                                                  <input id="actualbalance" name="accountNUmber" class="form-control" type="text" style="font-size: 11px" readonly></div>

                                              <div class="col-md-4">
                                                  <label  class="form-label" style="font-size: 12px">Bonus Balance</label>

                                                  <input id="bonusbalance" class="form-control" type="text" style="font-size: 11px" readonly></div>

                                          </div>


                                          <br><br><br><br>
                                  </div></div>
                                  <hr>
                                  <div class="row" style="border-left:5px solid #000">
                                      <div class="col-md-5">
                                          <div>
                                              <div  ><i class ="icon icon-money" style="color: darkgoldenrod; " ></i> <b class="title-bar-description" style="font-family: font-family: Calibri">Cash-In Information</b>

                                              </div>
                                              <h4 style="font-family: Calibri">Cash Deposit Details</h4>
                                          </div>
                                      </div>

                                      <div class="col-md-7">

                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Amount Paying (GHS)</label>

                                                  <input id="amount" name="amount" class="form-control" type="number" style="font-size: 11px" disabled="">
                                              </div>

                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Repeat Amount Paying (GHS)</label>

                                                  <input id="repeatamount" name="repeatamount" class="form-control" type="text" style="font-size: 11px" disabled="">
                                              </div>
                                          </div>
                                      </div></div>
                            </div>

                            <hr>
                            <div class="row" style="background-color: maroon">
                               <center><img  id="loadingnewSubscriberaddcash" src="assets/images/745.gif" style="display: none;  "/></center>
                            <center> <span id="cashin_error" style="color:white; font-family: Verdana; font-size: 11px "></span>  </center></div>
                              <br><br>

                              <br><br><button type="button"  class="cashin btn btn-primary text-capitalize pull-right" style="background-color: forestgreen; border-color: forestgreen"><i class="icon icon-money"></i>&nbsp &nbsp PAY CASH IN &nbsp &nbsp</button>

                          </form>
                           
                      </div>
                  </div>
              </div>
          </div>







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
                            <h4 class="modal-title" style="font-size: 14px">User Account Delete</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete This User() From LoyalStar?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="button" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

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
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable This User() From LoyalStar?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="button" class="btn btn-primary" style="background-color: darkgoldenrod"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
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
    $(document).on('click','#detailsofagent',function(e) {
            var phonenumber= $('#phonenumber').val();

            if(phonenumber=="")
            {

            $('#requiredPhoneNumber').html("Please Enter Phone Number");
            }
            else
            {
                $("#loadingnewSubscriber").show();
                $('#newSubscriber').html("");

            //alert(phonenumber);


                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{phonenumber:phonenumber },
                            url:'<?php echo site_url('subscribersAnalytics/phonenumbersearch'); ?>',
                            success:function(result)
                            {
                       // alert(result);
                         $("#loadingnewSubscriber").hide();
    //$fullstring=$begin."|". $suspenseAccountNumber ."|".$acbalance ."|".$bobalance."|".$accountName."|".$result_row;

                        $('#requiredPhoneNumber').html(" ");
                        var arraylist = result.split("|");
                        var suspenseAccountNumber=arraylist[1];
                        var accountBalance=arraylist[2];
                        var bonusbalance=arraylist[3];
                         var accountName=arraylist[4];


                           // alert(accountBalance);
                        $('#accountname').val(accountName);
                        $('#Suspenseaccount').val(suspenseAccountNumber);
                        $('#actualbalance').val(accountBalance); 
                        $('#bonusbalance').val(bonusbalance);  
                       
                        if(accountBalance=="")
                        {

                         document.getElementById("amount").disabled = true;
                         document.getElementById("repeatamount").disabled = true;   
                        }
                        else
                        {
                           document.getElementById("amount").disabled = false;
                           document.getElementById("repeatamount").disabled = false;   
                        }
                                                 

                            }
                    });

               }

           
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
                              //userEmail,accountToken
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
    $(document).on('click','.addnewuser',function(e) {
             
            var fullname= $('#fullname').val();
            var userEmail= $('#userEmail').val();
            var contact= $('#contact').val();
            var role= $('#role').val();
            var gender= $('#gender').val();
           // alert('hiiii');
              
            

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
    $(document).on('click','.cashin',function(e) {
             
            var amount= $('#amount').val();
            var repeatamount= $('#repeatamount').val();
            var phonenumber= $('#phonenumber').val();
//$users['userEmail']

          var userEmail= '<?php echo $userEmail;?>';

         // alert(userEmail);

            if(amount !=repeatamount)
            {
              $('#cashin_error').html("The Amounts Entered Are Different");
            }
              else
              {
  $("#loadingnewSubscriberaddcash").show();
  $('#cashin_error').html("");
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{amount:amount,userEmail:userEmail,phonenumber:phonenumber},
                            url:'<?php echo site_url('subscribersAnalytics/payInCash'); ?>',
                            success:function(result)
                            {
                              //alert(result);
  $("#loadingnewSubscriberaddcash").hide();
                              var mybalance=result;
                              //alert(mybalance);
                              if(mybalance==1)
                              {

                               // alert('success');
                                $('#cashin_error').html("successful");
                                   location.reload();
                              }
                              else{
                               // alert('failed');
                                $('#cashin_error').html("Failed");

                              }

                             
                                  

                           
                            }
                    });

              }
           // alert(suspenseaccountnumber);
           
           

           
              });
</script>

<script>
    $(document).on('click','.addrequiredPhoneNumber',function(e) {
             
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


            // alert(suspenseaccountnumber);
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{fullname:fullname,userEmail:userEmail,contact:contact,role:role,gender:gender},
                            url:'<?php echo site_url('UsersManagementController/addUser'); ?>',
                            success:function(result)
                            {

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