<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />

      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <title><?php echo isset($title) ? $title : 'Smart School'; ?></title>

       <!-- Bootstrap 5 CSS -->
    <link href="<?php echo base_url(); ?>public/assets/css/bootstrap.min.css" rel="stylesheet" />
      <!--  FONT AWESOME-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

      <!--  GOOGLE FONT -->

      <link
         href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
         rel="stylesheet"
      />
   	<!-- Sweet Alert css-->
         <link href="<?php echo base_url(); ?>public/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
      <!--   SELECT2 -->

      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
            <!-- Style -->
    <link href="<?php echo base_url(); ?>public/assets/css/style.css" rel="stylesheet" />
       <!-- Include Toastr CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/toastr/toastr.min.css">
      <script src="<?php echo base_url(); ?>public/assets/js/jquery-3.7.1.min.js"></script>
       <!-- Include Toastr JavaScript -->
      <script src="<?php echo base_url(); ?>public/toastr/toastr.min.js"></script>
   </head>

   <body>
      <!-- Sidebar -->
 <?php include(APPPATH . 'views/layout/sidebar.php'); ?>
      <!-- end sidebar -->
      <!-- =====================================================
     MOBILE OVERLAY
====================================================== -->

      <div class="sidebar-overlay" id="sidebarOverlay"></div>

      <!-- start main -->
      <main class="main">
         <!-- HEADER-->
          <?php include(APPPATH . 'views/layout/header.php'); ?>

         <!-- End Header -->
           <script>
     <?php if ($this->session->flashdata('success')): ?>
        toastr.success('<?php echo $this->session->flashdata('success'); ?>');
    <?php endif; ?>
    

    <?php if ($this->session->flashdata('error')): ?>
        toastr.error('<?php echo $this->session->flashdata('error'); ?>');
    <?php endif; ?>
      </script>
         <!-- Start Main Contenet -->
        <?php
        if(isset($content)){
          echo $content;
        }
        
        ?>
         <!-- End Main Contenet  -->
      </main>

      <!-- end main -->
      

     <!-- Bootstrap 5 Bundle JS -->
    <script src="<?php echo base_url(); ?>public/assets/js/bootstrap.bundle.min.js"></script>
       <!-- Sweet Alerts js -->
    <script src="<?php echo base_url(); ?>public/sweetalert2/sweetalert2.min.js"></script>
      <!-- select2 -->

      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script src="<?php echo base_url(); ?>public/assets/js/main.js"></script>
   </body>
</html>
