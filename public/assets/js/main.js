  $(document).ready(function () {
        $(".select2").select2();

       
        $("#sidebarCollapseBtn, #mobileMenuBtn").on("click", function (e) {
          e.stopPropagation();
          if ($(window).width() > 991) {
            $("body").toggleClass("sidebar-collapsed");
          } else {
            $("#sidebar").addClass("mobile-show");
            $("#sidebarOverlay").addClass("show");
          }
        });

     
        $("#sidebarCloseBtn, #sidebarOverlay").on("click", function () {
          $("#sidebar").removeClass("mobile-show");
          $("#sidebarOverlay").removeClass("show");
        });

      
        $("#mobileNotifTrigger").on("click", function (e) {
          e.stopPropagation();
          $("#notifDropdownBtn").dropdown("toggle");
        });

       
        $(".menu-item > .menu-link").on("click", function () {
          let $parent = $(this).parent(".menu-item");
          if (
            $parent.find(".submenu-nav").length > 0 &&
            !$("body").hasClass("sidebar-collapsed")
          ) {
            $parent.toggleClass("open");
          }
        });
      });