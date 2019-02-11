        <div id="delclass" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="ClassesController/deleteClass" method="post" >
                    <div class="modal-header bg-primary" style="background-color: #686EE4">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">CLASS DELETE</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <input type="hidden" id="txtclassid" name="txtclassid" >                            
                             <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">DO YOU WANT TO DELETE <span id="txtclassnameaaa" style="color: red"></span> FROM PSKONNECT?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-check"></i>&nbsp &nbsp YES &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> CANCEL</button></center>

                    </div>
                </div>
                    </form>
            </div>
        </div>
		</div>

          <div id="newRole" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header bg-primary" style="background-color: #686EE4">
                          <button type="button" class="close" data-dismiss="modal" style="color: #fff" >
                              <span aria-hidden="true" style="color: #fff">×</span>
                              <span class="sr-only">CLOSE</span>
                          </button>
                          <div class="text-center">
                              <span class="icon icon-group icon-5x m-y-lg"></span>
                              <h4 class="modal-title" style="font-size: 12px">ADD NEW CLASS</h4>

                          </div>
                      </div>
                      <div class="modal-tabs">

                          <div class="tab-content">
                             <form action="ClassesController/newClass" method="post" >
                              <div class="tab-pane fade active in" id="display9">
                                 
                                      <div class="form-group">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">CLASS NAME</label>
                                                  <input  name="classname" class="form-control" type="text" style="font-size: 11px"  onkeyup="this.value = this.value.toUpperCase();"></div>

<hr>

                                          </div></div>
                           


                                 

                              </div>

                          </div>
                      </div>
                      <div class="modal-footer">

                          <button type="submit" class="btn btn-primary" style="background-color: #686EE4"><i class="icon icon-save"></i> CREATE CLASS</button>
                      </div>
                           </form>
                  </div>
              </div>
          </div>

    <script>
        
        $(document).on('click','.btndeleteClass',function(){
           $('#txtclassid').val($(this).data('classid')); 
            
             $('#txtclassnameaaa').val($(this).data('classnamename')); 

        });
    </script>
     