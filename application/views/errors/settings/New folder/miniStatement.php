        <?php include ('header.php') ;?>
          <?php include ('modals.php') ;?>

<div class="layout-main">
<div class="layout-sidebar" >
    <div class="layout-sidebar-backdrop" ></div>
    <div class="layout-sidebar-body" >
        <div class="custom-scrollbar" >
            <nav id="sidenav" class="sidenav-collapse collapse" >
                <ul class="sidenav">
                    <li class="sidenav-heading" style="color: #000"><b><u>User Management</u></b></li>
                    <li class="sidenav-item" >
                        <a href="user" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-edit"></span>
                            <span class="sidenav-label" style="font-size: 11px;">Accounts Utilities</span>
                        </a>

                    </li>

                    <li class="sidenav-item ">
                        <a href="role" aria-haspopup="true">
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
                        <a href="data" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-edit"></span>
                            <span class="sidenav-label" style="font-size: 11px" >Data Utilities</span>
                        </a>

                    </li>

                    <li class="sidenav-item ">
                        <a href="cashin" aria-haspopup="true">
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
                     <li class="sidenav-heading" style="color: #000"><b><u>Register Suscriber</u></b></li>
                  <li class="sidenav-item">
                      <a href="registerSuscriber" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit"></span>
                          <span class="sidenav-label" style="font-size: 11px" >New Suscriber</span>
                      </a>

                  </li>

                  <li class="sidenav-item">
                      <a href="suscriberCashin" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit"></span>
                          <span class="sidenav-label" style="font-size: 11px" >Suscriber Cashin</span>
                      </a>

                  </li>


                    <li class="sidenav-heading" style="color: #000"><b><u>Onboarded Organizations</u></b></li>
                    <li class="sidenav-item ">
                        <a href="utilities" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-globe"></span>
                            <span class="sidenav-label" style="font-size: 11px">Organizations Utilities</span>
                        </a>

                    </li>

                    <li class="sidenav-item ">
                        <a href="onboarding" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-user"></span>
                            <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Onboard An Organization</span>
                        </a>

                    </li>

                    <li class="sidenav-heading" style="color: #000"><b><u>Subscribers Analytics &amp Insights</u></b></li>
                       <li class="sidenav-item ">
                  <a href="suscribers" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-users"></span>
                    <span class="sidenav-label" style="font-size: 11px">Subscribers Data Mart</span>
                  </a>
                </li>
                    <li class="sidenav-item ">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-sort-numeric-asc"></span>
                            <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#subscribersaccountbalance">Subscriber Account Balance</span>
                        </a>

                    </li>

                    <li class="sidenav-item ">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-sort-numeric-asc"></span>
                            <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#">Redeem Insurance</span>
                        </a>

                    </li>


                    <li class="sidenav-item  ">
                        <a href="ministatement" aria-haspopup="true" style="background-color: darkgoldenrod;">
                            <span class="sidenav-icon icon icon-file-archive-o"  style="color: #fff"></span>
                            <span class="sidenav-label" style="font-size: 11px; color: #fff">Subscriber Mini Statement</span>
                        </a>
                    </li>




                    <li class="sidenav-heading" style="color: #000"><b><u>Revenue Reporting &amp Analytics</u></b></li>
                        <li class="sidenav-item ">
                            <a href="agcall" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-line-chart"></span>
                                <span class="sidenav-label" style="font-size: 11px">Agent Collections RE</span>
                            </a>

                        </li>
                        <li class="sidenav-item ">
                            <a href="orgcoll" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-pie-chart"></span>
                                <span class="sidenav-label" style="font-size: 11px">Organizations Contributions RE</span>
                            </a>

                        </li>
                        <li class="sidenav-item ">
                            <a href="mobilecoll" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-area-chart"></span>
                                <span class="sidenav-label" style="font-size: 11px">Mobile Money Contributions RE</span>
                            </a>

                        </li>

                        <li class="sidenav-item ">
                            <a href="cashout" aria-haspopup="true">
                                <span class="sidenav-icon icon icon-bar-chart"></span>
                                <span class="sidenav-label" style="font-size: 11px">Cash Out RE</span>
                            </a>

                        </li>





                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="layout-content" style="background-color: #fff">
<div class="layout-content-body">

<div class="title-bar">

    <h1 class="title-bar-title">
        <span class="d-ib">Subscribers</span>
    </h1>
    <p class="title-bar-description">
        <small  style ="color:darkgoldenrod">Mini-Statement</small>

    </p>
</div>

