 <!-- END X-NAVIGATION VERTICAL -->                     
 <?php include ('header/top.php') ;?>   
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb" style="margin-top:50px" >
                  
					
					     <li><a href="#">Dashboard</a></li>
                         <li><a href="#">Users</a></li>
					   	<li class="active">New User</li> 
                    
                </ul>
                <!-- END BREADCRUMB -->                
                 <div class="page-content-wrap">
                    
						<div class="row">
                        <div class="col-md-12">
						<div class="form-horizontal">
                            <div class="panel panel-default">
							  <div class="panel-heading">
                                    <center><h3 ><strong>NEW</strong> USER</h3></center>
                                    <ul class="panel-controls">
                                       <!-- <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>-->
                                    </ul>
                                </div>
								   <div class="panel-body">
                                              <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-2 col-xs-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" id="Firstname"  class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>
                                            <span class="help-block">FIRST NAME</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">LAST NAME</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Othernames" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">OTHER NAME</span>
                                        </div>
                                    </div>
									
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Name-->
                                        </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" id="Email" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>                                            
                                            <span class="help-block">USER EMAIL</span>
                                        </div>
                                    </div>			

                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Name-->
                                        </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" id="Contact" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>                                            
                                            <span class="help-block">CONTACT</span>
                                        </div>
                                    </div>								
								<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Full Name-->
                                        </label>                                     
                                    </div>
										<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            
                                        </label>
                                       <div class="col-md-3 col-xs-12">
                                            <select id="Gender" class="form-control select" onkeyup="this.value = this.value.toUpperCase();">
                                                <option selected disabled >CHOOSE GENDER</option>
                                                <option value="MALE">MALE</option>
                                                <option value="FEMALE">FEMALE</option>
                                            </select>
                                            <span class="help-block">CHOOSE GENDER</span>
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            <select id="Privilages" class="form-control select" onkeyup="this.value = this.value.toUpperCase();">
                                                <option selected disabled >CHOOSE USER ROLE</option>
                                                <option value="ADMIN" >SYSM ADMIN </option>
                                                
                                            </select>
                                            <span class="help-block">CHOOSE USER ROLE</span>
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                               
                                        </label>
                                       <div class="col-md-3 col-xs-12">
                                            <button class="btn btn-default" onclick="clearFunction()">CLEAR FORM</button>   
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                           <button id="newUser" class="btn btn-primary pull-right">CREATE USER</button>
                                        </div>
                                    </div>
									
									                             
                                    
									
									
									</div>
									 <div class="panel-footer">
                                     <center> <span id="error_exist" style="color:#red;  border-width: 2px; font-family: Verdana; font-size: 18px "></span>  </center>
                                    <center><img  id="loading" src="img/loaders/loader.gif" style="display: none; height:50px; "/></center>
                                </div>
                           
						   </div>
						   </div>
						   </div>
						   </div>
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
		
		        <!-- MODALS -->
        



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
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="js/settings.js"></script> -->

        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->     

     <script>
    $(document).on('click','#newUser',function(e) {
             
 
            var Firstname= $('#Firstname').val();
            var Surname = $('#Surname').val();
            var Othernames = $('#Othernames').val();
            var Email = $('#Email').val();
            var Contact = $('#Contact').val();
            var Gender = $('#Gender').val();
            var Privilages = $('#Privilages').val();  
            var user_email=$('#myemailaddress').val();  

if (  (Firstname!="") && (Surname !="") && (Othernames !="") && (Email !="") && (Contact !="")   && (Gender !="") && (Privilages !="") ) 
            {
                // alert('hii');
                                $('#error_exist').html("");
                                $("#loading").show(); 
                                e.preventDefault();
                                        $.ajax({
                                            type:'POST',
                                            data:{
                                                Firstname:Firstname,
                                                Surname:Surname,
                                                Othernames:Othernames,
                                                Email:Email,
                                                Contact:Contact,
                                                Gender:Gender,
                                                Privilages:Privilages ,

                                                },
                                            url:'<?php echo site_url('Controller_Users/newusercreation'); ?>',
                                            success:function(result)
                                            {
                                                //alert(result);
                                                   $("#loading").hide();
                                                    if(result==1)
                                                    {
                                                    $('#error_exist').html("USER ADDED SUCCESSFULL");
                                                   // window.location.href = "dashboard";
                                                   // location.reload();
                                                    }
                                                else{
                                                        // window
                                                    $('#error_exist').html("A USER WITH THAT EMAIL ADDRESS EXIST ALREADY");
                                                        //location.reload();

                                                }

                                            }
                                    });
            }
            else{
                $('#error_exist').html("FIELDS CANT BE EMPTY");

            }


           
              });

            function clearFunction() {
                $('#Firstname').val('');
                $('#Surname').val('');
                $('#Othernames').val('');

                $('#Email').val('');
                $('#Contact').val('');
                $('#Gender').val('');

                $('#Privilages').val('');
                
            }

</script>

    </body>
</html>



  