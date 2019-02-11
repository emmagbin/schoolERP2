<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
		
        <!-- EOF CSS INCLUDE -->     
        <style>
.vertical-menu {
  width: 500px;
  height: 200px;
  overflow-y: auto;
}
        </style> 
		
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
      <div class="page-container page-navigation-top" >    
	  
		     <!-- <div class="page-container page-navigation-top-fixed">-->
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal" style="position: fixed;top: 0px;
  width: 100%;margin-bottom:200px!important">
                    <li class="xn-logo">
                        <a href="index.html">JOLI</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                   
                   <?php if($FirstLogin!='Yes'){?>
					  <li><a href="dashboard"><span class="fa fa-home"></span> Dashboard</a></li>
                     
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-tasks"></span> <span class="xn-text">Menu</span></a>
                        <ul class="animated zoomIn">
                            <li class="xn-openable" >
                                <a href="#"><span class="fa fa-clock-o"></span> Academics</a>
                                <!-- style="height:400px;overflow-y: auto;" -->
                                <ul  >
                            
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Application Registration</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Attendance</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Batch Summary</a></li>
                                    <li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span>Certificates</a>
                                <ul>
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Certificates</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Transfer Certificates</a></li>
                                </ul>
                            </li>	
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Calender</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Discipline</a></li>	
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Examination</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Gradebook</a></li>		
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>ID Cards</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Leave</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Library</a></li>
									<li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Placement</a></li>		
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Remark</a></li>
                              
									<li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span> Student</a>
                                <ul >
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Student Records</a></li>
                                    <li><a href="newstudent"><span class="fa fa-align-justify"></span>Student Admissions</a></li>
									<li><a href="students"><span class="fa fa-align-center"></span>Students Details</a></li>
                          	
                                </ul>
                            </li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Subjects Center</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Timetable</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Transfer Certificates</a></li>
                      
                                </ul>
                                
                            </li>
							   <li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span> Collaboration</a>
                                <ul>
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Alumni</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Blog</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Collaborate</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Discussions</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Documents</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>E-Mail</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Event Creation</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Forms</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Gallery</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>News</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Poll</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Tasks</a></li>
                                </ul>
                            </li>
							   <li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span> Data & Reports</a>
                                <ul>
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Custom Report</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Custom Import</a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Data Export</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Data Managment </a></li>
									<li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Audit</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span>Reports</a></li>
                                </ul>
                            </li>

                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-envelope"></span> Administration</a>
                                <ul class="animated zoomIn">
                                    <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Finance</a></li>
                                    <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span>Hostel</a></li>
                                    <li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span> Human Resource</a>
                                <ul >
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Employee Leave Management</a></li>
                                    <li><a href="newEmployee"><span class="fa fa-align-justify"></span>Employee admission</a></li>
									<li><a href="students"><span class="fa fa-align-center"></span>Employees</a></li>
                                    <li><a href="students"><span class="fa fa-align-center"></span>Employee Assignment</a></li>

                                    <li><a href="students"><span class="fa fa-align-center"></span>Payroll & Payslip Management</a></li>
                                    <li class="xn-openable">
                                     <a href="#"><span class="fa fa-clock-o"></span> HR Settings</a>
                                <ul >
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Employee Category</a></li>
                                    <li><a href="newstudent"><span class="fa fa-align-justify"></span>Employee Department</a></li>
									<li><a href="students"><span class="fa fa-align-center"></span>Working Day Settings</a></li>
                                    <li><a href="students"><span class="fa fa-align-center"></span>Bank Details</a></li> 

                                     <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span>Payroll Settings</a></li>
                                    <li><a href="newstudent"><span class="fa fa-align-justify"></span>Employee Position</a></li>
									<li><a href="students"><span class="fa fa-align-center"></span>Employee Grade</a></li>
                                    <li><a href="students"><span class="fa fa-align-center"></span>Leave Types</a></li> 

                                    		<li><a href="students"><span class="fa fa-align-center"></span>Additional Details</a></li>
                                    <li><a href="students"><span class="fa fa-align-center"></span>Leave Groups</a></li>  

                                    
                          	
                                </ul>
                            </li>
                          	
                                </ul>
                            </li>
									<li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span>Inventory</a></li>
                                    <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span>Online Payment</a></li>
                                    <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span>Reminder</a></li>
									<li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span>Settings</a></li>
                                    <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span>Transport</a></li>
                                    <li><a href="users"><span class="fa fa-pencil"></span>Users</a></li>
                                </ul>
								
                            </li>
							     <li class="xn-openable">
                                <a href="#"><span class="fa fa-envelope"></span> Apps</a>
                                <ul class="animated zoomIn">
                                    <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Manage App</a></li>
                                    
                                </ul>
                            </li>     

							<li class="xn-openable">
                                <a href="#"><span class="fa fa-envelope"></span> Personal Settings</a>
                                <ul class="animated zoomIn">
                                    <li><a href="changepassword"><span class="fa fa-inbox"></span>Change Password</a></li>
									<li><a href="profile"><span class="fa fa-inbox"></span>My Profile</a></li>
									<li><a href="logout"><span class="fa fa-inbox"></span>Logout</a></li>
                                    
                                </ul>
                            </li>     							
                        </ul>
						
                    </li>
            
                    
                 
                 
                    <?php }?>
                  
                    <!-- SIGN OUT -->
					 <!-- MESSAGES -->
					    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li>
                 
                    <?php if($FirstLogin!='Yes'){?>
                      
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
               
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                   
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <?php }?>
                    <input type="hidden" id="myemailaddress" value="<?php echo $Email ?>" >

                    
                    <li style="float:right" ><a href="#"><span class="fa fa-user"></span>WELCOME: <?php echo $fullname ?> </a></li>
                    
                  
                    <!-- END TASKS -->
                  
                    <!-- END SIGN OUT -->                                        
                </ul>
		<!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->