<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Administrator Login | RMT TTC</title>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <style>
            /* ===================================================== RESET ===================================================== */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            html,
            body {
                width: 100%;
                min-height: 100%;
            } 
            body {
                font-family: "Rajdhani", sans-serif;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 25px;
                color: #ffffff;
                overflow-x: hidden;
                overflow-y: auto;
                position: relative;
                background: radial-gradient(circle at 15% 20%, rgba(37, 99, 235, 0.18), transparent 30%),
                    radial-gradient(circle at 85% 80%, rgba(14, 165, 233, 0.12), transparent 30%),
                    linear-gradient(135deg, #030b16 0%, #061322 40%, #0a192c 70%, #102945 100%);
            } 
            body::before {
                content: "";
                position: fixed;
                inset: 0;
                pointer-events: none;
                z-index: 0;
                opacity: 0.12;
                background-image: linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
                background-size: 55px 55px;
                mask-image: linear-gradient(to bottom, transparent, black 20%, black 80%, transparent);
            } 
            .background-shape {
                position: fixed;
                border-radius: 50%;
                pointer-events: none;
                z-index: 0;
                filter: blur(80px);
            }
            .shape-one {
                width: 320px;
                height: 320px;
                background: rgba(37, 99, 235, 0.13);
                left: -140px;
                top: -120px;
            }
            .shape-two {
                width: 350px;
                height: 350px;
                background: rgba(14, 165, 233, 0.1);
                right: -150px;
                bottom: -150px;
            } /* ===================================================== ANIMATED STARS ===================================================== */
            .stars {
                position: fixed;
                inset: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
                pointer-events: none;
                z-index: 2;
            }
            .star {
                position: absolute;
                width: 2px;
                height: 2px;
                border-radius: 50%;
                background: #ffffff;
                box-shadow:
                    0 0 4px rgba(255, 255, 255, 0.85),
                    0 0 9px rgba(147, 197, 253, 0.45);
                opacity: var(--opacity);
                animation:
                    starMove var(--duration) ease-in-out infinite,
                    starTwinkle var(--twinkle) ease-in-out infinite alternate;
            } /* Bigger stars */
            .star.big {
                width: 3px;
                height: 3px;
                box-shadow:
                    0 0 6px rgba(255, 255, 255, 0.95),
                    0 0 14px rgba(96, 165, 250, 0.6),
                    0 0 22px rgba(96, 165, 250, 0.25);
            } /* Star movement */
            @keyframes starMove {
                0% {
                    transform: translate3d(0, 0, 0);
                }
                25% {
                    transform: translate3d(var(--move-x), var(--move-y), 0);
                }
                50% {
                    transform: translate3d(calc(var(--move-x) * -0.5), var(--move-y), 0);
                }
                75% {
                    transform: translate3d(calc(var(--move-x) * 0.7), calc(var(--move-y) * -0.5), 0);
                }
                100% {
                    transform: translate3d(0, 0, 0);
                }
            } /* Star twinkle */
            @keyframes starTwinkle {
                0% {
                    opacity: 0.15;
                }
                50% {
                    opacity: 0.65;
                }
                100% {
                    opacity: 1;
                }
            } /* ===================================================== DOT PATTERN ===================================================== */
            .dots {
                position: fixed;
                width: 190px;
                height: 190px;
                opacity: 0.16;
                background-image: radial-gradient(#60a5fa 1.2px, transparent 1.2px);
                background-size: 15px 15px;
                pointer-events: none;
                z-index: 3;
            }
            .dots-top {
                right: 7%;
                top: 7%;
                mask-image: linear-gradient(135deg, black 0%, black 55%, transparent 100%);
            }
            .dots-bottom {
                left: 7%;
                bottom: 7%;
                mask-image: linear-gradient(315deg, black 0%, black 55%, transparent 100%);
            } /* ===================================================== CIRCULAR DECORATION ===================================================== */
            .circle-top {
                position: fixed;
                width: 260px;
                height: 260px;
                border-radius: 50%;
                border: 1px solid rgba(96, 165, 250, 0.055);
                right: -130px;
                top: -130px;
                z-index: 1;
                pointer-events: none;
            }
            .circle-top::before {
                content: "";
                position: absolute;
                width: 190px;
                height: 190px;
                border-radius: 50%;
                border: 1px solid rgba(96, 165, 250, 0.045);
                right: 34px;
                top: 34px;
            }
            .circle-bottom {
                position: fixed;
                width: 320px;
                height: 320px;
                border-radius: 50%;
                border: 1px solid rgba(56, 189, 248, 0.055);
                left: -160px;
                bottom: -160px;
                z-index: 1;
                pointer-events: none;
            }
            .circle-bottom::before {
                content: "";
                position: absolute;
                width: 240px;
                height: 240px;
                border-radius: 50%;
                border: 1px solid rgba(56, 189, 248, 0.04);
                left: 40px;
                bottom: 40px;
            } /* ===================================================== DECORATIVE LINES ===================================================== */
            .line-decoration {
                position: fixed;
                width: 150px;
                height: 1px;
                background: linear-gradient(90deg, transparent, rgba(96, 165, 250, 0.25), transparent);
                z-index: 3;
                pointer-events: none;
            }
            .line-one {
                top: 23%;
                left: 4%;
                transform: rotate(-35deg);
            }
            .line-two {
                bottom: 24%;
                right: 4%;
                transform: rotate(-35deg);
            } /* ===================================================== LOGIN CONTAINER ===================================================== */
            .login-container {
                width: 100%;
                max-width: 430px;
                position: relative;
                z-index: 20;
            } /* ===================================================== LOGIN BOX ===================================================== */
            .login-box {
                width: 100%;
                padding: 42px 38px 30px;
                border-radius: 18px;
                background: linear-gradient(145deg, rgba(17, 31, 52, 0.97), rgba(8, 21, 37, 0.96));
                border: 1px solid rgba(148, 163, 184, 0.14);
                box-shadow:
                    0 30px 70px rgba(0, 0, 0, 0.48),
                    0 8px 25px rgba(0, 0, 0, 0.22),
                    inset 0 1px 0 rgba(255, 255, 255, 0.04);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                position: relative;
                overflow: hidden;
            } /* Top blue line */
            .login-box::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 3px;
                background: linear-gradient(90deg, #2563eb, #38bdf8, #2563eb);
                box-shadow: 0 0 18px rgba(37, 99, 235, 0.45);
            } /* Box glow */
            .login-box::after {
                content: "";
                position: absolute;
                width: 190px;
                height: 190px;
                border-radius: 50%;
                background: rgba(37, 99, 235, 0.055);
                filter: blur(55px);
                top: -110px;
                right: -80px;
                pointer-events: none;
            } /* ===================================================== PREMIUM GLOBAL / TRAVEL ICON ===================================================== */
            .brand-icon {
                width: 82px;
                height: 82px;
                margin: 0 auto 18px;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                border-radius: 50%;
                background: radial-gradient(
                    circle at 35% 30%,
                    rgba(56, 189, 248, 0.16),
                    rgba(37, 99, 235, 0.06) 45%,
                    transparent 70%
                );
                border: 1px solid rgba(96, 165, 250, 0.2);
                box-shadow:
                    0 0 0 8px rgba(37, 99, 235, 0.025),
                    0 0 35px rgba(37, 99, 235, 0.12),
                    inset 0 0 25px rgba(56, 189, 248, 0.05);
                overflow: visible;
            } 
            .globe-logo {
    position: absolute;
    width: 96%;
    height: 96%;
    left: 2%;
    top: 2%;
    object-fit: contain;
    z-index: 4;

    filter:
        drop-shadow(0 0 6px rgba(255, 255, 255, 0.5))
        drop-shadow(0 0 14px rgba(96, 165, 250, 0.4));
}
            .globe {
                width: 54px;
                height: 54px;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                background: radial-gradient(circle at 35% 30%, #3b82f6 0%, #2563eb 45%, #123b86 100%);
                border: 1px solid rgba(147, 197, 253, 0.45);
                box-shadow:
                    inset -8px -8px 15px rgba(0, 0, 0, 0.28),
                    inset 5px 5px 12px rgba(255, 255, 255, 0.08),
                    0 5px 20px rgba(37, 99, 235, 0.35);
                overflow: hidden;
                z-index: 3;
            } /* Globe icon */
            .globe i {
                color: #e0f2fe;
                font-size: 29px;
                position: relative;
                z-index: 3;
                filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.3));
                animation: globeFloat 4s ease-in-out infinite;
            } /* Globe grid effect */
            .globe-grid {
                position: absolute;
                inset: -10px;
                border-radius: 50%;
                background: repeating-linear-gradient(
                    90deg,
                    transparent 0px,
                    transparent 10px,
                    rgba(255, 255, 255, 0.07) 11px,
                    transparent 12px
                );
                opacity: 0.8;
                transform: perspective(80px) rotateY(12deg);
                pointer-events: none;
            } /* Orbit */
            .orbit {
                position: absolute;
                width: 100px;
                height: 34px;
                border: 1px solid rgba(96, 165, 250, 0.3);
                border-radius: 50%;
                z-index: 1;
                pointer-events: none;
            } /* First orbit */
            .orbit-1 {
                transform: rotate(-28deg);
                animation: orbitRotate 7s linear infinite;
            } /* Second orbit */
            .orbit-2 {
                width: 92px;
                height: 28px;
                border-color: rgba(56, 189, 248, 0.16);
                transform: rotate(55deg);
                animation: orbitRotateReverse 9s linear infinite;
            } /* Orbit glowing dot */
            .orbit-dot {
                position: absolute;
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background: #7dd3fc;
                box-shadow:
                    0 0 7px #38bdf8,
                    0 0 15px rgba(56, 189, 248, 0.7);
                z-index: 5;
                top: 7px;
                right: 13px;
                animation: dotPulse 2s ease-in-out infinite;
            } /* Globe floating */
            @keyframes globeFloat {
                0%,
                100% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-2px);
                }
            } /* Orbit animation */
            @keyframes orbitRotate {
                0% {
                    transform: rotate(-28deg) scale(1);
                }
                50% {
                    transform: rotate(-18deg) scale(1.04);
                }
                100% {
                    transform: rotate(-28deg) scale(1);
                }
            } /* Reverse orbit */
            @keyframes orbitRotateReverse {
                0% {
                    transform: rotate(55deg);
                }
                50% {
                    transform: rotate(65deg);
                }
                100% {
                    transform: rotate(55deg);
                }
            } /* Dot glow */
            @keyframes dotPulse {
                0%,
                100% {
                    opacity: 0.65;
                    box-shadow:
                        0 0 5px #38bdf8,
                        0 0 10px rgba(56, 189, 248, 0.5);
                }
                50% {
                    opacity: 1;
                    box-shadow:
                        0 0 8px #38bdf8,
                        0 0 20px rgba(56, 189, 248, 0.8);
                }
            } /* ===================================================== TITLE ===================================================== */
            .text-content {
                text-align: center;
                margin-bottom: 7px;
            }
            .text-content a {
                font-size: 34px;
                line-height: 1;
                font-weight: 700;
                color: #f8fafc;
                text-decoration: none;
                letter-spacing: 2px;
                text-transform: uppercase;
            }
            .subtitle {
                text-align: center;
                color: #718096;
                font-size: 11px;
                letter-spacing: 1.8px;
                text-transform: uppercase;
                margin-bottom: 32px;
            } /* ===================================================== INPUT ===================================================== */
            .input-field {
                margin-bottom: 19px;
                text-align: left;
            }
            .input-field label {
                display: block;
                margin-bottom: 8px;
                color: #a8b4c5;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: 0.2px;
            }
            .input-wrapper {
                position: relative;
            }
            .input-wrapper > i {
                position: absolute;
                left: 15px;
                top: 50%;
                transform: translateY(-50%);
                color: #64748b;
                font-size: 14px;
                pointer-events: none;
                transition: 0.25s;
            }
            .input-field input {
                width: 100%;
                height: 50px;
                padding: 0 44px;
                border-radius: 9px;
                border: 1px solid #293b52;
                outline: none;
                background: rgba(12, 28, 47, 0.78);
                color: #f8fafc;
                font-family: "Rajdhani", sans-serif;
                font-size: 15px;
                transition: 0.25s;
            }
            .input-field input::placeholder {
                color: #536276;
            }
            .input-field input:hover {
                border-color: #38516c;
            }
            .input-field input:focus {
                border-color: #3978d7;
                background: rgba(13, 31, 52, 0.95);
                box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            }
            .input-wrapper:focus-within > i {
                color: #60a5fa;
                filter: drop-shadow(0 0 5px rgba(96, 165, 250, 0.35));
            } /* ===================================================== PASSWORD TOGGLE ===================================================== */
            .password-toggle {
                position: absolute;
                right: 13px;
                top: 50%;
                transform: translateY(-50%);
                border: 0;
                background: transparent;
                color: #64748b;
                cursor: pointer;
                font-size: 14px;
                padding: 5px;
                transition: 0.2s;
            }
            .password-toggle:hover {
                color: #60a5fa;
            } /* ===================================================== OPTIONS ===================================================== */
            .options {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin: 4px 0 24px;
                font-size: 12px;
            }
            .options label {
                display: flex;
                align-items: center;
                gap: 7px;
                color: #8795a8;
                cursor: pointer;
            }
            .options input[type="checkbox"] {
                width: 14px;
                height: 14px;
                accent-color: #2563eb;
                cursor: pointer;
            }
            .options a {
                color: #6fa8f7;
                text-decoration: none;
                transition: 0.2s;
            }
            .options a:hover {
                color: #93c5fd;
                text-decoration: underline;
            } 
            .login-btn {
                width: 100%;
                height: 50px;
                border: none;
                border-radius: 9px;
                background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
                color: #ffffff;
                font-family: "Rajdhani", sans-serif;
                font-size: 16px;
                font-weight: 700;
                letter-spacing: 0.4px;
                cursor: pointer;
                transition: all 0.25s ease;
                box-shadow: 0 8px 20px rgba(37, 99, 235, 0.22);
            }
            .login-btn:hover {
                background: linear-gradient(135deg, #3478f6, #2563eb);
                transform: translateY(-1px);
                box-shadow: 0 11px 27px rgba(37, 99, 235, 0.3);
            }
            .login-btn:active {
                transform: translateY(0);
                box-shadow: 0 5px 12px rgba(37, 99, 235, 0.18);
            }
            .login-btn i {
                margin-right: 7px;
                font-size: 13px;
            }
            .login-alert {
                width: 100%;
                display: flex;
                align-items: center;
                gap: 12px;
                text-align: left;
                padding: 12px 13px;
                margin: -12px 0 22px;
                border-radius: 10px;
                position: relative;
                animation: alertSlide 0.35s ease;
            }
            .error-alert {
                background: linear-gradient(135deg, rgba(127, 29, 29, 0.25), rgba(69, 10, 10, 0.18));
                border: 1px solid rgba(248, 113, 113, 0.22);
                box-shadow: 0 8px 25px rgba(127, 29, 29, 0.08);
            }
            .alert-icon {
                width: 34px;
                height: 34px;
                min-width: 34px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 9px;
                background: rgba(239, 68, 68, 0.12);
                color: #f87171;
                font-size: 15px;
            }
            .alert-content {
                display: flex;
                flex-direction: column;
                gap: 2px;
                padding-right: 20px;
            }
            .alert-content strong {
                color: #fca5a5;
                font-size: 13px;
                font-weight: 700;
            }
            .alert-content span {
                color: #bda1a1;
                font-size: 11px;
                line-height: 1.4;
            }
            .alert-close {
                position: absolute;
                right: 9px;
                top: 50%;
                transform: translateY(-50%);
                border: none;
                background: transparent;
                color: #7f8b9c;
                cursor: pointer;
                padding: 5px;
                transition: 0.2s;
            }
            .alert-close:hover {
                color: #f87171;
            }
            @keyframes alertSlide {
                from {
                    opacity: 0;
                    transform: translateY(-8px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            } 
            footer {
                margin-top: 27px;
                padding-top: 17px;
                border-top: 1px solid rgba(255, 255, 255, 0.06);
                text-align: center;
            }
            footer p {
                color: #58677b;
                font-size: 12px;
                line-height: 1.7;
            }
            footer a {
                color: #8fa3ba;
                text-decoration: none;
                font-weight: 600;
                transition: 0.2s;
            }
            footer a:hover {
                color: #60a5fa;
            } 
            @media (max-width: 600px) {
                body {
                    min-height: 100svh;
                    padding: 15px;
                    overflow-y: auto;
                    overflow-x: hidden;
                }
                .login-container {
                    max-width: 100%;
                }
                .login-box {
                    padding: 34px 22px 25px;
                    border-radius: 16px;
                }
                .text-content a {
                    font-size: 27px;
                    letter-spacing: 1.5px;
                }
                .subtitle {
                    font-size: 9px;
                    letter-spacing: 1.5px;
                    margin-bottom: 26px;
                }
                .input-field {
                    margin-bottom: 17px;
                }
                .input-field label {
                    font-size: 12px;
                }
                .input-field input {
                    height: 48px;
                    font-size: 14px;
                }
                .options {
                    font-size: 11px;
                    margin-bottom: 21px;
                }
                .brand-icon {
                    width: 70px;
                    height: 70px;
                }
                .globe {
                    width: 48px;
                    height: 48px;
                }
                .globe i {
                    font-size: 25px;
                }
                .orbit {
                    width: 86px;
                    height: 29px;
                }
                .orbit-2 {
                    width: 80px;
                    height: 25px;
                }
                .orbit-dot {
                    width: 5px;
                    height: 5px;
                    top: 6px;
                    right: 10px;
                }
                .login-btn {
                    height: 49px;
                    font-size: 15px;
                }
                footer {
                    margin-top: 23px;
                    padding-top: 15px;
                }
                footer p {
                    font-size: 10px;
                } /* Mobile stars */
                .dots {
                    width: 130px;
                    height: 130px;
                    background-size: 13px 13px;
                    opacity: 0.1;
                }
                .dots-top {
                    right: -20px;
                    top: 3%;
                }
                .dots-bottom {
                    left: -20px;
                    bottom: 3%;
                }
                .circle-top {
                    width: 180px;
                    height: 180px;
                    right: -90px;
                    top: -90px;
                }
                .circle-bottom {
                    width: 220px;
                    height: 220px;
                    left: -110px;
                    bottom: -110px;
                }
                .line-one,
                .line-two {
                    opacity: 0.4;
                }
                .login-alert {
                    margin: -8px 0 20px;
                    padding: 11px;
                    gap: 9px;
                }
                .alert-icon {
                    width: 31px;
                    height: 31px;
                    min-width: 31px;
                    font-size: 13px;
                }
                .alert-content strong {
                    font-size: 12px;
                }
                .alert-content span {
                    font-size: 10px;
                }
            } 
            @media (max-width: 360px) {
                body {
                    padding: 10px;
                }
                .login-box {
                    padding: 30px 18px 22px;
                }
                .text-content a {
                    font-size: 24px;
                }
                .subtitle {
                    margin-bottom: 22px;
                }
                .options a {
                    font-size: 10px;
                }
                .login-btn {
                    font-size: 14px;
                }
            }
        </style>
    </head>
    <body>
     
        <div class="stars" id="stars"></div>
     
        <div class="background-shape shape-two"></div>
        <!-- DOTS -->
        <div class="dots dots-top"></div>
        <div class="dots dots-bottom"></div>
        <!-- CIRCLES -->
        <div class="circle-top"></div>
        <div class="circle-bottom"></div>
        <div class="line-decoration line-one"></div>
        <div class="line-decoration line-two"></div>
        <div class="login-container">
            <div class="login-box">
                <!-- Brand Icon -->
                <div class="brand-icon">
                    <div class="globe">
                        <div class="globe-grid"></div>
                        <i class="fa-solid fa-earth-asia"></i>
                           <!-- <img
        src="<?php echo base_url(); ?>uploads/staff/trishna_rani.png"
        class="globe-logo"
        alt="Logo"
    > -->
                    </div>
                    <span class="orbit orbit-1"></span> <span class="orbit orbit-2"></span>
                    <span class="orbit-dot"></span>
                </div>
                <!-- Title -->
                <h1 class="text-content"><a href="<?php echo base_url(); ?>"> Administrator </a></h1>
                <div class="subtitle">RMT TTC Management Portal</div>
             
                <?php if ($this->session->flashdata('error')): ?>
                <div class="login-alert error-alert">
                    <div class="alert-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="alert-content">
                        <strong> Login Failed </strong> <span> <?= $this->session->flashdata('error'); ?> </span>
                    </div>
                    <button type="button" class="alert-close" onclick="this.parentElement.remove();" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <?php endif; ?>
              
                <form action="<?php echo base_url(); ?>login" method="post" id="login-form">
             
                    <div class="input-field">
                        <label for="username"> Username </label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-user"></i>
                            <input
                                type="text"
                                required
                                id="username"
                                name="username"
                                placeholder="Enter your username"
                                autocomplete="username"
                            />
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="password"> Password </label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-lock"></i>
                            <input
                                type="password"
                                required
                                name="password"
                                id="password"
                                placeholder="Enter your password"
                                autocomplete="current-password"
                            />
                            <!-- Password Toggle -->
                            <button
                                type="button"
                                class="password-toggle"
                                id="passwordToggle"
                                aria-label="Show password"
                            >
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <!-- OPTIONS -->
                    <div class="options">
                        <label>
                            <input type="checkbox" name="remember" id="remember" /> <span> Remember me </span>
                        </label>
                        <a href="#"> Forgot Password? </a>
                    </div>
                
                    <button type="submit" class="login-btn" id="loginButton">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login to Dashboard
                    </button>
                </form>
             
                <footer>
                    <p>
                        Software by:
                        <a href="https://www.labibait.com" target="_blank" rel="noopener noreferrer"> » Labiba IT </a>
                    </p>
                </footer>
            </div>
        </div>
        <script>
       const starsContainer =
        document.getElementById("stars");
    if (starsContainer) {
        const starCount = window.innerWidth <= 600 ? 90 : 160;
        for (let i = 0; i < starCount; i++) {
            const star = document.createElement("span");
            star.classList.add("star");
            if (Math.random() > 0.88) {
                star.classList.add("big");
            }
            star.style.left = Math.random() * 100 + "%";
            star.style.top = Math.random() * 100 + "%";
            const moveX = (Math.random() * 80 - 40).toFixed(0);
            const moveY = (Math.random() * 80 - 40).toFixed(0);
            star.style.setProperty("--move-x", moveX + "px");
            star.style.setProperty("--move-y", moveY + "px");
            const duration = (8 + Math.random() * 14).toFixed(1);
            const twinkle = (2 + Math.random() * 4).toFixed(1);
            star.style.setProperty("--duration", duration + "s");
            star.style.setProperty("--twinkle", twinkle + "s");
            star.style.setProperty("--opacity", (0.25 + Math.random() * 0.65).toFixed(2));
            star.style.animationDelay = "-" + (Math.random() * 10).toFixed(1) + "s";
            starsContainer.appendChild(star);
        }
    }
   const passwordInput =
        document.getElementById("password");
    const passwordToggle = document.getElementById("passwordToggle");
    if (passwordToggle && passwordInput) {
        passwordToggle.addEventListener("click", function () {
            const icon = this.querySelector("i");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
                this.setAttribute("aria-label", "Hide password");
            } else {
                passwordInput.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
                this.setAttribute("aria-label", "Show password");
            }
        });
    }
     const loginForm =
        document.getElementById("login-form");
    const loginButton = document.getElementById("loginButton");
    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault();
            if (loginButton.disabled) {
                return;
            }
            const formData = new FormData(loginForm);
            /* Button Loading */ loginButton.disabled = true;
            loginButton.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Signing in...';
            loginButton.style.opacity = "0.75";
            loginButton.style.pointerEvents = "none";
            const oldAlert = document.getElementById("ajax-login-alert");
            if (oldAlert) {
                oldAlert.remove();
            }
            fetch(
                loginForm.action,
                { method: "POST", body: formData, headers: { "X-Requested-With": "XMLHttpRequest" } }
            )
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    console.log("Login Response:", data);
                   if (
                        data.status === true ||
                        data.status === "success" ||
                        data.success === true
                    ) {
                        loginButton.innerHTML = '<i class="fa-solid fa-circle-check"></i> Login Successful';
                        loginButton.style.background = "linear-gradient(135deg,#16a34a,#15803d)";
                        loginButton.style.opacity = "1";
                       setTimeout(function () {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                window.location.href = "<?php echo base_url(); ?>dashboard";
                            }
                        }, 700);
                        return;
                    }
                showLoginError(
                        data.message || data.error || "Invalid username or password."
                    );
                    resetLoginButton();
                })
                .catch(function (error) {
                    console.error("AJAX Login Error:", error);
                    showLoginError("Unable to connect to the server. Please try again.");
                    resetLoginButton();
                });
        });
    }
 function showLoginError(
        message
    ) {
        /* Remove previous alert */ const oldAlert = document.getElementById("ajax-login-alert");
        if (oldAlert) {
            oldAlert.remove();
        }
        const alertBox = document.createElement("div");
        alertBox.id = "ajax-login-alert";
        alertBox.className = "login-alert error-alert";
        alertBox.innerHTML = ` <div class="alert-icon"> <i class="fa-solid fa-circle-exclamation"></i> </div> <div class="alert-content"> <strong>Login Failed</strong> <span>${escapeHtml(message)}</span> </div> <button type="button" class="alert-close" aria-label="Close" > <i class="fa-solid fa-xmark"></i> </button> `;
         loginForm.parentNode.insertBefore(alertBox, loginForm);
        const closeButton = alertBox.querySelector(".alert-close");
        closeButton.addEventListener("click", function () {
            alertBox.remove();
        });
         setTimeout(function () {
            if (alertBox) {
                alertBox.remove();
            }
        }, 6000);
    }
   function resetLoginButton() {
        loginButton.disabled = false;
        loginButton.innerHTML = '<i class="fa-solid fa-arrow-right-to-bracket"></i> Login to Dashboard';
        loginButton.style.opacity = "1";
        loginButton.style.pointerEvents = "auto";
        loginButton.style.background = "linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%)";
    }
   function escapeHtml(
        text
    ) {
        const div = document.createElement("div");
        div.textContent = text;
        return div.innerHTML;
    }
</script>

    </body>
</html>
