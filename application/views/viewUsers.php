<?php include ('header/top.php') ;?>
 <!-- START BREADCRUMB -->
 <ul class="breadcrumb" style="margin-top:50px" >
                    <li><a href="#">Dashboard</a></li>
                  <!-- <li><a href="#">Users</a></li>-->
               <li class="active">Users</li> 
                </ul>
				
                <!-- END BREADCRUMB -->                
                
                  
                
                 <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <!-- START DEFAULT DATATABLE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
  
                            <h3 class="panel-title">USERS</h3>
							&nbsp &nbsp &nbsp
							 <a href="newUser"> <button type="button" class="btn btn-success btn-rounded">CREATE NEW SYSTEM USER</button></a>
                            <ul class="panel-controls">
							
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                              <!--  <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>-->
							  
                            </ul>
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th>FULL NAME</th>
                                    <th>EMAIL</th>
                                    <th>CONTACT</th>
                                    <th>GENDER</th>
                                    <th>ROLE</th>
                                    <th>  <center>STATUS  </center></th>

                                    <th><center>ACTIONS</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($all_users as $record):?>

                                <tr>
                                   <td>
                                            <?php echo strtoupper($record->Surname." ".$record->Firstname." ".$record->Othernames);?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($record->Email);?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($record->Contact);?>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($record->Gender);?>
                                        </td>
                                        <td>
                                        
                                            <?php echo strtoupper($record->Privilages);?>
                                          
                                        </td>

                                         <?php if($record->StatusInd=='A'){?>
                                            <td style = "text-transform: capitalize; background-color: green; color: white">
                                                <center>ACTIVE</center> </td>
                                        <?php }?>
                                        <?php if($record->StatusInd=='D'){?>
                                            <td style = "text-transform: capitalize; background-color: red; color: white">
                                                <center>LOCKED </center></td>
                                        <?php }?>

                                        <td>
                                        <center><div class="btn-group dropup">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">ACTION <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li role="presentation" class="dropdown-header">Action </li>
                                                <li><a href="#">Update</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_lock">Disable</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal_unlock">Activate</a></li>
                                                
												<li><a href="#" data-toggle="modal" data-target="#modal_basic">Delete</a></li>
                                            </ul>
                                        </div></center>
                                    </td>
                                 
                              </tr>

                               
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END DEFAULT DATATABLE -->

                    <!-- START SIMPLE DATATABLE -->
              
                    <!-- END SIMPLE DATATABLE -->

                </div>
            </div>

        </div>
        <!-- PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

 <!-- MODALS -->        
 <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       <center> <h4 class="modal-title" id="defModalHead"><span class="fa fa-trash-o fa-5x m-y-lg"   ></span></h4></center>
                        
                    </div>
                    <div class="modal-body">
                  
                     <center><h3>DO YOU WANT TO DELETE <span id="txtfullnamedelete" style="color: red"></span> 
                     FROM JOLI</h3> </center>
                           
                  
                    </div>
                    <div class="modal-footer">
                        
                        <button class="btn btn-default pull-left" data-dismiss="modal">CANCEL</button>
                        <button class="btn btn-primary pull-right">DELETE</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="modal_lock" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       <center> <h4 class="modal-title" id="defModalHead"><span class="fa fa-lock fa-5x m-y-lg"   ></span></h4></center>
                        
                    </div>
                    <div class="modal-body">
                  
                     <center><h3>DO YOU WANT TO LOCK <span id="txtfullnamedelete" style="color: red"></span> 
                     FROM JOLI</h3> </center>
                           
                  
                    </div>
                    <div class="modal-footer">
                        
                        <button class="btn btn-default pull-left" data-dismiss="modal">CANCEL</button>
                        <button class="btn btn-primary pull-right">LOCK USER</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="modal_unlock" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       <center> <h4 class="modal-title" id="defModalHead"><span class="fa fa-unlock fa-5x m-y-lg"   ></span></h4></center>
                        
                    </div>
                    <div class="modal-body">
                  
                     <center><h3>DO YOU WANT TO UNLOCK <span id="txtfullnamedelete" style="color: red"></span> 
                     FROM JOLI</h3> </center>
                           
                  
                    </div>
                    <div class="modal-footer">
                        
                        <button class="btn btn-default pull-left" data-dismiss="modal">CANCEL</button>
                        <button class="btn btn-primary pull-right">UNLOCK USER</button>
                    </div>
                </div>
            </div>
        </div>



<!-- START PRELOADS -->
<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->
<!-- <script type="text/javascript" src="js/settings.js"></script> -->
   <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/actions.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->

</body>
</html>






