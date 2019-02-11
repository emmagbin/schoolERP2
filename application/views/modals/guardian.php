        
  <div id="disUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                 <form action="GuardiansController/disable" method="post" >
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">CLOSE</span>
                        </button>
                   
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">LOCK GUARDIAN ACCOUNT</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                      <input name="Guardianid" class="lockingunlocking_id form-control" type="hidden" style="font-size: 11px">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO YOU WANT TO DISABLE THIS GUARDIAN IN PSKONNECT?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp YES &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>

                    </div>
                  </div>
                   </form>
                </div>
            </div>


        <div id="delUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
               <form action="GuardiansController/unlock" method="post" >
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">CLOSE</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-unlock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">GUARDIAN ACCOUNT UNLOCK</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                       <input name="Guardianidunlock" class="lockingunlocking_id form-control" type="hidden" style="font-size: 11px">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO YOU WANT TO DELETE THIS GUARDIAN IN PSKONNECT?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp YES &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>

                    </div>
                </div>
              </form>
            </div>
        </div>
		

 
   





    


      
           
       <!--  </div>
		</div> -->

       <!--  <div id="editUser111" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
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
                                                    <option value="administrator" >MALE</option>
                                                    <option value="author">Sex</option>
                                                    <option value="contributor">Other</option>

                                                </select>
                                            </div>


                                            <div class="col-md-6">
                                                <label  class="form-label" style="font-size: 12px">Phone Number</label>
                                                <input id="form-control-11" class="form-control" type="password" style="font-size: 11px">
                                            </div>

                                        </div>
                                    </div><hr style="border-color: #686EE4">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">User Role</label>
                                                <select id="demo-select2-9" class="form-control" style="font-size: 11px">
                                                    <option value="administrator" >MALE</option>
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

                        <button type="button" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>


 -->









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
                                          <h4 class="modal-title" style="font-size: 12px">EDIT GUARDIAN DETAILS</h4>

                                      </div>
                                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                             <form role="form" method="post" enctype="multipart/form-data" action="GuardiansController/editpicker">
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">                                              
                                                                              <div class="col-md-12">
                                                                              <label  class="form-label" style="font-size: 12px">GUARDIAN FULL NAME</label>
                                                                      <input  class="form-control" id="txtusers_fullname" name="gfullname" type="text" style="font-size: 11px"  onkeyup="this.value = this.value.toUpperCase();">

                                 <input  class="form-control" id="txtusers_picker_id" name="gid" type="hidden" style="font-size: 11px">


                                 <input  class="form-control" id="txtusers_photo_url" name="txtusers_photo_url" type="hidden" style="font-size: 11px">

                                 
                                                                      
                                                                          </div>
                                              
                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">GENDER</label>

                                              <select name="ggender" id="txtusers_gender" class="form-control" style="font-size: 11px">
                                                  <option value="MALE" >MALE</option>
                                                  <option value="FEMALE">FEMALE</option>
                                                 

                                              </select>
                                          </div>

                                   
                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">CONTACT</label>

                                                <input  id="txtusers_contact" class="form-control" name="gcontact" type="text" style="font-size: 11px">
                                          </div>
                                          </div>

                                          <div class="col-md-4">
                                               <label  class="form-label" style="font-size: 12px">GUARDIAN PASSPORT PICTURE</label>
                                               <div class="wrapper">

                                                            <script type='text/javascript'>
                                                                function Guardianpreview_imageGuardian(event) 
                                                                {

                                                                 var reader = new FileReader();
                                                                 reader.onload = function()
                                                                 {
                                                                  var output = document.getElementById('output_imageGuardian');
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

                     <input name="guardaineditedpicture" type="file" accept="image/*"  onchange=" Guardianpreview_imageGuardian(event)"><p id="demopicture"></p>
                                                                             <br>
    <img id="output_imageGuardian" style='height: 100px; width: 150px; object-fit: contain'/>
                                                                          </div>
                                          </div>

                                  </div>
                                </div>

                                

                                <br><br>
                                       <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp UPDATE &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>
</form>
<center> <span id="error_exist" style="color:red; font-family: Verdana; font-size: 11px "></span>  </center>
                               <hr style="border-color: #686EE4">


<!-- ============================================================================================================================= -->

                                <div class="form-group">
                                      <div class="row"  >
                                         <form id="toogle_case_open">
                        <div class="col-md-12">
                            <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                  <th>KID FULL NAME</th>
                                 <!--  <th>GENDER</th> -->
                                  <th>CLASS</th>
                                  <th>RELATIONSIP</th>
                                  <th>PHOTO</th>
                                   <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody id="kidspickers"> 

                                </tbody>
                            </table>
                            <hr style="border-color: #217345">
                        </div>
                    </form>

                                      <div class="col-md-12" id="kidspickers11"> 

                                      
                                </div>
                              </div>
                            </div>

      <!-- ========================================================================================= -->
                                  

       <div id="delUserdelete" class="modal fade" tabindex="-1" role="dialog">
        <form action="GuardiansController/delete" method="post" >
            <div class="modal-dialog">
               
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">CLOSE</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">GUARDIAN ACCOUNT DELETE</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                       <input name="Guardianiddelete" class="lockingunlocking_id form-control" type="text" style="font-size: 11px">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO YOU WANT TOT DELETE THIS USER FROM PSKONNECT?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp YES &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>

                    </div>
                </div>
             
            </div>
             </form>
        </div>

<script>
        $(document).on('click','#editguardian,#btnlock,#btnunlock,#delUserdelete',function(){
         //alert('helloo');
           $('#txtusers_picker_id').val($(this).data('picker_id'));


               var textfullname=$(this).data('fullname');
               var restextfullname = textfullname.toUpperCase();
               $('#txtusers_fullname').val(restextfullname);
            


             $('#txtusers_contact').val($(this).data('contact'));
               $('#txtusers_gender').val($(this).data('gender'));

               $('#txtusers_photo_url').val($(this).data('photo'));


            var urlphotopicker=$(this).data('photo');
             $("#output_imageGuardian").attr("src",urlphotopicker);
                     
           //lockingunlocking
$('.lockingunlocking_id').val($(this).data('picker_id'));



             $('#txtusers_picker_iddelete').val($(this).data('picker_id'));
             var fullname=$(this).data('fullname');
             $('#txtfullnamedelete').html(fullname);



        });
    </script>

 <script>
    $(document).on('click','#editguardian',function(e) {
           var gid=$(this).data('picker_id');  
          // alert(gid);
        $.ajax({
            type:'POST',
            data:{gid:gid},
            url:'<?php echo site_url('GuardiansController/select_pickers_kids'); ?>',
            success:function(result)
            {
               // alert(result);
                data = JSON.parse(result);
                $('#kidspickers').empty();
                var $select=$('#kidspickers');
                $.each(data,
                    function (index, item) {

                data = JSON.parse(result);
                $('#kidspickers').empty();
                var $select=$('#kidspickers');
                $.each(data,
                    function (index, item) {  
                     
                        $select.append($('<tr>'+
                           ' <td> <p>' +'<span style="font-weight: bold;color:red"></span>'+' '+item.kid_fullname+'</p></td>'+
                            // '<td> <p>' +'<span style="font-weight: bold;color:red"></span>'+' '+item.gender+'</p></td>'+
                            '<td> <p>' +'<span style="font-weight: bold;color:red"></span>'+' '+item.class_name+'</p></td>'+
                             '<td> <p>' +'<span style="font-weight: bold;color:red"></span>'+' '+item.relationship+'</p></td>'+
                             '<td>'+'<img src="'+item.kid_photo+'"style="max-width:200px;max-height:50px;m1n-width:200px;min-height:50px" />'+
                             '</td>'+ 
                             '<td>'+'<button id="unpickid" data-kid_id_unpick="'+item.picker_R_kid_id+'" ' + 'class="unpicking_A_kid btn btn-warning btn-sx">Remove </button>'+
                             '</td></tr>'))
                    }
                );
      
                    }
                );
            }
        });

    });
</script>


 <script>
    $(document).on('click','.unpicking_A_kid',function(e) {
           var kid_id_unpick=$(this).data('kid_id_unpick');  
           //alert(kid_id_unpick);
        $.ajax({
            type:'POST',
            data:{kid_id_unpick:kid_id_unpick},
            url:'<?php echo site_url('GuardiansController/unpick_kid'); ?>',
            success:function(result)
            {
                //alert(result);
                data = JSON.parse(result);
                var display="Kid Has Been removed successfully";
                
                alert(display);
            
  
            }
        });

    });
</script>
