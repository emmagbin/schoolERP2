
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mmInsurance</title>
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" href="favicon.ico" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#27ae60">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/css/elephant.min.css">
    <link rel="stylesheet" href="assets/css/application.min.css">
    <link rel="stylesheet" href="assets/css/demo.min.css">
    <!-- <script src="assets/js/changepassword.js"></script>-->

    <script src="jquery-2.1.4.js"></script>
<script lang="javascript" src="xlsx.full.min.js"></script>
<script lang="javascript" src="FileSaver.min.js"></script>  




<link rel="stylesheet" type="text/css" href="styles.css">
   
  </head>
  <body class="layout layout-header-fixed">
    
     <div class="layout-header">
      <div class="navbar navbar-default" style = "background-color: #fff; border-bottom: 4px solid darkgoldenrod">
        <div class="navbar-header" >
          <a class="navbar-brand navbar-brand-center" href="user">
            <img class="navbar-brand-logo" src="assets/img/logo.png" alt=""  style = " height: 35px; width:
      120px; margin-top: -10px">
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" 
      data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars" >
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="img/no.png" alt="Teddy Wilson"><span style="font-family: Candara; font-size: 11px">Ama Mantebea </span>

            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span></span>

            </button>
            <ul class="nav navbar-nav navbar-right">
              <li class="visible-xs-block">

              </li>


           <li class="dropdown hidden-xs">
                <button class="navbar-account-btn"  aria-haspopup="true" style="color: darkgoldenrod">
                  <img class="rounded" width="30" height="30" src="assets/img/no.png" alt="" style="color: darkgoldenrod;">  <span style="font-family: Candara; font-size: 11px"><?php echo $fullName;?> &nbsp &nbsp </span>  

                   <button class="btn  btn-success" style = "text-transform: capitalize; margin-top: 5px; background-color: darkgoldenrod; border-color: darkgoldenrod"  type="button" data-toggle="modal" data-target="#logout"> <i class = "icon icon-lock"></i> &nbsp Logout</button>

                    &nbsp &nbsp <button class="btn  btn-success" style = "text-transform: capitalize; margin-top: 5px; background-color: #dbdbdb; color: darkgoldenrod; border-color: #dbdbdb"  type="button" data-toggle="modal" data-target="#pwdChange"> <i class = "icon icon-edit"></i> &nbsp Change Password</button>

                  <input type="hidden" value="<?php echo $userEmail;?>" name="">

                </button>


              </li>


              <li class="visible-xs-block">
                <a href="login-1.html">
                  <span class="icon icon-power-off icon-lg icon-fw"></span>
                  Sign out
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

