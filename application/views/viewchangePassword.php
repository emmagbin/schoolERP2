 <!-- END X-NAVIGATION VERTICAL -->                     
 <?php include ('header/top.php') ;?>   
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb" style="margin-top:50px" >
                <input type="hidden" id="mylogintoken" value="<?php echo $mylogintoken ?>" 
                  
					
					     <li><a href="#">Dashboard</a></li>
                         <li><a href="#">Personnal Settings</a></li>
					   	<li class="active">Change Password</li> 
                    
                </ul>
                <!-- END BREADCRUMB -->                
                 <div class="page-content-wrap">
                    
						<div class="row">
                        <div class="col-md-12">
						<div class="form-horizontal">
                            <div class="panel panel-default">
							  <div class="panel-heading">
                                    <center><h3 ><strong>CHANGE</strong> USER PASSWORD</h3></center>
                                    <ul class="panel-controls">
                                       <!-- <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>-->
                                    </ul>
                                </div>
								   <div class="panel-body">
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Name-->
                                        </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  id="old_pass" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>                                            
                                            <span class="help-block">OLD PASSWORD</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Name-->
                                        </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  id="new_pass" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>                                            
                                            <span class="help-block">NEW PASSWORD</span>
                                        </div>
                                    </div>
									
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Name-->
                                        </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  id="new_pass_confirm" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>                                            
                                            <span class="help-block">CONFIRM NEW PASSWORD</span>
                                        </div>
                                    </div>								

							
										<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                               
                                        </label>
                                       <div class="col-md-3 col-xs-12">
                                            <button class="btn btn-default" onclick="clearFunction()">CLEAR FORM</button>   
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                           <button id="changepassword" class="btn btn-primary pull-right">UPDATE PASSWORD</button>
                                        </div>
                                    </div>

									</div>
									 <div class="panel-footer">
                                   <!-- <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right">Submit</button>-->
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
        <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Basic Modal</h4>
                    </div>
                    <div class="modal-body">
                        Some content in modal example
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    $(document).on('click','#changepassword',function(e) {
 
            var password= $('#old_pass').val();
            var new_pass = $('#new_pass').val();
            var new_pass_confirm = $('#new_pass_confirm').val();
            var password_length = new_pass.length;
            var user_email=$('#myemailaddress').val();  
            var mylogintoken=$('#mylogintoken').val(); 

            if (  (password!="") && (new_pass !="") && (new_pass_confirm !="")  ) 
            {
                        if (new_pass == new_pass_confirm)
                        {
                            if (password_length >= '8')
                            {
                                $('#error_exist').html("");
                                $("#loading").show(); 
                                e.preventDefault();
                                        $.ajax({
                                            type:'POST',
                                            data:{password:password,user_email:user_email,new_pass:new_pass,mylogintoken:mylogintoken },
                                            url:'<?php echo site_url('Controller_Users/changing_password'); ?>',
                                            success:function(result)
                                            {
                                                //alert(result);
                                                   $("#loading").hide();
                                                    if(result==1)
                                                    {
                                                    $('#error_exist').html("PASSWORD CHANGE SUCCESSFULL");
                                                    window.location.href = "dashboard";
                                                   // location.reload();
                                                    }
                                                else{
                                                        // window
                                                    $('#error_exist').html("OLD PASSWORD IS WRONG");
                                                        //location.reload();

                                                }

                                            }
                                    });

                            }
                            else{
                                $('#error_exist').html("PASSWORD LENGTH IS TOO SHORT");
                            }    
                        }
                        else{
                              $('#error_exist').html("PASSWORD CONFIRMATION DONT MATCH NEW PASSWORD");
                            
                        }
            }
            else{
                $('#error_exist').html("FIELDS CANT BE EMPTY");

            }


           
              });

            function clearFunction() {
                $('#old_pass').val('');;
                $('#new_pass').val('');;
                $('#new_pass_confirm').val('');;
            }
</script>



    </body>
</html>
