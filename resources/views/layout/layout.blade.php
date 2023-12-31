<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="preload" as="font" href="https://www.lightgalleryjs.com/fonts/HelveticaNowDisplay-Regular.woff2"
        type="font/woff2" crossorigin="">
    <link rel="preload" as="font" href="https://www.lightgalleryjs.com/fonts/HelveticaNowDisplay-Medium.woff2"
        type="font/woff2" crossorigin="">
    <link rel="stylesheet"
        href="https://www.lightgalleryjs.com/main.5cce80e54730726310bee9b30461824f9bbeb8c686506d797304dc5ee4e15ba21e05c04e08544283f9b0146377dca747835390597ce35ad0cec05e426fc75f50.css"
        integrity="sha512-XM6A5UcwcmMQvumzBGGCT5u+uMaGUG15cwTcXuThW6IeBcBOCFRCg/mwFGN33KdHg1OQWXzjWtDOwF5Cb8dfUA=="
        crossorigin="anonymous">
    <link rel="stylesheet" href="/css/lightgallery-bundle.css">
    <link rel="stylesheet" href="/css/lg-transitions.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">


    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <title>Said Seghrouchni Idrissi</title>
    <meta property="og:title" content="lightGallery">
    <meta property="og:description"
        content="A lightweight, modular, JavaScript image and video lightbox gallery plugin. Available for React.js, Vue.js, Angular, and TypeScript.">
    <meta property="og:type" content="website">
    <meta property="og:updated_time" content="2023-07-20T17:03:47+05:30">
    <meta property="og:site_name" content="lightGallery">
    <meta property="article:publisher" content="https://www.facebook.com/sachinchoolur">
    <meta property="article:author" content="https://www.facebook.com/sachinchoolur">
    <meta property="og:locale" content="en_US">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="alternate" type="application/rss+xml" href="https://www.lightgalleryjs.com/index.xml">
    <meta name="ahrefs-site-verification" content="96bd744dcfe6c078a1994c8d9e0e0ca6a5cf16004f63946a0cd349ca937c1b24">
    <meta name="theme-color" content="#fff">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.lightgalleryjs.com/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href='img/SAID-logo.png'>
    <link rel="manifest" href="https://www.lightgalleryjs.com/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,500;1,600&family=Italianno&family=Pacifico&display=swap" rel="stylesheet">

    <style>
        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .mp-hero-image img {
            animation: slideInFromLeft 0.5s ease-in-out;
        }

        @keyframes slideInFromTop {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(0);
            }
        }

        .mp-hero-content h1,
        .mp-hero-content h4 {
            animation: slideInFromTop 0.5s ease-in-out;
        }
        img.lazyload {
                display: none
        }
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        input.bito-email-input:-webkit-autofill,
        input.bito-email-input:-webkit-autofill:hover,
        input.bito-email-input:-webkit-autofill:focus {
            -webkit-text-fill-color: rgb(255, 255, 255);
            transition: background-color 5000s ease-in-out 0s;
        }

        #bito-body::-webkit-scrollbar,
        #emptyDiv-inner::-webkit-scrollbar,
        #loginParentDiv-outer::-webkit-scrollbar {
            width: 4px;
            border-radius: 24px;
            color: #7a8084;
        }

        #bito-body::-webkit-scrollbar-thumb,
        #emptyDiv-inner::-webkit-scrollbar-thumb,
        #loginParentDiv-outer::-webkit-scrollbar-thumb {
            background: #888;
        }

        #bito-body::-webkit-scrollbar-thumb:hover,
        #emptyDiv-inner::-webkit-scrollbar-thumb:hover,
        #loginParentDiv-outer::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .login-network-error-container {
            padding: 10px 16px 8px;
            color: rgb(255 0 0);
        }

        #loader {
            background-color: #00000085;
            position: absolute;
            width: 100%;
            top: 0px;
            left: 0px;
            height: 300px;
            align-items: center;
            justify-content: center;
            display: grid;
            z-index: 3002;
            opacity: 9999;
        }

        .spinner {
            display: inline-block;
            width: 1.5rem;
            height: 1.5rem;
            vertical-align: text-bottom;
            border: 1.75px solid #fff;
            border-right-color: transparent;
            border-radius: 50%;
            animation: spinner-border .75s linear infinite;
            margin-top: -30px
        }

        @keyframes spinner-border {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
        .navbar {
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        .navbar.scrolled {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Ajoute une ombre légère */
        }

        .cover {
            object-fit: cover !important;
        }

        .google-btn {
            width: auto;
            height: 42px;
            border-radius: 3px;
            box-shadow: 0 3px 4px 0 rgba(0, 0, 0, .25);

        }

        .google-icon-wrapper {
            position: absolute;
            width: 40px;
            height: 42px;
            border-radius: 2px;
            background-color: #fff;
            box-shadow: 0 3px 4px 0 rgba(0, 0, 0, .25);
        }

        .google-icon {
            position: absolute;
            margin-top: 13px;
            margin-left: 11px;
            width: 19px;
            height: 19px;
        }

        .btn-text {
            float: right;
            margin: 11px 11px 0 0;
            color: #fff;
            font-size: 14px;
            letter-spacing: 0.2px;
            font-family: "Roboto";
            text-align: center
        }

        .btn-text:hover {
            box-shadow: 0 0 6px #4285f4;
        }

        .btn-text:active {
            background: #1669F2;
        }

        hr {
            border: none;
            border-top: 3px double #333;
            color: #333;
            overflow: visible;
            text-align: center;
            height: 5px;
        }

        hr:after {
            background: #fff;
            content: 'Or';
            padding: 0 4px;
            position: relative;
            top: -13px;
        }


        /* Fonts */
        :root {
            --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-primary: "Inter", sans-serif;
            --font-secondary: "Cardo", sans-serif;
        }

        /* Colors */
        :root {
            --color-default: #fafafa;
            --color-primary: #27a776;
            --color-secondary: #161718;
        }

        /* Smooth scroll behavior */
        :root {
            scroll-behavior: smooth;
        }

        /* Preloader styles */
        #preloader {
            display: flex;
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100vh;
            z-index: 99999;
        }

        #preloader:before,
        #preloader:after {
            content: "";
            background-color: var(--color-secondary);
            position: absolute;
            inset: 0;
            width: 50%;
            height: 100%;
            transition: all 0.3s ease 0s;
            z-index: -1;
        }

        #preloader:after {
            left: auto;
            right: 0;
        }

        #preloader .line {
            position: relative;
            overflow: hidden;
            margin: auto;
            width: 1px;
            height: 280px;
            transition: all 0.8s ease 0s;
        }

        #preloader .line:before {
            content: "";
            position: absolute;
            background-color: #fff;
            left: 0;
            top: 50%;
            width: 1px;
            height: 0%;
            transform: translateY(-50%);
            animation: lineincrease 1000ms ease-in-out 0s forwards;
        }

        #preloader .line:after {
            content: "";
            position: absolute;
            background-color: #999;
            left: 0;
            top: 0;
            width: 1px;
            height: 100%;
            transform: translateY(-100%);
            animation: linemove 1200ms linear 0s infinite;
            animation-delay: 2000ms;
        }

        #preloader.loaded .line {
            opacity: 0;
            height: 100% !important;
        }

        #preloader.loaded .line:after {
            opacity: 0;
        }

        #preloader.loaded:before,
        #preloader.loaded:after {
            animation: preloaderfinish 300ms ease-in-out  forwards;
        }

        @keyframes lineincrease {
            0% {
                height: 0%;
            }

            100% {
                height: 100%;
            }
        }

        @keyframes linemove {
            0% {
                transform: translateY(200%);
            }

            100% {
                transform: translateY(-100%);
            }
        }

        @keyframes preloaderfinish {
            0% {
                width: 50%;
            }

            100% {
                width: 0%;
            }
        }

        /* Other styles for the site's sections and elements follow... */

        @import url(https://fonts.googleapis.com/css?family=Roboto:500);
    </style>


    {{-- Google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    {{-- <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <!--  - favicon  -->

    {{-- laravel csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Custem css --}}
    <link rel="stylesheet" href="/assets2/css/style-prefix.css">
    <link rel="shortcut icon" href="/assets2/images/logo/mery.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body style="background-color: #faf5f65c">
    <!-- Spinner Start -->

    <div id="preloader">
        <div class="line"></div>
    </div>

    <!-- Spinner End -->

    <div class="overlay" data-overlay></div>

    <!-- - HEADER  -->

    @include('components.header')

    <!-- Navbar End -->
    @yield('content')

    <!-- Footer Start -->
    <x-footer />


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/assets2/js/script.js"></script>

    <!--
      - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    @if (session()->has('message'))
        <script>
            Swal.fire({
                title: 'Succès!',
                text: '{{ session()->get('message') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            })
        </script>
    @endif

    @if (session()->has('thanks'))
        <script>
            console.log('My messsage');
            Swal.fire({
                title: 'Nous vous remercions de votre commande',
                text: {{ session()->get('thanks') }},
                icon: 'success',
                confirmButtonText: 'OK'
            })
        </script>
    @endif



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            "use strict";

            /**
             * Preloader
             */
            const preloader = document.querySelector('#preloader');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 1000);
                    setTimeout(() => {
                        preloader.remove();
                    }, 2000);
                });
            }
            const mobileNavShow = document.querySelector('.mobile-nav-show');
            const mobileNavHide = document.querySelector('.mobile-nav-hide');
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function addToCart(product) {

            const colors = $('input[name="colors[]"]:checked');
            const listColors = colors.map(function() {
                return this.value;
            }).get();

            const sizes = $('input[name="sizes[]"]:checked');
            const listSizes = sizes.map(function() {
                return this.value;
            }).get();

            const qty = document.getElementById('qty');
            const cart = document.getElementById('cart-items');
            $.ajax({
                url: `{{ route('cart.create') }}`,
                method: "POST",
                data: {
                    qty: qty ? qty.value : 1,
                    product: product,
                    colors: listColors,
                    sizes: listSizes
                },
                success: function(response) {
                    document.getElementById(`add-btn-${product}`).innerHTML = response.btn;
                    cart.innerText = response.items;
                    console.log(response);
                },
                error: function(xhr) {
                    console.log(xhr);
                    Swal.fire({
                        title: 'Erorr!',
                        text: xhr.responseJSON.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    })
                }
            });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/airtable@0.11.1/build/airtable.browser.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-49767543-2"></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        }
        gtag('js', new Date), gtag('config', 'UA-49767543-2')
    </script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    <script>
        jQuery("#animated-thumbnails-gallery")
            .justifiedGallery({
                captions: false,
                lastRow: "hide",
                rowHeight: 180,
                margins: 5
            })
            .on("jg.complete", function() {
                window.lightGallery(
                    document.getElementById("animated-thumbnails-gallery"), {
                        autoplayFirstVideo: false,
                        pager: false,
                        galleryId: "nature",
                        plugins: [lgZoom, lgThumbnail],
                        mobileSettings: {
                            controls: false,
                            showCloseIcon: false,
                            download: false,
                            rotate: false
                        }
                    }
                );
            });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightGallery/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightGallery/master/dist/js/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightGallery/master/dist/js/lg-thumbnail.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightGallery/master/dist/js/lg-video.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightGallery/master/dist/js/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightGallery/master/dist/js/lg-zoom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/js/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/packery/2.1.1/packery.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lg/1.2.0//lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lg/1.2.0//lg-pager.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lg/1.2.0//lg-autoplay.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lg/1.2.0//lg-zoom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lg/1.2.0//lg-hash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lg/1.2.0//lg-share.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lg/1.2.0//lg-thumbnail.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/js/lightgallery-all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.3.0/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <script>
        $(document).ready(function() {
            $("#my-lightgallery").lightGallery({
                selector: '.gallery-item',
            });
        });
    </script>
    <script>
        lightGallery(document.getElementById('animated-thumbnails-gallery'), {
            thumbnail: true
        });
    </script>
    <script>
        // Initialize lightGallery on the gallery-container element
        $(document).ready(function() {
            $('#animated-thumbnails-gallery').lightGallery();
        });
    </script>
    <script>
        lightGallery(document.getElementById('my-lightgallery'));
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>


</body>

</html>
