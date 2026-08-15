<!doctype html>
<html lang="bn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo isset($title) ? $title : 'Shaj Corner'; ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Style css -->
    <link href="<?php echo base_url(); ?>static/assets/css/style.css" rel="stylesheet" />
</head>
</head>

<body>
  <?php include(APPPATH . 'views/frontend/layout/header.php'); ?>
    <!-- alert -->
   <script>
     <?php if ($this->session->flashdata('success')): ?>
        toastr.success('<?php echo $this->session->flashdata('success'); ?>');
    <?php endif; ?>
    

    <?php if ($this->session->flashdata('error')): ?>
        toastr.error('<?php echo $this->session->flashdata('error'); ?>');
    <?php endif; ?>
      </script>

       <?php
        if(isset($content)){
          echo $content;
        }
        
        ?>
   <?php include(APPPATH . 'views/frontend/layout/footer.php'); ?>
  
    <!-- =========================================================
     BACK TO TOP
========================================================= -->

    <button class="back-top" id="backTop">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
    <!-- =========================================================
     JAVASCRIPT
========================================================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        /* ==========================================
           MOBILE MENU
        ========================================== */
    
          const mobileMenuOpen = document.getElementById("mobileMenuOpen");
    
          const mobileMenuClose = document.getElementById("mobileMenuClose");
    
          const mobileMenuOverlay = document.getElementById("mobileMenuOverlay");
    
          mobileMenuOpen.addEventListener("click", function () {
            mobileMenuOverlay.classList.add("active");
    
            document.body.style.overflow = "hidden";
          });
    
          mobileMenuClose.addEventListener("click", function () {
            mobileMenuOverlay.classList.remove("active");
    
            document.body.style.overflow = "";
          });
    
          /*
           Overlay click করলে menu বন্ধ হবে
           কিন্তু menu-এর ভিতরে click করলে হবে না
        */
    
          mobileMenuOverlay.addEventListener("click", function (e) {
            if (e.target === mobileMenuOverlay) {
              mobileMenuOverlay.classList.remove("active");
    
              document.body.style.overflow = "";
            }
          });
    
          /* ==========================================
           MOBILE SUBMENU
        ========================================== */
    
          document.querySelectorAll(".mobile-parent").forEach(function (parent) {
            parent.addEventListener("click", function () {
              const submenu = this.nextElementSibling;
    
              if (!submenu) {
                return;
              }
    
              submenu.classList.toggle("show");
    
              const icon = this.querySelector("i");
    
              if (submenu.classList.contains("show")) {
                icon.classList.remove("fa-plus");
    
                icon.classList.add("fa-minus");
              } else {
                icon.classList.remove("fa-minus");
    
                icon.classList.add("fa-plus");
              }
            });
          });
    
          /* ==========================================
           ESC KEY
        ========================================== */
    
          document.addEventListener("keydown", function (e) {
            if (e.key === "Escape") {
              mobileMenuOverlay.classList.remove("active");
    
              document.body.style.overflow = "";
    
              galleryModal.classList.remove("active");
            }
          });
    
         
    
          
          /* =====================================================
           BACK TO TOP
        ===================================================== */
    
          const backTop = document.getElementById("backTop");
    
          window.addEventListener("scroll", function () {
            if (window.scrollY > 400) {
              backTop.classList.add("show");
            } else {
              backTop.classList.remove("show");
            }
          });
    
          backTop.addEventListener("click", function () {
            window.scrollTo({
              top: 0,
              behavior: "smooth",
            });
          });
    </script>
    
    <!-- =========================================================
     GALLERY JAVASCRIPT
