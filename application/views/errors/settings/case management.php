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


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.bootstrap4.min.css">


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script type="text/javascript" src="js/processing.js"></script>-->



<!--    <script>-->
<!--        $(document).ready(function(){-->
<!--            $("#buttoogle").click(function(){-->
<!--                //$("p").toggle(1000);-->
<!--                $("#toogle").toggle(1000);-->
<!--            });-->
<!--        });-->
<!--    </script>-->
<!--    <script>-->
<!--        $(document).ready(function(){-->
<!--            $("#buttoogle_case_open").click(function(){-->
<!--                //$("p").toggle(1000);-->
<!--                $("#toogle_case_open").toggle(1000);-->
<!--            });-->
<!--        });-->
<!--    </script>-->
<!--    <script>-->
<!--        $(document).ready(function(){-->
<!--            $("#checkStatusbuttoogle").click(function(){-->
<!--                //$("p").toggle(1000);-->
<!--                $("#checkStatustoogle").toggle(1000);-->
<!--            });-->
<!--        });-->
<!--    </script>-->

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/Bootstrap-style-Datetime-Picker-Plugin/dist/jquery.datetimepicker.min.css"/>
    <style type="text/css">
        #wrapper{
            max-width: 780px;
            margin: 150px auto;
        }
        body {
            font-family: "Roboto", Helvetica, Tahoma, Arial, "Microsoft YaHei UI","Microsoft YaHei", STXihei, SimSun, sans-serif;
            background-color:#fafafa;
        }
    </style>
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

                                <input type="hidden" name="userfull_name" id="cs_user_full_name" value="<?php echo $user_full_name;?>">
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
            <div class="title-bar">
<?php if($user_role=='4'){?>
                <h1 class="title-bar-title">
                    <span class="d-ib">Transactions</span>

                </h1>
                <p class="title-bar-description">
                    <small  style ="color:#217345">Utilities</small>

                </p>
                 <?php }?>
            </div>


            <hr>
            <div class="row" >
                <center>
                <div class="col-md-4">
                    <div id="wrapper" style="margin-top:10px!important;max-height: 180px!important;">
                        <h4>Lunch Calender</h4>
                        <div id="demo2"></div>
                    </div>
                </div>
<!--              <form id="mydatatable_div" >-->
                </center>
                <div class="col-md-4" >
                    <div id="wrapper" style="margin-top:50px!important;max-height: 30px!important;">
                        <input type="hidden" name="user_email" value="<?php echo $email;?>" id="user_email" >
                        &nbsp &nbsp <input type="text" id="order_date"  name="order_date"  required disabled
                                           placeholder="Select Date From Calender" style="min-width: 200px; font-size: 12px" ><br><br>
                        <center>
                            <textarea id="your_order" name="your_order" required autofocus maxlength="200" rows="4" cols="50"
                                      placeholder="Please enter your order here..."></textarea>
                        </center><br>

                        <button type="Submit" id="submityourorder" name="submyourorder" class="btn btn-primary"
                                style="background-color: #217345;margin-left: 225px">
                            </i> Place Order</button>
                        <br><br>
                        &nbsp &nbsp &nbsp &nbsp<span id="error_in_placing_order" style="color:red;font-size: 14px "></span>
                    </div>

                </div>
