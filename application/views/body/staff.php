
<div class="layout-content">
    
    <div class="layout-content-body">
     

     <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">Staff Management</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:#686EE4">Utilities</small>

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

                                  <td><Center> <button class="btn  btn-warning" style = "text-transform: capitalize; background-color: #686EE4; ; border-color: #686EE4"  type="button" data-toggle="modal" data-target="#editUser"> <i class = "icon icon-edit"></i></button> | <button class="btn  btn-warning" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"> <i class = "icon icon-lock"></i></button> |  <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"> <i class = "icon icon-trash"></i></button></Center></td>




                              </tr>
                              <tr>
                                  <td>2017/05/18</td>
                                  <td>11:45:34 AM</td>
                                  <td>10K</td>
                                  <td>10K</td>
                                  <td>1</td>
                                  <td>120K</td>

                                  <td><Center> <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: #686EE4; border-color: #686EE4"  type="button" data-toggle="modal" data-target="#editUser"> <i class = "icon icon-edit"></i></button> | <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: black; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"> <i class = "icon icon-lock"></i></button> |  <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"> <i class = "icon icon-trash"></i></button></Center></td>




                              </tr>
                              <tr>
                                  <td>2017/05/18</td>
                                  <td>11:45:34 AM</td>
                                  <td>10K</td>
                                  <td>10K</td>
                                  <td>1</td>
                                  <td>120K</td>

                                  <td><Center> <button class="btn  btn-warning" style = "text-transform: capitalize;background-color: #686EE4; border-color: #686EE4"  type="button" data-toggle="modal" data-target="#editUser"> <i class = "icon icon-edit"></i></button> | <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"> <i class = "icon icon-lock"></i></button> |  <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"> <i class = "icon icon-trash"></i></button></Center></td>




                              </tr>
                              <tr>
                                  <td>2017/05/18</td>
                                  <td>11:45:34 AM</td>
                                  <td>10K</td>
                                  <td>10K</td>
                                  <td>1</td>
                                  <td>120K</td>

                                <td> <Center> <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: #686EE4; border-color: #686EE4"  type="button" data-toggle="modal" data-target="#editUser"> <i class = "icon icon-edit"></i></button> | <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"> <i class = "icon icon-lock"></i></button> |  <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser"> <i class = "icon icon-trash"></i></button></Center></td>




                              </tr>


                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>

            <div class="divider">
                <div class="divider-content " style = "color: #686EE4"><b><i class="icon icon-line-chart"></i> Statistics</b></div>
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
                                          <span class="icon icon-square icon-fw" style="color: #686EE4"></span>
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
                              <canvas data-chart="pie" data-labels='["Male", "Female"]' data-values='[{"backgroundColor": ["#686EE4", "gainsboro"], "data": [137363, 34979]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
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
                                              <span class="icon icon-square icon-fw" style="color: #686EE4"></span>
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
                                  <canvas data-chart="pie" data-labels='["Active", "Disabled"]' data-values='[{"backgroundColor": ["#686EE4", "gainsboro"], "data": [137363, 34979]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
                              </div>
                          </div>
                      </div>
                  </div>





          </div></div>

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
</div>
    </div>

  </body>
</html>