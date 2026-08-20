<!doctype html>
<html lang="bn">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Labiba IT - UL/LI Responsive System</title>
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet" />
    <!-- BOOTSTRAP 5 -->
    <link href="<?php echo base_url(); ?>public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FONT AWESOME -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- SELECT2 -->
    <link
      href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
      rel="stylesheet" />

       <!-- style -->
    <link  href="<?php echo base_url(); ?>public/assets/css/style.css"  rel="stylesheet" />
   
  </head>
  <body>
    <!-- SIDEBAR OVERLAY -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
      <div class="sidebar-brand">
        <div class="sidebar-brand-content">
          <div class="sidebar-brand-icon"><i class="fa-solid fa-cube"></i></div>
          <span class="sidebar-brand-text">Labiba IT</span>
        </div>
        <button class="sidebar-close-btn" id="sidebarCloseBtn">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <!-- SIDEBAR UL/LI SCROLLABLE WRAPPER -->
      <div class="sidebar-menu-wrapper">
        <ul class="sidebar-nav">
          <li class="menu-heading">Main Navigation</li>

          <!-- SINGLE MENU ITEM -->
          <li class="menu-item active">
            <a href="<?php echo base_url(); ?>dashboard" class="menu-link">
              <i class="fa-solid fa-circle-dot menu-icon-common"></i>
              <span class="menu-text">Dashboard</span>
            </a>
            <!-- Collapsed Hover Popover -->
            <div class="menu-popover">
              <div class="popover-title">Dashboard</div>
            </div>
          </li>

          <!-- SUBMENU ITEM 1 -->
          <li class="menu-item open">
            <a class="menu-link">
              <i class="fa-solid fa-users menu-icon-common"></i>
              <span class="menu-text">Customers</span>
              <i class="fa-solid fa-chevron-right menu-arrow ms-auto"></i>
            </a>
            <ul class="submenu-nav">
              <li><a href="#" class="active"><i class="fa-solid fa-circle-dot"></i> Add Customer</a></li>
              <li><a href="#"><i class="fa-solid fa-circle"></i> Customer List</a></li>
              <li><a href="#">Customer Ledger</a></li>
            </ul>
           
          </li>

           <!-- Academic -->
              <?php 
                     $active_academic = ['classess', 'sections','subject','subjectGroup', 'academic_years'];
                     $is_active = in_array($active, $active_academic);
                     ?>
          <li class="menu-item <?php echo $is_active ? 'open' : ''; ?>">
            <a class="menu-link">
              <i class="fa-solid fa-graduation-cap menu-icon-common"></i>
              <span class="menu-text">Academic</span>
              <i class="fa-solid fa-chevron-right <?php echo $is_active ? 'menu-arrow' : ''; ?> ms-auto"></i>
            </a>
            <ul class="submenu-nav">
              <li><a href="<?php echo base_url(); ?>academic/academic_years/create" class="<?php echo ($active == 'academic_years') ? 'active' : ''; ?>"><i class="fa-solid fa-circle-dot"></i> Add Academic</a></li>
              <li><a href="<?php echo base_url(); ?>academic/academic_years"><i class="fa-solid fa-circle"></i> Academic List</a></li>
       
            </ul>
           
          </li>

           <!-- Academic -->
              <?php 
                     $active_academic = ['create_staff', 'staff_list'];
                     $is_active = in_array($active, $active_academic);
                     ?>
          <li class="menu-item <?php echo $is_active ? 'open' : ''; ?>">
            <a class="menu-link">
              <i class="fa-solid fa-users menu-icon-common"></i>
              <span class="menu-text">Staff</span>
              <i class="fa-solid fa-chevron-right <?php echo $is_active ? 'menu-arrow' : ''; ?> ms-auto"></i>
            </a>
            <ul class="submenu-nav">
              <li><a href="<?php echo base_url(); ?>staff/create" class="<?php echo ($active == 'create_staff') ? 'active' : ''; ?>"><i class="fa-solid fa-circle-dot"></i> Create New Staff</a></li>
              <li><a href="<?php echo base_url(); ?>staff" class="<?php echo ($active == 'staff_list') ? 'active' : ''; ?>"><i class="fa-solid fa-circle"></i> Staff List</a></li>
       
            </ul>
           
          </li>

          <!-- SUBMENU ITEM 2 -->
          <li class="menu-item">
            <a class="menu-link">
              <i class="fa-solid fa-circle-dot menu-icon-common"></i>
              <span class="menu-text">Products</span>
              <i class="fa-solid fa-chevron-right menu-arrow ms-auto"></i>
            </a>
            <ul class="submenu-nav">
              <li><a href="#">Add Product</a></li>
              <li><a href="#">Product Category</a></li>
              <li><a href="#">Stock Report</a></li>
            </ul>
            
          </li>

          

          <li class="menu-heading">Reports & Accounting</li>

          <li class="menu-item">
            <a class="menu-link">
              <i class="fa-solid fa-circle-dot menu-icon-common"></i>
              <span class="menu-text">Sales Report</span>
              <i class="fa-solid fa-chevron-right menu-arrow ms-auto"></i>
            </a>
            <ul class="submenu-nav">
              <li><a href="#">Daily Sales</a></li>
              <li><a href="#">Monthly Sales</a></li>
            </ul>
            <div class="menu-popover">
              <div class="popover-title">Sales Report</div>
              <ul class="popover-sub-list">
                <li><a href="#">Daily Sales</a></li>
                <li><a href="#">Monthly Sales</a></li>
              </ul>
            </div>
          </li>

          <li class="menu-item">
            <a href="#" class="menu-link">
              <i class="fa-solid fa-circle-dot menu-icon-common"></i>
              <span class="menu-text">Invoices</span>
            </a>
            <div class="menu-popover">
              <div class="popover-title">Invoices</div>
            </div>
          </li>

          <li class="menu-item">
            <a href="#" class="menu-link">
              <i class="fa-solid fa-circle-dot menu-icon-common"></i>
              <span class="menu-text">Settings</span>
            </a>
            <div class="menu-popover">
              <div class="popover-title">Settings</div>
            </div>
          </li>
        </ul>
      </div>
    </aside>

    <!-- TOPBAR -->
    <header class="topbar">
      <div class="topbar-left">
        <button class="toggle-btn" id="sidebarCollapseBtn">
          <i class="fa-solid fa-bars-staggered"></i>
        </button>
      
      </div>

      <div class="topbar-right">
        <div class="language-select-wrapper">
          <select id="languageSelect">
            <option value="bn" selected>বাংলা</option>
            <option value="en">EN</option>
          </select>
        </div>

        <!-- Notification Dropdown -->
        <div class="dropdown">
          <button
            class="topbar-icon-btn"
            id="notifDropdownBtn"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fa-regular fa-bell"></i>
            <span class="notification-badge"></span>
          </button>
          <div
            class="dropdown-menu dropdown-menu-end notification-dropdown"
            aria-labelledby="notifDropdownBtn">
            <div class="notification-header">Notifications</div>
            <div class="notification-item">
              <i class="fa-solid fa-circle-check"></i>
              <div>
                <p class="notif-title">নতুন কাস্টমার নিবন্ধিত হয়েছে</p>
                <span class="notif-time">20 Aug 2026, 09:30 AM</span>
              </div>
            </div>
            <div class="notification-item">
              <i class="fa-solid fa-triangle-exclamation text-warning"></i>
              <div>
                <p class="notif-title">সিস্টেম ব্যাকআপ সম্পন্ন হয়েছে</p>
                <span class="notif-time">19 Aug 2026, 11:15 PM</span>
              </div>
            </div>
          </div>
        </div>

        <!-- PROFILE DROPDOWN WITH AVATAR -->
        <div class="dropdown">
          <button
            class="profile-avatar-btn"
            id="profileDropdown"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            L
          </button>
          <ul
            class="dropdown-menu dropdown-menu-end profile-dropdown-menu"
            aria-labelledby="profileDropdown">
            <li class="dropdown-header">
              <strong class="d-block text-dark">Litan Sarkar</strong>
              <small class="text-muted">Admin User</small>
            </li>
            <li>
              <a class="dropdown-item" href="#"
                ><i class="fa-regular fa-user"></i> Profile</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="#"
                ><i class="fa-solid fa-key"></i> Change Password</a
              >
            </li>
            <li><hr class="dropdown-divider my-1" /></li>
            <li>
              <a class="dropdown-item text-danger" href="#"
                ><i class="fa-solid fa-right-from-bracket text-danger"></i>
                Logout</a
              >
            </li>
          </ul>
        </div>
      </div>
    </header>

   <!-- MAIN CONTENT -->
    <main class="main-content">
      <div class="content-wrapper">
       <?php
             if(isset($content)){
               echo $content;
             }
             
             ?>
      </div>
    </main>

    <!-- MOBILE BOTTOM NAVIGATION -->
    <div class="mobile-bottom-nav">
         <button class="nav-item-app" id="mobileMenuBtn">
        <i class="fa-solid fa-bars"></i>
        <span>Menu</span>
      </button>
      <button class="nav-item-app">
        <i class="fa-solid fa-chart-pie"></i>
        <span>Reports</span>
      </button>
      

      <!-- CENTER HOME BUTTON WITH NOTCH RADIUS -->
      <a href="#" class="nav-item-app-home">
        <div class="home-icon-btn">
          <i class="fa-solid fa-house"></i>
        </div>
      </a>

      <button class="nav-item-app" id="mobileNotifTrigger">
        <i class="fa-regular fa-bell"></i>
        <span>Alerts</span>
      </button>
       <a href="#"  class="nav-item-app ">
        <i class="fa-solid fa-right-to-bracket"></i>
        <span>Sign In</span>
        </a>
    </div>
   
     <!-- SCRIPTS -->
      <script src="<?php echo base_url(); ?>public/assets/js/jquery-3.7.1.min.js"></script>
     <!-- Bootstrap 5 Bundle JS -->
    <script src="<?php echo base_url(); ?>public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- main js -->
    <script src="<?php echo base_url(); ?>public/assets/js/main.js" type="text/javascript"></script>
    <script>
    
    </script>
  </body>
</html>