========================================================= -->

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        /* =========================================
           GET ALL GALLERY ITEMS
        ========================================= */

        const galleryItems = document.querySelectorAll(".gallery-item");

        const lightbox = document.getElementById("galleryLightbox");

        const lightboxImage = document.getElementById("lightboxImage");

        const lightboxTitle = document.getElementById("lightboxTitle");

        const lightboxDescription = document.getElementById(
          "lightboxDescription",
        );

        const closeButton = document.getElementById("lightboxClose");

        const previousButton = document.getElementById("lightboxPrev");

        const nextButton = document.getElementById("lightboxNext");

        let currentIndex = 0;

        /* =========================================
           SHOW IMAGE
        ========================================= */

        function showImage(index) {
          if (galleryItems.length === 0) {
            return;
          }

          if (index < 0) {
            index = galleryItems.length - 1;
          }

          if (index >= galleryItems.length) {
            index = 0;
          }

          currentIndex = index;

          const currentItem = galleryItems[currentIndex];

          const image = currentItem.querySelector("img");

          const title = currentItem.querySelector(".gallery-overlay h5");

          const description = currentItem.querySelector(".gallery-overlay p");

          /* Image */

          lightboxImage.src = image.getAttribute("src");

          lightboxImage.alt = image.getAttribute("alt");

          /* Title */

          if (title) {
            lightboxTitle.textContent = title.textContent.trim();
          } else {
            lightboxTitle.textContent = "";
          }

          /* Description */

          if (description) {
            lightboxDescription.textContent = description.textContent.trim();
          } else {
            lightboxDescription.textContent = "";
          }
        }

        /* =========================================
           OPEN LIGHTBOX
        ========================================= */

        function openLightbox(index) {
          showImage(index);

          lightbox.classList.add("show");

          document.body.style.overflow = "hidden";
        }

        /* =========================================
           CLOSE LIGHTBOX
        ========================================= */

        function closeLightbox() {
          lightbox.classList.remove("show");

          document.body.style.overflow = "";
        }

        /* =========================================
           GALLERY CLICK
        ========================================= */

        galleryItems.forEach(function (item, index) {
          item.addEventListener("click", function () {
            openLightbox(index);
          });
        });

        /* =========================================
           NEXT
        ========================================= */

        nextButton.addEventListener("click", function (event) {
          event.stopPropagation();

          showImage(currentIndex + 1);
        });

        /* =========================================
           PREVIOUS
        ========================================= */

        previousButton.addEventListener("click", function (event) {
          event.stopPropagation();

          showImage(currentIndex - 1);
        });

        /* =========================================
           CLOSE BUTTON
        ========================================= */

        closeButton.addEventListener("click", function (event) {
          event.stopPropagation();

          closeLightbox();
        });

        /* =========================================
           CLICK OUTSIDE
        ========================================= */

        lightbox.addEventListener("click", function (event) {
          if (event.target === lightbox) {
            closeLightbox();
          }
        });

        /* =========================================
           KEYBOARD
        ========================================= */

        document.addEventListener("keydown", function (event) {
          if (!lightbox.classList.contains("show")) {
            return;
          }

          /* ESC */

          if (event.key === "Escape") {
            closeLightbox();
          }

          /* RIGHT */

          if (event.key === "ArrowRight") {
            showImage(currentIndex + 1);
          }

          /* LEFT */

          if (event.key === "ArrowLeft") {
            showImage(currentIndex - 1);
          }
        });

        /* =========================================
           TOUCH SWIPE
        ========================================= */

        let touchStartX = 0;

        let touchEndX = 0;

        lightbox.addEventListener(
          "touchstart",
          function (event) {
            touchStartX = event.changedTouches[0].screenX;
          },
          {
            passive: true,
          },
        );

        lightbox.addEventListener(
          "touchend",
          function (event) {
            touchEndX = event.changedTouches[0].screenX;

            const difference = touchStartX - touchEndX;

            /* Swipe Left */

            if (difference > 50) {
              showImage(currentIndex + 1);
            }

            /* Swipe Right */

            if (difference < -50) {
              showImage(currentIndex - 1);
            }
          },
          {
            passive: true,
          },
        );
      });
    </script>
    <script>
        /* =========================================================
           SCHOOL CALENDAR
        ========================================================= */
        
        document.addEventListener("DOMContentLoaded", function () {
        
            const monthElement =
                document.getElementById("calendarMonth");
        
            const daysElement =
                document.getElementById("calendarDays");
        
            const prevButton =
                document.getElementById("prevMonth");
        
            const nextButton =
                document.getElementById("nextMonth");
        
        
            let currentDate = new Date();
        
        
            /* বিদ্যালয়ের গুরুত্বপূর্ণ তারিখ
               পরে PHP/Database থেকেও এখানে আনা যাবে */
        
            const events = {
        
                "2026-08-14": "আজকের দিন",
        
                "2026-08-20": "অভিভাবক সভা",
        
                "2026-08-25": "পরীক্ষা",
        
                "2026-08-30": "ছুটি"
        
            };
        
        
            const banglaMonths = [
        
                "জানুয়ারি",
                "ফেব্রুয়ারি",
                "মার্চ",
                "এপ্রিল",
                "মে",
                "জুন",
                "জুলাই",
                "আগস্ট",
                "সেপ্টেম্বর",
                "অক্টোবর",
                "নভেম্বর",
                "ডিসেম্বর"
        
            ];
        
        
            function renderCalendar() {
        
        
                const year =
                    currentDate.getFullYear();
        
        
                const month =
                    currentDate.getMonth();
        
        
                const firstDay =
                    new Date(
                        year,
                        month,
                        1
                    ).getDay();
        
        
                const totalDays =
                    new Date(
                        year,
                        month + 1,
                        0
                    ).getDate();
        
        
                monthElement.textContent =
                    banglaMonths[month] +
                    " " +
                    year;
        
        
                daysElement.innerHTML = "";
        
        
                /* Empty cells */
        
                for (
                    let i = 0;
                    i < firstDay;
                    i++
                ) {
        
                    const empty =
                        document.createElement("span");
        
                    daysElement.appendChild(empty);
        
                }
        
        
                /* Days */
        
                for (
                    let day = 1;
                    day <= totalDays;
                    day++
                ) {
        
        
                    const dayElement =
                        document.createElement("span");
        
        
                    dayElement.textContent =
                        day;
        
        
                    const monthNumber =
                        String(month + 1)
                        .padStart(2, "0");
        
        
                    const dayNumber =
                        String(day)
                        .padStart(2, "0");
        
        
                    const dateKey =
                        year +
                        "-" +
                        monthNumber +
                        "-" +
                        dayNumber;
        
        
                    /* Today */
        
                    const today =
                        new Date();
        
        
                    if (
        
                        day === today.getDate() &&
        
                        month === today.getMonth() &&
        
                        year === today.getFullYear()
        
                    ) {
        
                        dayElement.classList.add(
                            "today"
                        );
        
                    }
        
        
                    /* Event */
        
                    if (
                        events[dateKey]
                    ) {
        
                        dayElement.classList.add(
                            "event-day"
                        );
        
                        dayElement.title =
                            events[dateKey];
        
                    }
        
        
                    daysElement.appendChild(
                        dayElement
                    );
        
                }
        
            }
        
        
            prevButton.addEventListener(
                "click",
                function () {
        
                    currentDate.setMonth(
                        currentDate.getMonth() - 1
                    );
        
                    renderCalendar();
        
                }
            );
        
        
            nextButton.addEventListener(
                "click",
                function () {
        
                    currentDate.setMonth(
                        currentDate.getMonth() + 1
                    );
        
                    renderCalendar();
        
                }
            );
        
        
            renderCalendar();
        
        });
    </script>
</body>

</html>