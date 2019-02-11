     


<!--============================================createUser==========================================================-->
      <div id="addUser" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                 <form role="form" method="post" enctype="multipart/form-data" action="KidsController/addNewePicker">
                  <div class="modal-header bg-primary" style="background-color: #686EE4">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">CREAET A NEW PICKER</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                             
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">PICKER FULL NAME</label>
                                      <input id="pickername" name="pickername"  class="form-control" type="text" style="font-size: 11px" onkeyup="this.value = this.value.toUpperCase();">

                                       <input id="txtkidid" name="txtkidid"  class="form-control" type="hidden" style="font-size: 11px" >

                                      
                                          </div>
                                              
                                              
                                              <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">PICKERS CONTACT</label>

                                              <input id="pickercontact"  name="pickercontact" class="form-control" type="text" style="font-size: 11px">

                                             
                                          </div>
                                              
                                              <div class="col-md-6">
                                              <label  class="form-label" style="font-size: 12px">RELATIONSHIP WITH KID</label>

                                              <select id="pickerrelationship" name="pickerrelationship" class="form-control" style="font-size: 11px">
                                                 <option disabled="" selected="" >SELECT RELATIONSHIP</option>
                                                  <option value="PARENT" >PARENT</option>
                                                  <option value="RELATIVE">RELATIVE</option>
                                                  <option value="contributor">SIBLING</option>
                                                  <option value="SCHOOL BUS">SCHOOL BUS</option>


                                              </select>
                                          </div>

                                          <div class="col-md-6">

                                              <label  class="form-label" style="font-size: 12px">GENDER</label>

                                              <select id="pickergender" name="pickergender" class="form-control" style="font-size: 11px">
                                                 <option disabled="" selected="" >SELECT GENDER</option>
                                                 <option value="MALE" >MALE</option>
                                                  <option value="FEMALE">FEMALE</option>
                                                 
                                              </select>
                                          </div>

                                          </div>

                                          <div class="col-md-4">
                                               <label  class="form-label" style="font-size: 12px">PICKERS PASSPORT PICTURE</label>
                                               <div class="wrapper">

                                                            <script type='text/javascript'>
                                                                function Kidpreview_image1Pickers(event) 
                                                                {

                                                                 var reader = new FileReader();
                                                                 reader.onload = function()
                                                                 {
                                                                  var output = document.getElementById('Pickersoutput_image1');
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

                     <input name="newpicturepicker" type="file" accept="image/*"  onchange=" Kidpreview_image1Pickers(event)"><p id="demopicture"></p>
                                                                             <br>
    <img id="Pickersoutput_image1" style='height: 100px; width: 150px; object-fit: contain'/>
                                                                          </div>
                                          </div>

                                  </div></div>
                               <hr style="border-color: #686EE4">
                             </div>
                              </div>
                                <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp CREATE &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>

                    </div>
                                </div>
                                </div>
                                
                              </div>

                               
                                </div>
                              </form>

                          </div>
                        </div>
                               
                     </div>








       <div id="delUseractual" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <form  method="post"  action="KidsController/deleteKid">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">KID ACCOUNT DELETE</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                      <input type="hidden" name="kid_id_dis_id" class="txtkiddisabling" >
                           <input type="hidden" name="kid_id_dis" class="txtkkidfullnamekiddisabling" >
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO YOU WANT TO DELETE  <span class="error_exist" style="color:red; font-family: Verdana; font-size: 11px "></span> FROM PSKONNECT?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp YES &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>

                    </div>
                </div>
            </div>
          </form>
        </div>
		</div>

    <div id="delUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <form  method="post"  action="KidsController/Enablekid">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">CLOSE</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-unlock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">KID ACCOUNT ENABLE</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                      <input type="hidden" name="kid_id_dis_id" class="txtkiddisabling" >
                           <input type="hidden" name="kid_id_dis" class="txtkkidfullnamekiddisabling" >
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO YOU WANT TO ENABLE <span class="error_exist" style="color:red; font-family: Verdana; font-size: 11px "></span> IN PSKONNECT?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp YES &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>

                    </div>
                </div>
            </div>
          </form>
        </div>
    </div>









        <div id="disUser" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <form  method="post"  action="KidsController/disableKid">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">DISABLE KID ACCOUNT</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                          <input type="hidden" name="kid_id_dis_id" class="txtkiddisabling"  >
                           <input type="hidden" name="kid_id_dis" class="txtkkidfullnamekiddisabling" >
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO YOU WANT TO DISABLE  <span class="error_exist" style="color:red; font-family: Verdana; font-size: 11px "></span> IN PSKONNECT?</a></li>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp YES &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>

                    </div>
                </div>
            </div>
          </form>
        </div>
		</div>

       <!--  <div id="editUser123" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-edit icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">Edit Kid's Details</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display4">
                                <form action="/">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">Kid's Full Name</label>
                                                <input id="form-control-9" name="kidesname" class="form-control" type="text" style="font-size: 11px"></div>



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
                                                <input id="form-control-11" class="form-control" type="Number" style="font-size: 11px">
                                            </div>

                                        </div>
                                    </div><hr style="border-color: #686EE4">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label  class="form-label" style="font-size: 12px">Kid Role</label>
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

                        <button type="button" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </div> -->


 <div id="editUser" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary" style="background-color: #686EE4">
                      <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                          <span aria-hidden="true" style="color: #fff">×</span>
                          <span class="sr-only">CLOSE</span>
                      </button>
                      <div class="text-center">
                          <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                          <h4 class="modal-title" style="font-size: 12px">EDIT KID DETAILS</h4>

                      </div>
                  </div>
                  <div class="modal-tabs">

                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="display2">
                            <form role="form" method="post" enctype="multipart/form-data" action="KidsController/editKId">
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-8">                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">KIDS FULL NAME</label>
                                      <input id="mykidedit_id" name="txtkididkid" class="form-control" type="hidden" style="font-size: 11px">
                                    <br>
                                       
                                       <br>
                                      <input id="output_kidfullname" name="txtkkidfullnamekid" class="form-control" type="text" style="font-size: 11px">
                                        <input id="photoId" name="photoIdkid" class="form-control" type="hidden" style="font-size: 11px">

                                     </div>
                                              
                                              
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">GENDER</label>

                                         

                                      <select id="" name="txtgenderkid" class="txtgender12gender12 form-control" style="font-size: 11px">
                                                   <option value="MALE" >MALE</option>
                                                  <option value="FEMALE">FEMALE</option>
                                                </select>
                                          </div>
            
                                              <div class="col-md-12">
                                              <label  class="form-label" style="font-size: 12px">CLASS</label>

                                               <select id="txtclassnamekid_kid" name="class_idkid" class="form-control" style="font-size: 11px" required>
                            <option>class</option>
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
                                                                function Kidspreview_image1(event) 
                                                                {

                                                                 var reader = new FileReader();
                                                                 reader.onload = function()
                                                                 {
                                                                  var output = document.getElementById('output_image1Kids');
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



                     <input name="kideditedpicture" id="txtkidphotokid" type="file" accept="image/*"  onchange=" Kidspreview_image1(event)" ><p id="demopicture"></p>
                                                                             <br>
    <img id="output_image1Kids"  name="output_image1Kids" style='height: 100px; width: 150px;'/>
                                                                          </div>


                                          </div>

                                  </div>
                                  <br><br>
                                       <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp UPDATE &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>
                                </div>
                                  </form>
                               <hr style="border-color: #686EE4">
<!-- ======================================================================================================================= -->

                                <div class="form-group">
                                      <div class="row"  >
                                         <form id="toogle_case_open">
                        <div class="col-md-12">
                            <table id="datatable-fixed-header" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                  <th>PICKER FULL NAME</th>
                                  <th>CONTACT</th>
                                  <th>RELATIONSHIP</th>
                                  <th>PASSPORT</th>
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
                          



<!-- fullname,contact,relationship,photo  -->
  <script>
    $(document).on('click','#editkidinfoforkid',function(e) {
           var kidid=$(this).data('kidid');
           $('#mykidedit_id').val(kidid);

         var photo=$(this).data('kidphoto');
          $('#photoId').val(photo);

             var url="uploads/kids/".concat( photo ) ;
             $("#output_image1Kids").attr("src",photo);

             // var kidsname=$(this).data('kidfullname');
             //  $('#output_kidfullname').val(kidsname);


              var kidsname=$(this).data('kidfullname');
               var restextfullname = kidsname.toUpperCase();
               $('#output_kidfullname').val(restextfullname);



              $('#txtclassnamekid_kid').val($(this).data('classname'));


              var kidsgender=$(this).data('gender12');
               $('.txtgender12gender12').val(kidsgender);
        $.ajax({
            type:'POST',
            data:{kidid:kidid},
            url:'<?php echo site_url('KidsController/select_a_kid_pickers'); ?>',
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
                           ' <td> <p>' +'<span style="font-weight: bold;color:red"></span>'+' '+item.fullname+'</p></td>'+
                            '<td> <p>' +'<span style="font-weight: bold;color:red"></span>'+' '+item.contact+'</p></td>'+
                            '<td> <p>' +'<span style="font-weight: bold;color:red"></span>'+' '+item.relationship+'</p></td>'+
                             '<td>'+'<img src="'+item.photo+'"style="max-width:200px;max-height:50px;m1n-width:200px;min-height:50px" />'+'</td></tr>'))
                    }
                );
      
                    }
                );
            }
        });


    });
</script>

    <script>
        $(document).on('click','#addnewpickertokid,#kiddisabling,#kid_account_enable,#kiddeleting',function(){
           $('#txtkidid').val($(this).data('kidid'));
            $('.txtkiddisabling').val($(this).data('kidid'));
             $('.txtkkidfullnamekiddisabling').val($(this).data('kidfullname'));
              var kids_name=$(this).data('kidfullname');
              $('.error_exist').html(kids_name);
             // $('#txtkidid').val($(this).data('kidid'));
           
          
        });
    </script>











