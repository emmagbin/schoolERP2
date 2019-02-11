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
  </head>
  <body class="layout layout-header-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default" style = "background-color: #fff">
        <div class="navbar-header" style = "background-color: #600076">
          <a class="navbar-brand navbar-brand-center" href="audience.html">
            <img class="navbar-brand-logo" src="assets/img/logo.png" alt=""  style = " height: 24px; width: 100px;">
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
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
                <button class="navbar-account-btn"  aria-haspopup="true" style="color: #600076">
                  <img class="rounded" width="30" height="30" src="assets/img/no.png" alt="" style="color: #600076;">  <span style="font-family: Candara; font-size: 11px">Ama Mantebeah &nbsp &nbsp </span>   <button class="btn  btn-success" style = "text-transform: capitalize; margin-top: 5px; background-color: #600076; border-color: #600076"  type="button" data-toggle="modal" data-target="#logout"> <i class = "icon icon-lock"></i> &nbsp Logout</button> &nbsp &nbsp <button class="btn  btn-success" style = "text-transform: capitalize; margin-top: 5px; background-color: #dbdbdb; color: #600076; border-color: #dbdbdb"  type="button" data-toggle="modal" data-target="#pwdChange"> <i class = "icon icon-edit"></i> &nbsp Change Password</button>

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
    <div class="layout-main">
      <div class="layout-sidebar" >
        <div class="layout-sidebar-backdrop" ></div>
        <div class="layout-sidebar-body" >
          <div class="custom-scrollbar" >
            <nav id="sidenav" class="sidenav-collapse collapse" >
              <ul class="sidenav">
                  <li class="sidenav-heading" style="color: #000"><b><u>User Management</u></b></li>
                  <li class="sidenav-item" style="background-color: #600076;">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Accounts Utilities</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-briefcase"></span>
                          <span class="sidenav-label" style="font-size: 11px">Role Management</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-users"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Create A New User</span>
                      </a>

                  </li>

                  <li class="sidenav-heading" style="color: #000"><b><u>Collection Agents Management</u></b></li>
                  <li class="sidenav-item">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit"></span>
                          <span class="sidenav-label" style="font-size: 11px" >Data Utilities</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-money"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Collections Cash-In</span>
                      </a>

                  </li>


                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-users"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Register A New Agent</span>
                      </a>

                  </li>


                  <li class="sidenav-heading" style="color: #000"><b><u>Onboarded Organizations</u></b></li>
                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-globe"></span>
                          <span class="sidenav-label" style="font-size: 11px">Organizations Utilities</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-user"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Onboard An Organization</span>
                      </a>

                  </li>

                <li class="sidenav-heading" style="color: #000"><b><u>Subscribers Analytics &amp Insights</u></b></li>
                <li class="sidenav-item ">
                  <a href="dashboard-1.html" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-users"></span>
                    <span class="sidenav-label" style="font-size: 11px">Subscribers Data Mart</span>
                  </a>
                                 </li>
                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-sort-numeric-asc"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Subscriber Account Balance</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-sort-numeric-asc"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Redeem Insurance</span>
                      </a>

                  </li>


                  <li class="sidenav-item  ">
                      <a href="dashboard-1.html" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-file-archive-o"></span>
                          <span class="sidenav-label" style="font-size: 11px">Subscriber Mini Statement</span>
                      </a>
                  </li>



                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-database"></span>
                          <span class="sidenav-label" style="font-size: 11px">Where-And-Or Analysis</span>
                      </a>

                  </li>

                  <li class="sidenav-heading" style="color: #000"><b><u>Revenue Reporting &amp Analytics</u></b></li>
                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-line-chart"></span>
                          <span class="sidenav-label" style="font-size: 11px">Agent Collections RE</span>
                      </a>

                  </li>
                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-pie-chart"></span>
                          <span class="sidenav-label" style="font-size: 11px">Organizations Contributions RE</span>
                      </a>

                  </li>
                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-area-chart"></span>
                          <span class="sidenav-label" style="font-size: 11px">Mobile Money Contributions RE</span>
                      </a>

                  </li>

                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-bar-chart"></span>
                          <span class="sidenav-label" style="font-size: 11px">Cash Out RE</span>
                      </a>

                  </li>







              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">User Management</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:#600076">Utilities</small>

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
                                  <th>User Email</th>
                                  <th>Staff Name</th>
                                  <th>Created On</th>
                                  <th>Sex</th>
                                  <th>User Role</th>
                                  <th>Status</th>
                                  <th><Center> Actions</Center></th>


                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>2017/05/18</td>
                                  <td>11:45:34 AM</td>
                                  <td>10K</td>
                                  <td>10K</td>
                                  <td>1</td>
                                  <td>120K</td>

                                  <td><Center> <button class="btn  btn-warning" style = "text-transform: capitalize; background-color: goldenrod; ; border-color: goldenrod"  type="button" data-toggle="modal" data-target="#editUser"> <i class = "icon icon-edit"></i></button> | <button class="btn  btn-warning" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"> <i class = "icon icon-lock"></i></button> |  <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"> <i class = "icon icon-trash"></i></button></Center></td>




                              </tr>
                              <tr>
                                  <td>2017/05/18</td>
                                  <td>11:45:34 AM</td>
                                  <td>10K</td>
                                  <td>10K</td>
                                  <td>1</td>
                                  <td>120K</td>

                                  <td><Center> <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: goldenrod; border-color: goldenrod"  type="button" data-toggle="modal" data-target="#editUser"> <i class = "icon icon-edit"></i></button> | <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: black; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"> <i class = "icon icon-lock"></i></button> |  <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"> <i class = "icon icon-trash"></i></button></Center></td>




                              </tr>
                              <tr>
                                  <td>2017/05/18</td>
                                  <td>11:45:34 AM</td>
                                  <td>10K</td>
                                  <td>10K</td>
                                  <td>1</td>
                                  <td>120K</td>

                                  <td><Center> <button class="btn  btn-warning" style = "text-transform: capitalize;background-color: goldenrod; border-color: goldenrod"  type="button" data-toggle="modal" data-target="#editUser"> <i class = "icon icon-edit"></i></button> | <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"> <i class = "icon icon-lock"></i></button> |  <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"> <i class = "icon icon-trash"></i></button></Center></td>




                              </tr>
                              <tr>
                                  <td>2017/05/18</td>
                                  <td>11:45:34 AM</td>
                                  <td>10K</td>
                                  <td>10K</td>
                                  <td>1</td>
                                  <td>120K</td>

                                <td> <Center> <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: goldenrod; border-color: goldenrod"  type="button" data-toggle="modal" data-target="#editUser"> <i class = "icon icon-edit"></i></button> | <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"> <i class = "icon icon-lock"></i></button> |  <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"> <i class = "icon icon-trash"></i></button></Center></td>




                              </tr>


                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>

            <div class="divider">
                <div class="divider-content " style = "color: #600076"><b><i class="icon icon-line-chart"></i> Statistics</b></div>
            </div>
          <div class="row">


              <div class="col-md-6">
                  <div class="panel panel-body" data-toggle="match-height">
                      <h6 class="text-left m-t-0">Gender Distribution</h6>
                      <div class="row">

                          <div class="col-xs-3">
                              <br><br>
                              <ul class="list-unstyled">
                                  <li class="m-b">
                                      <small class="nowrap">
                                          <span class="icon icon-square icon-fw" style="color: #600076"></span>
                                          Male
                                      </small>
                                  </li>
                                  <li class="m-b">
                                      <small class="nowrap">
                                          <span class="icon icon-square icon-fw" style="color: gainsboro"></span>
                                          Female
                                      </small>
                                  </li>


                              </ul>
                          </div>
                          <div class="col-xs-6">
                              <canvas data-chart="pie" data-labels='["Male", "Female"]' data-values='[{"backgroundColor": ["#600076", "gainsboro"], "data": [137363, 34979]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
                          </div>
                      </div>
                  </div></div>


                  <div class="col-md-6">
                      <div class="panel panel-body" data-toggle="match-height">
                          <h6 class="text-left m-t-0">Account Status Distribution</h6>
                          <div class="row">

                              <div class="col-xs-3">
                                  <br><br>
                                  <ul class="list-unstyled">
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: #600076"></span>
                                              Active
                                          </small>
                                      </li>
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: gainsboro"></span>
                                              Disabled
                                          </small>
                                      </li>


                                  </ul>
                              </div>
                              <div class="col-xs-6">
                                  <canvas data-chart="pie" data-labels='["Active", "Disabled"]' data-values='[{"backgroundColor": ["#600076", "gainsboro"], "data": [137363, 34979]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
                              </div>
                          </div>
                      </div>
                  </div>





          </div></div>




    <div id="logout" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: #600076">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-lock icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 14px">System Logout</h4>

                    </div>
                </div>
                <div class="modal-tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Logout From LoyalStar?</a></li>

                    </ul>

                </div>
                <div class="modal-footer">
