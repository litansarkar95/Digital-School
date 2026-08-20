<header class="main-header">
            <a href="<?php echo base_url(); ?>" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <p style="color:#fff;font-size:22px;text-transform: uppercase;">Admin</p>
  <!--
               <img src="<?php echo base_url(); ?>backend/assets/dist/img/mini-logo.png" alt="">

               -->
               </span>
               <span class="logo-lg">
               <p style="color:#fff;font-size:22px;text-transform: uppercase;">Admin</p>
                  <!--
               <img src="<?php echo base_url(); ?>backend/assets/dist/img/logo.png" alt="">
               -->
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                           <span style="color:#fff;" class="fa fa-bars"></span>
               </a>
               <!-- searchbar-->
              
             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Orders -->
                 
                     <!-- Notifications -->
<!--
                     <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-bell"></i>
                        <span class="label label-warning">7</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-green"></i>Change Your font style</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-red"></i>
                                    check the system ststus..</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
-->
       
                        <!-- Messages -->
                        </li>
                     <!-- user -->
                     <!-- <li class="dropdown dropdown-user">
                     <?php   $language = $this->session->userdata('site_lang');
                
                     if($language=="english"){  ?>  
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><img src="<?php echo base_url(); ?>public/assets/icon/uk.png" alt="" width="45" height="45"></a>
                       <?php
                     } else if($language=="bangla"){ 
                       ?>
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><img src="<?php echo base_url(); ?>public/assets/icon/bd.png" alt="" width="45" height="45"> </a>
                      
                       <?php
                     }
                       ?>
                       
                        <ul class="dropdown-menu" >
                           <li>
                           <a href="#" class="connection-item" onclick="languagesChange('english');"><img src="<?php echo base_url(); ?>public/assets/icon/uk.png" alt="" width="45" height="45" > <span><?php echo display('english'); ?></span></a>
                           </li>
                           <li>
                           <a href="#" class="connection-item" onclick="languagesChange('bangla');"><img src="<?php echo base_url(); ?>public/assets/icon/bd.png" alt=""  width="45" height="45"> <span><?php echo display('bangla'); ?></span></a>
                        
                        </li>
                       
                        </ul>
                     </li>
 -->

                     <!-- Tasks -->
                     <li class="dropdown notifications-menu">
                     <div class="nav-clock">
            <div class="time">
               
                <span class="time-hours"></span>
                <span class="time-min"></span>
                <span class="time-sec"></span>
           
                
            </div>
        </div><!-- nav-clock -->
        </li>
                     <!-- user -->
                   <li class="dropdown dropdown-user">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 7px 10px;">
        <img src="<?php echo base_url(); ?>public/images/staff/0.png" class="img-circle" width="35" height="35" alt="user" style="border: 1px solid #ddd;">
        <i class="fa fa-angle-down" style="margin-left: 3px;"></i>
    </a>
    
    <ul class="dropdown-menu user-menu" style="min-width: 210px; border-radius: 4px; border: 1px solid #d2d6de; box-shadow: 0 6px 12px rgba(0,0,0,.175); padding: 0; overflow: hidden;">
        
        <li style="border-bottom: 1px solid #f4f4f4;">
            <a href="<?php echo base_url()?>staff/profile" style="padding: 12px 15px; color: #333; display: block; transition: all 0.2s;">
                <i class="fa fa-user-circle" style="color: #3c8dbc; width: 25px; font-size: 16px;"></i> 
                <span>User Profile</span>
            </a>
        </li>

                  <?php $language = $this->session->userdata('site_lang'); ?>
                  <li style="border-bottom: 1px solid #f4f4f4;">
                        <?php if($language == "english"): ?>
                           <a href="javascript:void(0);" onclick="languagesChange('bangla');" style="padding: 12px 15px; color: #333; display: block;">
                              <i class="fa fa-language" style="color: #00a65a; width: 25px; font-size: 16px;"></i> 
                              <span>Switch to বাংলা</span>
                           </a>
                        <?php else: ?>
                           <a href="javascript:void(0);" onclick="languagesChange('english');" style="padding: 12px 15px; color: #333; display: block;">
                              <i class="fa fa-language" style="color: #00a65a; width: 25px; font-size: 16px;"></i> 
                              <span>Switch to English</span>
                           </a>
                        <?php endif; ?>
                  </li>

                  <li style="border-bottom: 1px solid #f4f4f4;">
                        <a href="<?php echo base_url()?>staff/profile/change_password" style="padding: 12px 15px; color: #333; display: block;">
                           <i class="fa fa-key" style="color: #f39c12; width: 25px; font-size: 16px;"></i> 
                           <span>Change Password</span>
                        </a>
                  </li>

                  <li style="background-color: #fff5f5;">
                        <a href="<?php echo base_url(); ?>logout" style="padding: 12px 15px; color: #dd4b39; font-weight: 600; display: block;">
                           <i class="fa fa-power-off" style="color: #dd4b39; width: 25px; font-size: 16px;"></i> 
                           <span>Logout</span>
                        </a>
                  </li>
               </ul>
            </li>
                     
                  </ul>
               </div>
            </nav>
         </header>

   

