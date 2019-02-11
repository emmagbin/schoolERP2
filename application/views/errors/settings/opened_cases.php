<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    


    <script src="assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#buttoogle").click(function(){
                //$("p").toggle(1000);
                $("#toogle").toggle(1000);
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#buttoogle_case_open").click(function(){
                //$("p").toggle(1000);
                $("#toogle_case_open").toggle(1000);
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#checkStatusbuttoogle").click(function(){
                //$("p").toggle(1000);
                $("#checkStatustoogle").toggle(1000);
            });
        });
    </script>
</head>


<body class="layout layout-header-fixed">
<div class="layout-header">
    <div class="navbar navbar-default" style = "background-color: #fff">
        <div class="navbar-header" style = "background-color: #217345">
            <a class="navbar-brand navbar-brand-center" href="audience.html">
                <!--<img class="navbar-brand-logo" src="assets/img/kl.png" alt=""  style = " height: 44px; width: 212px;margin-top: -10px ">-->
            </a>
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
                <span class="bar-line bar-line-6 in"></span></span>

                </button>
                <ul class="nav navbar-nav navbar-right">
                    <li class="visible-xs-block">

                    </li>


                    <li class="dropdown hidden-xs">
                        <button class="navbar-account-btn"  aria-haspopup="true" style="color: #105d07">
                            <img class="rounded" width="30" height="30" src="assets/img/no.png" alt="" style="color: limegreen;"> 
							<span style="font-family: Candara; font-size: 11px; color:#217345"><?php echo $user_full_name;?>

                                <input type="hidden" name="email" id="my_email_address" value="<?php echo $email;?>">
                            &nbsp &nbsp </span>
                            <button class="btn  btn-success" style = "text-transform: capitalize; margin-top: 5px; background-color: #217345"
                                    type="button" data-toggle="modal" data-target="#logout"> <i class = "icon icon-lock"></i> &nbsp Logout</button> &nbsp &nbsp
                            <button class="btn  btn-success" style = "text-transform: capitalize; margin-top: 5px; background-color: #dbdbdb; color: #217345; border-color: #217345"
                                    type="button" data-toggle="modal" data-target="#pwdChange"> <i class = "icon icon-edit"></i> &nbsp Change Password</button>

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


                        <?php if($user_role=='1'){?>
                            <li class="sidenav-heading">Service Category</li>
                            <li  class="sidenav-item ">
                                <a href="ServiceCategory" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-edit"></span>
                                <span class="sidenav-label" style="font-size: 11px"
                                >Utilities</span>
                                </a>

                            </li>
                        <?php }?>
                        <?php if($user_role=='2'){?>
                            <li class="sidenav-heading">Dashboard</li>
                            <li  class="sidenav-item">
                                <a href="dashboard" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-edit"></span>
                                <span class="sidenav-label" style="font-size: 11px"
                                >Dashboard</span>
                                </a>

                            </li>
                        <?php }?>


                        <li class="sidenav-heading">Case Management</li>
                        <?php if($user_role!='2'){?>
                            <li  >

                                <a href="#" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-credit-card"></span>
                                <span class="sidenav-label" style="font-size: 11px"  data-toggle="modal" data-target="#modelVerify"
                                >Open Case</span>
                                </a>

                            </li>
                        <?php }?>
                        <?php if($user_role=='2'){?>
                            <li class="sidenav-item active">
                                <a href="opened_case" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-edit"></span>
                                    <span class="sidenav-label" style="font-size: 11px">Opened Cases</span>
                                </a>

                            </li>
                            <li class="sidenav-item">
                                <a href="pending_case" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-edit"></span>
                                    <span class="sidenav-label" style="font-size: 11px">Pending Cases</span>
                                </a>

                            </li>
                        <?php }?>
                        <li class="sidenav-item">
                            <a href="case" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-edit"></span>
                                <span class="sidenav-label" style="font-size: 11px">Utilities</span>
                            </a>

                        </li>
                        <?php if($user_role=='1'){?>
                            <li class="sidenav-heading">User Management</li>
                            <li class="sidenav-item ">
                                <a href="create_user" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-user"></span>
                                <span class="sidenav-label" style="font-size: 11px"
                                >Create New User</span>
                                </a>

                            </li>

                            <li class="sidenav-item ">
                                <a href="users" aria-haspopup="true">
                                    <span class="sidenav-icon icon icon-edit"></span>
                                    <span class="sidenav-label" style="font-size: 11px" >User Utilities</span>
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
            <div class="title-bar">

                <h1 class="title-bar-title">
                    <span class="d-ib">Opened Cases</span>

                </h1>
                <p class="title-bar-description">
<!--                    <small  style ="color:#217345">Opened Cases</small>-->

                </p>
            </div>
            <div class="row">


                <div class ="col-xs-4">
                    <div class = "row">
                        <div class = "col-lg-12">

                            <div class="col-md-6">
                                <div class="card" style="background-color: #217345; color: #fff">
                                    <div class="card-values">
                                        <div class="p-x">
                                            <small>Total Cases Opened<i class="fa fa-folder-open-o" style = "color: #fff"></i></small><br><br>
                                            <h3 class="card-title fw-l"><?php echo $total_cases;?></h3>
                                        </div>
                                    </div>
                                    <div class="card-chart">
                                        <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]'
                                                data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]'
                                                data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                                    </div>
                                </div>

                            </div></div></div>






                </div></div>
            <br><hr>
            <div class="pull-left">
