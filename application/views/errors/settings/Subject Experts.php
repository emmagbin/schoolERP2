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

<script>
$(document).ready(function(){
    $("#buttoogle").click(function(){
     //$("p").toggle(1000);
        $("#toogle").toggle(1000);
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

                    
                        <li class="sidenav-heading">Service Category</li>
                        <li  class="sidenav-item">
                            <a href="ServiceCategory" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-edit"></span>
                                <span class="sidenav-label" style="font-size: 11px" 
                                >Utilities</span>
                            </a>

                        </li>

                        <li class="sidenav-heading">Subject Experts</li>
                        <li class="sidenav-item active">
                            <a href="Subject_Experts" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-edit"></span>
                                <span class="sidenav-label" style="font-size: 11px" 
                                >Utilities</span>
                            </a>

                        </li>


                        <li class="sidenav-heading">Case Management</li>
                        <li class="sidenav-item ">
                            <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-credit-card"></span>
                                <span class="sidenav-label" style="font-size: 11px"  data-toggle="modal" data-target="#modal_open_case"
                            >Open Case</span>
                            </a>

                           <!--  <a href="#" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-credit-card"></span>
                                <span class="sidenav-label" style="font-size: 11px"  data-toggle="modal" data-target="#check_status"
                            >Check Status</span>
                            </a> -->

                        </li>
                        <li class=" sidenav-item  ">
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
                    <span class="d-ib">Subject Experts</span>

                </h1>
                <p class="title-bar-description">
                    <small  style ="color:#217345">Utilities</small>

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
                                            <small>Total Utilities <i class = "icon icon-globe" style = "color: #fff"></i></small><br><br>
                                            <h3 class="card-title fw-l"><?php echo $total_utilities;?></h3>
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
                <button class=" btn  btn-success" style = "text-transform: capitalize; background-color: #217345" 
				data-toggle="modal" data-target="#modal_subject_expert" type="button"> <i class = "icon icon-plus-circle"></i> &nbsp New Subject Expert</button>


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
                                     <th>Unit</th>
                                    <th>Subject Expert Name</th>
									<th>Gender</th>
                                    <th>Email</th>
									<th>Phone Number</th>
                                    <th><center>Action</center></th>
                                </tr>
                                </thead>


                                     <tbody>

                                  <?php foreach($records as $record):?>
                                    <tr>
                                         <!-- <td><?php echo $record->id;?></td> -->
                                        <td><?php echo $record->unit_name;?></td>
                                         <td><?php echo $record->full_name;?></td>
                                          <td><?php echo $record->gender;?></td>
                                           <td><?php echo $record->email;?></td>
                                            <td><?php echo $record->phonenumber;?></td>
                                       
                                         <td> <center> <button class="editde btn  btn-info" 
                                    style = "text-transform: capitalize;  background-color: goldenrod;  border-color: goldenrod"  type="button" data-toggle="modal" data-target="#edit_modal_subject_expert"

                                     data-id="<?php echo $record->id;?>"
                                     data-unit_name="<?php echo $record->unit_name;?>"
                                     data-unit_name_id="<?php echo $record->unit_name_id;?>"
                                      data-unit_name_name="<?php echo $record->unit_name;?>"
                                      data-full_name="<?php echo $record->full_name;?>"
                                       data-gender="<?php echo $record->gender;?>"
                                        data-email="<?php echo $record->email;?>"
                                         data-phonenumber="<?php echo $record->phonenumber;?>"> 

                                    <i class = "icon icon-edit"></i></button>
                                     <button class="dell btn  btn-info" 
                                    style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon" type="button" data-toggle="modal" data-target="#delUser"
                                     data-id="<?php echo $record->id;?>"  
                                      data-full_name="<?php echo $record->full_name;?>" > 
                                    <i class = "icon icon-trash"></i></button></center></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>





                               <!--  <tbody>
                                <tr>
                                    <td>2017/05/18</td>
                                    <td>11:45:34 AM</td>
									<td>2017/05/18</td>
                                    <td>11:45:34 AM</td>
									   <td>11:45:34 AM</td>
                                    <td> <center> <button class="btn  btn-info" 
									style = "text-transform: capitalize;  background-color: goldenrod;  border-color: goldenrod"  type="button" data-toggle="modal" data-target="#edit_modal_subject_expert"> 
									<i class = "icon icon-edit"></i></button>
                                     <button class="btn  btn-info" 
									style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon" type="button" data-toggle="modal" data-target="#delUser"> 
									<i class = "icon icon-trash"></i></button></center></td>

                                </tr>
                                <tr>
								   <td>11:45:34 AM</td>
                                    <td>2017/05/18</td>
                                    <td>11:45:34 AM</td>
									<td>2017/05/18</td>
                                    <td>11:45:34 AM</td>
                                   <td> <center> <button class="btn  btn-info" 
									style = "text-transform: capitalize;  background-color: goldenrod;  border-color: goldenrod"  type="button" data-toggle="modal" data-target="#edit_modal_subject_expert"> 
									<i class = "icon icon-edit"></i></button> <button class="btn  btn-info" 
									style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon" type="button" data-toggle="modal" data-target="#delUser"> 
									<i class = "icon icon-trash"></i></button></center></td>

                                </tr>
                                <tr>
                                    <td>2017/05/18</td>
                                    <td>11:45:34 AM</td>
									<td>2017/05/18</td>
                                    <td>11:45:34 AM</td>
									   <td>11:45:34 AM</td>
                                     <td> <center> <button class="btn  btn-info" 
									style = "text-transform: capitalize;  background-color: goldenrod;  border-color: goldenrod"  type="button" data-toggle="modal" data-target="#edit_modal_subject_expert"> 
									<i class = "icon icon-edit"></i></button> <button class="btn  btn-info" 
									style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon" type="button" data-toggle="modal" data-target="#delUser"> 
									<i class = "icon icon-trash"></i></button></center></td>



                                </tr>
                                <tr>
                                    <td>2017/05/18</td>
                                    <td>11:45:34 AM</td>
									<td>2017/05/18</td>
                                    <td>11:45:34 AM</td>
									   <td>11:45:34 AM</td>
                                 <td> <center> <button class="btn  btn-info" 
									style = "text-transform: capitalize;  background-color: goldenrod;  border-color: goldenrod"  type="button" data-toggle="modal" data-target="#edit_modal_subject_expert"> 
									<i class = "icon icon-edit"></i></button> <button class="btn  btn-info" 
									style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon" type="button" data-toggle="modal" data-target="#delUser"> 
									<i class = "icon icon-trash"></i></button></center></td>

                                </tr>


                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div></div>

<!-- 
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
                                     
                                         <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Transaction ID</label>
                                            <input id="form-control-7" class="form-control" type="text" style="font-size: 11px" >       
                                        </div>
                                         <div class="col-md-6">
                                            <br>
                                      <button type="button"  id="form-control-10"  class="btn btn-primary  form-control" style="background-color: #217345; float:right;margin-top: 5px">
                                      <i class=" "></i>Verify</button>
                                        </div>
                                    </div>
                               
                                <hr style="border-color: #217345">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Depositors Name</label>
                                            <input id="form-control-7" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Receivers Name</label>
                                            <input id="form-control-10" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Bank Name</label>
                                            <input id="form-control-7" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label" style="font-size: 12px">Account Number</label>
                                            <input id="form-control-10" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label  class="form-label" style="font-size: 12px">Amount</label>
                                            <input id="form-control-7" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>
                                        <div class="col-md-3">
                                            <label  class="form-label" style="font-size: 12px">Depositors Contact</label>
                                            <input id="form-control-7" class="form-control" type="text" style="font-size: 11px" disabled="" >
                                        </div>
                                         <div class="col-md-6">
                                          
                                           <button type="button"  id="form-control-10" class="btn btn-primary  form-control" 
                                           style="background-color: #217345;margin-top: 24px">&nbsp <i class="">
                                        </i>  successful</button>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-color: #217345">
                            </form>
                             <button type="button" class="btn btn-primary" style="background-color: #217345;float:right"><i class="icon icon-save"></i> Submit</button>
                        </div>
                    </div>
                </div>
              <!--  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-save"></i> Submit</button>
                </div>-->
            </div>
        </div>
    </div>
        -->



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
                            <h4 class="modal-title" style="font-size: 14px">Subject Expert Delete</h4>

                        </div>
                    </div>
                    <form action="Subject_Experts_controller/delete" method="post">
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                        <input type="hidden" name="id" id="delete_ID">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete <span id="deleteNamen" style="color: red"></span>?</a></li>

                        </ul>

                    </div>

                    <div class="modal-footer">
                        <center><button type="Submit" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger"  data-dismiss="modal" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                    </form>
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
                    <center>
                   <a href="logout"><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check">
                    </i>&nbsp &nbsp Yes &nbsp &nbsp</button> </a>
                    <button type="button" class="btn btn-danger"  data-dismiss="modal" style="background-color: maroon">
					<i class="icon icon-close"></i> Cancel</button></center>

                </div>
            </div>
        </div>
    </div>

    <div id="delDistrict" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-trash icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 14px">District</h4>

                    </div>
                </div>
                <div class="modal-tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete This District From LoyalStar?</a></li>

                    </ul>

                </div>
                <div class="modal-footer">
                    <center><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check">
					</i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button"  data-dismiss="modal" class="btn btn-danger"  data-dismiss="modal"  style=" background-color: maroon">
					<i class="icon icon-close"></i> Cancel</button></center>

                </div>
            </div>
        </div>
    </div>


    <div id="editDistrict" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-edit icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Edit District's Details</h4>

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
                                                <option value="CR">Central Region</option>
                                                <option value="WR">Western Region</option>
                                                <option value="VR" >Volta Region</option>
                                                <option value="ER">Eastern Region</option>
                                                <option value="AR">Ashanti Region</option>
                                                <option value="BAR" >Brong Ahafo Region</option>
                                                <option value="NR">Northern Region</option>
                                                <option value="UER">Upper East Region</option>
                                                <option value="UWR" >Upper West Region</option>

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

	    <div id="new_service_category" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Register A New Utility</h4>

                    </div>
                </div>
                <div class="modal-tabs">

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display2">
                            <form action="/">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Utility Name</label>
                                            <input id="form-control-6" class="form-control" type="text" style="font-size: 11px"></div>



                                    </div></div>
                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Status</label>

                                            <select id="demo-select2-2" class="form-control" style="font-size: 11px">
											  <option value="" >Status</option>
                                                <option value="GAR" >Greater Accra Region</option>
                                                <option value="CR">Central Region</option>
                                               <!-- <option value="WR">Western Region</option>
                                                <option value="VR" >Volta Region</option>
                                                <option value="ER">Eastern Region</option>
                                                <option value="AR">Ashanti Region</option>
                                                <option value="BAR" >Brong Ahafo Region</option>
                                                <option value="NR">Northern Region</option>
                                                <option value="UER">Upper East Region</option>
                                                <option value="UWR" >Upper West Region</option>-->

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


	
	

    <div id="newDistrict" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Register A New Utility</h4>

                    </div>
                </div>
                <div class="modal-tabs">

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display2">
                            <form action="/">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Utility Name</label>
                                            <input id="form-control-6" class="form-control" type="text" style="font-size: 11px"></div>



                                    </div></div>
                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Status</label>

                                            <select id="demo-select2-2" class="form-control" style="font-size: 11px">
											  <option value="" >Status</option>
                                                <option value="GAR" >Greater Accra Region</option>
                                                <option value="CR">Central Region</option>
                                               <!-- <option value="WR">Western Region</option>
                                                <option value="VR" >Volta Region</option>
                                                <option value="ER">Eastern Region</option>
                                                <option value="AR">Ashanti Region</option>
                                                <option value="BAR" >Brong Ahafo Region</option>
                                                <option value="NR">Northern Region</option>
                                                <option value="UER">Upper East Region</option>
                                                <option value="UWR" >Upper West Region</option>-->

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






    <div id="newRole" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
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
                            <form action="/">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Role Name</label>
                                            <input id="form-control-12" class="form-control" type="text" style="font-size: 11px"></div>

                                        <hr>

                                    </div></div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="mode" > Insight &amp Statistics
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="mode" > System Configuration
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="mode" > OMC Data Management
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="mode" > Subscribers Data Management
                                                </label>
                                            </div>

                                        </div>


                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="mode" > Reporting Engine
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="mode" > User Management
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="mode" > Invoices
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </form>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-save"></i> Create Role</button>
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

	 <div id="edit_modal_subject_expert" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-edit icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Edit Subject Expert</h4>
                    </div>
                </div>
                <div class="modal-tabs">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display2">
                            <form action="Subject_Experts_controller/update" method="post">
							
							  <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                          <input type="hidden" name="id" id="expert_id_id">
                                        <input type="hidden" name="unit_name_id" id="unit_name_id_edit">
                                            <label  class="form-label" style="font-size: 12px">Unit</label>
                                            <select id="unit_edit_edit" class="form-control" name="unit_name_id" style="font-size: 11px">
                                                <?php
                                                    foreach ($units as $record)
                                                    {?>
                                                    <option value="<?php echo $record->id; ?>"><?php echo $record->unit_name; ?> </option>';
                                                    <?php
                                                    }
                                                     ?>
                                            </select>
                                        </div>
                                    </div>
								</div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label  class="form-label" style="font-size: 12px">Expert Name</label>
                                            <input id="full_name_edit" class="form-control" name="full_name" type="text" style="font-size: 11px"></div>

                                        <div class="col-md-4">
                                            <label  class="form-label" style="font-size: 12px">Gender</label>
                                            <select id="gender_edit" class="form-control" name="gender" style="font-size: 11px">
                                                <option value="Male" >Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
								</div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label  class="form-label" style="font-size: 12px">Email</label>
                                            <input id="email_edit" class="form-control" name="email" type="email" style="font-size: 11px" >
                                        </div>


                                        <div class="col-md-4">
                                            <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                            <input id="phonenumber_edit" class="form-control" name="phonenumber" type="text" style="font-size: 11px">
                                        </div>
                                    </div>
                                </div><hr style="border-color: #217345">
                                 <button type="Submit" class="btn btn-primary" style="background-color: #217345; float:right"><i class="icon icon-save"></i> Save</button>
                            </form>
							
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <div id="modal_subject_expert" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Create Subject Expert</h4>
                    </div>
                </div>
                <div class="modal-tabs">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display2">
                            <form action="" method="post">
							
							  <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Unit</label>
                                            <select id="unit_ti" class="form-control" style="font-size: 11px" name="id" required="">
                                                    <option value="">Unit Name</option>
                                                    <?php
                                                    foreach ($units as $record)
                                                    {?>
                                                    <option value="<?php echo $record->id; ?>"><?php echo $record->unit_name; ?> </option>';
                                                    <?php
                                                    }
                                                     ?>
                                             </select>
                                        </div>
                                    </div>
								</div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label  class="form-label" style="font-size: 12px">Expert Name</label>
                                            <input id="full_name_name" class="form-control" type="text" style="font-size: 11px" name="full_name" required="">
                                        </div>

                                        <div class="col-md-4">
                                            <label  class="form-label" style="font-size: 12px">Gender</label>
                                            <select id="gender_gender" class="form-control" style="font-size: 11px" name="gender" required="">
                                                 <option value="" ></option>
                                                <option value="Male" >Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
								</div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label  class="form-label" style="font-size: 12px">Email</label>
                                            <input id="email_email"  class="form-control" type="email" style="font-size: 11px" name="email" required="">
                                        </div>


                                        <div class="col-md-4">
                                            <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                            <input id="phonenumber_phonenumber"  class="form-control" type="text" style="font-size: 11px" name="phonenumber" required="">
                                        </div>
                                    </div>
                                </div><hr style="border-color: #217345">
                                <button type="Submit" id="send" class="btn btn-primary" style="background-color: #217345; float:right"><i class="icon icon-save"></i> Save</button>
                                <span id="error_exist_new_subject_expert" style="color:red; "></span> 
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
                              <form action="/">
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">User's Full Name</label>
                                      <input id="form-control-6" class="form-control" type="text" style="font-size: 11px"></div>

                                          <div class="col-md-4">
                                              <label  class="form-label" style="font-size: 12px">Gender</label>

                                              <select id="demo-select2-2" class="form-control" style="font-size: 11px" name="gender">
                                                  <option value="Male" >Male</option>
                                                  <option value="Female">Female</option>
                                              </select>
                                          </div>

                                  </div></div>
                                  <div class="form-group">
                                      <div class="row">
<div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">User Email</label>
                                      <input id="form-control-7" class="form-control" type="email" style="font-size: 11px">
</div>


                                      <div class="col-md-4">
                                          <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                          <input id="form-control-10" class="form-control" type="text" style="font-size: 11px">
                                      </div>

                                  </div>
							</div><hr style="border-color: #217345">
                              </form>
							 <button type="button" class="btn btn-primary" style="background-color: #217345; float:right"><i class="icon icon-save"></i> Save</button>
                          </div>

                      </div>
                  </div>
               <!--   <div class="modal-footer">

                      <button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-save"></i> Save</button>
                  </div>-->
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
                                            <label  class="form-label" style="font-size: 12px">Utility Name</label>
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
							<hr style="border-color: #217345">
							</div>
							 <button type="button" class="btn btn-primary" style="background-color: #217345; float:right;"><i class="icon icon-save"></i> Save</button>
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
                                            <label  class="form-label" style="font-size: 12px">Service Category</label>
                                            <input id="se" name="transaction" class="form-control"  type="text" style="font-size: 11px" disabled="">
                                           <!--  <select id="demo-select2-2" class="form-control" style="font-size: 11px" >
                                                <option value="administrator" >  </option>
                                                <option value="author">  </option>
                                                <option value="contributor">Other</option>
                                            </select> -->
                                        </div>

                                       <!--  id="mySelect"  -->
                                         <div class="col-md-4">
                                            <label  class="form-label" style="font-size: 12px">Transaction ID</label>
                                            <input id="transaction_id" name="transaction" class="form-control" type="text" style="font-size: 11px" required="" onchange="myFunction()" >        
                                        </div>
                                         <div class="col-md-2">
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
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <hr style="border-color: #217345">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Case ID</label>
                                            <input id="ca" class="form-control" type="text" style="font-size: 11px" disabled="">
                                        </div>

                                                            

                                      <!--  <div class="col-md-12">
                                            <textarea name="f_detail" class="form-control"  style="min-height:100px; width auto" ></textarea>


                                        </div> -->
                                        <!--  <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Description</label><br> -->
                                            
                                             <!-- <textarea id="my_old_descriptions" name="f_detail" class="form-control"  style="min-height:100px; width auto" ></textarea>
                                             <br>
 -->                                      <!--      <span id="descr"></span>
                                             <textarea  id="description" name="f_detail" class="form-control"  style="min-height:100px; width auto" ></textarea>
                                        </div> -->
                                    </div>
                                </div>
                                
                                <hr style="border-color: #217345">
                            </form>

                        </div>
                         <button id="buttoogle" class="btn btn-primary" style="background-color: #217345;float:right">hiding and showing Descriptions</button>
                         <br>  <br>
                           <p id="demooo"></p>

                                        <form id="toogle">
                                              <div class="col-md-12">
                                          <!--     <br> -->

                                             <!--  <span id="descr"></span>   -->
                                                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <!-- <th>description</th> -->
                                                               <!--  <th style="min-width: 100px !important;">ERROR IMAGE</th>
                                                                <th style="width: 100px !important;">RESOLVE</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody id="description_old_once">

                                                        </tbody>
                                                  </table>
                                              </div>
                                        </form> 
                                    <div class="col-md-12">
                                            <label  class="form-label" style="font-size: 12px">Description</label><br>
                                        <!--  <span id="descr"></span> -->
                                        <form method="post" action="Case_management_controller/add">
                                                 <input id="trns" name="case_transaction"  class="form-control" type="hidden" style="font-size: 11px" required="">
                                                <textarea  id="desions" name="case_description" class="form-control" style="min-height:100px" required></textarea >
                                                <br>
                                                <hr style="border-color: #217345">
                                                 <button type="Submit" id="description_save" class="btn btn-primary" 
                                                 style="background-color: #217345;float:right"><i class="icon icon-save"></i> Submit</button>
                                               <span id="empty_transaction_id" style="color:red; "></span> 

                                               
                                        </form>
                                    </div>

                            
                    </div>
                </div>
           
            </div>
        </div>
    </div>

	
	    <script type="text/javascript">
        $(document).on('click','.dell',function(){

            $('#delUser').modal('show');

            $('#delete_ID').val($(this).data('id'));

              var title=$(this).data('full_name');
            $('#deleteNamen').html(title);
        });
   </script>
    
       
    <script>
        $(document).on('click','.editde',function(){
                //SHOW MODAL
                $('#edit_modal_subject_expert').modal('show');
                //POPULATE THE MODA
                //alert($(this).data('unit_name'));
                $('#unit_name_id_edit').val($(this).data('unit_name_id'));

                $('#unit_edit_edit').val($(this).data('unit_name_id')).change();

                $('#expert_id_id').val($(this).data('id'));

                $('#full_name_edit').val($(this).data('full_name'));

                $('#gender_edit').val($(this).data('gender'));

                $('#email_edit').val($(this).data('email'));

                $('#phonenumber_edit').val($(this).data('phonenumber'));    
                         
        });
   </script>
	<script>
    $(document).on('click','#send',function(e) {
            var id= $('#unit_ti').val();
            var full_name = $('#full_name_name').val();
            var gender = $('#gender_gender').val();
            var email = $('#email_email').val();
            var phonenumber = $('#phonenumber_phonenumber').val();
            // alert(unit_ti);
            // alert(full_name_name);
            // alert(gender_gender);
            // alert(email_email);
            // alert(phonenumber_phonenumber);
            if(id=="")
            {
//$('#error_exist_new_subject_expert').html("Select Unit Name");
            }
            else if(full_name=="")
            {
//$('#error_exist_new_subject_expert').html("Enter Expert Name");
            }
            else if(gender=="")
            {
//$('#error_exist_new_subject_expert').html("Select Gender");

            }
            else if (email=="")
            {
//$('#error_exist_new_subject_expert').html("Enter Email");
            }
            else if(phonenumber=="")
            {
//$('#error_exist_new_subject_expert').html("Enter Phone Number");
            }
            else
            {
 e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{full_name:full_name,gender:gender,email:email,phonenumber:phonenumber,id:id},
                            url:'<?php echo site_url('Subject_Experts_controller/add'); ?>',
                            success:function(result)
                            {
                              //  alert(result);
                             
                                    if(result==1){
                                     $('#error_exist_new_subject_expert').html("Email Already exist");
                                  
                                  }
                                   else{
                                        window
                                     $('#error_exist_new_subject_expert').html("insert successful");
                                        //   //  $('#error').empty();
                                      // $('#createUser').modal('hide');
                                      // $('#name_full').val(" ");
                                      //    $('#gend').val(" ");
                                      //    $('#gmail').val(" ");
                                      //     $('#contact').val(" ");  
                                          location.reload();

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
                            url:'<?php echo site_url('Subject_Experts_controller/change_password'); ?>',
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
<script>
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