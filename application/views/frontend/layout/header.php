   <!-- =========================================================
     TOP BAR
========================================================= -->

    <div class="topbar">
        <div class="container">
            <div class="topbar-inner">
                <div class="top-contact">
                    <a href="mailto:greenfieldschool2@gmail.com" class="email">
                        <i class="fa-solid fa-envelope"></i> greenfieldschool2@gmail.com

                    </a>

                    <a href="tel:+8801717978023">
                        <i class="fa-solid fa-phone"></i> 01717978023, 01782322522
                    </a>
                </div>

                <div class="top-right">
                    <div class="social-icons">
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>

                        <a href="#" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>

                    <a href="<?php echo base_url(); ?>login" class="login-btn">
                        <i class="fa-solid fa-right-to-bracket"></i> লগইন
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- =========================================================
     MAIN HEADER + NAVBAR
========================================================= -->

    <header class="main-header">
        <div class="container">
            <div class="header-inner">
                <!-- Logo -->

                <a href="<?php echo base_url(); ?>" class="brand">
                    <img src="<?php echo base_url(); ?>static/assets/img/logo.png" class="" alt="School Logo" />
                    <!-- <img src="<?php echo base_url(); ?>static/assets/img/logo.png" class="brand-logo" alt="School Logo" /> -->

                    <!-- <div class="brand-text">
                        <h1>গ্রীনফিল্ড স্কুল</h1>

                        <span> Greenfield School</span>
                    </div> -->
                </a>

                <!-- Desktop Navigation -->

                <nav class="desktop-nav">
                    <ul>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>"> হোম </a>
                        </li>

                        <!-- About -->

                        <li>
                            <a href="#">
                  আমাদের সম্পর্কে
                  <i class="fa-solid fa-angle-down ms-1"></i>
                </a>

                            <ul class="dropdown-menu-custom">
                                <li>
                                    <a href="<?php echo base_url(); ?>about-us"> বিদ্যালয়ের ইতিহাস </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>messages"> প্রধান শিক্ষকের বাণী </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>"> লক্ষ্য ও উদ্দেশ্য </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>teachers-and-staff">  শিক্ষকবৃন্দ </a>
                                </li>

                                <!-- <li>
                                    <a href="#">
                                    শিক্ষকবৃন্দ
                                    <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                    <ul class="nested">
                                        <li>
                                            <a href="#"> প্রধান শিক্ষক </a>
                                        </li>

                                        <li>
                                            <a href="#"> সহকারী শিক্ষক </a>
                                        </li>

                                        <li>
                                            <a href="#"> কর্মচারীবৃন্দ </a>
                                        </li>
                                    </ul>
                                </li> -->

                                <li>
                                    <a href="<?php echo base_url(); ?>governing-body"> বিদ্যালয় পরিচালনা কমিটি </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Academic -->

                        <li>
                            <a href="#">
                  একাডেমিক
                  <i class="fa-solid fa-angle-down ms-1"></i>
                </a>

                            <ul class="dropdown-menu-custom">
                                <li>
                                    <a href="<?php echo base_url(); ?>class-routine"> ক্লাস রুটিন </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>exam-routine"> পরীক্ষার রুটিন </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>"> সিলেবাস </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>result"> ফলাফল </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>academic-calendar"> একাডেমিক ক্যালেন্ডার </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Admission -->

                        <li>
                            <a href="#">
                  ভর্তি
                  <i class="fa-solid fa-angle-down ms-1"></i>
                </a>

                            <ul class="dropdown-menu-custom">
                                <li>
                                    <a href="<?php echo base_url(); ?>admission"> ভর্তি বিজ্ঞপ্তি </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>online-admission"> অনলাইন ভর্তি </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>"> ভর্তি তথ্য </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>"> ভর্তি ফলাফল </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Notice -->

                        <li>
                            <a href="<?php echo base_url(); ?>notice"> নোটিশ </a>
                        </li>

                        <!-- Gallery -->

                        <li>
                            <a href="#">
                  গ্যালারি
                  <i class="fa-solid fa-angle-down ms-1"></i>
                </a>

                            <ul class="dropdown-menu-custom">
                                <li>
                                    <a href="<?php echo base_url(); ?>gallery"> ফটো গ্যালারি </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>gallery"> ভিডিও গ্যালারি </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>contact-us"> যোগাযোগ </a>
                        </li>
                    </ul>
                </nav>

                <!-- Mobile Menu Button -->

                <button type="button" class="mobile-menu-btn" id="mobileMenuOpen">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
      <!-- =========================================================
     MOBILE FULL SCREEN MENU