<!--                <button class=" btn  btn-success" style = "text-transform: capitalize; background-color: #217345"-->
<!--                        data-toggle="modal" data-target="#check_status" type="button"> <i class = "icon icon-plus-circle"></i> &nbsp Check Status</button>-->


            </div>
            <br><br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions">

                                <button type="button" class="card-action card-reload" title="Reload"></button>
                                <input type="hidden" id="mytransactionid">
                                <input type="hidden" id="mycaseid">

                            </div>

                        </div>
                        <div class="card-body">
                            <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                                <thead>
                                <tr>
<!--                                    <th>Transaction ID</th>-->
                                    <th>Opened Case ID</th>

                                    <th><Center> ACTIONS</Center></th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($case_id as $record):?>
                                    <tr>
<!--                                        <td>--><?php //echo $record->transaction_id;?><!--</td>-->
                                        <td>
                                            <a href='#' id="hreflink" data-case_id="<?php echo $record->case_id;?>"
                                                        data-caseidcompliance="<?php echo $record->case_id;?>"
                                                        data-transaction_id="<?php echo $record->transaction_id;?>" >
                                                        <?php echo $record->case_id;?>
                                                
                                            </a>
                                        </td>

                                        <td>
                                            <center>

                                                <button  class="btn  btn-info"
                                                        style = "text-transform: capitalize;  background-color: goldenrod;  border-color: goldenrod; width:40px"  type="button" id="fetchinfo"
                                                        data-case_id="<?php echo $record->case_id;?>"
                                                        data-caseidcompliance="<?php echo $record->case_id;?>"
                                                        data-transaction_id="<?php echo $record->transaction_id;?>"

                                                >
                                                    <i class = "icon icon-info">

                                                    </i></button>

                                            </center></td>
                                    </tr>


                                <?php endforeach;?>

                            </table>

<!-- <div id="fountainTextG">
    <div id="fountainTextG_1" class="fountainTextG">L</div><div id="fountainTextG_2" class="fountainTextG">o</div><div id="fountainTextG_3" class="fountainTextG">a</div><div id="fountainTextG_4" class="fountainTextG">d</div><div id="fountainTextG_5" class="fountainTextG">i</div><div id="fountainTextG_6" class="fountainTextG">n</div><div id="fountainTextG_7" class="fountainTextG">g</div><div id="fountainTextG_8" class="fountainTextG"> </div><div id="fountainTextG_9" class="fountainTextG"> </div><div id="fountainTextG_10" class="fountainTextG"> </div><div id="fountainTextG_11" class="fountainTextG">I</div><div id="fountainTextG_12" class="fountainTextG">n</div><div id="fountainTextG_13" class="fountainTextG">f</div><div id="fountainTextG_14" class="fountainTextG">o</div>
