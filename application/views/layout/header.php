 <header class="topbar">
            <div class="d-flex align-items-center gap-3">
               <!-- MOBILE MENU -->

               <button class="mobile-menu-btn" id="mobileMenuBtn" type="button" aria-label="Open Menu">
                  <i class="fa-solid fa-bars"></i>
               </button>

               <button
                  type="button"
                  class="sidebar-collapse-btn"
                  id="sidebarCollapseBtn"
                  aria-label="Minimize Sidebar"
                  title="Minimize Sidebar"
               >
                  <i class="fa-solid fa-bars-staggered"></i>
               </button>

               <!-- SEARCH -->

               <div class="topbar-search">
                  <i class="fa-solid fa-magnifying-glass"></i>

                  <input type="text" placeholder="Search anything..." />
               </div>
            </div>

            <!-- RIGHT -->

            <div class="topbar-right">
               <!-- LANGUAGE -->

               <div class="dropdown language-dropdown">
                  <button
                     class="language-btn dropdown-toggle"
                     type="button"
                     data-bs-toggle="dropdown"
                     aria-expanded="false"
                     aria-label="Change Language"
                  >
                     <span class="language-icon">
                        <i class="fa-solid fa-globe"></i>
                     </span>

                     <span class="language-text"> English </span>
                  </button>

                  <ul class="dropdown-menu dropdown-menu-end language-menu">
                     <li>
                        <button type="button" class="dropdown-item language-item active">
                           <span class="lang-flag">🇬🇧</span>
                           <span>English</span>
                           <i class="fa-solid fa-check ms-auto"></i>
                        </button>
                     </li>

                     <li>
                        <button type="button" class="dropdown-item language-item">
                           <span class="lang-flag">🇧🇩</span>
                           <span>বাংলা</span>
                        </button>
                     </li>

                     <li>
                        <button type="button" class="dropdown-item language-item">
                           <span class="lang-flag">🇸🇦</span>
                           <span>العربية</span>
                        </button>
                     </li>
                  </ul>
               </div>

              
               <!-- NOTIFICATION -->

               <button class="notification-btn" type="button">
                  <i class="fa-regular fa-bell"></i>

                  <span class="notification-dot"></span>
               </button>

               <!-- PROFILE -->

               <div class="dropdown">
                  <button class="profile-btn dropdown-toggle" data-bs-toggle="dropdown" type="button">
                     <div class="profile-avatar">AD</div>

                     <div class="profile-name">
                        Admin User

                        <span class="profile-role"> Administrator </span>
                     </div>
                  </button>

                  <ul class="dropdown-menu dropdown-menu-end">
                     <li>
                        <a href="#" class="dropdown-item">
                           <i class="fa-regular fa-user me-2"></i>

                           Profile
                        </a>
                     </li>

                     <li>
                        <a href="#" class="dropdown-item">
                           <i class="fa-solid fa-key me-2"></i>

                           Change Password
                        </a>
                     </li>

                     <li>
                        <hr class="dropdown-divider" />
                     </li>

                     <li>
                        <a href="<?php echo base_url(); ?>logout" class="dropdown-item text-danger">
                           <i class="fa-solid fa-right-from-bracket me-2"></i>

                           Logout
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </header>