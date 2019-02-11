<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BanqMoni</title>
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" href="favicon.ico" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#27ae60">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/css/elephant.min.css">
    <link rel="stylesheet" href="assets/css/application.min.css">
    <link rel="stylesheet" href="assets/css/demo.min.css">
    <script src="assets/js/jquery.min.js"></script>


    <!--  <link href="" rel="stylesheet"> -->




</head>
<body class="layout layout-header-fixed">
<div class="layout-header">
    <div class="navbar navbar-default" style = "background-color: #fff">
        <div class="navbar-header" style = "background-color: #217345">
            <!-- <a class="navbar-brand navbar-brand-center" href="audience.html">
              <img class="navbar-brand-logo" src="assets/img/kl.png" alt=""  style = " height: 44px; width: 212px;margin-top: -10px ">
            </a> -->
            <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
                <span class="sr-only">Toggle navigation</span>
            <span class="bars" >
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
            </button>
            <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="img/0180441436.jpg" alt="Teddy Wilson">
            </span>
            </button>
        </div>
        <div class="navbar-toggleable">
            <nav id="navbar" class="navbar-collapse collapse">
                <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
                    <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
                </button>
                <ul class="nav navbar-nav navbar-right">
                    <li class="visible-xs-block">
                    </li>
                    <li class="dropdown hidden-xs">
                        <button class="navbar-account-btn"  aria-haspopup="true" style="color: #105d07">
                            <img class="rounded" width="30" height="30" src="assets/img/no.png" alt="" style="color: limegreen;">
                    <span style="font-family: Candara; font-size: 11px"><?php echo $user_full_name;?>
                        <input type="hidden" name="email" id="my_email_address" value="<?php echo $email;?>">
                     &nbsp &nbsp </span>
                            <button class="btn  btn-success" style = "text-transform: capitalize; margin-top: 5px; background-color: #217345"  type="button" data-toggle="modal" data-target="#logout"> <i class = "icon icon-lock"></i> &nbsp Logout
                            </button> &nbsp &nbsp
                            <button class="btn  btn-success" style = "text-transform: capitalize; margin-top: 5px; background-color: #dbdbdb; color: #217345; border-color: #dbdbdb"  type="button" data-toggle="modal" data-target="#pwdChange"> <i class = "icon icon-edit"></i>
                                &nbsp Change Password
                            </button>
                        </button>
                    </li>
                    <li class="visible-xs-block">
                        <a href="login-1.html">
                            <span class="icon icon-power-off icon-lg icon-fw"></span>
                            Sign out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="layout-main">
    <div class="layout-sidebar" >
        <div class="layout-sidebar-backdrop" style="background-color: #217345;"></div>
        <div class="layout-sidebar-body" style="background-color: #217345;">
            <div class="custom-scrollbar" >
                <nav id="sidenav" class="sidenav-collapse collapse" style="background-color: #217345; color: #fff">
                    <ul class="sidenav">
                        <li class=" sidenav-item  active">
                            <a href="case" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-edit"></span>
                                <span class="sidenav-label" style="font-size: 11px">Your Weekly Order</span>
                            </a>

                        </li>
                        <?php if($user_role=='1'){?>
                            <li class=" sidenav-item">
                                <a href="summary" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-edit"></span>
                                    <span class="sidenav-label" style="font-size: 11px">Lunch Summary</span>
                                </a>

                            </li>


                            <li class="sidenav-heading">User Management</li>
                            <li class="sidenav-item ">
                                <a href="#" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-user"></span>
                                <span class="sidenav-label" style="font-size: 11px"
                                      data-toggle="modal" data-target="#createUser"
                                    >New User</span>
                                </a>
                            </li>

                            <li class="sidenav-item ">
                                <a href="users" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-edit"></span>
                                    <span class="sidenav-label" style="font-size: 11px" >Users</span>
                                </a>

                            </li>


                        <?php }?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="layout-content">
        <div class="layout-content-body">

            <div class="row">
                <center>
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label  class="form-label" style="font-size: 12px">Start Date</label>
                                    <input id="from_date" class="form-control" type="text" style="font-size: 11px" name="start_date" required="">
                                </div>
                                <div class="col-md-3">
                                    <label  class="form-label" style="font-size: 12px">End Date</label>
                                    <input id="to_date" class="form-control" type="text" style="font-size: 11px" name="end_date" required="">
                                </div>
                                <div class="col-md-3">
                                    <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />
