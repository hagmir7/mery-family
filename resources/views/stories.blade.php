@extends('layout.layout')

@section('content')

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="pingback" href="https://preview.lsvr.sk/lineago/xmlrpc.php">
        <title>Family History – Lineago</title>
        <meta name="robots" content="max-image-preview:large">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//s.w.org">
        <link rel="alternate" type="application/rss+xml" title="Lineago » Feed"
            href="https://preview.lsvr.sk/lineago/feed/">
        <link rel="alternate" type="application/rss+xml" title="Lineago » Comments Feed"
            href="https://preview.lsvr.sk/lineago/comments/feed/">
        <link rel="stylesheet" id="wp-block-library-css"
            href="https://preview.lsvr.sk/lineago/wp-includes/css/dist/block-library/style.min.css?ver=6.0.6"
            type="text/css" media="all">
        <style id="global-styles-inline-css" type="text/css">
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
                --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
                --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
                --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
                --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
                --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
                --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
                --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }
        </style>
        <link rel="stylesheet" id="lsvr-lineago-main-style-css"
            href="https://preview.lsvr.sk/lineago/wp-content/themes/lineago/style.css?ver=1.0.4" type="text/css"
            media="all">
        <link rel="stylesheet" id="lsvr-lineago-general-style-css"
            href="https://preview.lsvr.sk/lineago/wp-content/themes/lineago/assets/css/general.css?ver=1.0.4"
            type="text/css" media="all">
        <style id="lsvr-lineago-general-style-inline-css" type="text/css">
            body,
            input,
            textarea,
            select,
            button,
            #cancel-comment-reply-link,
            .lsvr-primary-font {
                font-family: 'Inter', Arial, sans-serif;
            }

            h1,
            h2,
            .lsvr-secondary-font {
                font-family: 'Playfair Display', serif;
            }

            html,
            body {
                font-size: 16px;
            }

            .header-branding__logo-link {
                max-width: 90px;
            }
        </style>
        <link rel="stylesheet" id="lsvr-lineago-demo-style-css"
            href="https://preview.lsvr.sk/lineago/wp-content/themes/lineago-demo/style.css?ver=1.0.0" type="text/css"
            media="all">
        <link rel="stylesheet" id="lsvr-lineago-google-fonts-css"
            href="https://fonts.googleapis.com/css2?family=Playfair+Display%3Awght%40300%3B400%3B500%3B600%3B700%3B800&amp;display=swap&amp;ver=6.0.6"
            type="text/css" media="all">
        <link rel="stylesheet" id="lsvr-lineago-color-scheme-css"
            href="https://preview.lsvr.sk/lineago/wp-content/themes/lineago/assets/css/color-schemes/default.css?ver=1.0.4"
            type="text/css" media="all">
        <link rel="https://api.w.org/" href="https://preview.lsvr.sk/lineago/wp-json/">
        <link rel="alternate" type="application/json" href="https://preview.lsvr.sk/lineago/wp-json/wp/v2/pages/296">
        <link rel="EditURI" type="application/rsd+xml" title="RSD"
            href="https://preview.lsvr.sk/lineago/xmlrpc.php?rsd">
        <link rel="wlwmanifest" type="application/wlwmanifest+xml"
            href="https://preview.lsvr.sk/lineago/wp-includes/wlwmanifest.xml">
        <meta name="generator" content="WordPress 6.0.6">
        <link rel="canonical" href="https://preview.lsvr.sk/lineago/family-history/">
        <link rel="shortlink" href="https://preview.lsvr.sk/lineago/?p=296">
        <link rel="alternate" type="application/json+oembed"
            href="https://preview.lsvr.sk/lineago/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpreview.lsvr.sk%2Flineago%2Ffamily-history%2F">
        <link rel="alternate" type="text/xml+oembed"
            href="https://preview.lsvr.sk/lineago/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpreview.lsvr.sk%2Flineago%2Ffamily-history%2F&amp;format=xml">
        <style>
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
        </style>
    </head>

    <div id="top" class="page-wrapper" style="margin-top: 50px">
        <!-- CORE : begin -->
        <div id="core" class="core--narrow">
            <div class="core__inner">
                <!-- CORE HEADER : begin -->
                <div class="core-header">

                    <!-- CORE HEADER INNER : begin -->
                    <div class="core-header__inner">
                        <div class="lsvr-container">
                            <div class="core-header__content">
                                <!-- CORE HEADER CONTAINER : begin -->
                                <div class="core-header__container">

                                    <!-- CORE HEADER HEADING : begin -->
                                    <div class="core-header__heading">

                                        <h1 class="core-header__title">
                                            Stories </h1>


                                        <p class="core-header__subtitle lsvr-secondary-font">
                                            The Story of Said seghrouchni <br> Idrissi
                                        </p>

                                    </div>
                                    <!-- CORE HEADER HEADING : end -->

                                </div>
                                <!-- CORE HEADER CONTAINER : end -->
                            </div>
                        </div>
                    </div>
                    <!-- CORE HEADER INNER : end -->

                    <!-- CORE HEADER BACKGROUND : begin -->
                    <div class="core-header__bg">

                        <div class="core-header__bg-image"
                            style="background-image: url( 'img/bg_stories.jpg' );width: 100%">
                            <img src="img/bg_stories.jpg" class="core-header__bg-img" aria-hidden="true" alt="">
                        </div>

                        <div class="core-header__bg-overlay" style="opacity: 0.8"></div>

                    </div>
                    <!-- PAGE BACKGROUND : end -->

                </div>
                <!-- CORE HEADER : end -->

                <!-- CORE BODY : begin -->
                <div class="core-body">
                    <div class="lsvr-container">
                        <!-- MAIN : begin -->
                        <main id="main">
                            <div class="main__inner">

                                <!-- POST CONTENT : begin -->
                                <div class="post__content">
                                    <h2>Early life and education</h2>

                                    <p>Said's childhood was far from typical when compared to that of other children.
                                        At the age of seven, he endured severe burns in an accident that left him with
                                        injuries on his
                                        neck and lower armpit. During a complicated surgical procedure, a piece of his thigh
                                        was taken
                                        and grafted onto the burned areas. This unfortunate incident occurred when he was
                                        wearing a nylon
                                        shirt and playing with fire, causing his shirt to catch fire. When his mother
                                        attempted to remove the
                                        shirt, it resulted in burns to his neck and underarm.
                                    </p>

                                    <br>

                                    <div class="wp-block-image">
                                        <figure class="alignleft size-full is-resized">
                                            <img src="img/parent.jpeg" alt="History" class="wp-image-294"
                                                width="400" height="527" sizes="(max-width: 400px) 100vw, 400px">
                                            <figcaption>Said and his Father</figcaption>
                                        </figure>
                                    </div>


                                    <p>At the age of <strong>Ten or Eleven</strong> , he returned as a tourist guide while
                                        simultaneously
                                        excelling in his studies, consistently ranking among the top students. Despite his
                                        academic prowess, he made the difficult decision to abandon his education at the age
                                        of <strong>Fourteen</strong> to support his father and siblings. He became a pillar
                                        of strength for
                                        his family, taking on the role of a second father, and remained in this capacity
                                        until his passing.</p>
                                    <br> <br>

                                    <p>He assisted his brothers as well as his brothers' children. He was a fun-loving
                                        person who enjoyed laughter and jokes. His hobby was traveling, and he didn't want
                                        to be limited. He disliked those who took advantage of his kindness. He revered
                                        religious holidays and Moroccan traditions, such as Eid al-Adha, Ramadan, and
                                        Ashura. All of this meant a lot to him as he saw it as an opportunity to bring joy
                                        and happiness to the family, making him happy in turn.</p>



                                    <p>He shared a deep bond with his two best friends, Abdullah and Muhammad. His
                                        friendship with Abdullah was forged in their early years, and they both endured the
                                        harshness of working as tourist guides, often clashing with the tourist police, who
                                        would punish them if caught. Nevertheless, he persevered in this profession for the
                                        sake of his family.

                                    </p>

                                    <br>
                                    <p> In all aspects of our lives, we remember Said because we always find his impact,
                                        whether in his words or his generosity, be it material or moral..</p>
                                    <div class="wp-block-image">
                                        <figure class="alignright size-full is-resized"><img loading="lazy"
                                                src="img/said_7.jpeg" alt="History" class="wp-image-295" width="400"
                                                height="507" sizes="(max-width: 400px) 100vw, 400px">
                                            <figcaption>Said and his Mother</figcaption>
                                        </figure>
                                    </div>
                                    <br> <br>

                                    <h2>Some childhood memories</h2>

                                    <br>
                                    <blockquote class="wp-block-quote">
                                        <p>
                                            Childhood memories of Said include stories like the time he defended his older
                                            brother, Abdel Fattah, who was beating their other sibling, Rashid. Said
                                            intervened, striking Abdel Fattah on the head with a stick before making a swift
                                            getaway.
                                        </p>
                                    </blockquote>
                                    <br><br>
                                    <blockquote class="wp-block-quote">
                                        <p>
                                            On another occasion, Said wished he could leave his neighborhood without
                                            alerting his neighbors or his mother. He approached his neighbors and asked them
                                            for spices, under the pretext that his mother needed them. He continued this
                                            charade in every house until he was able to escape.
                                        </p>
                                    </blockquote>
                                    <br>
                                    <blockquote class="wp-block-quote">
                                        <p>
                                            Once, his mother didn't want him to leave the house while she was sleeping, so
                                            she tied a rope between her leg and his. Said managed to detach the rope from
                                            his leg and attach it to a table, ensuring that if his mother moved, she would
                                            still feel the rope attached to her leg.
                                        </p>
                                    </blockquote>


                                    <h4>My opinion is that I am his niece : Meryem Seghrouchni Idrissi</h4>
                                    <p>As his niece, I want to say with all my love , Said my beloved uncle, led a life
                                        defined by extraordinary generosity and unwavering
                                        kindness. His warm smile and open heart touched everyone fortunate enough to know
                                        him. Throughout his lifetime, he selflessly gave of his time, resources, and wisdom
                                        to support those in need. Whether it was helping a struggling neighbor, providing
                                        mentorship to young aspiring minds, or contributing to charitable causes, Said's
                                        altruism knew no bounds. He left behind a legacy of compassion and benevolence,
                                        reminding us all that a life well-lived is one that enriches the lives of others.
                                        Though he may be physically gone, his spirit of generosity lives on, inspiring all
                                        who were touched by his immense heart.
                                    </p>

                                    <br> <br>

                                    <blockquote class="wp-block-quote">
                                        <p>
                                            I am sure that The content I've written represents not only my individual
                                            viewpoint but that of our entire family.
                                        </p>
                                    </blockquote>
                                </div>
                                <!-- POST CONTENT : end -->
                            </div>
                        </main>
                        <!-- MAIN : end -->

                    </div>
                </div>
                <!-- CORE BODY : end -->

            </div>
        </div>
        <!-- CORE : end -->

    </div>
    <!-- PAGE WRAPPER : end -->

    <script type="text/javascript" src="https://preview.lsvr.sk/lineago/wp-includes/js/jquery/jquery.min.js?ver=3.6.0"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://preview.lsvr.sk/lineago/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js">
    </script>
    <script type="text/javascript"
        src="https://preview.lsvr.sk/lineago/wp-content/themes/lineago-demo/assets/js/lineago-demo-scripts.min.js?ver=1.0.0"
        id="lsvr-lineago-demo-scripts-js"></script>
    <script type="text/javascript" id="lsvr-lineago-demo-scripts-js-after">
        var lsvr_lineago_path = "https://preview.lsvr.sk/lineago/wp-content/themes/lineago";
    </script>
    <script type="text/javascript" src="https://preview.lsvr.sk/lineago/wp-includes/js/imagesloaded.min.js?ver=4.1.4"
        id="imagesloaded-js"></script>
    <script type="text/javascript" src="https://preview.lsvr.sk/lineago/wp-includes/js/masonry.min.js?ver=4.2.2"
        id="masonry-js"></script>
    <script type="text/javascript"
        src="https://preview.lsvr.sk/lineago/wp-content/themes/lineago/assets/js/lineago-third-party-scripts.min.js?ver=1.0.4"
        id="lsvr-lineago-third-party-scripts-js"></script>
    <script type="text/javascript" id="lsvr-lineago-main-scripts-js-extra">
        /* <![CDATA[ */
        var lsvr_lineago_main_scripts_ajax_var = {
            "url": "https:\/\/preview.lsvr.sk\/lineago\/wp-admin\/admin-ajax.php",
            "nonce": "5b8a8a80dc"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://preview.lsvr.sk/lineago/wp-content/themes/lineago/assets/js/lineago-scripts.min.js?ver=1.0.4"
        id="lsvr-lineago-main-scripts-js"></script><span id="lsvr-media-query-breakpoint" style="display: none;"></span>
    <script type="text/javascript" id="lsvr-lineago-main-scripts-js-after">
        var lsvr_lineago_js_labels = {
            "magnific_popup": {
                "mp_tClose": "Close (Esc)",
                "mp_tLoading": "Loading...",
                "mp_tPrev": "Previous (Left arrow key)",
                "mp_tNext": "Next (Right arrow key)",
                "mp_image_tError": "The image could not be loaded.",
                "mp_ajax_tError": "The content could not be loaded."
            }
        }
    </script>
@endsection
