<div class="layout-content" style="background-color: #fff">
<div class="layout-content-body">

<div class="title-bar">

    <h1 class="title-bar-title">
        <span class="d-ib">DROP OFF MANAGEMENT</span>
    </h1>
    <p class="title-bar-description">
        <small  style ="color:#686EE4">DROP OFF REPORTS</small>

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
                        

                            <div class="form-group">
                                <label for="form-control-31" class="form-label" style="font-size: 11px"><u>Date (From)</u></label>
                                <input id="from_date" class="form-control" type="date" style="font-size: 11px">
                            </div>

                            <div class="form-group">
                                <label for="form-control-41" class="form-label" style="font-size: 11px"><u>Date (To)</u></label>
                                <input id="to_date" class="form-control" type="date" style="font-size: 11px">
                            </div>
                           <!--  <div class="form-group">
                                <label for="form-control-31" class="form-label" style="font-size: 11px"><u>Subscriber's Phone Number</u></label>
                                <input id="form-control-321" class="form-control" type="number" style="font-size: 11px">
                            </div> -->
                            <br>


<!-- text-transform: capitalize; background-color: #686EE4; ; border-color: #686EE4 -->
                           <center><button  class="filterdropOff btn btn-pill btn-primary" style="text-transform: capitalize; background-color: #686EE4 ; border-color: #686EE4; width: 100%"><i class="icon icon-list"></i> Load Data </button></center>
                            <br>
                             <center><button  class="clear btn btn-pill btn-primary" style="text-transform: capitalize; background-color: #686EE4; ; border-color: #686EE4; width: 100%"><i class="icon icon-list"></i> Clear </button></center>
                             <br>

                              <center><span id="error_empty_range_fileds" style="color:red; "></span></center>

                        </div></div>

            </div></div>

    </div>
</div>
<div class = "col-lg-9">

    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="divider">
                <div class="divider-content " style = "color: #4f4f4f"><b><i class="icon icon-list"></i> Search Results</b></div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-actions">


<!-- dropOff -->
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

                                <div class="tab-pane fade active in" id="profile-11">
                                     <center> <p id="daterange"></p></center>
                                    <hr>
                                    <div class = "pull-left">
                                        <!-- <button type="button" class="btn btn-primary" style="background-color: #14692E; border-color: #14692E"><i class="icon icon-file-excel-o"></i>&nbsp &nbsp Download As Excel &nbsp &nbsp</button> | -->
                                         <button  class=" mygenerate btn btn-primary" value="Print 1st Div" 
                                    onclick="javascript:printDiv('printablediv')" id="mygenerate"
                                             style="background-color: maroon; border-color: maroon"> 
                                        <i class="icon icon-file-pdf-o"></i>&nbsp &nbsp Download As PDF &nbsp &nbsp</button>


                                       <!--  <button type="button" class="btn btn-primary" style="background-color: maroon; border-color: maroon"><i class="icon icon-file-pdf-o"></i>&nbsp &nbsp Download As PDF &nbsp &nbsp</button> -->
                                      
                                    </div>

                                    
                                    <BR><br>
                                    <div class="row gutter-xs">
                                        <div class="col-xs-12">

                                            <div class="card">
                                                <div class="card-header">


                                                </div>
                                                <div class="card-body">
                                                    <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                                                        <thead>
                                                        <tr>
                                                            <th>DATE</th>
                                                            <th>TIME</th>
                                                            <th>KIDS NAME</th>
                                                            <th>DROP OFFS NAME</th>
                                                             <th>KIDS RECEIVERS NAME</th>
                                                            
                                                           

                                                        </tr>
                                                        </thead>
                                   <?php foreach($dropOff as $record):?>
      
                                     <tr>
                                         <td>
                                            <?php echo strtoupper($record->date);?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($record->time);?>
                                        </td>
                                         <td>
                                            <?php echo strtoupper($record->kid);?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($record->picker);?>
                                        </td>
                                         <td>
                                            <?php echo strtoupper($record->receiver);?>
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

      <!-- Modal that hide the printing div -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
                    <form id="form1" runat="server"> 
                        <div id="printablediv" style="width: 100%; background-color: Blue; height: 200px;margin-left:30px; margin-right:20px">
                          <div class="row">
                             <div class="col-md-9"  style="float: right; width: 80%; margin-bottom: 10pt;margin-top: 10px; ">
                                <h2><?php echo strtoupper($school_name);?></h2>
                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id="daterangeFORREPORT"></span>
                                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span id="reportdate"><?php echo strtoupper($reportdate);?></span>
                                 
                              </div>
                            
                            <div class="col-md-3" style="float: left; width: 20%; margin-bottom: 10pt;margin-top: 10px;padding-left: 30px ">
                            <img class="school_crestpicture" name="school_crest"  style='height: 80px; width:80px !important; '/>
                            <!--  <img src="auth/assets/img/logo.jpeg" style="height: 50px; width:80px !important"> -->
                            </div>
                            </div>

                            <div style="clear: both; margin: 0pt; padding: 0pt; "></div>
                    
                            <div class="row">   
                                 <div class="col-xs-12">
                                    <div class="card">
                         <div class="card-body">
                          <div >
                            <table id="forprinting" class="table table-bordered table-striped table-nowrap dataTable"
                                   cellspacing="0" width="100%" style="font-size: 12px">
                                <thead>
                                <tr>
                                                           <th>DATE</th>
                                                            <th>TIME</th>
                                                            <th>KIDS NAME</th>
                                                            <th>DROP OFFS NAME</th>
                                                             <th>KIDS RECEIVERS NAME</th>
                                    
                                   
                                </tr>
                            </thead>
                           <!--  <tfoot>
                                <tr>
                                                           <th>DATE</th>
                                                            <th>TIME</th>
                                                            <th>KIDS NAME</th>
                                                            <th>DROP OFFS NAME</th>
                                                             <th>KIDS RECEIVERS NAME</th>
                                  
                                  
                                </tr>
                            </tfoot> -->
                                <tbody >
                                
                                <?php foreach($dropOff as $record):?>
      
                                     <tr>
                                         <td>
                                            <?php echo strtoupper($record->date);?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($record->time);?>
                                        </td>
                                         <td>
                                            <?php echo strtoupper($record->kid);?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($record->picker);?>
                                        </td>
                                         <td>
                                            <?php echo strtoupper($record->receiver);?>
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
                        </div>

   
    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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