</div> -->
                                             <div class="col-md-12">
                                                 <br>
                                               <center><img  id="loading" src="assets/images/294.gif" style="display: none;  "/> <!-- Loading Image --> </center>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!---modals-->

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
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Logout From BanqMoni Customer Support?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center>
                            <a href="logout"><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check">
                                    </i>&nbsp &nbsp Yes &nbsp &nbsp</button> </a>
                            <button type="button" class="btn btn-danger"  data-dismiss="modal" style="background-color: maroon">
                                <i class="icon icon-close"></i> Cancel</button></center>

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
        <div id="check_status" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #217345">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">Check Status</h4>
                        </div>
                    </div>
                    <div class="modal-tabs">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display2">
                                <form action="/">
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">Transaction ID</label>
                                                <input id="checkStatusTranasactionID" class="form-control" type="text" style="font-size: 11px" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label" style="font-size: 12px">Date & Time</label>
                                                <input id="checkStatusDateTime" class="form-control" type="date" style="font-size: 11px" required>
                                            </div>
                                            <div class="col-md-2">
                                                <br>
                                                <button type="button"  id="checkStatusCheck"  class="btn btn-primary  form-control" style="background-color: #217345; margin-top: 5px">
                                                    <i class=" "></i>Check</button>
                                            </div>

                                        </div>
                                        <br>
                                        <center><span id="empty_transactionid_checkStatus" style="color:red; "></span></center>
                                        <hr style="border-color: #217345">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label  class="form-label" style="font-size: 12px">Depositors Name</label>
                                                    <input id="checkStatusDepositorsName" class="form-control" type="text" style="font-size: 11px" disabled="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label  class="form-label" style="font-size: 12px">Receivers Name</label>
                                                    <input id="checkStatusReceiversName" class="form-control" type="text" style="font-size: 11px" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label  class="form-label" style="font-size: 12px">Bank Name</label>
                                                    <input id="checkStatusBankName" class="form-control" type="text" style="font-size: 11px" disabled="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label  class="form-label" style="font-size: 12px">Account Number</label>
                                                    <input id="checkStatusAccountNumber" class="form-control" type="text" style="font-size: 11px" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label  class="form-label" style="font-size: 12px">Amount</label>
                                                    <input id="checkStatusAmount" class="form-control" type="text" style="font-size: 11px" disabled="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label  class="form-label" style="font-size: 12px">Depositors Contact</label>
                                                    <input id="checkStatusDepositorsContact" class="form-control" type="text" style="font-size: 11px" disabled="" >
                                                </div>
                                </form>
                                <!--                                                <div class="col-md-6">-->
                                <!--                                                    <br>-->
                                <!--                                                    <button id="checkStatusbuttoogle" class="btn btn-primary" style="background-color: #217345;float:right">Hid/Show Descriptions</button>-->
                                <!--                                                </div>-->
                            </div>
                        </div>

                        <hr style="border-color: #217345">

                        <!--                                <button id="buttoogle" class="btn btn-primary" style="background-color: #217345;float:right">hiding and showing Descriptions</button>-->
                        <!--                                <br>-->
                        <p id="checkStatusdemooo"></p>

                        <form id="checkStatustoogle">
                            <div class="col-md-12">
                                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>

                                    </tr>
                                    </thead>
                                    <tbody id="checkStatusDescriptiOnOldOnce">
                                    </tbody>
                                </table>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




<!--end modal-->

</div>