<!--              </form>-->

            </div>
            <hr>


            <div class="row"  >
                <div class="col-sm-12">
                    <div class="card"  >
                        <div class="card-header">
                            <div class="card-actions">
                                <button type="button" class="card-action card-reload" title="Reload"></button>
                                <input type="hidden" id="mytransactionid">
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable"
                                   cellspacing="0" width="100%" style="font-size: 12px">
                                <thead>
                                <tr>
                                    <th>DATE</th>
                                    <th>ORDER</th>
                                <th><Center> ACTIONS</Center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($your_orders as $record):?>
                                    <tr>
                                        <td>
                                            <?php echo $record->your_date;?>
                                        </td>
                                        <td>
                                         <?php echo $record->your_order;?>
                                        <td>
                                            <center>
                                                <button class="editorder btn  btn-info"
                                                        style = "text-transform: capitalize;  background-color: goldenrod;
                                                         border-color: goldenrod; width:40px"  type="button" id="fetchinfo"
                                                        data-toggle="modal" data-target="#EditMonday"
                                                        data-your_date="<?php echo $record->your_date;?>"
                                                        data-order_date="<?php echo $record->order_date;?>"
                                                        data-id="<?php echo $record->id;?>"
                                                        data-your_order="<?php echo $record->your_order;?>"
                                                    >
                                                    <i class = "icon icon-info">
                                                    </i>
                                                </button>
                                                <button class="deleteorder btn  btn-warning"
                                                        style = "text-transform: capitalize;  background-color: maroon;
                                                         border-color: maroon; width:40px"  type="button"
                                                        data-toggle="modal" data-target="#deleteOrder"
                                                        data-your_date="<?php echo $record->your_date;?>"
                                                        data-id="<?php echo $record->id;?>"

                                                        data-your_order="<?php echo $record->your_order;?>"
                                                    >
                                                    <i class = "icon icon-trash">

                                                    </i></button>

                                            </center></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
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
                <!--end modal-->

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
                                            <option value="4">Senior Management</option>
                                            <option value="3">Customer Support</option>
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


<!--////////////////////////edit order modal form////////////////////////-->
    <div id="EditMonday" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #217345">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Edit Your Order</h4>
                    </div>
                </div>
                <div class="modal-tabs">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display2">
                            <form action="Service_Category_Controller/update_order" method="post">
                                <div class="form-group">
                                    <div class="row">
                                          <div class="col-md-5">
                                              <input id="your_dateOrder" class="form-control" type="text" style="font-size: 11px"
                                                     name="EditOrderDate" disabled>
                                            </div >
                                        <div class="col-md-12">

                                            <input id="iddateOrder" class="form-control" type="hidden" style="font-size: 11px"
                                                   name="iddateOrder" required="">



                                            <input id="your_orderOrder" class="form-control" type="text" style="font-size: 11px"
                                                   name="EditOrderOrder" required="">

                                        </div>
                                    </div>
                                </div>
                                <hr style="border-color:#217345">
                                <button type="Submit" class="btn btn-primary" style="background-color: #217345; float:right"><i class="icon icon-save"></i> Save</button>
                                <span id="error_exist_new_user" style="color:red; "></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="deleteOrder" class="modal fade" tabindex="-1" role="dialog">
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

                    <form action="Service_Category_Controller/delete" method="post">
                </div>
                <div class="modal-tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <input type="hidden" name="iddateOrder_delete" id="iddateOrder_delete">
                        <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete the Lunch order Placed on
                                <span id="your_dateOrder_delete" style="color: red"></span> ?</a></li>

                    </ul>

                </div>
                <div class="modal-footer">
                    <center><button type="Submit" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger"  data-dismiss="modal" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

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
     ///////////showing create user modal//////////////////////////
    <script>
        $(document).on('click','.editde',function(){
            //SHOW MODAL
            //$('#editMonday').modal('show');
            //POPULATE THE MODA
            //alert('asd');
            $('#MondayOrder').val($(this).data('weeklymonday'));
        });
    </script>
     <script>
        $(document).on('click','.tuesdayEdit',function(){
            //SHOW MODAL
            //$('#EditWednesday').modal('show');
            $('#TuesdayOrder').val($(this).data('weeklytuesday'));
        });
    </script>

    <script>
        $(document).on('click','.wednesdayEdit',function(){
            //$('#EditWednesday').modal('show');
            $('#WednesdayOrder').val($(this).data('weeklywednesday'));
        });
    </script>

    <script>
        $(document).on('click','.thursdayEdit',function(){
            //$('#EditWednesday').modal('show');
            $('#ThursdayOrder').val($(this).data('weeklythursday'));
        });
    </script>

    <script>
        $(document).on('click','.fridayEdit',function(){
            //$('#EditWednesday').modal('show');
           // alert('heloo');
            $('#FridayOrder').val($(this).data('weeklyfriday'));
        });
    </script>






