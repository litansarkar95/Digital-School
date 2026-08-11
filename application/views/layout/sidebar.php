<!-- start sidebar -->
<aside class="sidebar" id="sidebar">
    <!-- BRAND -->

    <div class="brand">
        <div class="brand-icon">
            <i class="fa-solid fa-layer-group"></i>
        </div>

        <div class="brand-text">
            AdminPro

            <span class="brand-version"> v1.0 </span>
        </div>
    </div>

    <!-- MOBILE CLOSE -->

    <button type="button" class="mobile-sidebar-close" id="mobileSidebarClose" aria-label="Close Menu">
        <i class="fa-solid fa-xmark"></i>
    </button>

    <!-- MENU -->

    <div class="sidebar-menu">
        <div class="menu-label">Main Menu</div>

        <!-- DASHBOARD -->

        <a href="<?php echo base_url(); ?>dashboard"  class="menu-link <?= ($active == 'dashboard') ? 'active' : ''; ?>" data-page="dashboard">
            <i class="fa-solid fa-chart-pie"></i>

            <span> Dashboard </span>
        </a>

        <!-- USERS -->

        <!-- <button
            type="button"
            class="submenu-toggle"
            data-bs-toggle="collapse"
            data-bs-target="#usersSubmenu"
            aria-expanded="true"
        >
            <i class="fa-solid fa-users"></i>

            <span> Users </span>

            <i class="fa-solid fa-chevron-down arrow"></i>
        </button>

        <div class="collapse show submenu" id="usersSubmenu">
            <a href="#userListSection" class="active" data-page="users">
                <i class="fa-solid fa-circle submenu-dot"></i>

                All Users
            </a>

            <a href="#addUserForm" data-page="add-user">
                <i class="fa-solid fa-circle submenu-dot"></i>

                Add User
            </a>

            <a href="#" data-page="roles">
                <i class="fa-solid fa-circle submenu-dot"></i>

                Roles & Permissions
            </a>
        </div> -->
<!-- Academy  -->

        <button
            type="button" 
            class="submenu-toggle <?= ($active == 'classess' || $active == 'sections') ? 'menu-link active' : ''; ?> "
            data-bs-toggle="collapse"
            data-bs-target="#academic"
            aria-expanded="<?= ($active == 'classess' || $active == 'sections') ? 'true' : 'false'; ?>"
        >
           <i class="fa-solid fa-graduation-cap"></i>

            <span> Academic </span>

            <i class="fa-solid fa-chevron-down arrow"></i>
        </button>

        <div class="collapse  <?= ($active == 'classess' || $active == 'sections') ? 'show' : ''; ?> submenu" id="academic">
            <a href="<?php echo base_url(); ?>academic/classes" class="<?= ($active == 'classess') ? 'active' : ''; ?>" >
                <i class="fa-solid fa-circle submenu-dot"></i>
              Class
            </a>
             <a href="<?php echo base_url(); ?>academic/sections" class="<?= ($active == 'sections') ? 'active' : ''; ?>" >
                <i class="fa-solid fa-circle submenu-dot"></i>
              Sections
            </a>
             <a href="#userListSection" class="" data-page="users">
                <i class="fa-solid fa-circle submenu-dot"></i>
              Subject
            </a>
           
        </div>

        <!-- REPORTS -->

        <button
            type="button"
            class="submenu-toggle"
            data-bs-toggle="collapse"
            data-bs-target="#reportsSubmenu"
            aria-expanded="false"
        >
            <i class="fa-solid fa-chart-column"></i>

            <span> Reports </span>

            <i class="fa-solid fa-chevron-down arrow"></i>
        </button>

        <div class="collapse submenu" id="reportsSubmenu">
            <a href="#">
                <i class="fa-solid fa-circle submenu-dot"></i>
                Sales Report
            </a>

            <a href="#">
                <i class="fa-solid fa-circle submenu-dot"></i>
                User Report
            </a>

            <a href="#">
                <i class="fa-solid fa-circle submenu-dot"></i>

                Activity Report
            </a>
        </div>

        <!-- SYSTEM -->

        <div class="menu-label mt-3">System</div>

        <a href="#" class="menu-link">
            <i class="fa-solid fa-gear"></i>

            <span> Settings </span>
        </a>

        <a href="#" class="menu-link">
            <i class="fa-solid fa-shield-halved"></i>

            <span> Security </span>
        </a>

        <a href="#" class="menu-link">
            <i class="fa-solid fa-clock-rotate-left"></i>

            <span> Activity Logs </span>
        </a>
    </div>
</aside>