<div id="modelVerify" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
                <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                    <span aria-hidden="true" style="color: #fff">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <div class="text-center">
                    <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                    <h4 class="modal-title" style="font-size: 12px">Open Case uder utilities</h4>
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
                                        <input id="transaction_id_case_open" name="transaction" class="form-control" type="text" style="font-size: 11px" required=""
                                               onchange="myFunction()" >
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <button type="button"  id="trans_case_open"  class="btn btn-primary  form-control" style="background-color: #217345; float:right;margin-top: 5px">
                                            <i class=" "></i>Verify</button>
                                    </div>
                                </div>
                                <span id="empty_transactionid" style="color:red; padding-left: 300px"></span>
                                <hr style="border-color: #217345;" >
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Depositors Name</label>
                                            <input id="DepositorsName_case_open" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Receivers Name</label>
                                            <input id="re_case_open" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Bank Name</label>
                                            <input id="ba_case_open" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Account Number</label>
                                            <input id="ac_case_open" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label  class="form-label" style="font-size: 12px">Amount</label>
                                            <input id="am_case_open" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                        <div class="col-md-3">
                                            <label  class="form-label" style="font-size: 12px">Depositors Contact</label>
                                            <input id="depositorscontact_case_open" class="form-control" type="text" style="font-size: 11px" disabled="" >
                                        </div>
                                        <div class="col-md-6">

                                            <button type="button"  id="form-control-10" class="btn btn-primary  form-control"
                                                    style="background-color: #217345;margin-top: 24px">&nbsp <i class="">
                                                </i> <span id="statuss_case_open" Placeholder="Transaction Status "></span></button>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-color: #217345">
                                <button  class="btn btn-primary" id="open_next_case" style="background-color: #217345;float:right">Open Case</button>
                                <span id="error_transactionid_dont_exist" style="color:red; padding-left: 300px"></span>
                        </form>
                    </div>
                </div>
                <center><span id="error_contact_dont_match" style="color:red;"></span></center>
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
                    <span class="icon icon-user-plus icon-5x m-y-lg"></span><center>
                    <h4 class="modal-title" style="font-size: 12px" id="top_of_modal"></h4></center>
                </div>
            </div>
            <div class="modal-tabs">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="display2">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label  class="form-label" style="font-size: 12px"></label>
                                    <input id="se" name="transaction" class="form-control"  type="text" style="font-size: 11px" disabled="">
                                </div>
                                <!--                                    <div class="col-md-6">-->
                                <!--                                        <label  class="form-label" style="font-size: 12px">Case Status</label>-->
                                <!--                                        <input id="trtr" name="transaction" class="form-control" type="text" style="font-size: 11px" required=""  disabled="">-->
                                <!--                                    </div>-->
                                <div class="col-md-2">
                                    <br>
                                </div>
                            </div>
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
                                    <div class="col-md-6">
                                        <label  class="form-label" style="font-size: 12px">Amount</label>
                                        <input id="am" class="form-control" type="text" style="font-size: 11px" disabled="">
                                    </div>
                                    <div class="col-md-6">
                                        <label  class="form-label" style="font-size: 12px">Depositors Contact</label>
                                        <input id="depositorscontact" class="form-control" type="text" style="font-size: 11px" disabled="" >
                                    </div>
                                    <div class="col-md-6">

                                        <br>
<!--                                        <button id="buttoogle" class="btn btn-primary" style="background-color: #217345;float:right;margin-top: 5px">hid/show</button>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p id="demooo"></p>

                        <form id="toogle">
                            <div class="col-md-12">
                                <!--     <br> -->

                                <!--  <span id="descr"></span>   -->
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

                        <form method="post" action="opened_cases_controller/add_comment">
                            <input type="hidden" name="compliance_name" id="my_full_name" value="<?php echo $user_full_name;?>">
                            <input id="caseid_num" type="hidden" name="case_number"/>
                            <textarea  id="comment" name="comment" class="form-control" style="min-height:100px" required></textarea >
                            <button type="submit"  class="btn btn-primary" style="background-color: #217345;margin-left: 390px;margin-top: 5px">Submit</button>
                            <button type="submit" id="decline" class="btn btn-primary" style="background-color: Red;float:right;margin-top: 5px; padding-left: 20px">Decline</button>
                        </form>

                        <span id="empty_transaction_id" style="color:red; "></span>
                    </div>
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
                    <!-- <span class="icon icon-user-plus icon-5x m-y-lg"></span> -->
                    <h4 class="modal-title" style="font-size: 12px">Open Case Complains </h4>
                </div>
            </div>
            <div class="modal-tabs">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="display2">

                    </div>
                    <button id="buttoogle_case_open" class="btn btn-primary" style="background-color: #217345;float:right">hid/show Complains </button>
                    <br>
                    <p id="demooo_cae_open"></p>

                    <form id="toogle_case_open">
                        <div class="col-md-12">
                            <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                <thead>
                                <tr>

                                </tr>
                                </thead>
                                <tbody id="description_old_once_case_open">

                                </tbody>
                            </table>
                            <hr style="border-color: #217345">
                        </div>
                    </form>
                    <form method="post" action="Case_management_controller/add">
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
                                </di>
                            </div>
                            <div class="col-md-12">
                                <label  class="form-label" style="font-size: 12px">Write A Complains</label><br>

                                <input id="trns" name="case_transaction"  class="form-control" type="hidden" style="font-size: 11px" required="">
                                <textarea  id="desions_case_open" name="case_description" class="form-control" style="min-height:100px" required></textarea >
                                <br>
                                <hr style="border-color: #217345">
                                <button type="Submit" id="descriptionsavecaseopen" class="btn btn-primary"
                                        style="background-color: #217345;float:right"><i class="icon icon-save"></i> Submit To Complains</button>

                    </form>
                </div>
            </div>
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
    $(document).on('click','.btn',function(){
        $('#mytransactionid').val($(this).data('transaction_id'));
        $('#mycaseid').val($(this).data('case_id'));
    });
