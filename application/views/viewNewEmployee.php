 <!-- END X-NAVIGATION VERTICAL -->                     
 <?php include ('header/top.php') ;?>   
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb" style="margin-top:50px" >

                  
					
					     <li><a href="#">Dashboard</a></li>
                         <li><a href="#">Administration</a></li>
                         <li><a href="#">Human Resource</a></li>
					   	<li class="active">Employee Admission</li> 
                    
                </ul>
                <!-- END BREADCRUMB -->                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT WIZARD -->
                            <div class="block">
                                <div class="wizard">

                                    <ul>
                                        <li>
                                            <a href="#step-1">
                                                <span class="stepNumber">1</span>
                                                <span class="stepDesc">EMPLOYEE PERSONAL DETAILS <br /><small>Step 1</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <span class="stepNumber">2</span>
                                                <span class="stepDesc">ADDITIONAL DETAILS<br /><small>Step 2 </small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-3">
                                                <span class="stepNumber">3</span>
                                                <span class="stepDesc">EMPLOYEE PRIVELEDGES<br /><small>Step 3 </small></span>                   
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-4">
                                                <span class="stepNumber">4</span>
                                                <span class="stepDesc">PICTURE IDENTIFICATION SECTION<br /><small>Step 4 </small></span>                   
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="step-1">   

										<div  role="form" class="form-horizontal">
										  <div class="panel panel-default">
											  <div class="panel-heading">
													<h3 ><strong>EMPLOYEE</strong>INFORMATION</h3>
													<ul class="panel-controls">
													</ul>
												</div>
									<div class="panel-body">
										
										<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-2 col-xs-4">
                                            <div class="input-group">
                                         
                                                <input type="text" value="<?php echo $myadissionNo ?>" readonly class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>
                                            <span class="help-block">AdmissionNo</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                        
                                            <input type="text" value="<?php echo $mystudent_id ?>" readonly class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">StudentID</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" value="<?php echo date('Y-m-d') ?>" readonly class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">AdmissionDate</span>
                                        </div>
                                    </div>									
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
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-2 col-xs-4">										
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   <input type="date" id="dp-3" class="form-control" value="06-06-2014" data-date="06-06-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="years"/>
                                            </div>
                                            <span class="help-block">DateOfBirth</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">BirthPlace</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <select id="Gender" class="form-control select" onkeyup="this.value = this.value.toUpperCase();">
                                                <option selected disabled >CHOOSE GENDER</option>
                                                <option value="MALE">MALE</option>
                                                <option value="FEMALE">FEMALE</option>
                                            </select>
                                            <span class="help-block">GENDER</span>
                                        </div>
                                    </div>								
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-2 col-xs-4">										
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>
                                            <span class="help-block">EMAIL</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">ADDRESS 1</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">ADDRESS 2 </span>
                                        </div>
                                    </div>									
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-3 col-xs-6">
										
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>
                                            <span class="help-block">CONTACT 1</span>
                                        </div>
                                        <div class="col-md-3 col-xs-6">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">CONTACT 2</span>
                                        </div>
                                      
                                    </div>								
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-3 col-xs-6">
										
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>
                                            <span class="help-block">NATIONALITY</span>
                                        </div>
                                        <div class="col-md-3 col-xs-6">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">NATIONALITY ID</span>
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
										</div>
										  </div>
									
										
										
                                    </div>
									</div>
                                    <div id="step-2">
                                        <div  role="form" class="form-horizontal">
										  <div class="panel panel-default">
											  <div class="panel-heading">
													<h3 ><strong>PARENT/GUARDIAN</strong>INFORMATION</h3>
													<ul class="panel-controls">
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
                                            <span class="help-block">ParentID</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">ID</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <select id="Gender" class="form-control select" onkeyup="this.value = this.value.toUpperCase();">
                                                <option selected disabled >CHOOSE RELATIONSHIP</option>
                                                <option value="FATHER">FATHER</option>
                                                <option value="MOTHER">MOTHER</option>
												<option value="OTHER">OTHERS</option>
                                            </select>
                                            <span class="help-block">RELATIONSHIP</span>
                                        </div>
                                    </div>	
									
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
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-2 col-xs-4">										
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>
                                            <span class="help-block">EMAIL</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">ADDRESS 1</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">ADDRESS 2 </span>
                                        </div>
                                    </div>	

									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-2 col-xs-4">										
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>
                                            <span class="help-block">CONTACT 1</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">CONTACT 2</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="date"  class="form-control" value="06-06-2014" data-date="06-06-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="years"/>
                                            <span class="help-block">DATE OF BIRTH </span>
                                        </div>
                                    </div>	
									
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-2 col-xs-4">										
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>
                                            <span class="help-block">OCCUPATION</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">COUNTRY</span>
                                        </div>
                                        <div class="col-md-2 col-xs-4">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">NATIONAl ID </span>
                                        </div>
                                    </div>	
									
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">
                                            <!--User Full Name-->
                                        </label>
                                        <div class="col-md-3 col-xs-6">
										
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            </div>
                                            <span class="help-block">EDUCATION</span>
                                        </div>
                                        <div class="col-md-3 col-xs-6">
                                            <input type="text" id="Surname" class="form-control" onkeyup="this.value = this.value.toUpperCase();"/>
                                            <span class="help-block">HOME TOWN</span>
                                        </div>                                      
                                    </div>

										</div>
										  </div>
									
										
										
                                    </div>
                                    </div>                      
                                    <div id="step-3">
                                        <div  role="form" class="form-horizontal">
										  <div class="panel panel-default">
											  <div class="panel-heading">
													<h3 ><strong>PRIVELEDGES </strong> INFORMATION</h3>
													<ul class="panel-controls">
													</ul>
												</div>
									<div class="panel-body">
                                    
                                    <div class="col-md-12 col-xs-12">  
                                    <center>
                                    <!-- START ACCORDION -->        
                                    <div class="panel-group accordion">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#accOneColOne">
                                                        Collapsible Group Item #1
                                                    </a>
                                                </h4>
                                            </div>                                
                                            <div class="panel-body panel-body-open" id="accOneColOne">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>                                
                                        </div>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#accOneColTwo">
                                                        Collapsible Group Item #2
                                                    </a>
                                                </h4>
                                            </div>                                
                                            <div class="panel-body" id="accOneColTwo">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>                                
                                        </div>
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#accOneColThree">
                                                        Collapsible Group Item #3
                                                    </a>
                                                </h4>
                                            </div>                                
                                            <div class="panel-body" id="accOneColThree">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>                                
                                        </div>
                                    </div>
                                    </center>
                                     <!-- END ACCORDION -->     
                                   </div>
                                 
							         	</div>
									 </div>
									
										
										
                                    </div>
                                    </div>
                                    <div id="step-4">
                                    <div  role="form" class="form-horizontal">
										  <div class="panel panel-default">
											  <div class="panel-heading">
													<h3 ><strong>HEALTH </strong> INFORMATION</h3>
													<ul class="panel-controls">
													</ul>
												</div>
									<div class="panel-body">

                                    <div class="form-group">
                                               
                                                <div class="col-md-12 col-xs-12">                                      
                                                    
                                        <center>  
										<input type="file" class="fileinput btn-danger" name="pictureforkid" id="filename3"  accept="image/*" onchange=" Kidpreview_image1(event)"
										data-filename-placement="inside" title="CLICK TO SELECT UPLOAD PICTURE"/> 
																				
											
											</center>
                                        </div>                                      
                                           </div>
                                           
                                           <div class="form-group">
                                               
                                               <div class="col-md-12 col-xs-12 wrapper">                                         
                                                        

                                                            <script type='text/javascript'>
                                                                function Kidpreview_image1(event) 
                                                                {

                                                                 var reader = new FileReader();
                                                                 reader.onload = function()
                                                                 {
                                                                  var output = document.getElementById('output_image1');
                                                                  output.src = reader.result;
                                                                 }
                                                                 reader.readAsDataURL(event.target.files[0]);
                                                                }
                                                                </script>
                                                                <style type="text/css">
                                                                  .wrapper
                                                                  {
/*                                                                   text-align:right;*/

                                                                   height: 100%;
                                                                    width:100%;
                                                                    /*object-fit: contain;*/
                                                                  }
                                                                
                                                                </style>

                     
                                                                
						<center> <img id="output_image1" style='height: 200px; width: 200px; object-fit: contain'/> 
						
						<span class="help-block">PICTURE OF EMPLOYEE</span>		
						<center>
                                                                          
														 		  
                                                </div>
                                            </div>
										
			


									

									
									
								</div>
										  </div>
									
										
										
                                    </div>


                    
                                    </div>                           

                                </div>
                            </div>                                       
                            <!-- END DEFAULT WIZARD -->

                           
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
		
				 <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
        <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.js"></script>
        <!-- END PAGE PLUGINS -->
		

        
        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
        
    </body>
</html>

