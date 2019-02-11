        <div id="delUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                 <form action="UsersManagementController/deleteUser" method="post" >
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">USER ACCOUNT DELETE</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <input type="hidden" name="user_id" id="txtusers_iddelete" >
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO YOU WANT TO DELETE <span id="txtfullnamedelete" style="color: red"></span> FROM PSKONNET?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </div>
                </form>
            </div>
        </div>
	


        <div id="disUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="UsersManagementController/disable" method="post" >
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                          
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">DISABLE USER ACCOUNT</h4>

                        </div>
                    </div>
                   
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <input type="hidden" name="user_id" id="txtusers_idlock" >
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO TOU WANT TO DISABLE <span id="txtfullnamelock" style="color: red"></span> FROM PSKONNET?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> 
                            <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    


        <div id="anableUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                     <form action="UsersManagementController/unlock" method="post" >
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                         
                        <div class="text-center">
                            <span class="icon icon-unlock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">UNLOCK USER ACCOUNT</h4>

                        </div>
                    </div>
                   
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <input type="hidden" name="user_id" id="txtusers_idunlock" >
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO YOU WANT TO UNLOCK <span id="txtfullnameunlock" style="color: red"></span>FROM PSKONNET?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> 
                            <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                    </form>
                </div>
            </div>
        </div>
		



        <div id="editUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">CLOSE</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-edit icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">EDIT USER DETAILS</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display4">
                                 <form action="UsersManagementController/editUser" method="post" >
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" id="txtemail" name="email" >
                                                <label  class="form-label" style="font-size: 12px">USER FULL NAME</label>
                                                <input id="txtfullname" name="fullname" class="form-control" type="text" style="font-size: 11px"
                                                onkeyup="this.value = this.value.toUpperCase();"
                                                >
                                               <!--  <input type="text" onkeyup="this.value = this.value.toUpperCase();"> -->


                                                                                                   </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">GENDER</label>
                                                <select id="txtgender" name="gender" class="form-control" style="font-size: 11px">
                                                    <option disabled="" selected="" >GENDER</option>
                                                     <option value="MALE" >MALE</option>
                                                    <option value="FEMALE">FEMALE</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label"  style="font-size: 12px">PHONE NUMBER</label>
                                                <input id="txtphonenumber" name="phone" class="form-control" type="text" style="font-size: 11px">
                                            </div>

                                        </div>
                                    </div><hr style="border-color: #686EE4">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">USER ROLE</label>
                                                <select id="txtrole" name="role"  class="form-control" style="font-size: 11px">
                                                  <option disabled="" selected="" >USER ROLE</option>
                                                   <option value="STAFF" >STAFF</option>
                                                  <option value="SYS ADMIN">SYS ADMIN</option>
                                                  <option value="MANAGEMENT">MANAGEMENT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-save"></i> UPDATE</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

<!--==============================================================-->
    <script>
        $(document).on('click','#bntedit',function(){
            //toUpperCase();
           $('#txtusers_id').val($(this).data('usersid'));
          // var res = str.toUpperCase();

            $('#txtemail').val($(this).data('email')).change();

            $('#txtfullname').val($(this).data('fullname'));

            $('#txtgender').val($(this).data('gender'));

            $('#txtrole').val($(this).data('role'));
            $('#txtphonenumber').val($(this).data('phone'));
        });
    </script>

 <script>
        $(document).on('click','#btnlock,#btnunlock,#btndelete',function(){
           $('#txtusers_idlock').val($(this).data('email'));
             $('#txtusers_idunlock').val($(this).data('email'));
             $('#txtusers_iddelete').val($(this).data('email'));           
            
            var fullname=$(this).data('fullname');
          ///  $('#txtfullnamelock').val($(this).data('fullname'));
             $('#txtfullnamelock').html(fullname);
            // $('#txtfullnameunlock').val($(this).data('fullname'));
             $('#txtfullnameunlock').html(fullname);
           //  $('#txtfullnamedelete').val($(this).data('fullname'));
             $('#txtfullnamedelete').html(fullname);

        });
    </script>


    <script type="text/javascript">

  function forceKeyPressUppercase(e)
  {
    var charInput = e.keyCode;
    if((charInput >= 97) && (charInput <= 122)) { // lowercase
      if(!e.ctrlKey && !e.metaKey && !e.altKEY) { // no modifier key
        var newChar = charInput - 32;
        var start = e.target.selectionStart;
        var end = e.target.selectionEnd;
        e.target.value = e.target.value.substring(0, start) + String.fromCharCode(newChar) + e.target.value.substring(end);
        e.target.setSelectionRange(start+1, start+1);
        e.preventDefault();
      }
    }
  }

  document.getElementById("txtfullname").addEventListener("keypress", forceKeyPressUppercase, false);
  document.getElementById("field2").addEventListener("keypress", forceKeyPressUppercase, false);

</script>