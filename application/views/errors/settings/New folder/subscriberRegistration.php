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
          

                    <li class="sidenav-item">
                      <a href="user" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit"></span>
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

                         <li class="sidenav-item" style="background-color: darkgoldenrod;">
                      <a href="registerSuscriber" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >New Suscriber</span>
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
              <span class="d-ib">Subscriber Registration</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:darkgoldenrod">

              </small>

            </p>
          </div>


          <div class="divider">
              <div class="divider-content " style = "color: darkgoldenrod"><b><i class="icon icon-files-o"></i> Subscriber mmInsurance Account Opening</b></div>
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
                                              <div class="panel-title" style="font-family: Calibri;"><i class ="icon icon-user" style="color: darkgoldenrod;" ></i> <b>Subscriber's Account Bio Details</b>

                                              </div>
                                              <h4 style="font-family: Calibri">Bio Details</h4>
                                          </div>
                                         </div>

                                      <div class="col-md-7">
                                          <div class="row">
                                              <div class="col-md-12">
                                          <label  class="form-label" style="font-size: 12px">Full Name</label>

                                  <input name="fullname" class="fullname form-control" type="text" style="font-size: 11px" required="">

                                    </div>
                                      </div>
<br>
                                          <div class="row">
                                              <div class="col-md-4">
                                                  <label  class="form-label" style="font-size: 12px">Gender</label>

                                                  <select  class="gender form-control" style="font-size: 11px">
                                                      <option value="Male" >Male</option>
                                                      <option value="Female">Female</option>


                                                  </select></div>

                                              <div class="col-md-4">
                                                  <label  class="form-label" style="font-size: 12px">Phone Number</label>

                                                  <input id="phonenumber" class="form-control" type="text" style="font-size: 11px" maxlength="10"></div>



                                                      <div class="col-md-4">
                                                  <label  class="form-label" style="font-size: 12px">Network</label>

                                                  <select id="network" class="form-control" style="font-size: 11px">
                                                      <option value="MTN" >MTN</option>
                                                      <option value="VODAFONE">VODAFONE</option>

                                                         <option value="AIRTEL-TIGO" >AIRTEL-TIGO</option>


                                                  </select></div>

                                          </div>




                                          <br><br><br><br>
                                  </div></div>
                                  <hr>
                                  <div class="row" style="border-left:5px solid #000">
                                      <div class="col-md-5">
                                          <div>
                                              <div  ><i class ="icon icon-building" style="color: darkgoldenrod; " ></i> <b class="title-bar-description" style="font-family: font-family: Calibri">Insurance Information</b>

                                              </div>
                                              <h4 style="font-family: Calibri">Fundamental Details Of Subscriber's Insurance Account</h4>
                                          </div>
                                      </div>

                                      <div class="col-md-7">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">Does The Subscriber Own A Vehicle?</label>

                                                  <select id="ownVehicle" class="form-control" style="font-size: 11px">
                                                      <option value="Y" >Yes</option>
                                                      <option value="N">No</option>


                                                  </select>
                                          </div></div>
                                          <br>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">What Month &amp Year Is His/Her Insurance Cover Expiring?</label>

                                                  <input id="monthYear" class="form-control" type="date" style="font-size: 11px"></div>
                                              </div>




<br>

                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">What Type Of Insurance Cover Is It?</label>

                                                  <select id="InsuranceType" class="form-control" style="font-size: 11px">
                                                      <option value="NVA" selected="" > N/A</option>
                                                      <option value="CPV" >Comprehensive</option>
                                                      <option value="TPI">Third Party</option>



                                                  </select>
                                              </div>



                                          </div>
                                          <br>

                          


           </div>
</div></div>



                            <hr>

                             <center><img  id="loadingnewSubscriber" src="assets/images/745.gif" style="display: none;  "/></center>
                             <center> <span id="newSubscriber" style="color:red; font-family: Verdana; font-size: 11px "></span>  </center>
                            
                              <br><br>

                              <center><small>By opening this Subscriber mmInsurance Account, the individual agrees with our terms, conditions and policies.</small><br><br>

                                <button type="button" class="registerSubscriber btn btn-primary text-capitalize" style="background-color: forestgreen; border-color: forestgreen"><i class="icon icon-user"></i>&nbsp &nbsp Register Subscriber &nbsp &nbsp</button> </center> <br>

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
    $(document).on('click','.registerSubscriber',function(e) {

          //alert('ooo');
            var fullname= $('.fullname').val();

            var gender= $('.gender').val();
           // var phonenumber= $('#phonenumber').val();


            var myphonenumber= $('#phonenumber').val();
            var addedphonepart = myphonenumber.slice(1, 10);
            var phonenumber="233".concat(addedphonepart);

            //alert(phonenumber);



            var ownVehicle= $('#ownVehicle').val();
            var InsuranceType= $('#InsuranceType').val();
            var monthYear= $('#monthYear').val();

             //alert(gender);
           // var prefInsurance= $('#prefInsurance').val();  

            var network= $('#network').val();   

                    //

            if((fullname=="") || (phonenumber=="") ||(ownVehicle=="") || (InsuranceType=="") || (gender=="") || (network=="") )
            {
              //alert('helloo');
               $('#newSubscriber').html("Please Fields are required!!");
            }
            else
            {
               $("#loadingnewSubscriber").show();
                $('#newSubscriber').html("");


            // alert(suspenseaccountnumber);
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{
                              fullname:fullname,
                              phonenumber:phonenumber,
                              ownVehicle:ownVehicle,
                              InsuranceType:InsuranceType,
                              network:network,
                              monthYear:monthYear,
                              gender:gender
                            },
                            url:'<?php echo site_url('subscribersAnalytics/addSubscriber'); ?>',
                            success:function(result)
                            {
                             // alert(result);
                                 $("#loadingnewSubscriber").hide();
                                if(result==1)
                                    {
                                    $('#newSubscriber').html("successful");
                                     location.reload();
                                    }
                                   
                                else{
                                      // window
                                     $('#newSubscriber').html("Subscriber with this phonenumber exist");
                                     
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


  </body>
</html>