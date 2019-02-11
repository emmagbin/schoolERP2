
<div class="layout-content">
    
    <div class="layout-content-body">
     

     <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">KIDS MANAGEMENT</span>
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
                                  <th>FULL NAME</th>
                                  <th>GENDER</th>
                                  <th>CLASS</th>
                                  <th>PASSPORT</th>
                                 <th><Center>ACTIONS</Center></th>


                              </tr>
                              </thead>
                              <tbody>
                                 <?php foreach($allkids as $record):?>
                              <tr>

                                  <td><?php echo strtoupper($record->kid_fullname);?></td>
                                  <td><?php echo strtoupper($record->gender);?></td>
                                  <td><?php echo strtoupper($record->class_name);?></td>
                                  <td>
                                    <center>  
                                    <img src="<?php echo strtoupper($record->kid_photo);?>" style="max-width:50px;max-height:50px;m1n-width:50px;min-height:50px" /></center></td>
                                 

                                  <td><Center> 
                                   

                                    <button class="btn  btn-warning" id="editkidinfoforkid" style = "text-transform: capitalize; background-color: #686EE4; ; border-color: #686EE4"  type="button" data-toggle="modal" data-target="#editUser" 
                                   data-kidid="<?php echo $record->kid_id;?>"
                                    data-kidfullname="<?php echo $record->kid_fullname;?>"
                                    data-gender12="<?php echo $record->gender;?>"
                                     data-classname="<?php echo $record->class_id;?>"
                                   
                                    data-kidphoto="<?php echo $record->kid_photo;?>"
                                       > <i class = "icon icon-edit"></i></button> 


                                   | 
                                  <button class="btn  btn-warning" id="addnewpickertokid" style = "text-transform: capitalize; background-color: #686EE4; ; border-color: #686EE4"  type="button" data-toggle="modal" data-target="#addUser" 
                                   data-kidid="<?php echo $record->kid_id;?>"
                                       > <i class = "icon icon-user-plus"></i>
                                     </button> 
                                          
                                         <?php if($record->status=='A'){?>|
                                   <button class="btn  btn-warning" id="kiddisabling" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"
                                   data-kidid="<?php echo $record->kid_id;?>"
                                    data-kidfullname="<?php echo $record->kid_fullname;?>"
                                    > <i class = "icon icon-lock"></i>
                                   </button> 
                                          <?php }?>
                                        <?php if($record->status=='D'){?> |
                                    <button class="btn  btn-warning" id="kid_account_enable" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"
                                   data-kidid="<?php echo $record->kid_id;?>"
                                    data-kidfullname="<?php echo $record->kid_fullname;?>"
                                    > <i class = "icon icon-unlock"></i></button>
                                           <?php }?>
                                        
                                       <button class="btn  btn-warning" id="kiddeleting" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUseractual"
                                       data-kidid="<?php echo $record->kid_id;?>"
                                    data-kidfullname="<?php echo $record->kid_fullname;?>"
                                    > <i class = "icon icon-trash"></i></button>
                                   
                                      </Center></td>




                             
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
</div>
    </div>

  </body>
</html>