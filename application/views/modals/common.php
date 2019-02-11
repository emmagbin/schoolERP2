<!--================================pwdChange====================================================-->
<div id="pwdChange" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: #686EE4">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">CLOSE</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-edit icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">CHANGE PASSWORD</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display">
                              <form action="/">
                                  <div class="form-group">
                                        <input type="hidden" id="useremail" value="<?php echo $email;?>" >
                                      <label  class="form-label" style="font-size: 12px">OLD PASSWORD</label>
                                      <input id="old_pass" class="form-control" type="password" style="font-size: 11px">

                                  </div>
                                  <div class="row">
                                  <div class="form-group">
                                      <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">NEW PASSWORD</label>
                                      <input id="new_pass" class="form-control" type="password" style="font-size: 11px">

                              </div>


                                      <div class="col-md-6">
                                      <label  class="form-label" style="font-size: 12px">CONFIRM NEW PASSWORD</label>
                                      <input id="new_pass_confirm" class="form-control" type="password" style="font-size: 11px"></div>

                                  </div></div>
                              </form>

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" id="changepassword" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-save"></i> UPDATE PASSWORD </button>
                      <br>
                      <center><img  id="loadingPass" src="assets/images/3.gif" style="display: none;  "/></center>
                   <center> <span id="error_exist" style="color:red; font-family: Verdana; font-size: 11px "></span>  </center>
                  </div>
              </div>
          </div>
      </div>

<!--==============================logout=======================================================-->
    <div id="logout" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="login_controller/logout" method="post" >
                <div class="modal-header bg-primary" style="background-color: #686EE4">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-lock icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 14px">SYSTEM LOGOUT</h4>

                    </div>
                </div> 
                
                <div class="modal-tabs">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">ARE YOU SURE YOU WANT TO LOGOUT FROM PSKONNECT?</a></li>

                    </ul>

                </div>
                <div class="modal-footer">
<center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp YES &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>

                </div>
            </div>
            </form>
        </div>
    </div>

<!--============================================createUser==========================================================-->
      <div id="createUser" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: #686EE4">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">CREATE A NEW PSKONNECT USER</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                              <form action="/">
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">USERS FULL NAME</label>
                                      <input id="fullname" class="form-control" type="text" style="font-size: 11px"  onkeyup="this.value = this.value.toUpperCase();"></div>

                                          <div class="col-md-4">
                                              <label  class="form-label" style="font-size: 12px">GENDER</label>

                                              <select id="gender" class="form-control" style="font-size: 11px">
                                                  <option selected="" disabled="" >GENDER</option>
                                                   <option value="MALE" >MALE</option>
                                                  <option value="FEMALE">FEMALE</option>
                                                 

                                              </select>
                                          </div>

                                  </div></div>
                                  <div class="form-group">
                                      <div class="row">
<div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">USER EMAIL</label>
                                      <input id="email" class="form-control" type="text" style="font-size: 11px"  onkeyup="this.value = this.value.toUpperCase();">
</div>


                                      <div class="col-md-4">
                                          <label  class="form-label" style="font-size: 12px">USER PHONE NUMBER</label>
                                          <input id="phone" class="form-control" type="number" style="font-size: 11px"  onkeyup="this.value = this.value.toUpperCase();">
                                      </div>

                                  </div>
</div><hr style="border-color: #686EE4">

                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">USER ROLE UNDER PSKONNECT</label>
                                              <select id="role" class="form-control" style="font-size: 11px">
                                                 <option selected="" disabled="" >SELECT ROLE</option>
                                                  <option value="STAFF" >STAFF</option>
                                                  <option value="SYS ADMIN">SYS ADMIN</option>
                                                  <option value="MANAGEMENT">MANAGEMENT</option>

                                              </select>
                                          </div>



                                      </div>
                                  </div>


                              </form>

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="button" id="savebutton"  class="btn btn-primary addnewuser" style="background-color: #686EE4"><i class="icon icon-save"></i> SAVE</button>
                      <br>
                       <center><img  id="loading" src="assets/images/3.gif" style="display: none;  "/></center>
                   <center> <span id="newUser" style="color:red; font-family: Verdana; font-size: 11px "></span>  </center>
                  </div>
              </div>
          </div>
      </div>