<script>
    
$(document).on('click','#submyourorder',function(e) {
        var yourorder= $('#yourorder').val();
    var datetextymd2= $('#date-text-ymd2').val();

       alert(yourorder);
    alert(datetextymd2);
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
                            ' '+item.time_date+'</p></td><td> <p>' +
                            ' '+item.case_id+'</p></td> <td> <p>' +
                             ' '+item.CaseStatus+'</p></td> '+'<td> <center><button id="select_case_details" data-case_id="'+item.case_id+'" ' +
                                'class=" feedbackresolve btn btn-warning btn-sx" style = "text-transform: capitalize;  background-color: goldenrod;  border-color: goldenrod">details</button></center> </td> </tr>'))


                    }
                );
            }
        });


    });

$(document).on('click','#hreflink',function(e) {
        e.preventDefault();


        var transaction_id= $('#mytransactionid').val();
        $("#lloading").show();
        // alert(transaction_id);
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
                    $('#statusss').html("UNSUCCESSFUL");
                    //location.reload();
                }

                else{
                    //alert(result);
                    //OLD ONE FROM LOCAL DB
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

                        $("#lloading").hide();

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
    $(document).on('click','#fetchinfo',function(e) {
        var transaction_id= $('#mytransactionid').val();
     //  alert(transaction_id);
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
                            ' '+item.time_date+'</p></td><td> <p>' +
                            ' '+item.case_id+'</p></td> <td> <p>' +
                             ' '+item.CaseStatus+'</p></td> '+'<td> <center><button id="select_case_details" data-case_id="'+item.case_id+'" ' +
                                'class=" feedbackresolve btn btn-warning btn-sx" style = "text-transform: capitalize;  background-color: goldenrod;  border-color: goldenrod">details</button></center> </td> </tr>'))
                    }
                );
            }
        });


    });

    function addCommas(amount) {
        var parts = amount.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }


    $(document).on('click','#fetchinfo',function(e) {
        e.preventDefault();

  
        var transaction_id= $('#mytransactionid').val();
        $("#lloading").show();
  //alert(transaction_id);
        $.ajax({
            type:'POST',
            data:{transaction_id:transaction_id},
            url:'<?php echo site_url('Case_management_controller/select_a_transaction'); ?>',
            success:function(result)
            {
                //alert(result);

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
                    // alert(result);
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

                    // alert(arraylist[11]);
                        $("#lloading").hide();
                        var arraylist = result.split('|');
                        var transaction_id=arraylist[0];
                        var case_id=arraylist[1];
                        var service_category_name=arraylist[2];
                        var depositors_name=arraylist[1];
                        var receivers_name=arraylist[0];
                        var bank_name=arraylist[2];
                        var account_number=arraylist[3];
                        var amount=arraylist[4];
                        var depositors_contact=arraylist[5];
                        var case_status=arraylist[9];
                        var descriptions=arraylist[10];



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
         var user_full_name= $('#cs_user_full_name').val();
          var servicecat= $('#servicecat').val();
       var transaction_id= myFunction();
        //$('#trns;').val();
        // alert(descriptions);
        // alert(complainant_name);
        // alert(complainant_contact);
        // alert(user_full_name);
        // alert(servicecat);
        // alert(transaction_id);

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

// alert(descriptions);
        // alert(complainant_name);
        // alert(complainant_contact);
        // alert(user_full_name);
        // alert(servicecat);
        // alert(transaction_id);
            // e.preventDefault();
            $.ajax({
                type:'POST',
                data:{descriptions:descriptions,
                    transaction_id:transaction_id,
                    complainant_name:complainant_name,
                    complainant_contact:complainant_contact,
                    servicecat:servicecat,
                    user_full_name:user_full_name},
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
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Case ID :</span>'+' '+item.case_id+'' + '<br>'+
                            '<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Contact :</span>'+' '+item.complainant_contact+''+'<br>'+
                            '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+''+'<br>'+
                            '<span style="font-weight: bold">CS Staff :</span>'+' '+item.cs_name+''+'<br>'+
                            '<span style="font-weight: bold">Case Status :</span>'+' '+item.CaseStatus+'</p></td>  </tr>'))
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
            $('#modelVerify').modal('hide');
               
            //$('#modal_open_case').close();

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
            $('#error_contact_dont_match').html("The Depositors Contact Does Not Much Complainant Contact");
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

      
       //alert('hello');
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
              // To Display progress bar
      $("#loading").show();

            $.ajax({
                type:'POST',
                data:{transaction_id:transaction_id,complainant_name:complainant_name,complainant_contact:complainant_contact},
               // data:{transaction_id:transaction_id},
                url:'<?php echo site_url('Case_management_controller/select_a_transaction'); ?>',
                success:function(result)
                {
                    //alert(result);

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
                        $("#loading").hide(); // To Hide progress bar

                       // THIS IS FOR THE OUTSIDE WEBSERVICE CALL
                        var arraylist = result.split('|');
                        var transaction_id=arraylist[0];
                        var case_id=arraylist[1];
                        var service_category_name=arraylist[2];
                        var depositors_name=arraylist[1];
                        var receivers_name=arraylist[0];
                        var bank_name=arraylist[2];
                        var account_number=arraylist[3];
                        var amount=arraylist[4];
                        var depositors_contact=arraylist[5];
                        var case_status=arraylist[9];
                        var descriptions=arraylist[10];


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


                        // alert(arraylist[11]);
                        $('#tr_case_open').val(transaction_id);
                        $('#ca_case_open').val(case_id);
                        $('#se_case_open').val(service_category_name);
                        $('#DepositorsName_case_open').val(depositors_name);
                        $('#re_case_open').val(receivers_name);
                        $('#ba_case_open').val(bank_name);
                        $('#ac_case_open').val(account_number);
                        $('#am_case_open').val('GHC '+addCommas(amount));
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

<!--      selecting a description-->
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
                            ' '+item.time_date+'</p></td><td> <p>' +
                            ' '+item.case_id+'</p></td> <td> <p>' +
                             ' '+item.CaseStatus+'</p></td> '+'<td> <center><button id="select_case_details" data-case_id="'+item.case_id+'" ' +
                                'class=" feedbackresolve btn btn-warning btn-sx" style = "text-transform: capitalize;  background-color: goldenrod;  border-color: goldenrod">details</button></center> </td> </tr>'))

                    }
                );
            }
        });


    });

    $(document).on('click','#select_case_details',function(e) {
                    //disable normal click button
                    e.preventDefault();
                    var case_id=$(this).data('case_id');
                    $('#selecting_case_details').modal('show'); 
                    //alert(case_id);
                    $.ajax({
                        type:'POST',
                        data:{case_id:case_id},
                        url:'<?php echo site_url('Case_management_controller/select_case_details'); ?>',
                        success:function(result)
                        {
                            //alert(result);
                                 data = JSON.parse(result); 

                                $('#case_details').empty();
                                var $case_details=$('#case_details');
                                $.each(data,
                                    function (index, item) {
                                         $case_details.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Date :</span>'+' '+item.time_date+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Case ID :</span>'+' '+item.case_id+'' + '<br>'+
                            '<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                      ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Contact :</span>'+' '+item.complainant_contact+''+'<br>'+

                            '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+''+'<br>'+
                            '<span style="font-weight: bold">Case Status :</span>'+' '+item.CaseStatus+''+'<br>'+
                        '<span style="font-weight: bold">CS Staff :</span>'+' '+item.cs_name+'</p></td>  </tr>'))

                    }
                );
                        }
                    });

                });