</script>
<script>
    $(document).on('click','#fetchinfo',function(){
        $('#caseid_num').val($(this).data('caseidcompliance'));
    });
    $(document).on('click','#hreflink',function()
        {
       $('#mytransactionid').val($(this).data('transaction_id'));
        $('#mycaseid').val($(this).data('case_id'));
    });
</script>



<script>
    $(document).on('click','#decline',function(e) {
        var case_id= $('#caseid_num').val();
        var comment= $('#comment').val();
        var compliance_name= $('#my_full_name').val();
        if(comment=="")
        {
           // $('#empty_transaction_id').html("Comment please");
        }
        else
        {
            e.preventDefault();
            $.ajax({
                type:'POST',
                data:{case_id:case_id,comment:comment,compliance_name:compliance_name},
                url:'<?php echo site_url('opened_cases_controller/decline'); ?>',
                success:function(result)
                {
                   // alert(result);
                    if(result==1)
                    {
                        $('#empty_transaction_id').html("Comment Submited successfully");
                        location.reload();

                    }

                }
            });

        }
    });
</script>

<script>
    $(document).on('click','#hreflink',function(e) {
        var transaction_id= $('#mytransactionid').val();
        var case_id= $('#mycaseid').val();
        //alert(case_id)
        e.preventDefault();
        $.ajax({
            type:'POST',
            data:{transaction_id:transaction_id,case_id:case_id},
            url:'<?php echo site_url('opened_cases_controller/select_description'); ?>',
            success:function(result)
            {
                //alert(result);
                data = JSON.parse(result);
                $('#description_old_once').empty();
                var $select=$('#description_old_once');
                $.each(data,
                    function (index, item) {
                        $select.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Contact :</span>'+' '+item.complainant_contact+'' + '<br>'+
                            '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+'<br>'+
                        
                            '<span style="font-weight: bold">Taken By :</span>'+' '+item.cs_name+'</p></td>  </tr>'))
                    }
                );
                  $('#top_of_modal').empty();
                var $top_of_modal=$('#top_of_modal');
                $.each(data,
                    function (index, item) {
                        $top_of_modal.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold;color:white">CASE:</span>'+' '+item.case_id+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold;color:white">ON:</span>'+' '+item.time_date+' </p></td>  </tr>'))
                    }
                );


            }
        });


    });

    $(document).on('click','#hreflink',function(e) {
        e.preventDefault();
        var transaction_id= $('#mytransactionid').val();
        $.ajax({
            type:'POST',
            data:{transaction_id:transaction_id},
            url:'<?php echo site_url('opened_cases_controller/select_a_transaction'); ?>',
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
                    $('#statusss').html("UNSUCCESSFUL");
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
                    $('#trtr').val(case_status);
                    $('#ca').val(case_id);
                    $('#se').val(transaction_id);
                    $('#DepositorsName').val(depositors_name);
                    $('#re').val(receivers_name);
                    $('#ba').val(bank_name);
                    $('#ac').val(account_number);
                    $('#am').val('GHC '+addCommas(amount));

                    $('#depositorscontact').val(depositors_contact);
                    $('#descr').html(descriptions);
                    $('#statuss').html("SUCCESSFUL");
                    $('#statusss').html("SUCCESSFUL");
                    $('#trns').val(transaction_id);
                    $('#modal_open_case').modal('show');
                    // $('#trns').html("successful");
                }
            }
        });

    });
</script>


