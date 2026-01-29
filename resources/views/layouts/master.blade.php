<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, viewport-fit=cover">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>zimAlert - Crime Reporting App</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    <!-- ZimAlert Hero Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <!-- ZimAlert Hero Custom Css -->
    <link href="css/zimalert-hero.css" rel="stylesheet" media="screen">
</head>
<body>
@include('partials.header')

@yield('content')

@include('partials.footer')

<!-- WhatsApp Floating Button -->
<div class="whatsapp-container">
    <a href="https://wa.me/27814303023" target="_blank" class="whatsapp-float" aria-label="Chat on WhatsApp">
        <div class="whatsapp-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor">
                <path d="M16 0C7.163 0 0 7.163 0 16c0 2.825.74 5.478 2.037 7.787L.703 30.703l7.084-1.317C10.036 30.704 12.93 32 16 32c8.837 0 16-7.163 16-16S24.837 0 16 0zm9.515 22.707c-.37.992-2.065 1.828-2.984 1.948-.725.093-1.67.167-5.416-1.161-4.785-1.697-7.86-6.51-8.099-6.81-.235-.301-1.913-2.546-1.913-4.856 0-2.311 1.21-3.447 1.64-3.918.43-.472.938-.59 1.252-.59.313 0 .627.003.903.016.289.014.676-.11 1.057.806.39.938 1.332 3.248 1.447 3.485.115.236.192.511.038.812-.153.302-.23.49-.459.754-.23.264-.484.59-.691.792-.23.224-.47.467-.202.918.268.451 1.191 1.965 2.556 3.183 1.755 1.566 3.237 2.052 3.695 2.284.459.23.726.191.993-.115.268-.306 1.15-1.342 1.455-1.802.306-.459.611-.383 1.031-.23.42.153 2.667 1.258 3.125 1.487.459.23.764.344.878.535.115.192.115 1.094-.255 2.151z"/>
            </svg>
        </div>
        <span class="whatsapp-label">Chat with us</span>
    </a>
    <div class="whatsapp-pulse"></div>
</div>

<style>
    .whatsapp-container {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 1000;
    }

    .whatsapp-float {
        position: relative;
        display: flex;
        align-items: center;
        gap: 12px;
        background: linear-gradient(135deg, #25D366 0%, #1ebe57 100%);
        color: #FFF;
        padding: 14px 20px;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        font-family: 'Inter', 'DM Sans', sans-serif;
        font-weight: 600;
        font-size: 15px;
        letter-spacing: 0.3px;
        z-index: 2;
    }

    .whatsapp-float::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #128C7E 0%, #075e54 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 50px;
    }

    .whatsapp-float:hover::before {
        opacity: 1;
    }

    .whatsapp-float:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 32px rgba(37, 211, 102, 0.5);
    }

    .whatsapp-icon {
        position: relative;
        z-index: 1;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .whatsapp-icon svg {
        width: 100%;
        height: 100%;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    }

    .whatsapp-label {
        position: relative;
        z-index: 1;
        white-space: nowrap;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    /* Pulsing animation ring */
    .whatsapp-pulse {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        border-radius: 50px;
        background: rgba(37, 211, 102, 0.4);
        z-index: 1;
        animation: whatsapp-pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    @keyframes whatsapp-pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
        100% {
            transform: translate(-50%, -50%) scale(1.3);
            opacity: 0;
        }
    }

    /* Mobile responsive */
    @media screen and (max-width: 768px) {
        .whatsapp-container {
            bottom: 20px;
            right: 20px;
        }

        .whatsapp-float {
            padding: 12px 16px;
            font-size: 14px;
            gap: 10px;
        }

        .whatsapp-icon {
            width: 24px;
            height: 24px;
        }

        .whatsapp-label {
            font-size: 13px;
        }
    }

    /* Extra small screens - compact button */
    @media screen and (max-width: 480px) {
        .whatsapp-float {
            padding: 14px;
            border-radius: 50%;
            width: 56px;
            height: 56px;
            justify-content: center;
        }

        .whatsapp-label {
            display: none;
        }

        .whatsapp-pulse {
            border-radius: 50%;
        }
    }

    /* Accessibility - reduced motion */
    @media (prefers-reduced-motion: reduce) {
        .whatsapp-pulse {
            animation: none;
        }

        .whatsapp-float {
            transition: none;
        }
    }
</style>

<!-- Jquery Library File -->
<script src="js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap js file -->
<script src="js/bootstrap.min.js"></script>
<!-- Validator js file -->
<script src="js/validator.min.js"></script>
<!-- SlickNav js file -->
<script src="js/jquery.slicknav.js"></script>
<!-- Swiper js file -->
<script src="js/swiper-bundle.min.js"></script>
<!-- Counter js file -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<!-- Magnific js file -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- SmoothScroll -->
<script src="js/SmoothScroll.js"></script>
<!-- Parallax js -->
<script src="js/parallaxie.js"></script>
<!-- MagicCursor js file -->
<script src="js/gsap.min.js"></script>
<script src="js/magiccursor.js"></script>
<!-- Text Effect js file -->
<script src="js/SplitText.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<!-- YTPlayer js File -->
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!-- Wow js file -->
<script src="js/wow.min.js"></script>
<!-- Main Custom js file -->
<script src="js/function.js"></script>
<!-- ZimAlert Hero Custom js file -->
<script src="js/zimalert-hero.js"></script>
</body>
</html>

