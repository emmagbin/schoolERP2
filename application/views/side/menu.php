   <div class="layout-main">
     
	 <div class="layout-sidebar" >
        <div class="layout-sidebar-backdrop" ></div>
        <div class="layout-sidebar-body" >
          <div class="custom-scrollbar" >
            <nav id="sidenav" class="sidenav-collapse collapse" >
              <ul class="sidenav">
                  <li class="sidenav-heading" style="color: #000"><b><u>User Management</u></b></li>
                  
                  <?php if($active!='user'){?>
                     <li class="sidenav-item">
                      <a href="user" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit"></span>
                          <span class="sidenav-label" style="font-size: 11px" >Accounts Utilities</span>
                      </a>

                  </li>

                   <?php }?>
                  
                     <?php if($active=='user'){?>
                       <li class="sidenav-item" style="background-color: #686EE4;">
                      <a href="user" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Accounts Utilities</span>
                      </a>

                  </li>
                   <?php }?>
                  
                 
                  
                

                

                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-users"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Create A New User</span>
                      </a>

                  </li>

                  <li class="sidenav-heading" style="color: #000"><b><u>Class Settings Management</u></b></li>
                  
                   <?php if($active!='classes'){?>
                     <li class="sidenav-item">
                      <a href="classes" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit"></span>
                          <span class="sidenav-label" style="font-size: 11px" >Data Utilities</span>
                      </a>

                  </li>

                   <?php }?>
                  
                     <?php if($active=='classes'){?>
                       <li class="sidenav-item"  style="background-color: #686EE4;">
                      <a href="classes" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Data Utilities</span>
                      </a>

                  </li>
                   <?php }?>
                                   




                  <li class="sidenav-heading" style="color: #000"><b><u>Kids &amp Guardians Data Mart</u></b></li>
                  
                        <?php if($active!='kids'){?>
                      <li class="sidenav-item ">
                      <a href="kids" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-group"></span>
                          <span class="sidenav-label" style="font-size: 11px">Kids Data Utilities</span>
                      </a>

                  </li>

                   <?php }?>
                  
                     <?php if($active=='kids'){?>
                       <li class="sidenav-item"  style="background-color: #686EE4;">
                      <a href="kids" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Kids Data Utilities</span>
                      </a>

                  </li>
                   <?php }?>                  
                          <?php if($active!='guardians'){?>
                      <li class="sidenav-item ">
                      <a href="guardians" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-group"></span>
                          <span class="sidenav-label" style="font-size: 11px">Guardians Data Utilities</span>
                      </a>

                  </li>

                   <?php }?>
                  
                     <?php if($active=='guardians'){?>
                       <li class="sidenav-item"  style="background-color: #686EE4;">
                      <a href="guardians" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Guardians Data Utilities</span>
                      </a>

                  </li>
                   <?php }?>


                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-user-plus"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createkid">Register A Kid</span>
                      </a>

                  </li>
                  
                  <!-- <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-male"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createguardian">Onboard A Guardian</span>
                      </a>

                  </li> -->

               <!--  <li class="sidenav-heading" style="color: #000"><b><u>Staff Data Management</u></b></li>
                  
                             <?php if($active!='staff'){?>
                      <li class="sidenav-item ">
                      <a href="staffs" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-group"></span>
                          <span class="sidenav-label" style="font-size: 11px">Staff Data Mart</span>
                      </a>

                  </li>

                   <?php }?>
                  
                     <?php if($active=='staff'){?>
                       <li class="sidenav-item"  style="background-color: #686EE4;">
                      <a href="staffs" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Staff Data Mart</span>
                      </a>

                  </li>
                   <?php }?>

                        <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-male"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createstaff">Register A Staff</span>
                      </a>

                  </li> -->


                 
                     
                  <li class="sidenav-heading" style="color: #000"><b><u> Reporting &amp Analytics</u></b></li>
                  <?php if($active!='dropoff'){?>
                  <li class="sidenav-item ">
                      <a href="dropoff" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-hand-grab-o"></span>
                          <span class="sidenav-label" style="font-size: 11px">Drop Offs RE</span>
                      </a>

                  </li>
                  <?php }?>

                   <?php if($active=='dropoff'){?>
                       <li class="sidenav-item"  style="background-color: #686EE4;">
                      <a href="dropoff" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Drop Offs RE</span>
                      </a>

                  </li>
                   <?php }?>





                   <?php if($active!='pickup'){?>
                  <li class="sidenav-item ">
                      <a href="pickup" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-hand-grab-o"></span>
                          <span class="sidenav-label" style="font-size: 11px">Pick Ups RE</span>
                      </a>

                  </li>
                  <?php }?>

                   <?php if($active=='pickup'){?>
                       <li class="sidenav-item"  style="background-color: #686EE4;">
                      <a href="pickup" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                          <span class="sidenav-label" style="font-size: 11px; color: #fff" >Pick Ups RE</span>
                      </a>

                  </li>
                   <?php }?>


               

                 <!--  <li class="sidenav-item ">
                      <a href="pickup" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-bus"></span>
                          <span class="sidenav-label" style="font-size: 11px">Pick Ups RE</span>
                      </a>

                  </li> -->


                   <li class="sidenav-heading" style="color: #000"><b><u> Schools Settings</u></b></li>
                  
                  <li class="sidenav-item ">
                      <a href="#" aria-haspopup="true">
                          <span class="sidenav-icon icon icon-user-plus"></span>
                          <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#schoolsSettings">Schools Infomations</span>
                      </a>

                  </li>
                 







              </ul>
            </nav>
          </div>
        </div>
      </div>
   