<div class = "row">
<div class = "col-lg-3">

    <div class="col-md-12">
        <br><br><br>
        <div class="card">

            <div class="card-header no-border">
                <div class="col-md-12">
                    <div class="demo-form-wrapper">
                        <form class="form form-horizontal">


                            <div class="form-group">
                                <label for="form-control-31" class="form-label" style="font-size: 11px"><u>Date (From)</u></label>
                                <input id="datefrom"  class="form-control" type="date" style="font-size: 11px" required="">
                            </div>

                            <div class="form-group">
                                <label  class="form-label" style="font-size: 11px"><u>Date (To)</u></label>
                                <input id="dateto" class="form-control" type="date" style="font-size: 11px" required="">
                            </div>
                            <div class="form-group">
                                <label  class="form-label" style="font-size: 11px"><u>Subscriber's Phone Number</u></label>
        <input id="Subscribernumber" class="form-control" type="number" style="font-size: 11px" maxlength="10">
                            </div>
                            <br>
                            <center><button type="button" id="mygeneratestatement" class="btn btn-pill btn-primary" style="background-color: darkgoldenrod; border-color: darkgoldenrod; width: 100%"><i class="icon icon-list"></i> Generate </button></center>
                        </form></div>
                        <center> <span id="emptySearchFields" style="color:red; font-family: Verdana; font-size: 11px "></span>  </center>
                    </div>

            </div></div>

    </div></div>
<div class = "col-lg-9">

    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="divider">
                <div class="divider-content " style = "color: #4f4f4f"><b><i class="icon icon-list"></i> Search Results</b></div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-actions">



                    </div>

                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="panel m-b-lg">
                            <ul class="nav nav-tabs nav-justified">
                                </a></li>
             <li><a href="#profile-11" data-toggle="tab"><i class ="icon icon-list-ol"></i> Grid View Of Records <span id="statementFromTO" style="color:red; font-family: Verdana; font-size: 11px "></span></a> 
                                    

                                </li>

                            </ul>
                            <div class="tab-content"  id="mysearchresultdiv">

                                <div class="tab-pane fade active in" id="profile-11">
                                    <hr>
                                    <div class = "pull-left">
                                        <button type="button" id="btnExport" class="btn btn-primary" style="background-color: #14692E; border-color: #14692E" disabled=""  onclick="javascript:xport.toCSV('testTable');"><i class="icon icon-file-excel-o"></i>&nbsp &nbsp Download As Excel &nbsp &nbsp</button> |

                                       

                                        <button type="button" id="myprintbuttons2" class="btn btn-primary" style="background-color: maroon; border-color: maroon" disabled=""onclick="generate()"><i class="icon icon-file-pdf-o"></i>&nbsp &nbsp Download As PDF &nbsp &nbsp</button>
                                    </div><BR><br>
                                    <div class="row gutter-xs">
                                        <div class="col-xs-12">

                                            <div class="card">
                                                <div class="card-header">


                                                </div>
                                                <div class="card-body" id="myhiddendiv" >
                                                    <table id="testTable" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                                                        <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Transaction ID</th>
                                                            <th>Amount (GHS) Paid</th>
                                                            <th>Medium</th>
                                                            <th>Balance Before</th>
                                                            <th>Balance Now</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody>


                                                        <tbody id="mysearchresult">

                                                         </tbody>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<div id="logout" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                <center><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

            </div>
        </div>
    </div>
</div>


<div id="createUser" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                            </div><hr style="border-color: #217345">

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

                <button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>



<div id="pwdChange" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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

                <button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<div id="delUser" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                <center><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

            </div>
        </div>
    </div>
</div>


<div id="disUser" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                <center><button type="button" class="btn btn-primary" style="background-color: #217345"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

            </div>
        </div>
    </div>
</div>

<div id="editUser" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: #217345">
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
                            </div><hr style="border-color: #217345">

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

                <button type="button" class="btn btn-primary" style="background-color: #14692E"><i class="icon icon-save"></i> Save</button>
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