<script>
    $(document).on('click','#fetchinfo',function(e) {
        var transaction_id= $('#mytransactionid').val();
        var case_id= $('#mycaseid').val();
        //alert(case_id)
        e.preventDefault();
        $.ajax({
            type:'POST',
            data:{transaction_id:transaction_id,case_id:case_id},
            url:'<?php echo site_url('opened_cases_controller/select_description'); ?>',
            success:function(result)
            {
                //alert(result);
                data = JSON.parse(result);
                $('#description_old_once').empty();
                var $select=$('#description_old_once');
                $.each(data,
                    function (index, item) {
                        $select.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Contact :</span>'+' '+item.complainant_contact+'' + '<br>'+
                            '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+'<br>'+
                        
                            '<span style="font-weight: bold">Taken By :</span>'+' '+item.cs_name+'</p></td>  </tr>'))
                    }
                );
                  $('#top_of_modal').empty();
                var $top_of_modal=$('#top_of_modal');
                $.each(data,
                    function (index, item) {
                        $top_of_modal.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold;color:white">CASE:</span>'+' '+item.case_id+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold;color:white">ON:</span>'+' '+item.time_date+' </p></td>  </tr>'))
                    }
                );


            }
        });


    });
</script>




<script>
    function addCommas(amount) {
        var parts = amount.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
    $(document).on('click','#fetchinfo',function(e) {
        e.preventDefault();
        var transaction_id= $('#mytransactionid').val();
         $("#loading").show();
        $.ajax({
            type:'POST',
            data:{transaction_id:transaction_id},
            url:'<?php echo site_url('opened_cases_controller/select_a_transaction'); ?>',
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
                    $('#statusss').html("UNSUCCESSFUL");
                    //location.reload();
                }

                else{
                    //alert(result);
                    // var arraylist = result.split('|');
                    // var transaction_id=arraylist[0];
                    // var case_id=arraylist[1];
                    // var service_category_name=arraylist[2];
                    // var depositors_name=arraylist[3];
                    // var receivers_name=arraylist[4];
                    // var bank_name=arraylist[5];
                    // var account_number=arraylist[6];
                    // var amount=arraylist[7];
                    // var depositors_contact=arraylist[8];
                    // var case_status=arraylist[9];
                    // var descriptions=arraylist[10];
                    $("#loading").hide();

                    var arraylist = result.split('|');
                        var transaction_id=arraylist[0];
                        var case_id=arraylist[6];
                        var service_category_name=arraylist[2];
                        var depositors_name=arraylist[1];
                        var receivers_name=arraylist[0];
                        var bank_name=arraylist[2];
                        var account_number=arraylist[3];
                        var amount=arraylist[4];
                        var depositors_contact=arraylist[5];
                        var case_status=arraylist[9];
                        var descriptions=arraylist[10];

                    // alert(arraylist[11]);
                    $('#trtr').val(case_status);
                    $('#ca').val(case_id);
                    $('#se').val(transaction_id);
                    $('#DepositorsName').val(depositors_name);
                    $('#re').val(receivers_name);
                    $('#ba').val(bank_name);
                    $('#ac').val(account_number);
                    $('#am').val('GHC '+addCommas(amount));

                    $('#depositorscontact').val(depositors_contact);
                    $('#descr').html(descriptions);
                    $('#statuss').html("SUCCESSFUL");
                    $('#statusss').html("SUCCESSFUL");
                    $('#trns').val(transaction_id);
                    $('#modal_open_case').modal('show');
                    // $('#trns').html("successful");
                }
            }
        });

    });
</script>



