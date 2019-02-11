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
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-edit"></span>
                            <span class="sidenav-label" style="font-size: 11px;">Accounts Utilities</span>
                        </a>

                    </li>

                    <li class="sidenav-item ">
                        <a href="#" aria-haspopup="true">
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
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-edit"></span>
                            <span class="sidenav-label" style="font-size: 11px" >Data Utilities</span>
                        </a>

                    </li>

                    <li class="sidenav-item ">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-money"></span>
                            <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Collections Cash-In</span>
                        </a>

                    </li>


                    <li class="sidenav-item ">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-users"></span>
                            <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Register A New Agent</span>
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
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-globe"></span>
                            <span class="sidenav-label" style="font-size: 11px">Organizations Utilities</span>
                        </a>

                    </li>

                    <li class="sidenav-item ">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-user"></span>
                            <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Onboard An Organization</span>
                        </a>

                    </li>

                    <li class="sidenav-heading" style="color: #000"><b><u>Subscribers Analytics &amp Insights</u></b></li>
                    <li class="sidenav-item ">
                        <a href="dashboard-1.html" aria-haspopup="true" >
                            <span class="sidenav-icon icon icon-users"></span>
                            <span class="sidenav-label" >Subscribers Data Mart</span>
                        </a>
                    </li>
                    <li class="sidenav-item ">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-sort-numeric-asc"></span>
                            <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#accBal">Subscriber Account Balance</span>
                        </a>

                    </li>

                    <li class="sidenav-item ">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-sort-numeric-asc"></span>
                            <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Redeem Insurance</span>
                        </a>

                    </li>


                    <li class="sidenav-item  ">
                        <a href="dashboard-1.html" aria-haspopup="true" >
                            <span class="sidenav-icon icon icon-file-archive-o"  style="color: #fff"></span>
                            <span class="sidenav-label" style="font-size: 11px">Subscriber Mini Statement</span>
                        </a>
                    </li>



                    <li class="sidenav-item ">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-database"></span>
                            <span class="sidenav-label" style="font-size: 11px">Where-And-Or Analysis</span>
                        </a>

                    </li>

                     <li class="sidenav-heading" style="color: #000"><b><u>Revenue Reporting &amp Analytics</u></b></li>
                    <li class="sidenav-item ">
                        <a href="agcall" aria-haspopup="true" style="background-color: darkgoldenrod;">
                            <span class="sidenav-icon icon icon-line-chart" style ="color: #fff"></span>
                            <span class="sidenav-label" style="font-size: 11px; color: #fff">Agent Collections RE</span>
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
<div class="layout-content" style="background-color: #fff">
<div class="layout-content-body">

<div class="title-bar">

    <h1 class="title-bar-title">
        <span class="d-ib">Agent Collections</span>
    </h1>
    <p class="title-bar-description">
        <small  style ="color:darkgoldenrod">Reporting</small>

    </p>
</div>

<div class = "row">
<div class = "col-lg-3">

    <div class="col-md-12">
        <br><br><br>
        <div class="card">

            <div class="card-header no-border">
                <div class="col-md-12">
                    <div class="demo-form-wrapper">
                        <form class="form form-horizontal">


                            <div class="form-group">
                                <label for="form-control-31" class="form-label" style="font-size: 11px"><u>Date (From)</u></label>
                                <input id="form-control-31" class="form-control" type="date" style="font-size: 11px">
                            </div>

                            <div class="form-group">
                                <label for="form-control-41" class="form-label" style="font-size: 11px"><u>Date (To)</u></label>
                                <input id="form-control-41" class="form-control" type="date" style="font-size: 11px">
                            </div>
                            <div class="form-group">
                                <label for="form-control-31" class="form-label" style="font-size: 11px"><u>Collection Agent</u></label>
                                <select id="demo-select7-30" class="form-control" style="font-size: 11px">
                                    <option value="administrator" >All</option>
                                    <option value="author">Sex</option>
                                    <option value="contributor">Other</option>

                                </select>
                            </div>
                            <br>
                            <center><button type="button" class="btn btn-pill btn-primary" style="background-color: darkgoldenrod; border-color: darkgoldenrod; width: 100%"><i class="icon icon-list"></i> Generate </button></center>
                        </form></div></div>

            </div></div>

    </div></div>
<div class = "col-lg-9">

    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="divider">
                <div class="divider-content " style = "color: #4f4f4f"><b><i class="icon icon-list"></i> Search Results</b></div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-actions">



                    </div>

                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="panel m-b-lg">
                            <ul class="nav nav-tabs nav-justified">
                                </a></li>
                                <li><a href="#profile-11" data-toggle="tab"><i class ="icon icon-list-ol"></i> Grid View Of Records</a></li>

                            </ul>
                            <div class="tab-content">
                                <div class="row gutter-xs">
                                    <div class="col-xs-3 col-md-3" >
                                        <div class="card" style ="background-color: darkgoldenrod">
                                            <div class="card-values">
                                                <div class="p-x" style = "color: #fff">
                                                    <small>Total Collections</small>&nbsp <i class="icon icon-money"></i>
                                                    <h3 class="card-title fw-l">56,000</h3>
                                                </div>
                                            </div>
                                            <div class="card-chart" style = "color: #fff">
                                                <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(2, 136, 209, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="45" style = "color: #fff;"></canvas>
                                            </div>
                                        </div>
                                    </div></div>

                                <div class="tab-pane fade active in" id="profile-11">
                                    <hr>
                                    <div class = "pull-left">
                                        <button type="button" class="btn btn-primary" style="background-color: #14692E; border-color: #14692E"><i class="icon icon-file-excel-o"></i>&nbsp &nbsp Download As Excel &nbsp &nbsp</button> |

                                        <button type="button" class="btn btn-primary" style="background-color: maroon; border-color: maroon"><i class="icon icon-file-pdf-o"></i>&nbsp &nbsp Download As PDF &nbsp &nbsp</button>
                                    </div><BR><br>
                                    <div class="row gutter-xs">
                                        <div class="col-xs-12">

                                            <div class="card">
                                                <div class="card-header">


                                                </div>
                                                <div class="card-body">
                                                    <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                                                        <thead>
                                                        <tr>
                                                            <th>Transaction ID</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Agent Name</th>
                                                            <th>Amount</th>



                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>2017/05/18</td>
                                                            <td>10K</td>
                                                            <td>10K</td>
                                                            <td>1</td>

                                                            <td>$600</td>



                                                        </tr>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<div id="logout" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                <center><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

            </div>
        </div>
    </div>
</div>


<div id="createUser" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                            </div><hr style="border-color: #217345">

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

                <button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>



<div id="pwdChange" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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

                <button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<div id="delUser" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                <center><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

            </div>
        </div>
    </div>
</div>


<div id="disUser" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                <center><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

            </div>
        </div>
    </div>
</div>

<div id="editUser" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                            </div><hr style="border-color: #217345">

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

                <button type="button" class="btn btn-primary" style="background-color: #14692E"><i class="icon icon-save"></i> Save</button>
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
    $(document).on('click','.addnewuser',function(e) {
             
            var fullname= $('#fullname').val();
            var userEmail= $('#userEmail').val();
            var contact= $('#contact').val();
            var role= $('#role').val();
            var gender= $('#gender').val();
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

           
              });
</script>



</body>
</html>