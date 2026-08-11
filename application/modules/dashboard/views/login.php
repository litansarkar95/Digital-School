<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Labiba Digital School - Login Portal</title>
      <!-- GOOGLE FONT -->
      <link
         href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
         rel="stylesheet"
      />
      <!-- FONT AWESOME -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
 <!-- Style -->
    <link href="<?php echo base_url(); ?>static/assets/css/login.css" rel="stylesheet" />
    
   </head>

   <body>
      <main class="login-page">
         <!-- BACKGROUND SHAPES -->
         <div class="bg-shape bg-shape-one"></div>
         <div class="bg-shape bg-shape-two"></div>

         <!-- LOGIN WRAPPER -->
         <div class="login-wrapper">
            <!-- LEFT BRAND PANEL -->
            <section class="login-brand-panel">
               <div class="brand-logo">
                  <div class="brand-logo-icon">
                     <i class="fa-solid fa-graduation-cap"></i>
                  </div>
                  <div class="brand-logo-text">
                     Labiba Digital
                     <span>School</span>
                  </div>
               </div>

               <div class="brand-content">
                  <div class="brand-badge">
                     <i class="fa-solid fa-shield-halved"></i>
                     SMART EDUCATION PORTAL
                  </div>
                  <h1>
                     Empowering education for a
                     <span>brighter future.</span>
                  </h1>
                  <p>
                     Welcome to Labiba Digital School portal. Teachers, students, and staff can securely log in to
                     access classes, notices, grades, and administrative tools.
                  </p>

                  <div class="brand-features">
                     <div class="brand-feature">
                        <div class="feature-icon">
                           <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        Teacher & Classroom Management
                     </div>
                     <div class="brand-feature">
                        <div class="feature-icon">
                           <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        Student Dashboard & Results
                     </div>
                     <div class="brand-feature">
                        <div class="feature-icon">
                           <i class="fa-solid fa-users-gear"></i>
                        </div>
                        Staff & Administrative Access
                     </div>
                  </div>
               </div>

               <div class="brand-footer">
                  <p>&copy; 2026 Labiba Digital School. All rights reserved.</p>
               </div>

               <div class="brand-decoration"></div>
            </section>

            <!-- RIGHT LOGIN PANEL -->
            <section class="login-form-panel">
               <div class="login-form-wrapper">
                  <div class="form-header">
                     <h2>Welcome Back</h2>
                     <p>Enter your User ID / Username and Password to sign in.</p>
                  </div>

                  <!-- PHP ERROR MESSAGE DISPLAY -->
                  <?php if($this->session->userdata('error')): ?>
                  <div class="alert-error">
                     <i class="fa-solid fa-circle-exclamation"></i>
                     <span><?php 
                        echo $this->session->userdata('error'); 
                        $this->session->unset_userdata('error');
                    ?></span>
                  </div>
                  <?php endif; ?>

                  <form action="<?php echo base_url(); ?>login" method="POST">
                     <!-- USERNAME / ID -->
                     <div class="form-group">
                        <label class="form-label" for="username">User ID / Username</label>
                        <div class="input-wrapper">
                           <i class="fa-regular fa-user input-icon"></i>
                           <input
                              type="text"
                              id="username"
                              name="username"
                              class="form-input"
                              placeholder="Enter your ID or username"
                              autocomplete="username"
                              required
                           />
                        </div>
                     </div>

                     <!-- PASSWORD -->
                     <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-wrapper">
                           <i class="fa-solid fa-lock input-icon"></i>
                           <input
                              type="password"
                              id="password"
                              name="password"
                              class="form-input"
                              placeholder="Enter your password"
                              autocomplete="current-password"
                              required
                           />
                           <button type="button" class="password-toggle" id="passwordToggle" aria-label="Show password">
                              <i class="fa-regular fa-eye" id="passwordIcon"></i>
                           </button>
                        </div>
                     </div>

                     <!-- OPTIONS -->
                     <div class="form-options">
                        <label class="remember-me">
                           <input type="checkbox" name="remember" />
                           <span>Remember me</span>
                        </label>
                        <a href="#" class="forgot-password">Forgot password?</a>
                     </div>

                     <!-- LOGIN BUTTON -->
                     <button type="submit" class="login-btn">
                        <span>Sign In</span>
                        <i class="fa-solid fa-arrow-right"></i>
                     </button>
                  </form>
               </div>
            </section>
         </div>
      </main>

      <!-- PASSWORD TOGGLE SCRIPT -->
      <script>
         const passwordInput = document.getElementById("password");
         const passwordToggle = document.getElementById("passwordToggle");
         const passwordIcon = document.getElementById("passwordIcon");

         passwordToggle.addEventListener("click", function () {
            const isPassword = passwordInput.type === "password";
            passwordInput.type = isPassword ? "text" : "password";
            passwordIcon.className = isPassword ? "fa-regular fa-eye-slash" : "fa-regular fa-eye";
            passwordToggle.setAttribute("aria-label", isPassword ? "Hide password" : "Show password");
         });
      </script>
   </body>
</html>