<!--============================================createUser==========================================================-->
      <div id="createkid" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                <form role="form" method="post" enctype="multipart/form-data" action="KidsController/addNewerKId">
                  <div class="modal-header bg-primary" style="background-color: #686EE4">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">ADD A NEW KID TO PSKONNECT</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                   
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">KIDS FULL NAME</label>
                                      <input id="kid_fullname" maxlength="30" name="kid_fullname" class="form-control" type="text"
											 style="font-size: 11px" required=""  onkeyup="this.value = this.value.toUpperCase();">
                                          </div>
                                              
                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">GENDER</label>

                                              <select  name="kgender" class="form-control" style="font-size: 12px" required>
                                                <option disabled="" selected="" >SELECT GENDER</option>
                                                  <option value="MALE" >MALE</option>
                                                  <option value="FEMALE">FEMALE</option>
                                                 
                                              </select>
                                          </div>
                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">STAGE (CLASS)</label>

                              
                                                  <select id="Class" name="class_id" class="form-control" style="font-size: 11px" required>
                            <option value="" class="form-control" disabled="" selected="" >SELECT STAGE</option>
                                                 <?php foreach($classes as $record):?>
                                                       
                            <option value="<?php echo $record->class_id;?>"><?php echo $record->class_name;?></option>
                                                     
                                                 
                                                   <?php endforeach;?>
                                                 

                                              </select>

                                            
                                          </div>
                                          </div>

                                          <div class="col-md-4">
                                               <label  class="form-label" style="font-size: 12px">KIDS PASSPORT PICTURE</label>
                                               <div class="wrapper">

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

                     <input name="pictureforkid" type="file" accept="image/*"  onchange=" Kidpreview_image1(event)" required=""><p id="kid_photo"></p>
                                                                             <br>
    <img id="output_image1" style='height: 100px; width: 150px; object-fit: contain'/>
                                                                          </div>
                                          </div>

                                  </div></div>
                               <hr style="border-color: #686EE4">
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">PICKER FULL NAME</label>
                                      <input id="form-control-6" name="Pfullname" class="form-control" type="text" style="font-size: 11px" required   onkeyup="this.value = this.value.toUpperCase();">
                                          </div>
                                              
                                              
                                            
                                                <div class="col-md-6">
                                                     <label  class="form-label"  style="font-size: 12px">GENDER</label>

                                              <select id="demo-select2-2" name="pgender" class="form-control" style="font-size: 11px" required >
                                                 <option disabled="" selected="" >SELECT GENDER</option>
                                                  <option value="MALE" >MALE</option>
                                                  <option value="FEMALE">FEMALE</option>
                                                

                                              </select>
                                                </div>

                                                 <div class="col-md-6">
                                                     <label  class="form-label"  style="font-size: 12px">PICKER CONTACT</label>

                                             <input id="form-control-6" name="contact" class="form-control" type="text" style="font-size: 11px" required >
                                                </div>
                                           
                                         
                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">PICKER RELATIONSHIP WITH KID</label>

                                              <select id="demo-select2-2" name="relationship" class="form-control" style="font-size: 11px" required>
                                                   <option disabled="" selected="" >SELECT RELATIONSHIP</option>
                                                  <option value="PARENT" >PARENT</option>
                                                  <option value="RELATIVE">RELATIVE</option>
                                                  <option value="contributor">SIBLING</option>
                                                  <option value="SCHOOL BUS">SCHOOL BUS</option>

                                              </select>
                                          </div>


                                          </div>

                                          <div class="col-md-4">
                                               <label  class="form-label" style="font-size: 12px">PICKERS PASSPORT PICTURE</label>
                                               <div class="wrapper">

                                                            <script type='text/javascript'>
                                                                function preview_image1(event) 
                                                                {

                                                                 var reader = new FileReader();
                                                                 reader.onload = function()
                                                                 {
                                                                  var output = document.getElementById('output_image1_SIBLING');
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

                     <input name="picturepicker" type="file" accept="image/*"  onchange=" preview_image1(event)" required=""><p id="demopicture"></p>
                                                                             <br>
    <img id="output_image1_SIBLING" style='height: 100px; width: 150px; object-fit: contain'/>
                                                                          </div>
                                          </div>
  <center><img  id="loadingforkid" src="assets/images/3.gif" style="display: none;  "/></center>
                   <center> <span id="newUser" style="color:red; font-family: Verdana; font-size: 11px "></span>  </center>
                                  </div></div>
                           

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-save"></i>SAVE</button>
                  </div>

                    </form>
              </div>
          </div>
      </div>





<!--============================================createUser==========================================================-->
      <div id="createguardian" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: #686EE4">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">Create A New User Guardian</h4>

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
                                                  <option value="administrator" >MALE</option>
                                                  <option value="author">FEMALE</option>
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
</div><hr style="border-color: #686EE4">

                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">User Role</label>
                                              <select id="demo-select2-3" class="form-control" style="font-size: 11px">
                                                  <option value="STAFF" >STAFF</option>
                                                  <option value="SYS ADMIN">SYS ADMIN</option>
                                                  <option value="MANAGEMENT">MANAGEMENT</option>

                                              </select>
                                          </div>



                                      </div>
                                  </div>


                              </form>

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="button" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-save"></i> Save</button>
                  </div>
              </div>
          </div>
      </div>


<!--============================================createUser==========================================================-->
      <div id="createstaff" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: #686EE4">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">Create A New User Staff</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                              <form action="/">
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">Staff's Full Name</label>
                                      <input id="form-control-6" class="form-control" type="text" style="font-size: 11px"></div>

                                          <div class="col-md-4">
                                              <label  class="form-label" style="font-size: 12px">Sex</label>

                                              <select id="demo-select2-2" class="form-control" style="font-size: 11px">
                                                  <option value="administrator" >MALE</option>
                                                  <option value="author">FEMALE</option>
                                                  <option value="contributor">Other</option>

                                              </select>
                                          </div>

                                  </div></div>
                                  <div class="form-group">
                                      <div class="row">
<div class="col-md-8">
                                      <label  class="form-label" style="font-size: 12px">User Email</label>
                                      <input id="form-control-7" class="form-control" type="text" style="font-size: 11px">
</div>


                                      <div class="col-md-4">
                                          <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                          <input id="form-control-10" class="form-control" type="text" style="font-size: 11px">
                                      </div>

                                  </div>
</div><hr style="border-color: #686EE4">

                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">User Role</label>
                                              <select id="demo-select2-3" class="form-control" style="font-size: 11px">
                                                  <option value="administrator" >STAFF</option>
                                                  <option value="author">SYS ADMIN</option>
                                                  <option value="contributor">MANAGEMENT</option>

                                              </select>
                                          </div>



                                      </div>
                                  </div>


                             

                          </div>

                      </div>
                  </div>
                  <div class="modal-footer">

                      <button type="button" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-save"></i> Save</button>
                  </div>
                   </form>
              </div>
          </div>
      </div>

<!--  $users['school_id']=$results->school_id;
        $users['school_name']=$results->school_name;
        $users['school_post']=$results->school_post;
        $users['school_contact']=$results->school_contact;
         $users['school_crest']=$results->school_crest; -->

      <!--============================================createUser==========================================================-->
      <div id="schoolsSettings" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                 <form role="form" method="post" enctype="multipart/form-data" action="UsersManagementController/schoolsettings">
                  <div class="modal-header bg-primary" style="background-color: #686EE4">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">CLOSE</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">SCHOOLS SETUP INFORMATION</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                             
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-7">                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">NAME OF SCHOOL</label>
                                      <input value="<?php echo strtoupper($school_name);?>" id="school_name" name="school_name"  class="form-control" type="text" style="font-size: 11px" onkeyup="this.value = this.value.toUpperCase();">

                                       <input value="<?php echo $school_id;?>" id="school_id" name="school_id"  class="form-control" type="hidden" style="font-size: 11px" >



                                      
                                          </div>
                                              
                                              
                                              <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">SCHOOLS POSTAL ADDRESS</label>

                                              <input value="<?php echo strtoupper($school_post);?>" id="school_post"  name="school_post" class="form-control" type="text" style="font-size: 11px" onkeyup="this.value = this.value.toUpperCase();">

                                             
                                          </div>
                                          <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">SCHOOLS CONTACT</label>

                                              <input value="<?php echo strtoupper($school_contact);?>" id="school_contact"  name="school_contact" class="form-control" type="text" style="font-size: 11px" onkeyup="this.value = this.value.toUpperCase();">

                                             
                                          </div>                                           
                                          </div>

                                          <div class="col-md-5">
                                               <label  class="form-label" style="font-size: 12px">SCHOOLS CREST</label>
                                               <div class="wrapper">

                                                            <script type='text/javascript'>
                                                                function Kidpreview_image1Pickers(event) 
                                                                {

                                                                 var reader = new FileReader();
                                                                 reader.onload = function()
                                                                 {
                                                                  var output = document.getElementById('school_crestpicture');
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

                     <input name="schoolsettings" type="file" accept="image/*"  onchange=" Kidpreview_image1Pickers(event)"><p id="demopicture"></p>

                        <input value="<?php echo $active;?>"  name="activeunderschool"  class="form-control" type="hidden" style="font-size: 11px" >
                                                                             <br>
    <img id="school_crestpicture" name="school_crest"  style='height: 100px; width: 150px; object-fit: contain'/>
    <!-- <img  src="<?php echo $school_crest;?>" id="school_crest" name="school_crest" style='height: 100px; width: 150px; object-fit: contain'/>


 <img src="<?php echo $school_crest;?>"style='height: 100px; width: 150px; object-fit: contain'/> -->


     <input value="<?php echo $school_crest;?>" name="oldschoolcrest"  class="form-control" type="hidden" style="font-size: 11px" >
                                                                          </div>
                                          </div>

                                  </div></div>
                               <hr style="border-color: #686EE4">
                             </div>
                              </div>
                                <div class="modal-footer">
                                     <!-- school_id  <?php echo $school_id;?> -->
                                
                        <center>
                               <?php if($school_id==''){?>
                          <button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp CREATE &nbsp &nbsp</button> 
                               <?php }?>
                               <?php if($school_id!=''){?>
                          <button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp UPDATE &nbsp &nbsp</button> 
                          <?php }?>
                          <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button>
                              
                        </center>

                    </div>
                                </div>
                                </div>
                                
                              </div>

                               
                                </div>
                              </form>

                          </div>
                        </div>
                               
                     </div>



<script>
function myFunctionOnFormLoad() {
 
              var school_crest='<?php echo $school_crest;?>';
             $("#school_crestpicture").attr("src",school_crest);
              $(".school_crestpicture").attr("src",school_crest);
}
</script>

<!--========================================================================================================================-->
<script>
    $(document).on('click','.addnewuser',function(e) {
               
         $('#newUser').html("");
            var fullname= $('#fullname').val();
            var email= $('#email').val();
            var phone= $('#phone').val();
            var role= $('#role').val();
            var gender= $('#gender').val();
        //alert(email);
            if((fullname=="") || (email=="") || (phone=="") || (role=="") || (gender==""))
            {
              //alert('hii');
               $('#newUser').html("Please Fields are required!!");
            }
            else
            {
                   document.getElementById("savebutton").disabled = true;
                $('#newUser').html("");
               $("#loading").show();//loader


            // alert(suspenseaccountnumber);
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{fullname:fullname,email:email,phone:phone,role:role,gender:gender},
                            url:'<?php echo site_url('UsersManagementController/addUser'); ?>',
                            success:function(result)
                            {
                              //alert(result);
                              //var dadta=result;

                                $("#loading").hide();
                                  document.getElementById("savebutton").disabled = false;
                               
                                   //document.getElementById("savebutton").disabled = false;
                                if(result==0)
                                    {
                                    $('#newUser').html("User with this email exist");
                           
                                    }
                                   
                                else{
                                      // window
                                     $('#newUser').html('PSKONNECT USER ADDED SUCCESSFULLY');
                                     location.reload();
                                        //location.reload();

                                }
                                 

                           
                            }
                    });

                }

           
              });
</script>
   <script>
    $(document).on('click','#changepassword',function(e) {
            var password= $('#old_pass').val();
           var new_pass = $('#new_pass').val();
           var new_pass_confirm = $('#new_pass_confirm').val();
            
            var user_email=$('#useremail').val(); 
         $('#error_exist').html("");
               $("#loadingPass").show();
        
        
           if(password=="")
           {
            alert('pas');
           }
           else if(new_pass=="")
           {
            alert('Npas');
           }
           else if(new_pass_confirm=="")
           {
            alert('Cpas');
           }
           else{
                e.preventDefault();
       
                         $.ajax({
                            type:'POST',
                            data:{password:password,user_email:user_email,new_pass:new_pass,new_pass_confirm:new_pass_confirm },
                            url:'<?php echo site_url('UsersManagementController/change_password'); ?>',
                            success:function(result)
                            {
                              //userEmail,accountToken
                               // alert(result);
                                $("#loadingPass").hide();
                                    if(result==1)

                                    {
                                     $('#error_exist').html("Password Change successful");
                                     location.reload();
                                    
                                   
                                    }
                                   else if(result==2) {
                                       // window
                                     $('#error_exist').html("Your New password Confirmation dont Match!!");
                                          //location.reload();

                                }
                                else{
                                      // window
                                     $('#error_exist').html("Old Password is Wrong!!");
                                        //location.reload();

                                }

                            }
                    });
}
           
              });
</script>




<script>
$('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).PARENT('.multi-field').remove();
    });
});
</script>