<script>
    $(document).on('click','#mygeneratestatement',function(e) {
            var datefrom= $('#datefrom').val();
            var dateto= $('#dateto').val();
            var Subscribernumber= $('#Subscribernumber').val();

            if((datefrom=="") ||(dateto=="") ||(Subscribernumber==""))
            {

                $('#emptySearchFields').html("Please Fields are required!!");
            }
            else
            {
                    e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{datefrom:datefrom,dateto:dateto,Subscribernumber:Subscribernumber },
                            url:'<?php echo site_url('subscribersAnalytics/generaeministatement'); ?>',
                            success:function(result)
                            {
                               // alert('result');

                               var heading='From: '.concat(datefrom).concat("     ") .concat("To: ") .concat(dateto);
                 
                                $('#statementFromTO').html(heading);




                                document.getElementById("btnExport").disabled = false; 
                                document.getElementById("myprintbuttons2").disabled = false;

                data = JSON.parse(result);
                $('#mysearchresult').empty();
                var $select=$('#mysearchresult');
                $.each(data,
                    function (index, item) {
                        $select.append($('<tr> <td> ' +
                            ' '+item.transactionOn+

                            '</td><td> ' +
                            ' '+item.transactionTime+

                            '</td><td> ' +
                            ' '+item.refID+

                            '</td><td> ' +
                            ' '+item.amount+

                            '</td><td> ' +
                            ' '+item.transactionNarration+

                            '</td><td> ' +
                           ' '+item.balThen+

                            '</td><td> ' +
                           ' '+item.balNow+

                            '</td>   </tr>'))
                    }
                );


                            }
                    });


            }
                
           
              });
</script>





<script type="text/javascript">
    var xport = {
  _fallbacktoCSV: true,  
  toXLS: function(tableId, filename) {   
    this._filename = (typeof filename == 'undefined') ? tableId : filename;
    
    //var ieVersion = this._getMsieVersion();
    //Fallback to CSV for IE & Edge
    if ((this._getMsieVersion() || this._isFirefox()) && this._fallbacktoCSV) {
      return this.toCSV(tableId);
    } else if (this._getMsieVersion() || this._isFirefox()) {
      alert("Not supported browser");
    }

    //Other Browser can download xls
    var htmltable = document.getElementById(tableId);
    var html = htmltable.outerHTML;

    this._downloadAnchor("data:application/vnd.ms-excel" + encodeURIComponent(html), 'xls'); 
  },
  toCSV: function(tableId, filename) {
    this._filename = (typeof filename === 'undefined') ? tableId : filename;
    // Generate our CSV string from out HTML Table
    var csv = this._tableToCSV(document.getElementById(tableId));
    // Create a CSV Blob
    var blob = new Blob([csv], { type: "text/csv" });

    // Determine which approach to take for the download
    if (navigator.msSaveOrOpenBlob) {
      // Works for Internet Explorer and Microsoft Edge
      navigator.msSaveOrOpenBlob(blob, this._filename + ".csv");
    } else {      
      this._downloadAnchor(URL.createObjectURL(blob), 'csv');      
    }
  },
  _getMsieVersion: function() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf("MSIE ");
    if (msie > 0) {
      // IE 10 or older => return version number
      return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
    }

    var trident = ua.indexOf("Trident/");
    if (trident > 0) {
      // IE 11 => return version number
      var rv = ua.indexOf("rv:");
      return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
    }

    var edge = ua.indexOf("Edge/");
    if (edge > 0) {
      // Edge (IE 12+) => return version number
      return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
    }

    // other browser
    return false;
  },
  _isFirefox: function(){
    if (navigator.userAgent.indexOf("Firefox") > 0) {
      return 1;
    }
    
    return 0;
  },
  _downloadAnchor: function(content, ext) {
      var anchor = document.createElement("a");
      anchor.style = "display:none !important";
      anchor.id = "downloadanchor";
      document.body.appendChild(anchor);

      // If the [download] attribute is supported, try to use it
      
      if ("download" in anchor) {
        anchor.download = this._filename + "." + ext;
      }
      anchor.href = content;
      anchor.click();
      anchor.remove();
  },
  _tableToCSV: function(table) {
    // We'll be co-opting `slice` to create arrays
    var slice = Array.prototype.slice;

    return slice
      .call(table.rows)
      .map(function(row) {
        return slice
          .call(row.cells)
          .map(function(cell) {
            return '"t"'.replace("t", cell.textContent);
          })
          .join(",");
      })
      .join("\r\n");
  }
};
</script>





<!--/////////////////  //this is for pdf generation  -->
  <script src='https://cdn.rawgit.com/simonbengtsson/jsPDF/requirejs-fix-dist/dist/jspdf.debug.js'></script>