</script>



<!--    selecting data for check status-->
<script>
    $(document).on('click','#checkStatusCheck',function(e) {
        e.preventDefault();
        var transaction_id= $('#checkStatusTranasactionID').val();
       // alert(transaction_id);
        var time_date= $('#checkStatusDateTime').val();
       // alert(time_date);

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
           $('#empty_transactionid_checkStatus').html("Transaction Id Cant Be Empty");
        }
      else if(time_date=="")
        {
               $('#empty_transactionid_checkStatus').html("Please Select A Date");

        }
        else{
            $('#empty_transactionid_checkStatus').html("");
        e.preventDefault();
        $.ajax({
            type:'POST',
            data:{transaction_id:transaction_id,time_date:time_date},
            url:'<?php echo site_url('Case_management_controller/select_a_descriptions_for_check_status'); ?>',
            success:function(result)
            {
               //alert(result);
                if(result==0)
                {
                      $('#checkStatusDescriptiOnOldOnce').empty();
                     $('#empty_transactionid_checkStatus').html("No Case Was Reported Under This transaction Within The Time Range Specified Above.<br> Thank You.");
                }
                else{
                data = JSON.parse(result);
                $('#checkStatusDescriptiOnOldOnce').empty();
                var $select=$('#checkStatusDescriptiOnOldOnce');
                //var $select=$('#checkStatusDescriptiOnOldOncebutton');
                $.each(data,
                    function (index, item)
                     {                  
                              // alert('no data');
                            $select.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Date :</span>'+' '+item.time_date+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Case ID :</span>'+' '+item.case_id+'' + '<br>'+
                            '<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Contact :</span>'+' '+item.complainant_contact+''+'<br>'+
                            '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+''+'<br>'+
                            '<span style="font-weight: bold">CS Staff :</span>'+' '+item.cs_name+''+'<br>'+
                            '<span style="font-weight: bold">Case Status :</span>'+' '+item.CaseStatus+'</p></td>  </tr>'))
                      
                        }

                
                );

                } //my else ending tag
            }
        });
}

    });