<!--=============script for filter based on date range==================================================-->

<!-- demo-datatables-responsive-1 -->
<script>
    $(document).on('click','.filterdropOff',function(e) {
        $('#error_empty_range_fileds').html(" ");

      var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            //alert(from_date);
            if(from_date != '' && to_date != '')
            {
                $.ajax({
                    type:'POST',
                    data:{from_date:from_date, to_date:to_date},
                    url:'<?php echo site_url('reportController/range_summary'); ?>',
                    dataType: 'json',
                    success:function(result)
                    {

                         $('#error_empty_range_fileds').html(" ");
   //document.getElementById("daterange").innerHTML = 'DROP OFF REPORT BETWEEN'. concat('from_date').CONCAT('&').concat('to_date');
                         //. CONCAT(from_date).CONCAT('&').CONCAT(to_date);
                         // var xy = document.getElementsByClassName("");
                          document.getElementById("reportdate").style.visibility = "hidden";
                         var mystartdate=from_date;
                         var myenddate=to_date;
    document.getElementById("daterange").innerHTML = 'DROP OFF REPORT BETWEEN   '.concat(mystartdate).concat('  &    ').concat(myenddate);
     document.getElementById("daterangeFORREPORT").innerHTML = 'DROP OFF REPORT BETWEEN   '.concat(mystartdate).concat('  TO      ').concat(myenddate);
                       //  alert(mystartdate);
                         // xy[0].innerHTML ='DROP OFF REPORT BETWEEN'. CONCAT(from_date).CONCAT('&').CONCAT(to_date);
                        // var res = 'world '.concat(str2).concat(" heloo").concat(" heloo");
//---------------destroy the datatable to create new one---------------------------
                    var table = $('#demo-datatables-responsive-1').DataTable();
                    table.destroy();
//---------------------------create new one with json data from the database------------------------
               $('#demo-datatables-responsive-1').DataTable({
                data: result,
                columns: [
                   { data: 'date' },
                    { data: 'time' },
                    { data: 'kid' },
                     { data: 'picker' },
                     { data: 'receiver' } ]   });

                        // dataforprinting =(result);
                        //alert(result);
                      //  $( "#mygenerate" ).prop( "disabled", false);
                        
                       // $('#demo-datatables-responsive-1').html(data);
                       // $('#forprinting').html(dataforprinting);

               
    
                    }
                });
            }
            else
            {
                $('#error_empty_range_fileds').html("Please enter date range");
            }
    });
   //-----------------------------------------clear button-------------------------------------------------------------
    
    $(document).on('click','.clear',function(e) {
         location.reload();          
    });  
//  =============================================================================
    $(document).on('click','.filterdropOff',function(e) {       
      var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            // alert(from_date);
            // alert(to_date);
            if(from_date != '' && to_date != '')
            {
                $.ajax({
                    type:'POST',
                    data:{from_date:from_date, to_date:to_date},
                    url:'<?php echo site_url('reportController/range_summary_for_printing'); ?>',
                    success:function(result)
                    {

                     //alert(result);$output    demo-datatables-responsive-1atables-responsive-1
                        data =(result);
                        //alert(result);
                        $( "#mygenerate" ).prop( "disabled", false);
                        
                       // $('#demo-datatables-responsive-1').html(data);
                        $('#forprinting').html(data);                       
                        
                        //$( "#x" ).prop( "disabled", true );
                        //'#printablediv').html(data);SSSS
                    }
                });
            }
            else
            {
                $('#error_empty_range_fileds').html("Please enter date range");
            }
    });
</script>

</body>
</html>