<script src='https://unpkg.com/jspdf-autotable@2.3.2'></script>
<script type="text/javascript">
  
    function generate() {

  var doc = new jsPDF('p', 'pt');

  var res = doc.autoTableHtmlToJson(document.getElementById("testTable"));
  doc.autoTable(res.columns, res.data, {margin: {top: 80}});

  var header = function(data) {
    doc.setFontSize(18);
    doc.setTextColor(40);
    doc.setFontStyle('normal');
    //doc.addImage(headerImgData, 'JPEG', data.settings.margin.left, 20, 50, 50);
    doc.text("Mini-Statement", data.settings.margin.left, 50);
  };

  var options = {
    beforePageContent: header,
    margin: {
      top: 80
    },
   // startY: doc.autoTableEndPosY() + 20 //the other table
  };

  doc.autoTable(res.columns, res.data, options);

  doc.save("ministatement.pdf");
}
</script>

<script>
    $(document).on('click','#mysubmit',function(e) {
             // alert('hii');
            var Agentname= $('#Agentname').val();
           var Agnetsex = $('#Agnetsex').val();
           var agentEmail = $('#agentEmail').val();
            var Agentcontact=$('#Agentcontact').val();
             
            if((Agentname=="")||(Agnetsex=="") ||(agentEmail=="")||(Agentcontact==""))
            {

              $('#userExist').html("Please all field are required");
            }
            else
            {
                  $("#agent").show();



                              e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{Agentname:Agentname,Agnetsex:Agnetsex,agentEmail:agentEmail,Agentcontact:Agentcontact },
                            url:'<?php echo site_url('dataUtilitiesController/addAgent'); ?>',
                            success:function(result)
                            {
                              //alert(result);
                                 $("#agent").hide();
                                    if(result==1)
                                    {
                                    $('#userExist').html("");
                                     location.reload();
                                    }
                                   
                                else{
                                      // window
                                     $('#userExist').html("Please This Agent Has Already Been Regsitered!!");
                                        //location.reload();

                                }

                            }
                    });

            }
           


           
              });
</script>

<script>
    $(document).on('click','.subbalance',function(e) {
             //PICKING THE SUBSCRIBERS PHONE NUMBER
            var suspenseaccountnumber= $('#suspenseaccountnumber').val();
              $("#loadingsubscribersbalance").show();
           
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{suspenseaccountnumber:suspenseaccountnumber},
                            url:'<?php echo site_url('subscribersAnalytics/SubBalance'); ?>',
                            success:function(result)
                            {

                                    // $("#loadingsubscribersbalance").hide();
                                    //alert(result);
                                    //$('#requiredPhoneNumber').html(" ");
                                    var arraylist = result.split("|");
                                    var acbalance=arraylist[1];
                                    var bobalance=arraylist[2];


                                    //CHECK FOR SUBSCRIBER ACCOUNT BALLANCE AND BONOS BALLANCE 
                                    if((acbalance=="")||(bobalance=="")){
                                      //STOP THE LOADER
                                      $("#loadingsubscribersbalance").hide();
                                      //SHOW THE ERROR MESSAGE
                                      $('#subscribersbalance').html("Subscriber Does Not Exist ");
                                      

                                    }
                                    else{

                                      //HIDE THE LOADER
                                       $("#loadingsubscribersbalance").hide();
                                       //EMPTY THE THE ERROR TEXT
                                       $('#subscribersbalance').html("");
                                       //SHOW THE ACTUAL BALANCE IN THE TEXT BOX
                                       $('#subscribersaccountbalancetext').val(acbalance);
                                       //SHOW THE BONUS BALANCE IN THE TEXT BOX
                                       $('#bobsubscribersaccountbalancetext').val(bobalance);

                                    }
                            } 
                    });

           
              });
</script>
<script>
    $(document).on('click','.addnewuser',function(e) {
             
            var fullname= $('#fullname').val();
            var userEmail= $('#userEmail').val();
            var contact= $('#contact').val();
            var role= $('#role').val();
            var gender= $('#gender').val();
            //alert(gender);
              
            

            if((fullname=="") || (userEmail=="") || (contact=="") || (role=="") || (gender==""))
            {
              //alert('hii');
               $('#newUser').html("Please Fields are required!!");
            }
            else
            {
               $("#loading").show();


            // alert(suspenseaccountnumber);
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{fullname:fullname,userEmail:userEmail,contact:contact,role:role,gender:gender},
                            url:'<?php echo site_url('UsersManagementController/addUser'); ?>',
                            success:function(result)
                            {
                                 $("#loading").hide();
                                if(result==0)
                                    {
                                    $('#newUser').html("User with this email exist");
                           
                                    }
                                   
                                else{
                                      // window
                                     $('#newUser').html("successful");
                                      location.reload();
                                        //location.reload();

                                }
                                 

                           
                            }
                    });

                }

           
              });
</script>




</body>
</html>