//     $(document).on('click','#checkStatusCheck',function(e) {
//         var transaction_id= $('#checkStatusTranasactionID').val();
//         var time_date= $('#checkStatusDateTime').val();
//      // alert('heloo');
//         if(transaction_id=="")
//         {
//             $('#empty_transactionid_checkStatus').html("Transaction Id Cant Be Empty");
//         }
//             else if(time_date=="")
//         {
//             $('#empty_transactionid_checkStatus').html("Please Select A Date");
//         }
//         else {
// //            $('#empty_transactionid').html(" ");
// //            $("#hell").empty();
//             e.preventDefault();

//             $.ajax({
//                 type:'POST',
//                 data:{transaction_id:transaction_id},
//                 url:'<?php echo site_url('Case_management_controller/select_a_transaction'); ?>',
//                 success:function(result)
//                 {

//                     if(result==0)

//                     {
//                         $('#checkStatusDepositorsName').val(" ");
//                         $('#checkStatusReceiversName').val(" ");
//                         $('#checkStatusBankName').val(" ");
//                         $('#checkStatusAccountNumber').val(" ");
//                         $('#checkStatusAmount').val(" ");
//                         $('#checkStatusDepositorsContact').val(" ");
//                        // $('#statuss').html("Transaction Dont Exist");
//                     }
//                     else{
//                         var arraylist = result.split('|');
//                         var transaction_id=arraylist[0];
//                         var case_id=arraylist[1];
//                         var service_category_name=arraylist[2];
//                         var depositors_name=arraylist[3];
//                         var receivers_name=arraylist[4];
//                         var bank_name=arraylist[5];
//                         var account_number=arraylist[6];
//                         var amount=arraylist[7];
//                         var depositors_contact=arraylist[8];
//                         var case_status=arraylist[9];
//                         var descriptions=arraylist[10];
//                         $('#checkStatusDepositorsName').val(depositors_name);
//                         $('#checkStatusReceiversName').val(receivers_name);
//                         $('#checkStatusBankName').val(bank_name);
//                         $('#checkStatusAccountNumber').val(account_number);
//                         $('#checkStatusAmount').val(amount);
//                         $('#checkStatusDepositorsContact').val(depositors_contact);
//                     }
//                 }
//             });
//         }

