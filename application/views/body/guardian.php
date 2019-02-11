
<div class="layout-content">
    
    <div class="layout-content-body">
     

     <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">GUARDIAN MANAGEMENT</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:#686EE4">UTILITIES</small>

            </p>
          </div>
          <div class="row gutter-xs">
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
                                  
                                  <th>PICKER FULL NAME</th>
                                 
                                  <th>CONTACT</th>
                                 
                                  <th>GENDER</th>
                                  <th><Center>ACTIONS</Center></th>


                              </tr>
                              </thead>
                              <tbody>
                                   <?php foreach($pickers as $record):?>
      
                              <tr>
                                   <td>
                                            <?php echo strtoupper($record->fullname);?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($record->contact);?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($record->gender);?>
                                        </td>
                                        
                                       
                                        <!--  <?php if($record->status=='A'){?>
                                            <td style = "text-transform: capitalize; background-color: green; color: white">
                                                <center>ACTIVE</center> </td>
                                        <?php }?>
                                        <?php if($record->status=='D'){?>
                                            <td style = "text-transform: capitalize; background-color: red; color: white">
                                                <center>LOCKED </center></td>
                                        <?php }?>
 -->

                                 

                                  <td>
                                      <Center> 
                                         
<button class="btn  btn-warning" id="editguardian" style = "text-transform: capitalize; background-color: #686EE4; ; border-color: #686EE4"  type="button" data-toggle="modal" data-target="#editUser" 
                                      data-picker_id="<?php echo $record->picker_id;?>"
                                      data-fullname="<?php echo $record->fullname;?>"
                                      data-contact="<?php echo $record->contact;?>"
                                      data-gender="<?php echo $record->gender;?>"
                                        data-photo="<?php echo $record->photo;?>"
                                    > <i class = "icon icon-edit"></i></button>|
                                        
                                           <?php if($record->status=='A'){?>
<button class="btn  btn-warning" id="btnlock" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"
                                      data-picker_id="<?php echo $record->picker_id;?>"
                                      data-fullname="<?php echo $record->fullname;?>"
                                      data-contact="<?php echo $record->contact;?>"
                                      data-gender="<?php echo $record->gender;?>" > <i class = "icon icon-lock"></i></button>
                                          <?php }?>
                                           <?php if($record->status=='D'){?>
<button class="btn  btn-warning" id="btnunlock" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"  data-picker_id="<?php echo $record->picker_id;?>"
                                      data-fullname="<?php echo $record->fullname;?>"
                                      data-contact="<?php echo $record->contact;?>"
                                      data-gender="<?php echo $record->gender;?>" > <i class = "icon icon-unlock"></i></button>
                                          
                                           <?php }?>
<!-- <button class="btn  btn-warning" id="delUserdelete" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUserdelete"   data-picker_id="<?php echo $record->picker_id;?>"
                                      data-fullname="<?php echo $record->fullname;?>"
                                      data-contact="<?php echo $record->contact;?>"
                                      data-gender="<?php echo $record->gender;?>" > <i class = "icon icon-trash"></i></button> -->
                                      </Center>
                                  </td>




                              </tr>
                            <?php endforeach;?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>

            <div class="divider">
                <div class="divider-content " style = "color: #686EE4"><b><i class="icon icon-line-chart"></i>STATISTICS</b></div>
            </div>
          <div class="row">


              <div class="col-md-6">
                  <div class="panel panel-body" data-toggle="match-height">
                      <h6 class="text-left m-t-0">GENDER DISTRIBUTION</h6>
                      <div class="row">

                          <div class="col-xs-3">
                              <br><br>
                              <ul class="list-unstyled">
                                  <li class="m-b">
                                      <small class="nowrap">
                                          <span class="icon icon-square icon-fw" style="color: #686EE4"></span>
                                          MALE
                                      </small>
                                  </li>
                                  <li class="m-b">
                                      <small class="nowrap">
                                          <span class="icon icon-square icon-fw" style="color: gainsboro"></span>
                                          FEMALE
                                      </small>
                                  </li>


                              </ul>
                          </div>
                          <div class="col-xs-6">
                              <canvas data-chart="pie" data-labels='["Male", "Female"]' data-values='[{"backgroundColor": ["#686EE4", "gainsboro"], "data": [<?php echo $totalMales;?>, <?php echo $totalFemales;?>]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
                          </div>
                      </div>
                  </div></div>


                  <div class="col-md-6">
                      <div class="panel panel-body" data-toggle="match-height">
                          <h6 class="text-left m-t-0">ACCOUNT STATUS DISTRIBUTION</h6>
                          <div class="row">

                              <div class="col-xs-3">
                                  <br><br>
                                  <ul class="list-unstyled">
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: #686EE4"></span>
                                              ACTIVE
                                          </small>
                                      </li>
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: gainsboro"></span>
                                              DISABLED
                                          </small>
                                      </li>


                                  </ul>
                              </div>
                              <div class="col-xs-6">
                                  <canvas data-chart="pie" data-labels='["Active", "Disabled"]' data-values='[{"backgroundColor": ["#686EE4", "gainsboro"], "data": [<?php echo $totalActive;?>, <?php echo $totalNotActive;?>]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
                              </div>
                          </div>
                      </div>
                  </div>





          </div></div></div>

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
</div>
    </div>

  </body>
</html>