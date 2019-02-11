<?php include ('header/top.php') ;?>
 <!-- START BREADCRUMB -->
 <ul class="breadcrumb" style="margin-top:50px" >
                    <li><a href="#">Dashboard</a></li>
                   <li><a href="#">Academics</a></li>
                   <li><a href="#">Students</a></li>
               <li class="active">Students Details</li> 
                </ul>
				
                <!-- END BREADCRUMB -->                
                
                  
                
                 <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">

                    <!-- START DEFAULT DATATABLE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">ALL STUDENTS</h3>
							&nbsp &nbsp &nbsp
							 <a href="newstudent"> <button type="button" 
                             class="btn btn-success btn-rounded">ADD NEW STUDENT</button></a>
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
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Gender</th>
                                    <th>Contact</th>
                                    <th>Status</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <center><div class="btn-group dropup">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">ACTION <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li role="presentation" class="dropdown-header">Action </li>
                                            <li><a href="#">Update</a></li>
                                            <li><a href="#">Disable</a></li>
                                            <li><a href="#">Activate</a></li>
                                        </ul>
                                    </div></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>
                                        <center><div class="btn-group dropup">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">ACTION <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li role="presentation" class="dropdown-header">Action </li>
                                                <li><a href="#">Update</a></li>
                                                <li><a href="#">Disable</a></li>
                                                <li><a href="#">Activate</a></li>
												<li><a href="#">Delete</a></li>
                                            </ul>
                                        </div></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>
                                        <center><div class="btn-group dropup">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">ACTION <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li role="presentation" class="dropdown-header">Action </li>
                                                <li><a href="#">Update</a></li>
                                                <li><a href="#">Disable</a></li>
                                                <li><a href="#">Activate</a></li>
												<li><a href="#">Delete</a></li>
                                            </ul>
                                        </div></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>
                                        <center><div class="btn-group dropup">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">ACTION <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li role="presentation" class="dropdown-header">Action </li>
                                                <li><a href="#">Update</a></li>
                                                <li><a href="#">Disable</a></li>
                                                <li><a href="#">Activate</a></li>
												<li><a href="#">Delete</a></li>
                                            </ul>
                                        </div></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>
                                        <center><div class="btn-group dropup">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">ACTION <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li role="presentation" class="dropdown-header">Action </li>
                                                <li><a href="#">Update</a></li>
                                                <li><a href="#">Disable</a></li>
                                                <li><a href="#">Activate</a></li>
												<li><a href="#">Delete</a></li>
                                            </ul>
                                        </div></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>
                                        <center><div class="btn-group dropup">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">ACTION <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li role="presentation" class="dropdown-header">Action </li>
                                                <li><a href="#">Update</a></li>
                                                <li><a href="#">Disable</a></li>
                                                <li><a href="#">Activate</a></li>
												<li><a href="#">Delete</a></li>
                                            </ul>
                                        </div></center>
                                    </td>
                                </tr>

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






