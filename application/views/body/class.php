 <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">CLASS MANAGEMENT</span>

            </h1>
            <p class="title-bar-description">
              <small  style ="color:#686EE4">UTILITIES</small>

            </p>
          </div>
          <div class="row">


              <div class ="col-xs-4">
              <div class = "row">
                  <div class = "col-lg-12">

                      <div class="col-md-6">
                          <div class="card" style="background-color: #686EE4; color: #fff">
                              <div class="card-values">
                                  <div class="p-x">
                                      <small>TOTAL CLASSES <i class = "icon icon-group" style = "color: #fff"></i></small><br><br>
                                      <h3 class="card-title fw-l"><?php echo $totalclasses;?></h3>
                                  </div>
                              </div>
                              <div class="card-chart">
                                  <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                              </div>
                          </div>

                      </div></div></div>


</div>



          </div>
<br><hr>
          <div class="pull-left">
              <button class=" btn  btn-success" style = "text-transform: capitalize; background-color: #686EE4; border-color: #686EE4" data-toggle="modal" data-target="#newRole" type="button"> <i class = "icon icon-group"></i> &nbsp NEW CLASS</button>


          </div>
          <br><br>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">


            </div>
            <div class="card-body">
                <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                    <thead>
                    <tr>
                       <!--  <th>CLASS ID</th> -->
                        <th>CLASS NAME</th>

                        <th>ACTIONS</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($classes as $record):?>
                    <tr>
                                        <!--  <td>
                                            <?php echo strtoupper($record->class_id);?>
                                        </td> -->
                                        <td>
                                            <?php echo strtoupper($record->class_name);?>
                                        </td>

                        <td> <button class="btndeleteClass btn  btn-warning"  style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon"  type="button" data-toggle="modal" data-target="#delclass" 
                                     data-classid="<?php echo $record->class_id;?>"
                                      data-classnamename="<?php echo $record->class_name;?>"> <i class = "icon icon-trash"></i></button></td>

                    </tr>
                   


                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div></div>













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
  </body>
</html>