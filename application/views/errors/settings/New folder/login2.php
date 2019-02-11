<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>mInsurance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="login2assets/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="login2assets/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="login2assets/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="login2assets/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="login2assets/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="login2assets/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="login2assets/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="login2assets/pages/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="login2assets/pages/css/windows.chrome.fix.css" />'
    }
    </script>

      <script type="text/javascript">
          function changeImage()
          {
              var img = document.getElementById("img");
              img.src = images[x];
              x++;

              if(x >= images.length){
                  x = 0;
              }

              fadeImg(img, 100, true);
              setTimeout("changeImage()", 10000);
          }

          function fadeImg(el, val, fade){
              if(fade === true){
                  val--;
              }else{
                  val ++;
              }

              if(val > 0 && val < 100){
                  el.style.opacity = val / 100;
                  setTimeout(function(){fadeImg(el, val, fade);}, 20000);
              }
          }

          var images = [],
                  x = 0;

          images[0] = "login2assets/assets/img/imagee1.png";
          images[1] = "login2assets/assets/img/imagee2.png";

          setTimeout("changeImage()", 10000);
      </script>


  </head>
  <body class="fixed-header" >

    <!-- START PAGE-CONTAINER -->
    <div class="login-wrapper " >
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic"  style="background-color: darkgoldenrod">
        <!-- START Background Pic-->
        <img id="img" src="login2assets/assets/img/imagee1.png" data-src="login2assets/assets/img/imagee1.png" data-src-retina="login2assets/assets/img/imagee1.png" >
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20" style = "color: darkgoldenrod">
          <h4 class="semi-bold text-white">
					A Micro-Contributions Insurance Platform</h4>
          <p class="small text-white">
             © 2018 Engboxx (Pty) Ltd.
          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->

      <div class="login-container bg-white"  style="border-left:5px solid #000">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <img src="login2assets/assets/img/logo.png" alt="logo" data-src="login2assets/assets/img/logo.png" data-src-retina="login2assets/assets/img/logo.png" width="204" height="64">
          <p class="p-t-35">Sign In With Your mInsurance Management System Account</p>
          <!-- START Login Form -->
       <!--    <form id="form-login" class="p-t-15" role="form" action="index.html"> -->

             <?php echo validation_errors(); ?>
           
           <form class="login-form"  method="post" action="Verifylogin">

            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Email</label>
              <div class="controls">
      <input class="form-control" type="text" name="username" placeholder="ama.mantebea@minsurance.com" autofocus required="">

              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Password</label>
              <div class="controls">
                <input class="form-control" type="password"  name="password" placeholder="Password" required="">
        
              </div>
            </div>
            <!-- START Form Control-->
            <div class="row">
              <div class="col-md-6 no-padding">

              </div>
              <div class="col-md-6 text-right">
                <a href="#" class="text-info small">Forgotten Password?</a>
              </div>
            </div>
            <!-- END Form Control-->
            <button class="btn btn-primary btn-cons m-t-10" type="submit" style="background-color: darkgoldenrod; border-color: darkgoldenrod">Sign in</button>
          </form>
          <!--END Login Form-->
          <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">

              <div class="col-sm-12 no-padding m-t-10">
                <p><small>
                    <a href="#" class="text-info "> About Our Company </a> | <a href="#" class="text-info "> Privacy Policy</a> | <a href="#" class="text-info ">Terms &amp Conditions</a> | <a href="#" class="text-info ">Cookie Policy</a> </small>



                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- BEGIN VENDOR JS -->
    <script src="login2assets/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="login2assets/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="login2assets/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="login2assets/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="login2assets/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="login2assets/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="login2assets/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="login2assets/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="login2assets/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="login2assets/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="login2assets/assets/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="login2assets/assets/plugins/classie/classie.js"></script>
    <script src="login2assets/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="login2assets/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="login2assets/pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="login2assets/assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>