//     });
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
    $(document).on('click','#submityougfgfhrorder',function(e) {
        var order_date= $('#order_date').val();
        var your_order = $('#your_order').val();
        var user_email = '<?php echo $email;?>';
       alert(order_date);
        alert(your_order);
        alert(user_email);

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
            $.ajax({
                type:'POST',
                data:{user_full_name:user_full_name,gender:gender,user_email:user_email,phonenumber:phonenumber,user_role:user_role},
                url:'<?php echo site_url('Create_A_New_User_controller/add'); ?>',
                success:function(result)
                {

                    if(result==1)
                    {

                    }
                    else{
                        //window
                        $('#error_exist_new_user').html("insert successful");
                        location.reload();
                    }
                }
            });

        }
    });

    
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            fixedHeader: true
        } );
    } );
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
                        //alert('You Are Automatically Logged Out')
                         location.reload();
                    }
                }
               
            });
              
                 idleState = true;
                  }, 300000);
               
        });
        $("body").trigger("mousemove");
    });



$(document).ready(function() {
    $("#checkStatusDateTime").datepicker();
   
   
});
</script>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="Bootstrap-style-Datetime-Picker-Plugin/src/jquery.datetimepicker.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            function logEvent(type, date) {
                $("<div class='log__entry'/>").hide().html("<strong>"+type + "</strong>: "+date).prependTo($('#eventlog')).show(200);
            }
            $('#clearlog').click(function() {
                $('#eventlog').html('');
            });
            $('#demo2').datetimepicker({
                date: new Date(),
                viewMode: 'YMD',
                onDateChange: function(){
                    $('#date-text2').text(this.getText());

                    $('#date-text-ymd2').text(this.getText('yyyy-MM-dd'));

                      var x = this.getText('yyyy-MM-dd');
                    $('#order_date').val(x);

                    $('#date-value2').text(this.getValue());
                }
            });
        });

    </script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>




    <!--////////Addding a new order //////-->
    <script>
        $(document).on('click','#submityourorder',function(e) {
            var order_date= $('#order_date').val();
            var your_order = $('#your_order').val();
            var user_email = '<?php echo $email;?>';

            if(order_date=="")
            {
                $('#error_in_placing_order').html("Please Select Date from Calender");
            }
            else if(your_order=="")
            {
                $('#error_in_placing_order').html("Please Make an Order");
            }

            else
            {
                e.preventDefault();
                $.ajax({
                    type:'POST',
                    data:{order_date:order_date,your_order:your_order,user_email:user_email},
                    url:'<?php echo site_url('service_category_controller/add_your_order'); ?>',
                    success:function(result)
                    {
                        alert(result);
                        if(result==1)
                        {

                            $('#error_in_placing_order').html("You have already made an order on this date.");
                        }
                        else{
                            //window
                            $('#order_date').val("");
                            $('#your_order').val("");
                            $('#error_in_placing_order').html("Lunch Order Submited Successfully");
                            $('.card-body').load("Case_management_controller/your_orders_after_insert").fadeIn("slow");
                            //location.reload();
                        }
                    }
                });

            }
        });


        $(document).ready(function() {
            var table = $('#example').DataTable( {
                fixedHeader: true
            } );
        } );
    </script>


    <script>
        $(document).on('click','.editorder',function(){
            //SHOW MODAL
            $('#your_orderOrder').val($(this).data('your_order'));

            $('#your_dateOrder').val($(this).data('your_date'));

            $('#iddateOrder').val($(this).data('id'));
        });

        $(document).on('click','.deleteorder',function(){
            //SHOW MODAL

            $('#your_orderOrder_delete').val($(this).data('your_order'));

           // $('#your_dateOrder_delete').val($(this).data('your_date'));
            var ydate=$(this).data('your_date');
            $('#your_dateOrder_delete').html(ydate);
            $('#iddateOrder_delete').val($(this).data('id'));
            //alert('hii');
        });
    </script>
</body>
</html>