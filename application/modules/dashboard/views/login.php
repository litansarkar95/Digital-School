
    <link href="<?php echo base_url(); ?>static/assets/css/login.css" rel="stylesheet" />
  

    <div class="login-page">
        <!-- School Header -->
        <section class="school-header">
            <div class="dots dots-left"></div>
            <div class="dots dots-right"></div>
            
            <div class="header-wave">
                <svg viewBox="0 0 1440 200" preserveAspectRatio="none">
                    <path fill="#fbf7f0" d="M0,90 C180,160 320,170 510,115 C700,60 800,55 990,105 C1160,150 1290,155 1440,75 L1440,200 L0,200 Z"></path>
                </svg>
            </div>
        </section>

        <!-- Login Content (Moved Higher Up) -->
        <main class="login-content">
            <div class="login-card">
                <div class="login-icon">
                    <i class="fa-regular fa-user"></i>
                </div>

                <div class="login-title">
                    <h2>Welcome Back!</h2>
                    <p>Login to access your account</p>
                </div>

                <!-- Login Form -->
                <form id="loginForm" action="<?php echo base_url(); ?>login" method="POST">
                    <div class="form-group">
                        <label for="username" class="form-label">Username / Email</label>
                        <div class="input-box">
                            <i class="fa-regular fa-user input-icon"></i>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Enter username or email" autocomplete="username" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-box">
                            <i class="fa-solid fa-lock input-icon"></i>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" autocomplete="current-password" required />
                            <button type="button" class="password-toggle" id="passwordToggle" aria-label="Show password">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="login-options">
                        <label class="remember-me">
                            <input type="checkbox" name="remember" value="1" />
                            <span>Remember me</span>
                        </label>
                        <a href="forgot-password.html" class="forgot-link">Forgot Password?</a>
                    </div>

                    <button type="submit" class="login-button" id="loginButton">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        <span>LOGIN</span>
                    </button>
                </form>

                <div class="divider">OR</div>

                <a href="index.html" class="back-button">
                    <i class="fa-solid fa-globe"></i>
                    <span>Back to Website</span>
                </a>
            </div>
        </main>
    </div>

 <script>
        const passwordInput = document.getElementById("password");
        const passwordToggle = document.getElementById("passwordToggle");

        passwordToggle.addEventListener("click", function () {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                this.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
                this.setAttribute("aria-label", "Hide password");
            } else {
                passwordInput.type = "password";
                this.innerHTML = '<i class="fa-regular fa-eye"></i>';
                this.setAttribute("aria-label", "Show password");
            }
        });

        const loginForm = document.getElementById("loginForm");
        const loginButton = document.getElementById("loginButton");

        loginForm.addEventListener("submit", function (e) {
           e.preventDefault();
            
            const originalHTML = loginButton.innerHTML;
            loginButton.disabled = true;
            loginButton.innerHTML = `
                <i class="fa-solid fa-spinner fa-spin"></i>
                <span>PLEASE WAIT...</span>
            `;

            setTimeout(() => {
                loginForm.submit();
            }, 300);
        });
    </script>
