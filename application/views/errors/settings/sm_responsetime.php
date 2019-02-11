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

    <link href="assets/datatables/jquery.dataTables.min.css" rel="stylesheet">
      <link href="assets/datatables/buttons.bootstrap.min.css" rel="stylesheet">
       <link href="assets/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="assets/datatables/responsive.bootstrap.min.css" rel="stylesheet">
         <link href="assets/datatables/scroller.bootstrap.min.css" rel="stylesheet">
          <link href="assets/datatables/dataTables.colVis.css" rel="stylesheet">
           <link href="assets/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
             <link href="assets/datatables/fixedColumns.dataTables.min.css" rel="stylesheet">


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


    <script src="assets/highcharts.js"></script>
      <script src="assets/series-label.js"></script>
      <script src="assets/exporting.js"></script>
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
                        <li class="sidenav-heading">Senior Management</li>
                        <li class="sidenav-item ">
                            <a href="senior" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-edit"></span>
                                <span class="sidenav-label" style="font-size: 11px">Statistics</span>
                            </a>

                        </li>

                        <li class="sidenav-item active">
                            <a href="response" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-edit"></span>
                                <span class="sidenav-label" style="font-size: 11px">Response Time</span>
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
                    <span class="d-ib">Response Time</span>

                </h1>
                <p class="title-bar-description">
                </p>
            </div>
           <div class="row">
                <div class = "col-lg-12">
          <div class = "row">
          <div class = "col-lg-12">

              <div class="col-md-3">
                  <div class="card" style="background-color: #217345; color: #fff">
                      <div class="card-values">
                          <div class="p-x">
                              <small>Best Response Time</small>
                              <br><br>
             <h5 class="card-title fw-l"><a href="#" style="color: white" 
              id="hrefbest_time" 
                                         data-bestresponsetimes="<?php echo $seniorManagement_response['0']['best_response_times_case_id'];?>">
                                         <?php echo $seniorManagement_response['0']['best_response_times'];?>
                                         Hr &nbsp
                                         <?php echo $seniorManagement_response['0']['best_response_times_modulus_min']%60;?> 
                                         Min &nbsp
                                         <?php echo $seniorManagement_response['0']['best_response_times_modulus_sec'];?>
                                           Sec
                                         </a></h5>

                          </div>
                      </div>
                      <div class="card-chart">
                          <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                      </div>
                  </div>

              </div>


               <div class="col-md-3">
                  <div class="card" style="background-color: #217345; color: #fff">
                      <div class="card-values">
                          <div class="p-x">
                              
                              <small>Total No. </small><br><br>
             <h5 class="card-title fw-l">
         <?php echo $seniorManagement_response['0']['total_best_response_times'];?></h5>
                          </div>
                      </div>
                      <div class="card-chart">
                          <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                      </div>
                  </div>

              </div>

              
                  <div class="col-md-3">
                                <div class="card" style="background-color: #217345; color: #fff">
                                    <div class="card-values">
                                        <div class="p-x">
                                            <small>Worse Response Time</small>
                                              <br><br>
                                            <h5 class="card-title fw-l"><a href="#" style="color: white" id="hrefworse_time" 
                                         data-worseresponsetimes="<?php echo $seniorManagement_response['0']['worse_response_times_case_id'];?>">
                                         <?php echo $seniorManagement_response['0']['worse_response_times'];?>
                                         Hr   &nbsp                                        
                                         <?php echo $seniorManagement_response['0']['worse_response_times_modulus_min']%60;?>
                                          Min &nbsp
                                           <?php echo $seniorManagement_response['0']['worse_response_times_modulus_sec'];?>
                                           Sec
                                         </a>
                                               
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-chart">
                                        <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [13590442, 12362934, 13639564, 13055677, 12915203, 11009940, 11542408]}]' data-scales='{"yAxes": [{ "ticks": {"max": 14662531}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="card" style="background-color: #217345; color: #fff">
                                    <div class="card-values">
                                        <div class="p-x">
                                           
                                              <small>Total No.</small></small><br><br>
                                            <h5 class="card-title fw-l">
         <?php echo $seniorManagement_response['0']['total_worse_response_times'];?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-chart">
                                        <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [13590442, 12362934, 13639564, 13055677, 12915203, 11009940, 11542408]}]' data-scales='{"yAxes": [{ "ticks": {"max": 14662531}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                                    </div>
                                </div>
                            </div>
                               <input type="hidden" id="mycaseid">

                       </div>
                  </div>
            <br><hr>
            <div class="pull-left">

            </div>
            <br><br>
         <!-- <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions">

                                <button type="button" class="card-action card-reload" title="Reload"></button>
                                <input type="hidden" id="mytransactionid">
                            </div>
                        </div>
                        <div class="card-body">
                          <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                                <thead>
              
        <tr>
                                    <th><Center>CASES WITH BEST RESPONSE TIME</Center></th>
                                    <th><Center>CASES WITH GOOD REPONSE TIME</Center></th>
                                    <th><Center>CASES WITH WORSE RESPONSE TIME</Center></th>
                                </tr>
                                </thead>
                                <tbody>
                                 
             

                               <tr>
                                     
                                       
                                       <td>
                                        <?php foreach($worse_response_cases as $record):?>
                                        <?php echo $record->worse_response_cases;?>
                                            <?php endforeach;?>
                                       </td>
                                      

                                          
                                        <td>
                                                       <?php foreach($good_response_cases as $records):?>
                                                  
                                                   <?php echo $records->good_response_cases;?>
                                                    
                                                          <?php endforeach;?>
                                        </td>
                                                                      
                                        <td>

                                                <?php foreach($worse_response_cases as $recordss):?>
                                                   
                                                   <?php echo $recordss->worse_response_cases;?>
                                                   
                                                     <?php endforeach;?>
                                         </td>
                                        
                                 </tr> 



                               </tbody>

                            </table> 
             
                        </div>
                    </div>
                </div>
            </div>-->
               <div class="row">
                <div class="col-xs-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions">

                                <button type="button" class="card-action card-reload" title="Reload"></button>
                                
                            </div>
                        </div>
                        <div class="card-body">
                         <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                       
                              <tr>
                                    <th><Center>CASES WITH BEST RESPONSE TIME</Center></th>
                                    <th><Center>TIME</Center></th>
                                    <!-- <th><center>IDEAL TIME</center></th> -->
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($best_response_cases as $record):?>
                               <tr>   
                                       
                                       <td>
                                        <a href='#' id="hrefbestcaseid" 
                                         data-case_id="<?php echo $record->case_id;?>" style="color: black">
                                         <?php echo $record->case_id;?>
                                        </a>
                                       </td>
                                        <td>
                                            <!-- <a href='#' id="hrefbesttimedate" data-timedate1="<?php echo $record->time_date;?>"  style="color: black"> -->
                                            <?php echo $record->time_date;?>
                                        <!--     </a> -->
                                        </td>
                                        <!-- <td>
                                          <?php echo $record->ideal_time_dummy_table;?>
                                        </td> -->
                                 </tr> 
                                 <?php endforeach;?>
                               </tbody>
                            </table> 
                        </div>






                    </div>
                </div>

          
                  <div class="col-xs-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions">

                                <button type="button" class="card-action card-reload" title="Reload"></button>
                              
                            </div>
                        </div>
                        <div class="card-body">
                           <table id="datatable-keytable"
                                                                   class="table table-striped table-bordered">
                                <thead>
                       
                              <tr>
                                    
                                    <th><Center>CASES WITH WORSE RESPONSE TIME</Center></th>
                                    <th><Center>TIME</Center></th>
                              </tr>
                                </thead>
                                <tbody>
                                 
                                 <?php foreach($worse_response_cases as $record):?>

                               <tr>
                                     
                                       
                                       <td>
                                        <a href='#' id="hrefworsecaseid"  data-case_id="<?php echo $record->case_id;?>" style="color: black" >
                                            <?php echo $record->case_id;?>
                                        </a></td>
                                      <td>
                                           <!--  <a href='#' id="hrefworsetimedate" data-timedate3="<?php echo $record->time_date;?>" style="color: black"> -->
                                                <?php echo $record->time_date;?>
                                              <!-- </a> -->
                                        </td>
                                       
                                        
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
                            <div class="col-md-12">
                                <!--     <br> -->

                                <!--  <span id="descr"></span>   -->
                                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                    </tr>
                                    </thead>
                                    <tbody id="next_table">

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



<script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>

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
    $(document).on('click','#hrefbestcaseid',function(){
       // $('#mytransactionid').val($(this).data('case_id'));
        $('#mycaseid').val($(this).data('case_id'));
    });

    $(document).on('click','#hrefbesttimedate',function(){
        $('#mycaseid').val($(this).data('timedate1'));
    });

    $(document).on('click','#hrefgoodcaseid',function()
        {
      // $('#mytransactionid').val($(this).data('transaction_id'));
        $('#mycaseid').val($(this).data('case_id'));
    });



     $(document).on('click','#hrefgoodtimedate',function(){
         $('#mycaseid').val($(this).data('timedate2'));
    });

  

    $(document).on('click','#hrefworsecaseid',function(){
        $('#mycaseid').val($(this).data('case_id'));
    });

    $(document).on('click','#hrefworsetimedate',function()
        {
        $('#mycaseid').val($(this).data('timedate3'));
    });

    $(document).on('click','#hrefbest_time',function()
        {
        $('#mycaseid').val($(this).data('bestresponsetimes'));
    });
     $(document).on('click','#hrefworse_time',function()
        {
        $('#mycaseid').val($(this).data('worseresponsetimes'));
        
    });
</script>


<!--//////////////////HREF PICKING THE TRANSACTION ID AND CASE ID FOR SELECTING THE REQIURED DATA ////////////////-->
<script>
 $(document).on('click','#hrefbestcaseid,#hrefgoodcaseid,#hrefworsecaseid,#hrefbest_time,#hrefworse_time',function(e) {
        var case_id= $('#mycaseid').val();
       // alert(case_id)
        e.preventDefault();
        $.ajax({
            type:'POST',
            data:{case_id:case_id},
            url:'<?php echo site_url('senior_management_controller/sm_select_a_full_case'); ?>',
            success:function(result)
            {
                //alert(result);
                $('#modal_open_case').modal('show');
                data = JSON.parse(result);

                $('#description_old_once').empty();
                var $select=$('#description_old_once');
                $.each(data,
                    function (index, item) {
                       if(item.coo_time_date == null){
                             $select.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                             ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Contact :</span>'+' '+item.complainant_contact+'' + 
                            '<br>'+' &nbsp' +'<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+'' + 
                            '<br>'+'<span style="font-weight: bold">CS Name :</span>'+''+item.cs_name+'</p></td> </tr><tr>  <td> <p>' +
                            '<span style="font-weight: bold">Compliance Name:</span>'+' '+item.c_compliance_name+''+'<br>'+
                            '<span style="font-weight: bold">Comment :</span>'+' '+item.c_comment+''+'<br>'+
                            '<span style="font-weight: bold">Submited Date :</span>'+' '+item.c_time_date+'</p></td>'))
                        }
                      else if(item.coo_comment == null){
                             $select.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                             ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Contact :</span>'+' '+item.complainant_contact+'' + 
                            '<br>'+' &nbsp' +'<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+'' + 
                            '<br>'+'<span style="font-weight: bold">CS Name :</span>'+''+item.cs_name+'</p></td> </tr><tr>  <td> <p>' +
                            '<span style="font-weight: bold">Compliance Name:</span>'+' '+item.c_compliance_name+''+'<br>'+
                            '<span style="font-weight: bold">Comment :</span>'+' '+item.c_comment+''+'<br>'+
                            '<span style="font-weight: bold">Submited Date :</span>'+' '+item.c_time_date+'</p></td> <tr>  <td> <p>' 


                            +'<span style="font-weight: bold">COO Name :</span>'+' '+item.coo_name+''+'<br>'+
                            '<span style="font-weight: bold">Approval Date :</span>'+' '+item.coo_time_date+'</p></td> </tr>'))
                        }else{
                             $select.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                      ' &nbsp &nbsp ' +'<span style="font-weight: bold">Contact :</span>'+' '+item.complainant_contact+'' + '<br>'+

                      '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+'' + '<br>'+
                            '<span style="font-weight: bold">CS Name :</span>'+''+item.cs_name+'</p></td> </tr><tr>  <td> <p>' +
                            '<span style="font-weight: bold">Compliance Name :</span>'+' '+item.c_compliance_name+''+'<br>'+
                             '<span style="font-weight: bold">Comment:</span>'+' '+item.c_comment+''+'<br>'+
                            '<span style="font-weight: bold">Submited Date :</span>'+' '+item.c_time_date+'</p></td> </tr><tr>  <td> <p>'
                            +'<span style="font-weight: bold">COO Name :</span>'+' '+item.coo_name+''+'<br>'+
                            '<span style="font-weight: bold">Comment:</span>'+' '+item.coo_comment+''+'<br>'+
                            '<span style="font-weight: bold">Approval Date :</span>'+' '+item.coo_time_date+'</p></td> </tr>'))
                        }
                       
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


 // $(document).on('click','#hrefworse_time',function(e) {
 //        var time_date= $('#mycaseid').val();
 //    // alert(time_date)
 //        e.preventDefault();
 //        $.ajax({
 //            type:'POST',
 //            data:{time_date:time_date},
 //            url:'<?php echo site_url('senior_management_controller/sm_select_a_full_case_base_on_response_time'); ?>',
 //            success:function(result)
 //            {
 //                alert(result);
 //                $('#modal_open_case').modal('show');
 //                data = JSON.parse(result);

 //                $('#description_old_once').empty();
 //                var $selectbase_on_response_time=$('#description_old_once');
 //                $.each(data,
 //                    function (index, item) {
 //                       if(item.coo_comment == null){
 //                             $selectbase_on_response_time.append($('<tr> <td> <p>' +
 //                            '<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
 //                             ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
 //                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Contact :</span>'+' '+item.complainant_contact+'' + 
 //                            '<br>'+' &nbsp' +'<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+'' + 
 //                            '<br>'+'<span style="font-weight: bold">CS Name :</span>'+''+item.cs_name+'</p></td> </tr><tr>  <td> <p>' +
 //                          '<span style="font-weight: bold">Compliance Name :</span>'+' '+item.c_compliance_name+''+'<br>'+
 //                            '<span style="font-weight: bold">Comment :</span>'+' '+item.c_comment+''+'<br>'+
 //                            '<span style="font-weight: bold">Submited Date :</span>'+' '+item.c_time_date+'</p></td> <tr>  <td> <p>' 


 //                            +'<span style="font-weight: bold">COO Name :</span>'+' '+item.coo_name+''+'<br>'+
 //                            '<span style="font-weight: bold">Approval Date :</span>'+' '+item.coo_time_date+'</p></td> </tr>'))
 //                        }else{
 //                             $selectbase_on_response_time.append($('<tr> <td> <p>' +
 //                            '<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
 //                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
 //                      ' &nbsp &nbsp ' +'<span style="font-weight: bold">Contact :</span>'+' '+item.complainant_contact+'' + '<br>'+

 //                      '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+'' + '<br>'+
 //                            '<span style="font-weight: bold">CS Name :</span>'+''+item.cs_name+'</p></td> </tr><tr>  <td> <p>' +
 //                            '<span style="font-weight: bold">Compliance Name :</span>'+' '+item.c_compliance_name+''+'<br>'+
 //                             '<span style="font-weight: bold">Comment:</span>'+' '+item.c_comment+''+'<br>'+
 //                            '<span style="font-weight: bold">Submited Date :</span>'+' '+item.c_time_date+'</p></td> </tr><tr>  <td> <p>'
 //                            +'<span style="font-weight: bold">COO Name :</span>'+' '+item.coo_name+''+'<br>'+
 //                            '<span style="font-weight: bold">Comment:</span>'+' '+item.coo_comment+''+'<br>'+
 //                            '<span style="font-weight: bold">Approval Date :</span>'+' '+item.coo_time_date+'</p></td> </tr>'))
 //                        }
                       
 //                    }
 //                );

 //                $('#top_of_modal').empty();
 //                var $top_of_modalbase_on_response_time=$('#top_of_modal');
 //                $.each(data,
 //                    function (index, item) {
 //                        $top_of_modalbase_on_response_time.append($('<tr> <td> <p>' +
 //                            '<span style="font-weight: bold;color:white">CASE:</span>'+' '+item.case_id+
 //                            ' &nbsp &nbsp ' +'<span style="font-weight: bold;color:white">ON:</span>'+' '+item.time_date+' </p></td>  </tr>'))
 //                    }
 //                );

 //            }
 //        });


 //    });

$(document).on('click','#hrefbesttimedate,#hrefgoodtimedate,#hrefworsetimedate',function(e) {
        var time_date= $('#mycaseid').val();
     //alert(time_date)
        e.preventDefault();
        $.ajax({
            type:'POST',
            data:{time_date:time_date},
            url:'<?php echo site_url('senior_management_controller/sm_select_a_full_case_base_on_time_date'); ?>',
            success:function(result)
            {
              // alert(result);
                $('#modal_open_case').modal('show');
                data = JSON.parse(result);

                $('#description_old_once').empty();
                var $selectbase_on_response_time_date=$('#description_old_once');
                $.each(data,
                    function (index, item) {
                       if(item.coo_comment == null){
                             $selectbase_on_response_time_date.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                             ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Contact :</span>'+' '+item.complainant_contact+'' + 
                            '<br>'+' &nbsp' +'<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+'' + 
                            '<br>'+'<span style="font-weight: bold">CS Name :</span>'+''+item.cs_name+'</p></td> </tr><tr>  <td> <p>' +
                          '<span style="font-weight: bold">Compliance Name :</span>'+' '+item.c_compliance_name+''+'<br>'+
                            '<span style="font-weight: bold">Comment :</span>'+' '+item.c_comment+''+'<br>'+
                            '<span style="font-weight: bold">Submited Date :</span>'+' '+item.c_time_date+'</p></td> <tr>  <td> <p>' 


                            +'<span style="font-weight: bold">COO Name :</span>'+' '+item.coo_name+''+'<br>'+
                            '<span style="font-weight: bold">Approval Date :</span>'+' '+item.coo_time_date+'</p></td> </tr>'))
                        }else{
                             $selectbase_on_response_time_date.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold">Service Category :</span>'+' '+item.service_category+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold">Complainant Name :</span>'+' '+item.complainant_name+
                      ' &nbsp &nbsp ' +'<span style="font-weight: bold">Contact :</span>'+' '+item.complainant_contact+'' + '<br>'+

                      '<span style="font-weight: bold">Complain :</span>'+' '+item.descriptions+'' + '<br>'+
                            '<span style="font-weight: bold">CS Name :</span>'+''+item.cs_name+'</p></td> </tr><tr>  <td> <p>' +
                            '<span style="font-weight: bold">Compliance Name :</span>'+' '+item.c_compliance_name+''+'<br>'+
                             '<span style="font-weight: bold">Comment:</span>'+' '+item.c_comment+''+'<br>'+
                            '<span style="font-weight: bold">Submited Date :</span>'+' '+item.c_time_date+'</p></td> </tr><tr>  <td> <p>'
                            +'<span style="font-weight: bold">COO Name :</span>'+' '+item.coo_name+''+'<br>'+
                            '<span style="font-weight: bold">Comment:</span>'+' '+item.coo_comment+''+'<br>'+
                            '<span style="font-weight: bold">Approval Date :</span>'+' '+item.coo_time_date+'</p></td> </tr>'))
                        }
                       
                    }
                );

                $('#top_of_modal').empty();
                var $top_of_modalbase_on_response_time_date=$('#top_of_modal');
                $.each(data,
                    function (index, item) {
                        $top_of_modalbase_on_response_time_date.append($('<tr> <td> <p>' +
                            '<span style="font-weight: bold;color:white">CASE:</span>'+' '+item.case_id+
                            ' &nbsp &nbsp ' +'<span style="font-weight: bold;color:white">ON:</span>'+' '+item.time_date+' </p></td>  </tr>'))
                    }
                );

            }
        });


    });

</script>
<!--//////////////////HREF LINK PICKING DATA ENDS  ////////////////-->

























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
    function addCommas(amount) {
        var parts = amount.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
    $(document).on('click','#fetchinfo',function(e) {
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
<!--<script>
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
</script>-->
<!--ending-->


   <script>
/*
        var jn='<?php echo $seniorManagement['0']['JancResponse'];?>';
        if(jn=='')
        {
            var jns=0;
        }
        else jns=jn;
         var fb='<?php echo $seniorManagement['0']['FebcResponse'];?>';
        if(fb=='')
        {
           var fbs=0;
        }
        else fbs=fb;

         var mh='<?php echo $seniorManagement['0']['MarcResponse'];?>';
        if(mh=='')
        {
          var  mhs=0;
        }
        else mhs=mh;
          var ap='<?php echo $seniorManagement['0']['AprcResponse'];?>';
        if(ap=='')
        {
           var aps=0;
        }
        else aps=ap;
         var ma='<?php echo $seniorManagement['0']['MaycResponse'];?>';
        if(ma=='')
        {
          var  mas=0;
        }

        else mas=ma;

         var jnn='<?php echo $seniorManagement['0']['JuncResponse'];?>';
        if(jnn=='')
        {
           var jnns=0;
        }
        else jnns=jnn;


         var jl='<?php echo $seniorManagement['0']['JulcResponse'];?>';
        if(jl=='')
        {
           var jls=0;
        }
        else jls=jl;
         var ag='<?php echo $seniorManagement['0']['AugcResponse'];?>';
         alert(ag);
        if(ags=='')
        {
          var  ags=0;
        }
        else ags=ag;
         var sp='<?php echo $seniorManagement['0']['SepcResponse'];?>';
         alert(sp);
        if(sps=='')
        {
         var sps=0;
        }
        else sps=sp;
          var oc=<?php echo $seniorManagement['0']['OctcResponse'];?>;
          alert(oc);
          var ocs
        if(oc=='')
        {
           ocs=0;
        }
        else ocs=oc;
         var nv='<?php echo $seniorManagement['0']['NovcResponse'];?>';
        if(nv=='')
        {
          var  nvs=0;
        }
        else nvs=nv;

         var dc='<?php echo $seniorManagement['0']['DeccResponse'];?>';
        if(dc=='')
        {
           var dcs=0;
        }
        else dcs=dc;





         var jn1='<?php echo $seniorManagement['0']['JancooResponse'];?>';
        if(jn=='')
        {
           var jns1=0;
        }
        else jns1=jn1;
         var fb1='<?php echo $seniorManagement['0']['FebcooResponse'];?>';
        if(fb1=='')
        {
          var  fbs1=0;
        }
        else fbs1=fb1;

         var mh1='<?php echo $seniorManagement['0']['MarcooResponse'];?>';
        if(mh1=='')
        {
           var mhs1=0;
        }
        else mhs1=mh1;
          var ap1='<?php echo $seniorManagement['0']['AprcooResponse'];?>';
        if(ap1=='')
        {
          var  aps1=0;
        }
        else aps1=ap1;
         var ma1='<?php echo $seniorManagement['0']['MaycooResponse'];?>';
        if(ma1=='')
        {
          var  mas1=0;
        }

        else mas1=ma1;

         var jnn1='<?php echo $seniorManagement['0']['JuncooResponse'];?>';
        if(jnn1=='')
        {
           var jnns1=0;
        }
        else jnns1=jnn1;


         var jl1='<?php echo $seniorManagement['0']['JulcooResponse'];?>';
        if(jl1=='')
        {
          var  jls1=0;
        }
        else jls1=jl1;
         var ag1='<?php echo $seniorManagement['0']['AugcooResponse'];?>';
        if(ag1=='')
        {
          var  ags1=0;
        }
        else ags1=ag1;
         var sp1='<?php echo $seniorManagement['0']['SepcooResponse'];?>';
        if(sp1=='')
        {
           var sps1=0;

        }

        else sps1=sp1;
        alert(sps1);
          var oc1=<?php echo $seniorManagement['0']['OctcooResponse'];?>;
          alert(oc1);
        if(oc1=="")
        {
           var ocs1=0;
        }
        else ocs1=oc1;

         var nv1='<?php echo $seniorManagement['0']['NovcooResponse'];?>';
        if(nv1=='')
        {
          var  nvs1=0;
        }
        else nvs1=nv1;

         var dc1='<?php echo $seniorManagement['0']['DeccooResponse'];?>';
        if(dc1=='')
        {
           var dcs1=0;
        }
        else dcs1=dc1;
       





         var jn2='<?php echo $seniorManagement['0']['JanResponse'];?>';
        if(jn2=='')
        {
           var jns2=0;
        }
        else jns2=jn2;
         var fb2='<?php echo $seniorManagement['0']['FebResponse'];?>';
        if(fb2=='')
        {
          var  fbs2=0;
        }
        else fbs2=fb2;

         var mh2='<?php echo $seniorManagement['0']['MarResponse'];?>';
        if(mh2=='')
        {
          var  mhs2=0;
        }
        else mhs2=mh2;
          var ap2='<?php echo $seniorManagement['0']['AprResponse'];?>';
        if(ap2=='')
        {
          var  aps2=0;
        }
        else aps2=ap2;
         var ma2='<?php echo $seniorManagement['0']['MayResponse'];?>';
        if(ma2=='')
        {
          var  mas2=0;
        }

        else mas2=ma2;

         var jnn2='<?php echo $seniorManagement['0']['JunResponse'];?>';
        if(jnn2=='')
        {
           var jnns2=0;
        }
        else jnns2=jnn2;


         var jl2='<?php echo $seniorManagement['0']['JulResponse'];?>';
        if(jl2=='')
        {
          var  jls2=0;
        }
        else jls2=jl2;
         var ag2='<?php echo $seniorManagement['0']['AugResponse'];?>';
        if(ag2=='')
        {
           var ags2=0;
        }
        else ags2=ag2;
         var sp2='<?php echo $seniorManagement['0']['SepResponse'];?>';
        if(sp2=='')
        {
           var sps2=0;
        }
        else sps2=sp2;
          var oc2=<?php echo $seniorManagement['0']['OctResponse'];?>;
         // alert(oc2);
        if(oc2=='')
        {
         var ocs2=0;
        }
        else ocs2=oc2;
         var nv2='<?php echo $seniorManagement['0']['NovResponse'];?>';
        if(nv2=='')
        {
           var nvs2=0;
        }
        else nvs2=nv2;

         var dc2='<?php echo $seniorManagement['0']['DecResponse'];?>';
        if(dc2=='')
        {
          var  dcs2=0;
        }
        else dcs2=dc2;
        */

    
     Highcharts.chart('container', {
    title: {
        text: 'Analysis Under Current Year'
    },
    xAxis: {
        categories: ['January', 'Febuary', 'March', 'April', 'May','June', 'July', 'August', 'September', 'October','November','December']
    },
    // labels: {
    //     items: [{
    //         html: 'Total fruit consumption',
    //         style: {
    //             left: '50px',
    //             top: '18px',
    //             color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
    //         }
    //     }]
    // },
    series: [{
        type: 'column',
        name: 'Cases Opened',
        data: [
        // FebOpen
        // FebApproved
        // FebDecline
        <?php echo $seniorManagement['0']['JanOpen'];?>,
        <?php echo $seniorManagement['0']['FebOpen'];?>,
         <?php echo $seniorManagement['0']['MarOpen'];?>,
          <?php echo $seniorManagement['0']['AprOpen'];?>,
           <?php echo $seniorManagement['0']['MayOpen'];?>,
            <?php echo $seniorManagement['0']['JunOpen'];?>,
             <?php echo $seniorManagement['0']['JulOpen'];?>,
              <?php echo $seniorManagement['0']['AugOpen'];?>,
               <?php echo $seniorManagement['0']['SepOpen'];?>,
                <?php echo $seniorManagement['0']['OctOpen'];?>,
                 <?php echo $seniorManagement['0']['NovOpen'];?>,
                  <?php echo $seniorManagement['0']['DecOpen'];?>,
                   ]
    }, {
        type: 'column',
        name: 'Cases Pending',
        data: [ 
        <?php echo $seniorManagement['0']['JanPending'];?>,
        <?php echo $seniorManagement['0']['FebPending'];?>,
        <?php echo $seniorManagement['0']['MarPending'];?>,
        <?php echo $seniorManagement['0']['AprPending'];?>,
        <?php echo $seniorManagement['0']['MayPending'];?>,
        <?php echo $seniorManagement['0']['JunPending'];?>,
        <?php echo $seniorManagement['0']['JulPending'];?>,
        <?php echo $seniorManagement['0']['AugPending'];?>,
        <?php echo $seniorManagement['0']['SepPending'];?>,
        <?php echo $seniorManagement['0']['OctPending'];?>,
        <?php echo $seniorManagement['0']['NovPending'];?>,
        <?php echo $seniorManagement['0']['DecPending'];?>]
    }, {
        type: 'column',
        name: 'Cases Approved',
        data: [ 
        <?php echo $seniorManagement['0']['JanApproved'];?>,
         <?php echo $seniorManagement['0']['FebApproved'];?>,
          <?php echo $seniorManagement['0']['MarApproved'];?>,
           <?php echo $seniorManagement['0']['AprApproved'];?>,
            <?php echo $seniorManagement['0']['MayApproved'];?>,
             <?php echo $seniorManagement['0']['JunApproved'];?>,
              <?php echo $seniorManagement['0']['JulApproved'];?>,
               <?php echo $seniorManagement['0']['AugApproved'];?>,
                <?php echo $seniorManagement['0']['SepApproved'];?>,
                 <?php echo $seniorManagement['0']['OctApproved'];?>,
                  <?php echo $seniorManagement['0']['NovApproved'];?>,
                   <?php echo $seniorManagement['0']['DecApproved'];?>]
    },{
        type: 'column',
        name: 'Cases Declined',
        data: [ <?php echo $seniorManagement['0']['JanDecline'];?>,
         <?php echo $seniorManagement['0']['FebDecline'];?>,
          <?php echo $seniorManagement['0']['MarDecline'];?>,
           <?php echo $seniorManagement['0']['AprDecline'];?>,
            <?php echo $seniorManagement['0']['MayDecline'];?>,
             <?php echo $seniorManagement['0']['JunDecline'];?>,
              <?php echo $seniorManagement['0']['JulDecline'];?>,
               <?php echo $seniorManagement['0']['AugDecline'];?>,
                <?php echo $seniorManagement['0']['SepDecline'];?>,
                 <?php echo $seniorManagement['0']['OctDecline'];?>,
                  <?php echo $seniorManagement['0']['NovDecline'];?>,
                   <?php echo $seniorManagement['0']['DecDecline'];?>]
    }
    // , {
    //     type: 'spline',
    //     name: 'Compliance Response Time',
    //     data: [
    //     jns,fbs,mhs,aps,mas,jnns,jls,<?php echo $seniorManagement['0']['OctcResponse'];?>,<?php echo $seniorManagement['0']['OctcResponse'];?>,<?php echo $seniorManagement['0']['OctcResponse'];?>,nvs,dcs],
    //     marker: {
    //         lineWidth: 2,
    //         lineColor: Highcharts.getOptions().colors[3],
    //         fillColor: 'white'
    //     }
    // }
    // , {
    //     type: 'spline',
    //     name: 'COO Response Time',
    //     data: [
    //     '<?php echo $seniorManagement['0']['NovcooResponse'];?>',fbs1,mhs1,aps1,mas1,jnns1,jls1,ags1,sps1,ocs1,nvs1,dcs1
    //     ],
    //     marker: {
    //         lineWidth: 2,
    //         lineColor: Highcharts.getOptions().colors[3],
    //         fillColor: 'white'
    //     }
    //   }
      // , {
      //   type: 'spline',
      //   name: 'Total Response Time',
      //   data: [ 
      //   jns2,fbs2,mhs2,aps2,mas2,jnns2,jls2,ags2,sps2,ocs2,nvs2,dcs2
      //  ],
      //   marker: {
      //       lineWidth: 2,
      //       lineColor: Highcharts.getOptions().colors[3],
      //       fillColor: 'white'
      //   }
      // }
    // , {
    //     type: 'pie',
    //     name: 'Total consumption',
    //     data: [{
    //         name: 'Jane',
    //         y: 13,
    //         color: Highcharts.getOptions().colors[0] // Jane's color
    //     }, {
    //         name: 'John',
    //         y: 23,
    //         color: Highcharts.getOptions().colors[1] // John's color
    //     }, {
    //         name: 'Joe',
    //         y: 19,
    //         color: Highcharts.getOptions().colors[2] // Joe's color
    //     }],
    //     center: [900, -20],
    //     size: 100,
    //     showInLegend: false,
    //     dataLabels: {
    //         enabled: false
    //     }
    // }
    ]
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