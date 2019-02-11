<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="loginAssets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="loginAssets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="loginAssets/css/matrix-login.css" />
        <link href="loginAssets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">     
       
           <form id="loginform" class="form-vertical"  method="post" action="Verifylogin">

            <!-- <form id="loginform" class="form-vertical" action="index.html"> -->
				 <div class="control-group normal_text"> <h3>ERP</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                        <!-- <?php echo form_error('username'); ?> -->
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text"
                            name="username" value="<?php echo set_value('username'); ?>"
                             placeholder="Username" required onkeyup="this.value = this.value.toUpperCase();"/>
                             
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                  
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input 
                            type="password" placeholder="Password" value="<?php echo set_value('password'); ?>"
                              name="password" required onkeyup="this.value = this.value.toUpperCase();"/>
                            
                        </div>
                    </div>
                </div>
              <center>  <?php echo validation_errors(); ?> </center>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                   
                    <!-- <a href="dashboard">login 1</a> -->

                    <!-- <span class=" "><a type="submit"  class="btn btn-success" /> 
                    Sign in</a></span> -->

                    <button class="btn btn-success pull-right" type="submit" >Login</button>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text"
                             placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" 
                    id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="loginAssets/js/jquery.min.js"></script>  
        <script src="loginAssets/js/matrix.login.js"></script> 
    </body>

</html>
