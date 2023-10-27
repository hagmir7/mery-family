@extends('layout.layout')

<style>
    body {
        background-image: linear-gradient(#e8f0ff 0%, white 52.08%);
        color: #0e3481;

    }


    /** Below CSS is completely optional **/

    .gallery-item {
        width: 200px;
        padding: 5px;
    }
</style>

@section('content')
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

                    <div class="container">
                        <div class="row">

                            <div class="mp-section-title text-center col-xs-12 mb-60" data-name="Said">
                                <h1>About us</h1>
                            </div>

                            <div class="mb-about-content text-center col-md-12 col-md-offset-1 col-xs-12 ">
                                <p style="color: black">This site is intended to be a place of family history remembrance.
                                    This site is
                                    accessible to those who are curious about history and want to learn more and have a
                                    personal experience of Moroccan culture, business, etc., through the history of the
                                    <strong>Seghrouchni Idrissi</strong> family. <br> Especially <strong>Said
                                        Seghrouchni Idrissi</strong> , who lived between Morocco and America
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
                <svg class="svg-bg" width="1421" height="1116" version="1" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient x1="70%" y1="20%" x2="53%" y2="69%"
                            id="content-features-blob">
                            <stop stop-color="rgba(204, 221, 255, 0.1)" offset="0"></stop>
                            <stop stop-color="#fff" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path
                        d="M495 2359c102-82 112-116 158-224 76-169 289-299 376-193 87 107 67 181 262 235 196 55 206 370-13 606-220 236-373 245-461 234-89-11-267-67-459-75-192-7-440-157-296-377 145-220 331-125 433-206z"
                        transform="matrix(-1 0 0 1 1440 -1904)" fill="url(#content-features-blob)" fill-rule="nonzero">
                    </path>
                </svg>
            </div>
            <div class="col-lg-6 align-self-center" id="my-lightgallery">
                <div class="vertical-gallery row" id="gallery-demo-super-customizable">
                    <div class="vertical-gallery-row col-4 first-row">
                        <a data-lg-size="480-480-480, 800-800-800, 1400-1400" data-pinterest-text="Pin it3"
                            data-tweet-text="lightGallery slide 4" class="gallery-item" data-src="img/said_1.jpeg">
                            <img class="img-responsive" src="img/said_1.jpeg">
                        </a>
                    </div>
                    <div class="vertical-gallery-row col-4 second-row">
                        <a data-lg-size="480-514-480, 800-856-800, 1368-1464" class="gallery-item"
                            data-src="img/said_2.jpeg">
                            <img class="img-responsive" src="img/said_2.jpeg">
                        </a>

                        <a data-lg-size="480-480-480, 800-800-800, 1400-1400" data-pinterest-text="Pin it2"
                            data-tweet-text="lightGallery slide  2" class="gallery-item" data-src="img/said_3.jpeg">
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
@endsection
