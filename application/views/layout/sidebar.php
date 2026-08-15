
<aside class="main-sidebar">

<div class="sidebar">
      <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="<?php echo base_url(); ?>dashboard" class="<?php if($active == 'dashboard'){ echo 'activeColor';}?>" ><i class="fa fa-home"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                            
                <?php 
                     $active_academic = ['students', 'create_student'];
                     $is_active = in_array($active, $active_academic);
                     ?>

                  <li class="treeview <?php echo $is_active ? 'active' : ''; ?>">
                     <a href="#">
                        <i class="fa fa-graduation-cap"></i><span>Students</span>
                        <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                        </span>
                     </a>
                     <ul class="treeview-menu <?php echo $is_active ? 'menu-open' : ''; ?>" <?php echo $is_active ? 'style="display: block;"' : ''; ?>>
                        
                        <li class="<?php echo ($active == 'classess') ? 'activeColor' : ''; ?>">
                              <a href="<?php echo base_url(); ?>academic/classes">Class</a>
                        </li>
                        
                        <li class="<?php echo ($active == 'sections') ? 'activeColor' : ''; ?>">
                              <a href="<?php echo base_url(); ?>academic/sections">Sections</a>
                        </li>
                        
                        <li class="<?php echo ($active == 'academic_years') ? 'activeColor' : ''; ?>">
                              <a href="<?php echo base_url(); ?>academic/academic_years">Academic Year</a>
                        </li>
                        
                     </ul>
                  </li>
                     <?php 
                     $active_academic = ['classess', 'sections', 'academic_years'];
                     $is_active = in_array($active, $active_academic);
                     ?>

                  <li class="treeview <?php echo $is_active ? 'active' : ''; ?>">
                     <a href="#">
                        <i class="fa fa-graduation-cap"></i><span>Academic</span>
                        <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                        </span>
                     </a>
                     <ul class="treeview-menu <?php echo $is_active ? 'menu-open' : ''; ?>" <?php echo $is_active ? 'style="display: block;"' : ''; ?>>
                        
                        <li class="<?php echo ($active == 'classess') ? 'activeColor' : ''; ?>">
                              <a href="<?php echo base_url(); ?>academic/classes">Class</a>
                        </li>
                        
                        <li class="<?php echo ($active == 'sections') ? 'activeColor' : ''; ?>">
                              <a href="<?php echo base_url(); ?>academic/sections">Sections</a>
                        </li>
                        
                        <li class="<?php echo ($active == 'academic_years') ? 'activeColor' : ''; ?>">
                              <a href="<?php echo base_url(); ?>academic/academic_years">Academic Year</a>
                        </li>
                        
                     </ul>
                  </li>

               </ul>
            </div>

                  </aside>