========================================================= -->

    <div class="mobile-menu-overlay" id="mobileMenuOverlay">
        <div class="mobile-menu">
            <div class="mobile-menu-head">
                <div class="mobile-brand">
                     <img src="<?php echo base_url(); ?>static/assets/img/logo.png" class="" alt="School Logo" />
                    <!-- <img src="https://placehold.co/100x100/0b5d4b/ffffff?text=GVHS" alt="Logo" />

                    <strong> গ্রিন ভ্যালি হাই স্কুল </strong> -->
                </div>

                <button class="mobile-close" id="mobileMenuClose">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <nav class="mobile-nav">
                <ul>
                    <li>
                        <a href="<?php echo base_url(); ?>"> হোম </a>
                    </li>

                    <!-- About -->

                    <li>
                        <a href="javascript:void(0)" class="mobile-parent">
                আমাদের সম্পর্কে

                <i class="fa-solid fa-plus"></i>
              </a>

                        <ul class="mobile-submenu">
                             <li>
                                    <a href="<?php echo base_url(); ?>about-us"> বিদ্যালয়ের ইতিহাস </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>messages"> প্রধান শিক্ষকের বাণী </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>"> লক্ষ্য ও উদ্দেশ্য </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>teachers-and-staff">  শিক্ষকবৃন্দ </a>
                                </li>

                            <!-- <li>
                                <a href="javascript:void(0)" class="mobile-parent">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                                <ul class="mobile-submenu">
                                    <li>
                                        <a href="#"> প্রধান শিক্ষক </a>
                                    </li>

                                    <li>
                                        <a href="#"> সহকারী শিক্ষক </a>
                                    </li>

                                    <li>
                                        <a href="#"> কর্মচারীবৃন্দ </a>
                                    </li>
                                </ul>
                            </li> -->

                            <li>
                                <a href="#"> পরিচালনা কমিটি </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Academic -->

                    <li>
                        <a href="javascript:void(0)" class="mobile-parent">
                একাডেমিক

                <i class="fa-solid fa-plus"></i>
              </a>

                        <ul class="mobile-submenu">
                            <li>
                                    <a href="<?php echo base_url(); ?>class-routine"> ক্লাস রুটিন </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>exam-routine"> পরীক্ষার রুটিন </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>"> সিলেবাস </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>result"> ফলাফল </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>academic-calendar"> একাডেমিক ক্যালেন্ডার </a>
                                </li>
                        </ul>
                    </li>

                    <!-- Admission -->

                    <li>
                        <a href="javascript:void(0)" class="mobile-parent">
                ভর্তি

                <i class="fa-solid fa-plus"></i>
              </a>

                        <ul class="mobile-submenu">
                            <li>
                                    <a href="<?php echo base_url(); ?>admission"> ভর্তি বিজ্ঞপ্তি </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>online-admission"> অনলাইন ভর্তি </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>"> ভর্তি তথ্য </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url(); ?>"> ভর্তি ফলাফল </a>
                                </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>"> নোটিশ </a>
                    </li>

                    <!-- Gallery -->

                    <li>
                        <a href="javascript:void(0)" class="mobile-parent">
                গ্যালারি

                <i class="fa-solid fa-plus"></i>
              </a>

                        <ul class="mobile-submenu">
                            <li>
                                <a href="<?php echo base_url(); ?>gallery"> ফটো গ্যালারি </a>
                            </li>

                            <li>
                                <a href="#"> ভিডিও গ্যালারি </a>
                            </li>
                        </ul>
                    </li>
 <li>
                        <a href="<?php echo base_url(); ?>login"> লগইন </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>contact-us"> যোগাযোগ </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>