<script>
    function myFunction()
    {
        var x = document.getElementById("transaction_id_case_open").value;
        return x;
        //alert(x);
        //document.getElementById("demo").innerHTML = "You selected: " + x;
    }
    $(document).on('click','#descriptionsavecaseopen',function(e) {
        var descriptions= $('#desions_case_open').val();
        var complainant_name= $('#cname').val();
        var complainant_contact= $('#ccontact').val();
        var servicecat= $('#servicecat').val();
        var transaction_id= myFunction();
//        $('#trns;').val();
        //alert(servicecat);

        if(transaction_id=="")
        {
            $('#empty_transaction_id').html("Verify Transaction Id First");
        }
        else if(descriptions=="")
        {

        }
        else if(complainant_name=="")
        {

        }
        else if(complainant_contact=="")
        {

        }
        else if(servicecat=="")
        {
            $('#empty_transaction_id').html("Select A Service Category");
        }
        else{
            // alert(transaction_id);
            // alert(descriptions);

            e.preventDefault();

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
                    // alert(result);

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
<!--   change password-->
<script>
    $(document).on('click','#subm',function(e) {
        var password= $('#old_pass').val();
        var new_pass = $('#new_pass').val();
        var new_pass_confirm = $('#new_pass_confirm').val();
        var user_email=$('#my_email_address').val();

        // var phonenumber = $('#contact').val();
        //alert(user_email);
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
                url:'<?php echo site_url('Case_management_controller/change_password'); ?>',
                success:function(result)
                {
                    //alert(result);
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


<!--selecting a transaction start-->
<script>
    $(document).on('click','#trans',function(e) {
        var transaction_id= $('#transaction_id').val();
        var complainant_name= $('#cname').val();
        var complainant_contact= $('#ccontact').val();
        //alert(complainant_name);
        if(transaction_id=="")
        {

            $('#empty_transactionid').html("Transaction Id Cant Be Empty");
        }
        else if(complainant_name=="")
        {
            $('#empty_transactionid').html("Complainant Name Empty");
        }
        else if(complainant_contact=="")
        {
            $('#empty_transactionid').html("Complainant Contact Empty");
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
                        $('#am').val(amount);
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
<!--ending-->


<!--selecting a discription-->
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
                // alert(result);
                data = JSON.parse(result);
                $('#description_old_once').empty();
                var $select=$('#description_old_once');
                $.each(data,
                    function (index, item) {
                        $select.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Date :</span>'+' '+item.time_date+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold;color: red">Service Category :</span>'+' '+item.service_category+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Case ID :</span>'+' '+item.case_id+'' + '<br>'+
                            '<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Contact :</span>'+' '+item.complainant_contact+''+'<br>'+
                            '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+''+'<br>'+
                             '<span style="font-weight: bold">Case Status :</span>'+' '+item.CaseStatus+''+'<br>'+
                            '<span style="font-weight: bold">Taken By :</span>'+' '+item.cs_name+'</p></td>  </tr>'))
                        //$select.append($('<tr> <td> <p>'+item.time_date+'' + '<br>'+item.descriptions+''+'<br>'+item.CaseStatus+'</p></td>  </tr>'))
                    }
                );
            }
        });


    });
</script>
<!--ending-->


<script type="text/javascript">
    $(document).on('click','#open_next_case',function(e) {
        e.preventDefault();
        var if_successful= $('#statuss_case_open').html();
        var complainant_name= $('#cname').val();
        var complainant_contact= $('#ccontact').val();
        var ccontact=$('#ccontact').val();
        var depositorscontact=$('#depositorscontact_case_open').val();
        //alert(ccontact);

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
    $(document).on('click','#trans_case_open',function(e) {
        var transaction_id= $('#transaction_id_case_open').val();
//        var cname= $('#cname').val();
//        var ccontact= $('#ccontact').val();
        var complainant_name= $('#cname').val();
        var complainant_contact= $('#ccontact').val();
//        alert(cname);
//        alert(ccontact);
        if(complainant_name=="")
        {

            $('#empty_transactionid').html("Complainant Name Empty");
        }
        else if(complainant_contact=="")
        {
            $('#empty_transactionid').html("Complainant Contact Empty");
        }
        else if(transaction_id=="")
        {
            $('#empty_transactionid').html("Transaction ID Empty");
        }
        else {
            $('#empty_transactionid').html(" ");
            $("#hell").empty();
            e.preventDefault();

            $.ajax({
                type:'POST',
                data:{transaction_id:transaction_id,complainant_name:complainant_name,complainant_contact:complainant_contact},
                // data:{transaction_id:transaction_id},
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
                        $('#statusss').html("UNSUCCESSFUL");

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
                        $('#tr_case_open').val(transaction_id);
                        $('#ca_case_open').val(case_id);
                        $('#se_case_open').val(service_category_name);
                        $('#DepositorsName_case_open').val(depositors_name);
                        $('#re_case_open').val(receivers_name);
                        $('#ba_case_open').val(bank_name);
                        $('#ac_case_open').val(account_number);
                        $('#am_case_open').val(amount);
                        $('#depositorscontact_case_open').val(depositors_contact);
                        $('#descr_case_open').html(descriptions);
                        $('#statuss_case_open').html("SUCCESSFUL");
                        $('#statusss_case_open').html("SUCCESSFUL");


                        $('#trns').val(transaction_id);
                        // $('#trns').html("successful");
                    }
                }
            });
        }

    });
</script>

     selecting a description
<script>
    $(document).on('click','#trans_case_open',function(e) {
        var transaction_id= $('#transaction_id_case_open').val();
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
                $('#description_old_once_case_open').empty();
                var $select=$('#description_old_once_case_open');
                $.each(data,
                    function (index, item) {
                        $select.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold;color:red">Date :</span>'+' '+item.time_date+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Case ID :</span>'+' '+item.case_id+'' + '<br>'+
                            '<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Contact :</span>'+' '+item.complainant_contact+''+'<br>'+
                            '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+''+'<br>'+
                             '<span style="font-weight: bold">Complain :</span>'+' '+item.CaseStatus+''+'<br>'+
                            '<span style="font-weight: bold">Case Status :</span>'+' '+item.cs_name+'</p></td>  </tr>'))
                    }
                );
            }
        });


    });