<!--                                    <button   id="filter" name="submyourorder" class="btn btn-primary"-->
<!--                                              style="background-color: #217345;margin-top: 23px">-->
<!--                                        </i> Place Order-->
<!--                                    </button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
            <br> <br>

            <div class="row gutter-xs">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions">
                                <button type="button" class="card-action card-reload" title="Reload"></button>

                            </div>
                        </div>
                        <div class="card-body">
                            <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable"
                                   cellspacing="0" width="100%" style="font-size: 12px">

                                <thead>
                                <tr>
                                    <th>order_date</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>order_date</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach($weekly_summary as $record):?>
                                    <tr>
                                        <td>
                                            <?php echo $record->order_date;?>
                                        </td>
                                        <td>
                                            <?php echo $record->your_order;?>
                                        </td>
                                        <td>
                                            <?php echo $record->user_full_name;?>
                                        </td>
                                        <td>
                                            <center>
                                                <button class="editorder btn  btn-info"
                                                        style = "text-transform: capitalize;  background-color: goldenrod;
                                                         border-color: goldenrod; width:40px"  type="button" id="fetchinfo"
                                                        data-toggle="modal" data-target="#EditMonday"
                                                        data-order_date="<?php echo $record->order_date;?>"
                                                        data-id="<?php echo $record->your_order;?>"
                                                        data-your_order="<?php echo $record->user_full_name;?>"  >
                                                    <i class = "icon icon-info"></i>
                                                </button>
                                                <button class="deleteorder btn  btn-warning"
                                                        style = "text-transform: capitalize;  background-color: maroon;
                                                         border-color: maroon; width:40px"  type="button"
                                                        data-toggle="modal" data-target="#deleteOrder"
                                                        data-your_date="<?php echo $record->order_date;?>"
                                                        data-id="<?php echo $record->your_order;?>"
                                                        data-your_order="<?php echo $record->user_full_name;?>" >
                                                    <i class = "icon icon-trash">
                                                    </i>
                                                </button>
                                            </center>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            </div></div>
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
                        <center>
                            <a href="logout"><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check">
                                    </i>&nbsp &nbsp Yes &nbsp &nbsp</button> </a>
                            <button type="button" class="btn btn-danger"  data-dismiss="modal" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

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
                            <h4 class="modal-title" style="font-size: 12px">Edit User</h4>
                        </div>
                    </div>
                    <div class="modal-tabs">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display2">
                                <form action="users_controller/update" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label  class="form-label" style="font-size: 12px">User's Full Name</label>
                                                <input id="unit_edit_edit" class="form-control" name="user_full_name" type="text" style="font-size: 11px"></div>
                                            <div class="col-md-4">
                                                <label  class="form-label" style="font-size: 12px">Gender</label>
                                                <select id="email_edit" class="form-control" name="gender" style="font-size: 11px">
                                                    <option value="Male" >Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div></div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label  class="form-label" style="font-size: 12px">User Email</label>
                                                <input id="full_name_edit" class="form-control" name="user_email" type="email" style="font-size: 11px" readonly>
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                                <input id="gender_edit" class="form-control" name="phonenumber" type="text" style="font-size: 11px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">User Level</label>
                                                <select class="form-control" style="font-size: 11px" name="my_user_level_edit" id="my_user_level_edit" required="">
                                                    <option value="">User Level</option>
                                                    <option value="3">Senior Management</option>
                                                    <option value="4">Customer Support</option>
                                                    <option value="2">Compliance Vp</option>
                                                    <option value="1">Chief Operations Officer</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-color: #217345">
                                    <button type="Submit" class="btn btn-primary" style="background-color: #217345; float:right"><i class="icon icon-save"></i> Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="idealtime" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #217345">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">Ideal Time Update in minute</h4>
                        </div>
                    </div>
                    <div class="modal-tabs">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display2">
                                <form action="users_controller/update_response_time" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Ideal Response Time</label>
                                                <input value="<?php echo $ideal_response_time;?>'Minute(s)'" class="form-control" type="text" style="font-size: 11px" disabled="">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">New Ideal Response Time in minute</label>
                                                <input  class="form-control" type="number" style="font-size: 11px" name="ideal_response_time" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-color:#217345">
                                    <button type="Submit" class="btn btn-primary" style="background-color: #217345; float:right"><i class="icon icon-save"></i> Save</button>


                                </form>

                            </div>

                        </div>
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
                                <form action="" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label  class="form-label" style="font-size: 12px">User's Full Name</label>
                                                <input id="name_full" class="form-control" type="text" style="font-size: 11px" name="user_full_name" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label" style="font-size: 12px">Gender</label>
                                                <select id="gend" class="form-control" style="font-size: 11px" name="gender" required="">
                                                    <option value="">Gender</option>
                                                    <option value="Male" >Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label  class="form-label" style="font-size: 12px">User Email</label>
                                                <input id="gmail" class="form-control" type="email" style="font-size: 11px" name="user_email" required="">
                                            </div>

                                            <div class="col-md-4">
                                                <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                                <input id="contact" class="form-control" type="text" style="font-size: 11px" name="phonenumber" required="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">User Level</label>
                                                <select class="form-control" style="font-size: 11px" name="user_level" id="my_user_level" required="">
                                                    <option value="">User Level</option>
                                                    <option value="3">Senior Management</option>
                                                    <option value="4">Customer Support</option>
                                                    <option value="2">Compliance Vp</option>
                                                    <option value="1">Chief Operations Officer</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-color:#217345">
                                    <button type="Submit" id="sendd" class="btn btn-primary" style="background-color: #217345; float:right"><i class="icon icon-save"></i> Save</button>

                                    <span id="error_exist_new_user" style="color:red; "></span>
                                </form>

                            </div>

                        </div>
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
                    <form >
                        <div class="modal-tabs">

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="display">
                                    <div class="form-group">
                                        <label  class="form-label" style="font-size: 12px">Old Password</label>
                                        <input id="old_pass" class="form-control" name="user_email" type="text" style="font-size: 11px" required>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">New Password</label>
                                                <input id="new_pass" class="form-control" type="text" style="font-size: 11px" min="6" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Confirm Password</label>
                                                <input id="new_pass_confirm" class="form-control" type="text" style="font-size: 11px" min="6" required>
                                            </div>
                                        </div></div>
                                    <span id="error_exist" style="color:red; "></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="Submit" id="subm" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-save"></i> Save</button>
                        </div>
                    </form>
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

                        <form action="users_controller/delete" method="post">
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <input type="hidden" name="user_email" id="deleteuser_email">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete <span id="deleteNamen" style="color: red"></span> ?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="Submit" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger"  data-dismiss="modal" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                    </form>
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
                    <form action="users_controller/disable" method="post">
                        <div class="modal-tabs">
                            <ul class="nav nav-tabs nav-justified">
                                <input type="hidden" name="user_email" id="disuser_email">
                                <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable <span id="disNamen" style="color: red"></span> ?</a></li>

                            </ul>
                        </div>
                        <div class="modal-footer">
                            <center><button type="Submit" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button"  data-dismiss="modal" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="anable_User" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #217345">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-unlock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Unlock User Account</h4>

                        </div>
                    </div>
                    <form action="users_controller/unlock" method="post">
                        <div class="modal-tabs">
                            <ul class="nav nav-tabs nav-justified">
                                <input type="hidden" name="user_email_unlock" id="unlock_user_email">
                                <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Unlock <span id="anasuserNamen" style="color: red"></span> ?</a></li>

                            </ul>
                        </div>
                        <div class="modal-footer">
                            <center><button type="Submit" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button"  data-dismiss="modal" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="new_service_category_utility" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #217345">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">Add Utility</h4>
                        </div>
                    </div>
                    <div class="modal-tabs">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display3">
                                <form action="/">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">District's Name</label>
                                                <input id="form-control-7" class="form-control" type="text" style="font-size: 11px"></div>
                                        </div></div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">Region</label>

                                                <select id="demo-select2-3" class="form-control" style="font-size: 11px">
                                                    <option value="GAR" >Greater Accra Region</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><hr style="border-color: #217345">
                            <button type="button" class="btn btn-primary" style="background-color: #217345; float:right;"><i class="icon icon-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="YourOrder" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Your weekly Order</h4>
                    </div>
                </div>
                <div class="modal-tabs">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display2">
                            <form action="" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Monday</label>
                                            <input id="Monday" class="form-control" type="text" style="font-size: 11px" name="user_full_name" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Tuesday</label>
                                            <input id="Tuesday" class="form-control" type="text" style="font-size: 11px" name="user_full_name" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Wednesday</label>
                                            <input id="Wednesday" class="form-control" type="text" style="font-size: 11px" name="user_full_name" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Thursday</label>
                                            <input id="Thursday" class="form-control" type="text" style="font-size: 11px" name="user_full_name" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Friday</label>
                                            <input id="Friday" class="form-control" type="text" style="font-size: 11px" name="user_full_name" required="">
                                        </div>
                                    </div>
                                </div>




                                <hr style="border-color:#217345">
                                <button type="Submit" id="send" class="btn btn-primary" style="background-color: #217345; float:right"><i class="icon icon-save"></i> Save</button>

                                <span id="error_exist_new_user" style="color:red; "></span>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="modal_open_case" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Open Case</h4>
                    </div>
                </div>
                <div class="modal-tabs">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display2">
                            <form action="/">
                                <div class="form-group">
                                    <div class="row">


                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Complainant Name</label>
                                            <input class="form-control" type="text" style="font-size: 11px" id="cname" required="" >
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Complainant Number</label>
                                            <input  class="form-control" type="text" style="font-size: 11px" id="ccontact" required="">
                                        </div>

                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Transaction ID</label>
                                            <input id="transaction_id" name="transaction" class="form-control" type="text" style="font-size: 11px" required="" onchange="myFunction()" >
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <button type="button"  id="trans"  class="btn btn-primary  form-control" style="background-color: #217345; float:right;margin-top: 5px">
                                                <i class=" "></i>Verify</button>
                                        </div>
                                    </div>
                                    <span id="empty_transactionid" style="color:red; padding-left: 300px"></span>
                                    <hr style="border-color: #217345;" >
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Depositors Name</label>
                                                <input id="DepositorsName" class="form-control" type="text" style="font-size: 11px" disabled="">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Receivers Name</label>
                                                <input id="re" class="form-control" type="text" style="font-size: 11px" disabled="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Bank Name</label>
                                                <input id="ba" class="form-control" type="text" style="font-size: 11px" disabled="">
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Account Number</label>
                                                <input id="ac" class="form-control" type="text" style="font-size: 11px" disabled="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label  class="form-label" style="font-size: 12px">Amount</label>
                                                <input id="am" class="form-control" type="text" style="font-size: 11px" disabled="">
                                            </div>
                                            <div class="col-md-3">
                                                <label  class="form-label" style="font-size: 12px">Depositors Contact</label>
                                                <input id="depositorscontact" class="form-control" type="text" style="font-size: 11px" disabled="" >
                                            </div>
                                            <div class="col-md-6">

                                                <button type="button"  id="form-control-10" class="btn btn-primary  form-control"
                                                        style="background-color: #217345;margin-top: 24px">&nbsp <i class="">
                                                    </i> <span id="statuss" Placeholder="Transaction Status "></span></button>
                                                <!--       <span id="statusss" ></span> -->
                                                <!--   <input type="text"  id="statussss"> -->
                                            </div>
                                        </div>
                                    </div>


                                    <hr style="border-color: #217345">
                                    <button  class="btn btn-primary" id="open_next_case" style="background-color: #217345;float:right">Open Case</button>
                                    <span id="error_transactionid_dont_exist" style="color:red; padding-left: 300px"></span>

                            </form>

                        </div>
                        <center><span id="error_contact_dont_match" style="color:red;"></span></center>
                    </div>

                </div>

            </div>
        </div>
    </div>




    <div id="modal_open_case_next" class="modal fade" tabindex="-1" role="dialog" style="margin-top: 125px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <h4 class="modal-title" style="font-size: 12px">Open Case</h4>
                    </div>
                </div>
                <div class="modal-tabs">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display2">
                            <button id="buttoogle" class="btn btn-primary" style="background-color: #217345;float:right">hiding/showing Complains</button>
                            <br>  <br>
                            <form id="toogle">
                                <div class="col-md-12">
                                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>

                                        </tr>
                                        </thead>
                                        <tbody id="description_old_once">

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <form action="/">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Service Category</label>
                                            <select id="servicecat" class="form-control" style="font-size: 11px" name="id" required="">
                                                <option value="">Service Category</option>
                                                <?php
                                                foreach ($service_category_name as $record)
                                                {?>
                                                    <option value="<?php echo $record->service_category_name; ?>"><?php echo $record->service_category_name; ?> </option>';
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <hr style="border-color: #217345;" >
                            </form>
                        </div>
                        <p id="demooo"></p>
                        <div class="col-md-12">
                            <label  class="form-label" style="font-size: 12px">Write A Complains</label><br>

                            <form method="post" action="Case_management_controller/add">
                                <input id="trns" name="case_transaction"  class="form-control" type="hidden" style="font-size: 11px" required="">
                                <textarea  id="desions" name="case_description" class="form-control" style="min-height:100px" required></textarea >
                                <br>
                                <hr style="border-color: #217345">
                                <button type="button" id="description_save" class="btn btn-primary"
                                        style="background-color: #217345;float:right"><i class="icon icon-save"></i> Submit To Complains</button>
                                <span id="empty_transaction_id" style="color:red; "></span>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>











<!---->
<!--    <script src="assets/js/vendor.min.js"></script>-->
<!--    <script src="assets/js/elephant.min.js"></script>-->
<!--    <script src="assets/js/application.min.js"></script>-->
<!--    <script src="assets/js/demo.min.js"></script>-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-83990101-1', 'auto');
        ga('send', 'pageview');
    </script>




    <!-- ///////////showing delete modal//////////////////////////-->
    <script>
        $(document).on('click','.dell',function(){
            $('#delUser').modal('show');
            $('#deleteuser_email').val($(this).data('user_email'));
            var title=$(this).data('user_full_name');
            $('#deleteNamen').html(title);
        });
    </script>
    <!-- ///////////showing create user modal//////////////////////////-->
    <script>
        $(document).on('click','.editde',function(){
            //SHOW MODAL
            $('#editUser').modal('show');
            //POPULATE THE MODA
            //alert($(this).data('unit_name'));
            $('#unit_name_id_edit').val($(this).data('id'));

            $('#unit_edit_edit').val($(this).data('user_full_name')).change();

            $('#full_name_edit').val($(this).data('user_email'));

            $('#gender_edit').val($(this).data('phonenumber'));

            $('#email_edit').val($(this).data('gender'));

            $('#my_user_level_edit').val($(this).data('user_role'));
        });
    </script>
    <!-- ///////////showing disable user modal//////////////////////////-->
    <script >
        $(document).on('click','.dis',function(){
            $('#disUser').modal('show');
            $('#disuser_email').val($(this).data('user_email'));
            var title=$(this).data('user_full_name');
            $('#disNamen').html(title);
        });
    </script>
    <!-- ///////////showing unloking user modal//////////////////////////-->
    <script >
        $(document).on('click','.anabl',function(){
            $('#anable_User').modal('show');
            $('#unlock_user_email').val($(this).data('user_email'));
            var title=$(this).data('user_full_name');
            $('#anasuserNamen').html(title);
        });
    </script>
    <!-- ///////////changing user password js//////////////////////////-->
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
            {           }
            else{
                e.preventDefault();

                $.ajax({
                    type:'POST',
                    data:{password:password,user_email:user_email,new_pass:new_pass,new_pass_confirm:new_pass_confirm },
                    url:'<?php echo site_url('users_controller/change_password'); ?>',
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

    <!--/////selecting a description for display -->
    <script>
        $(document).on('click','#trans',function(e) {
            var transaction_id= $('#transaction_id').val();
            //alert(transaction_id)
            e.preventDefault();
            $.ajax({
                type:'POST',
                data:{transaction_id:transaction_id},
                url:'<?php echo site_url('Case_management_controller/select_description'); ?>',
                success:function(result)
                {
                    //alert(result);
                    data = JSON.parse(result);
                    $('#description_old_once').empty();
                    var $select=$('#description_old_once');
                    $.each(data,
                        function (index, item) {

                            $select.append($('<tr> <td> <p>' +
                                '<span style="font-weight: bold">Date :</span>'+' '+date_format (item.time_date ,'Y-m-d H:i:s')+
                                ' &nbsp &nbsp ' +'<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                                ' &nbsp &nbsp ' +'<span style="font-weight: bold">Case ID :</span>'+' '+item.case_id+'' + '<br>'+
                                '<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                                ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Contact :</span>'+' '+item.complainant_contact+''+'<br>'+
                                '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+''+'<br>'+
                                '<span style="font-weight: bold">Case Status :</span>'+' '+item.CaseStatus+'</p></td>  </tr>'))
                        }
                    );
                }
            });


        });
    </script>
    <!--///////picking a customers complain for save-->
    <script>
        //on change function to pick the transaction id -->
        function myFunction()
        {
            var x = document.getElementById("transaction_id").value;
            return x;
        }
        //end//
        //saving description/ customers complains
        $(document).on('click','#description_save',function(e) {
            var descriptions= $('#desions').val();
            var complainant_name= $('#cname').val();
            var complainant_contact= $('#ccontact').val();
            var servicecat= $('#servicecat').val();
            var transaction_id= myFunction();

            if(servicecat=="")
            {
                $('#empty_transaction_id').html("Select Service Category");
            }
            else if(descriptions=="")
            {
                $('#empty_transaction_id').html("Enter Complain");
            }
            else{
                e.preventDefault()
                e.preventDefault();
                $.ajax({
                    type:'POST',
                    data:{descriptions:descriptions,
                        transaction_id:transaction_id,
                        complainant_name:complainant_name,
                        complainant_contact:complainant_contact,
                        servicecat:servicecat},
                    url:'<?php echo site_url('Case_management_controller/add'); ?>',
                    success:function(result)
                    {
                        if(result==1)
                        {
                            $('#empty_transaction_id').html("Description Submited successfully");
                            location.reload();
                        }
                    }
                });
            }
        });
    </script>
    <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////adding ur order-->
    <script>
        $(document).on('click','#send',function(e) {
            e.preventDefault();
            var Monday= $('#Monday').val();
            var Tuesday= $('#Tuesday').val();
            var Wednesday= $('#Wednesday').val();
            var Thursday= $('#Thursday').val();
            var Friday= $('#Friday').val();
            var email= '<?php echo $email;?>';
            $.ajax({
                type:'POST',
                data:{
                    email:email,
                    Monday:Monday,
                    Tuesday:Tuesday,
                    Wednesday:Wednesday,
                    Thursday:Thursday,
                    Friday:Friday
                },
                url:'<?php echo site_url('Service_Category_Controller/add'); ?>',
                success:function(result)
                {
                    alert(result);
                    if(result==1){

                        $('#error_exist_new_service').html("insert successful");
                        location.reload();
                    }
                    else{
                        window
                        $('#error_exist_new_service').html("Service Category Name Already exist!!");

                    }
                }
            });
        });
    </script>

    <!--////////Addding a new user //////-->
    <script>
        $(document).on('click','#sendd',function(e) {
            var user_full_name= $('#name_full').val();
            var gender = $('#gend').val();
            var user_email = $('#gmail').val();
            var user_role = $('#my_user_level').val();
            var phonenumber = $('#contact').val();



            if(user_full_name=="")
            {

            }
            else if(gender=="")
            {

            }
            else if(user_email=="")
            {

            }
            else if(phonenumber=="")
            {

            }
            else
            {
                e.preventDefault();

                alert(user_full_name);
                alert(gender);
                alert(user_email);
                alert(user_role);
                alert(phonenumber);

                $.ajax({
                    type:'POST',
                    data:{user_full_name:user_full_name,gender:gender,user_email:user_email,phonenumber:phonenumber,user_role:user_role},
                    url:'<?php echo site_url('Create_A_New_User_controller/add'); ?>',
                    success:function(result)
                    {

                        if(result==1)
                        {

                            $('#error_exist_new_user').html("insert successful");
                            location.reload();

                        }
                        else{
                            //window
                            $('#error_exist_new_user').html("Email Already exist");
                        }
                    }
                });

            }



        });
    </script>
    <!---////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <script>
        function addCommas(amount) {
            var parts = amount.toString().split(".");
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return parts.join(".");
        }


        $(document).on('click','#trans',function(e) {
            var transaction_id= $('#transaction_id').val();
            if(transaction_id=="")
            {

                $('#empty_transactionid').html("Transaction Id Cant Be Empty");
            }
            else {
                $('#empty_transactionid').html(" ");
                $("#hell").empty();
                e.preventDefault();

                $.ajax({
                    type:'POST',
                    data:{transaction_id:transaction_id},
                    url:'<?php echo site_url('Case_management_controller/select_a_transaction'); ?>',
                    success:function(result)
                    {

                        if(result==0)

                        {

                            $('#tr').val(" ");
                            $('#ca').val(" ");
                            $('#se').val(" ");
                            $('#DepositorsName').val(" ");
                            $('#re').val(" ");
                            $('#ba').val(" ");
                            $('#ac').val(" ");
                            $('#am').val(" ");
                            $('#depositorscontact').val(" ");
                            $('#descr').val(" ");
                            $('#descr').html(" ");
                            $('#statuss').html("Transaction Dont Exist");
                            //location.reload();
                        }

                        else{
                            //alert(result);

                            var arraylist = result.split('|');
                            var transaction_id=arraylist[0];
                            var case_id=arraylist[1];
                            var service_category_name=arraylist[2];
                            var depositors_name=arraylist[3];
                            var receivers_name=arraylist[4];
                            var bank_name=arraylist[5];
                            var account_number=arraylist[6];
                            var amount=arraylist[7];
                            var depositors_contact=arraylist[8];
                            var case_status=arraylist[9];
                            var descriptions=arraylist[10];

                            // alert(arraylist[11]);
                            $('#tr').val(transaction_id);
                            $('#ca').val(case_id);
                            $('#se').val(service_category_name);
                            $('#DepositorsName').val(depositors_name);
                            $('#re').val(receivers_name);
                            $('#ba').val(bank_name);
                            $('#ac').val(account_number);
                            $('#am').val('GHC '+addCommas(amount));
                            $('#depositorscontact').val(depositors_contact);
                            $('#descr').html(descriptions);
                            $('#statuss').html("successful");

                            $('#trns').val(transaction_id);
                            // $('#trns').html("successful");



                        }




                    }
                });
            }

        });
    </script>
    <script>
        $(document).on('click','#trans',function(e) {
            var transaction_id= $('#transaction_id').val();
            //alert(transaction_id)
            e.preventDefault();
            $.ajax({
                type:'POST',
                data:{transaction_id:transaction_id},
                url:'<?php echo site_url('Case_management_controller/select_description'); ?>',
                success:function(result)
                {
                    //alert(result);
                    data = JSON.parse(result);
                    $('#description_old_once').empty();
                    var $select=$('#description_old_once');
                    $.each(data,
                        function (index, item) {
                            $select.append($('<tr> <td> <p>'+item.descriptions+'' + '<br>'+item.time_date+'</p></td>  </tr>'))
                        }
                    );
                }
            });


        });
    </script>
    <script>
        function myFunction()
        {
            var x = document.getElementById("transaction_id").value;
            return x;
            //alert(x);
            //document.getElementById("demo").innerHTML = "You selected: " + x;
        }
        $(document).on('click','#description_save',function(e) {
            var descriptions= $('#desions').val();
            var transaction_id= myFunction();
            if(transaction_id=="")
            {
                $('#empty_transaction_id').html("Verify Transaction Id First");
            }
            else if(descriptions=="")
            {

            }
            else{
                // alert(transaction_id);
                // alert(descriptions);

                e.preventDefault();

                e.preventDefault();
                $.ajax({
                    type:'POST',
                    data:{descriptions:descriptions,transaction_id:transaction_id},
                    url:'<?php echo site_url('Case_management_controller/add'); ?>',
                    success:function(result)
                    {
                        //alert(result);

                        if(result==1)
                        {
                            $('#empty_transaction_id').html("Description Submited successfully");
                            location.reload();

                        }

                    }
                });

            }
        });
    </script>


    <script type="text/javascript">
        $(document).on('click','#open_next_case',function(e) {
            e.preventDefault();
            var if_successful= $('#statuss_case_open').html();
            var complainant_name= $('#cname').val();
            var complainant_contact= $('#ccontact').val();
            var ccontact=$('#ccontact').val();
            var depositorscontact=$('#depositorscontact').val();
            alert(ccontact);
            alert(depositorscontact);

//        if(if_successful==="SUCCESSFUL")
            if((if_successful==="SUCCESSFUL") && (ccontact==depositorscontact))
            {
                $('#modal_open_case_next').modal('show');
                // alert('heloo');

            }
            else if(complainant_name=="")
            {

                $('#error_transactionid_dont_exist').html("Complainant Name Empty");
            }
            else if(complainant_contact=="")
            {

                $('#error_transactionid_dont_exist').html("Complainant Contact Empty");
            }
            else
            {
                $('#error_contact_dont_match').html("The Depositors Contact Does Not Much complainant Contact");
                $('#error_transactionid_dont_exist').html("");
            }
        });
    </script>


    <script>
        $(document).ready(function () {
            var idleState = false;
            var idleTimer = null;
            $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {
                clearTimeout(idleTimer);
                if (idleState == true) {
                    $("body").css('background-color','#fff');
                }
                idleState = false;
                idleTimer = setTimeout(function () {

                    var idle='0';
                    $.ajax({
                        type:'POST',
                        data:{idle:idle},
                        url:'<?php echo site_url('login_controller/logout'); ?>',
                        success:function(result)
                        {
                            //alert(result);
                            if(result==0)
                            {
                                location.reload();
                            }
                        }

                    });

                    idleState = true;
                }, 300000);

            });
            $("body").trigger("mousemove");
        });

    </script>
    <!--   <script src="<?php echo base_url('assets/autologout.js')?>"></script> -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script>

    $.datepicker.setDefaults({
        dateFormat: 'yy-mm-dd'
    });
    $(function(){
        $("#from_date").datepicker();
        $("#to_date").datepicker();
    });
</script>

<script>
    $(document).ready(function(){
        $('#filter').click(function(){
            e.preventDefault();
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            alert(from_date);
            alert(to_date);
            if(from_date != '' && to_date != '')
            {
                $.ajax({
                    type:'POST',
                    data:{from_date:from_date, to_date:to_date},
                    url:'<?php echo site_url('Service_Category_Controller/range_summary'); ?>',
                    success:function(result)
                    {
                        //alert(result);$output
                        data =(result);
                        $('#order_table').html(data);
                    }
                });
            }
            else
            {
                alert("Please Select Date");
            }
        });
    });
</script>
</body>
</html>

