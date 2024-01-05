@extends('layout.layout')

<style>
    body {
        background-image: linear-gradient(#e8f0ff 0%, white 52.08%);
        color: #0e3481;

    }

    .gallery-item {
        width: 200px;
        padding: 5px;
    }

    .the-arrow {
        width: 1px;
        transition: all 0.2s;
    }

    .the-arrow.-left {
        position: absolute;
        top: 60%;
        left: 0;
    }

    .the-arrow.-left>.shaft {
        width: 0;
        background-color: #4c4c4c;
    }

    .the-arrow.-left>.shaft:before,
    .the-arrow.-left>.shaft:after {
        width: 0;
        background-color: #4c4c4c;
    }

    .the-arrow.-left>.shaft:before {
        transform: rotate(0);
    }

    .the-arrow.-left>.shaft:after {
        transform: rotate(0);
    }

    .the-arrow.-right {
        top: 3px;
    }

    .the-arrow.-right>.shaft {
        width: 1px;
        transition-delay: 0.2s;
    }

    .the-arrow.-right>.shaft:before,
    .the-arrow.-right>.shaft:after {
        width: 8px;
        transition-delay: 0.3s;
        transition: all 0.5s;
    }

    .the-arrow.-right>.shaft:before {
        transform: rotate(40deg);
    }

    .the-arrow.-right>.shaft:after {
        transform: rotate(-40deg);
    }

    .the-arrow>.shaft {
        background-color: #4c4c4c;
        display: block;
        height: 1px;
        position: relative;
        transition: all 0.2s;
        transition-delay: 0;
        will-change: transform;
    }

    .the-arrow>.shaft:before,
    .the-arrow>.shaft:after {
        background-color: #4c4c4c;
        content: "";
        display: block;
        height: 1px;
        position: absolute;
        top: 0;
        right: 0;
        transition: all 0.2s;
        transition-delay: 0;
    }

    .the-arrow>.shaft:before {
        transform-origin: top right;
    }

    .the-arrow>.shaft:after {
        transform-origin: bottom right;
    }

    .animated-arrow {
        display: inline-block;
        color: #4c4c4c;
        font-size: 1.25em;
        font-style: italic;
        text-decoration: none;
        position: relative;
        transition: all 0.2s;
    }

    .animated-arrow:hover {
        color: #808080;
    }

    .animated-arrow:hover>.the-arrow.-left>.shaft {
        width: 64px;
        transition-delay: 0.1s;
        background-color: #808080;
    }

    .animated-arrow:hover>.the-arrow.-left>.shaft:before,
    .animated-arrow:hover>.the-arrow.-left>.shaft:after {
        width: 8px;
        transition-delay: 0.1s;
        background-color: #808080;
    }

    .animated-arrow:hover>.the-arrow.-left>.shaft:before {
        transform: rotate(40deg);
    }

    .animated-arrow:hover>.the-arrow.-left>.shaft:after {
        transform: rotate(-40deg);
    }

    .animated-arrow:hover>.main {
        transform: translateX(17px);
        transform: translateX(80px);
    }

    .animated-arrow:hover>.main>.the-arrow.-right>.shaft {
        width: 0;
        transform: translateX(200%);
        transition-delay: 0;
    }

    .animated-arrow:hover>.main>.the-arrow.-right>.shaft:before,
    .animated-arrow:hover>.main>.the-arrow.-right>.shaft:after {
        width: 0;
        transition-delay: 0;
        transition: all 0.1s;
    }

    .animated-arrow:hover>.main>.the-arrow.-right>.shaft:before {
        transform: rotate(0);
    }

    .animated-arrow:hover>.main>.the-arrow.-right>.shaft:after {
        transform: rotate(0);
    }

    .animated-arrow>.main {
        display: flex;
        align-items: center;
        transition: all 0.2s;
    }

    .animated-arrow>.main>.text {
        margin: 0 16px 0 0;
        line-height: 1;
    }

    .animated-arrow>.main>.the-arrow {
        position: relative;
    }
</style>

@section('content')
    <div class="mp-hero-section hero-section section title" style="margin-top: -220px">
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="mp-hero-image"><img src="img/1.jpg" alt=""></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="mp-hero-content" style="margin-top: 250px">
                        <h1><strong style="color: black">Said Seghrouchni <br>
                                <p class="ms-5"> Idrissi</p>
                            </strong> </h1>
                        <h4 style="color:#7a8084">The perfect space for a family history</h4>
                    </div>
                </div>

                <div class="container-xl feature-list-lg home-customize-gallery">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="mp-about-section section pt-150 pb-150">
                                <div class="mp-section-title" data-name="Said" style="margin-left: 18px">
                                    <h1>About us</h1>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="mb-about-content col-xs-12 ">
                                            <p style="color: black">This site is intended to be a place of family history
                                                remembrance.
                                                This site is
                                                accessible to those who are curious about history and want to
                                                learn more and have a
                                                personal experience of Moroccan culture, business, etc., through the history
                                                of the
                                                <strong>Seghrouchni Idrissi</strong> family. <br> Especially <strong>Said
                                                    Seghrouchni Idrissi</strong> , who lived between Morocco and America
                                            </p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="m-5">
                                            <a class='animated-arrow' href='{{ route('about.index') }}'>
                                                <span class='the-arrow -left'>
                                                    <span class='shaft'></span>
                                                </span>
                                                <span class='main'>
                                                    <span class='text'>
                                                        Read More
                                                    </span>
                                                    <span class='the-arrow -right'>
                                                        <span class='shaft'></span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <svg class="svg-bg" width="1421" height="1116" version="1"
                                xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient x1="70%" y1="20%" x2="53%" y2="69%"
                                        id="content-features-blob">
                                        <stop stop-color="rgba(204, 221, 255, 0.1)" offset="0"></stop>
                                        <stop stop-color="#fff" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M495 2359c102-82 112-116 158-224 76-169 289-299 376-193 87 107 67 181 262 235 196 55 206 370-13 606-220 236-373 245-461 234-89-11-267-67-459-75-192-7-440-157-296-377 145-220 331-125 433-206z"
                                    transform="matrix(-1 0 0 1 1440 -1904)" fill="url(#content-features-blob)"
                                    fill-rule="nonzero">
                                </path>
                            </svg>
                        </div>
                        <div class="col-lg-6 align-self-center" id="my-lightgallery">
                            <div class="vertical-gallery row" id="gallery-demo-super-customizable">
                                <div class="vertical-gallery-row col-4 first-row">
                                    <a data-lg-size="480-480-480, 800-800-800, 1400-1400" data-pinterest-text="Pin it3"
                                        data-tweet-text="lightGallery slide 4" class="gallery-item"
                                        data-src="img/said_1.jpeg">
                                        <img class="img-responsive" src="img/said_1.jpeg">
                                    </a>
                                </div>
                                <div class="vertical-gallery-row col-4 second-row">
                                    <a data-lg-size="480-514-480, 800-856-800, 1368-1464" class="gallery-item"
                                        data-src="img/said_2.jpeg">
                                        <img class="img-responsive" src="img/said_2.jpeg">
                                    </a>

                                    <a data-lg-size="480-480-480, 800-800-800, 1400-1400" data-pinterest-text="Pin it2"
                                        data-tweet-text="lightGallery slide  2" class="gallery-item"
                                        data-src="img/said_5.jpeg">
                                        <img class="img-responsive" src="img/said_5.jpeg">
                                    </a>
                                </div>
                                <div class="vertical-gallery-row col-4 third-row">
                                    <a data-lg-size="480-480-480, 800-800-800, 1400-1400" class="gallery-item"
                                        data-src="img/said_4.jpeg">
                                        <img class="img-responsive" src="img/said_4.jpeg">
                                    </a>
                                </div>
                            </div>
                            <p class="open-gallery-text"> Click on any thumbnail to open it</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mb-5">
            @include('searshFamily')
        </div>
      
    </div>
@endsection