</script>

     -->

<!--    selecting data for check status
<script>
    $(document).on('click','#checkStatusCheck',function(e) {
        e.preventDefault();
        var transaction_id= $('#checkStatusTranasactionID').val();
        var time_date= $('#checkStatusDateTime').val();
        //alert(if_successful);

        if(transaction_id=="")
        {
            // $('#error_transactionid_dont_exist').html("Complainant name is Empty");

        }
        else if(time_date==" ")
        {

            // $('#error_transactionid_dont_exist').html("Complainant name is Empty");
        }
    });

    $(document).on('click','#checkStatusCheck',function(e) {
        var transaction_id= $('#checkStatusTranasactionID').val();
        var time_date= $('#checkStatusDateTime').val();
        if(transaction_id=="")
        {
            // $('#error_transactionid_dont_exist').html("Complainant name is Empty");

        }
        else if(time_date==" ")
        {

        }
        e.preventDefault();
        $.ajax({
            type:'POST',
            data:{transaction_id:transaction_id,time_date:time_date},
            url:'<?php echo site_url('Case_management_controller/select_a_descriptions_for_check_status'); ?>',
            success:function(result)
            {
                data = JSON.parse(result);
                $('#checkStatusDescriptiOnOldOnce').empty();
                var $select=$('#checkStatusDescriptiOnOldOnce');
                $.each(data,
                    function (index, item) {



                        $select.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Date :</span>'+' '+item.time_date+
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

    $(document).on('click','#checkStatusCheck',function(e) {
        var transaction_id= $('#checkStatusTranasactionID').val();
        var time_date= $('#checkStatusDateTime').val();
//      alert(transaction_id);
        if(transaction_id=="")
        {
            $('#empty_transactionid_checkStatus').html("Transaction Id Cant Be Empty");
        }
        else if(time_date=="")
        {
            $('#empty_transactionid_checkStatus').html("Please Select A Date");
        }
        else {
//            $('#empty_transactionid').html(" ");
//            $("#hell").empty();
            e.preventDefault();

            $.ajax({
                type:'POST',
                data:{transaction_id:transaction_id},
                url:'<?php echo site_url('Case_management_controller/select_a_transaction'); ?>',
                success:function(result)
                {

                    if(result==0)

                    {
                        $('#checkStatusDepositorsName').val(" ");
                        $('#checkStatusReceiversName').val(" ");
                        $('#checkStatusBankName').val(" ");
                        $('#checkStatusAccountNumber').val(" ");
                        $('#checkStatusAmount').val(" ");
                        $('#checkStatusDepositorsContact').val(" ");
                        // $('#statuss').html("Transaction Dont Exist");
                    }
                    else{
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
                        $('#checkStatusDepositorsName').val(depositors_name);
                        $('#checkStatusReceiversName').val(receivers_name);
                        $('#checkStatusBankName').val(bank_name);
                        $('#checkStatusAccountNumber').val(account_number);
                        $('#checkStatusAmount').val(amount);
                        $('#checkStatusDepositorsContact').val(depositors_contact);
                    }
                }
            });
        }

    });
</script>
       -->
<!-- <link rel="stylesheet" href="assets/loading.css"> -->
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
</body>
</html>