<center><button type="button" class="btn btn-primary" style="background-color: #600076"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                </div>
            </div>
        </div>
    </div>


      <div id="createUser" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: #600076">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">Create A New User</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                              <form action="/">
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">User's Full Name</label>
                                      <input id="form-control-6" class="form-control" type="password" style="font-size: 11px"></div>

                                          <div class="col-md-4">
                                              <label  class="form-label" style="font-size: 12px">Sex</label>

                                              <select id="demo-select2-2" class="form-control" style="font-size: 11px">
                                                  <option value="administrator" >Male</option>
                                                  <option value="author">Sex</option>
                                                  <option value="contributor">Other</option>

                                              </select>
                                          </div>

                                  </div></div>
                                  <div class="form-group">
                                      <div class="row">
<div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">User Email</label>
                                      <input id="form-control-7" class="form-control" type="password" style="font-size: 11px">
</div>


                                      <div class="col-md-4">
                                          <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                          <input id="form-control-10" class="form-control" type="password" style="font-size: 11px">
                                      </div>

                                  </div>
</div><hr style="border-color: #600076">

                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">User Role</label>
                                              <select id="demo-select2-3" class="form-control" style="font-size: 11px">
                                                  <option value="administrator" >Male</option>
                                                  <option value="author">Sex</option>
                                                  <option value="contributor">Other</option>

                                              </select>
                                          </div>



                                      </div>
                                  </div>


                              </form>

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="button" class="btn btn-primary" style="background-color: #600076"><i class="icon icon-save"></i> Save</button>
                  </div>
              </div>
          </div>
      </div>



      <div id="pwdChange" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: #600076">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-edit icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">Change Password</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display">
                              <form action="/">
                                  <div class="form-group">

                                      <label  class="form-label" style="font-size: 12px">Old Password</label>
                                      <input id="form-control-1" class="form-control" type="password" style="font-size: 11px">

                                  </div>
                                  <div class="row">
                                  <div class="form-group">
                                      <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">New Password</label>
                                      <input id="form-control-2" class="form-control" type="password" style="font-size: 11px">

                              </div>


                                      <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">Confirm Password</label>
                                      <input id="form-control-3" class="form-control" type="password" style="font-size: 11px"></div>

                                  </div></div>
                              </form>

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="button" class="btn btn-primary" style="background-color: #600076"><i class="icon icon-save"></i> Save</button>
                  </div>
              </div>
          </div>
      </div>

        <div id="delUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #600076">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">User Account Delete</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete This User() From LoyalStar?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="button" class="btn btn-primary" style="background-color: #600076"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </div>
            </div>
        </div>


        <div id="disUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #600076">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Disable User Account</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable This User() From LoyalStar?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="button" class="btn btn-primary" style="background-color: #600076"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </div>
            </div>
        </div>

        <div id="editUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #600076">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-edit icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">Edit User's Details</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display4">
                                <form action="/">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">User's Full Name</label>
                                                <input id="form-control-9" class="form-control" type="password" style="font-size: 11px"></div>



                                        </div></div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Sex</label>

                                                <select id="demo-select2-10" class="form-control" style="font-size: 11px">
                                                    <option value="administrator" >Male</option>
                                                    <option value="author">Sex</option>
                                                    <option value="contributor">Other</option>

                                                </select>
                                            </div>


                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                                <input id="form-control-11" class="form-control" type="password" style="font-size: 11px">
                                            </div>

                                        </div>
                                    </div><hr style="border-color: #600076">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">User Role</label>
                                                <select id="demo-select2-9" class="form-control" style="font-size: 11px">
                                                    <option value="administrator" >Male</option>
                                                    <option value="author">Sex</option>
                                                    <option value="contributor">Other</option>

                                                </select>
                                            </div>



                                        </div>
                                    </div>


                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary" style="background-color: #600076"><i class="icon icon-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>


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


  </body>
</html>