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
                      <a href="utilities" aria-haspopup="true" >
                          <span class="sidenav-icon icon icon-building"></span>
                          <span class="sidenav-label" style="font-size: 11px; ">Organizations Utilities</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="onboarding" aria-haspopup="true" style="background-color: darkgoldenrod;">
                          <span class="sidenav-icon icon icon-user"  style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff">Onboard An Organization</span>
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
              <span class="d-ib">Oragnizations Onboarding</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:darkgoldenrod">

              </small>

            </p>
          </div>


          <div class="divider">
              <div class="divider-content " style = "color: darkgoldenrod"><b><i class="icon icon-files-o"></i> Business mmInsurance Account Opening</b></div>
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
                          <form method="post" action="OrganisationOnboarding/AddBusiness">
                              <div class="form-group">
                                  <div class="row" style="border-left:5px solid #000">
                                      <div class="col-md-5">
                                          <div class="panel-heading">
                                              <div class="panel-title" style="font-family: Calibri;"><i class ="icon icon-user" style="color: darkgoldenrod;" ></i> <b>Adminstrator's User Account Credentials</b>

                                              </div>
                                              <h4 style="font-family: Calibri">An Individual Who Is In Charge Of The Portal
                                                  &amp; Manages All Aspects Of It</h4>
                                          </div>
                                         </div>

                                      <div class="col-md-7">
                                          <div class="row">
                                              <div class="col-md-12">
                                          <label  class="form-label" style="font-size: 12px">Full Name</label>

                                                  <input id="form-control-61" name="Adminfullname" class="form-control" type="text" style="font-size: 11px" required=""></div>
                                      </div>
<br>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Admin Email</label>

                                                  <input id="form-control-62" name="Adminemail"  class="form-control" type="text" style="font-size: 11px" required=""></div>

                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Admin Contact Number</label>

                                                  <input id="form-control-63" name="Admincontact" class="form-control" type="text" style="font-size: 11px" required=""></div>

                                          </div>


                                          <br><br><br><br>
                                  </div></div>
                                  <hr>
                                  <div class="row" style="border-left:5px solid #000">
                                      <div class="col-md-5">
                                          <div>
                                              <div  ><i class ="icon icon-building" style="color: darkgoldenrod; " ></i> <b class="title-bar-description" style="font-family: font-family: Calibri">Organization's Information</b>

                                              </div>
                                              <h4 style="font-family: Calibri">Fundamental Details Of Your Business Entity</h4>
                                          </div>
                                      </div>

                                      <div class="col-md-7">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">Business Name</label>

                                                  <input id="form-control-31" name="Bname" class="form-control" type="text" style="font-size: 11px" required=""></div>
                                          </div>
                                          <br>
                                          <div class="row">
                                              <div class="col-md-12">
                                         <label  class="form-label" style="font-size: 12px">Type Of Company</label>
                                     <select id="demo-select3-2" name="Btype" class="form-control" style="font-size: 11px" required="" >
                                                    <option selected="" disabled="">--Company Type--</option>
                                                      <option value="Gorvement" >Gorvement</option>
                                                      <option value="Privately Held">Privately Held</option>
                                                  </select>
                                              </div>
                                             



                                          </div>
                                          <br>

                                           <div class="row">
                                            <div class="col-md-12">
                                         <label  class="form-label" style="font-size: 12px">Company Industry</label>
                        <select id="demo-select3-2" name="BIindustry" class="form-control" style="font-size: 11px" required="">
                                                    <option selected="" disabled="">--Company Industry--</option>
                                                      <option value="Agriculture, Forestry, Fishing and Hunting" >Agriculture, Forestry, Fishing and Hunting</option>
                                                      <option value="Mining, Quarrying, Oil and Gas Extraction">Mining, Quarrying, Oil and Gas Extraction</option>
                                                      <option value="Utilities">Utilities</option>

                                                      <option value="Construction" >Construction</option>
                                                      <option value="Manufacturing">Manufacturing</option>
                                                      <option value="Wholesale Trade">Wholesale Trade</option>

                                                      <option value="Retail Trade" >Retail Trade</option>
                                                      <option value="Transportation">Transportation</option>
                                                      <option value="Finance and Insurance">Finance and Insurance</option>

                                                 <option value="Real Estate, Rental and Leasing" >Real Estate, Rental and Leasing</option>
                                                      <option value="Professional, Scientific, and Technical Services">Professional, Scientific, and Technical Services</option>
                                                      <option value="Management of Companies and Enterprises">Management of Companies and Enterprises</option>

                                                       <option value="IT and Telecommunications">IT and Telecommunications</option>

                                                  </select>
                                              </div>
                                            </div>


<br>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">Digital Address</label>

                    <input id="form-control-32" name="BdigitalAddress" class="form-control" type="text" style="font-size: 11px" required="">
                                              </div>



                                          </div>

<br>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Phone Contact</label>

                                <input id="form-control-34" name="Bcontact" class="form-control" type="text" style="font-size: 11px" required="">
                                              </div>

                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Business Email</label>

                               <input id="form-control-36" name="Bemail" class="form-control" type="text" style="font-size: 11px" required="">
                                              </div>



                                          </div>





                                      </div></div>

                            </div>

                            <hr>
                              <br><br>

                              <center><small>By opening this Business mmInsurance Account, the organization agrees with our terms, conditions and policies.</small><br><br><button type="submit" class="btn btn-primary text-capitalize" style="background-color: forestgreen; border-color: forestgreen"><i class="icon icon-bank"></i>&nbsp &nbsp Register Organization &nbsp &nbsp</button> </center>

                          </form>
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