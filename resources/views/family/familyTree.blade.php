@extends('layout.layout')
@section('content')
    <style>
            @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,500;1,600&family=Italianno&family=Pacifico&display=swap');


        .genealogy-scroll::-webkit-scrollbar {
            width: 5px;
            height: 8px;
        }

        .genealogy-scroll::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #e4e4e4;
        }

        .genealogy-scroll::-webkit-scrollbar-thumb {
            background: #212121;
            border-radius: 10px;
            transition: 0.5s;
        }

        .genealogy-scroll::-webkit-scrollbar-thumb:hover {
            background: #d5b14c;
            transition: 0.5s;
        }


        /*----------------genealogy-tree----------*/
        .genealogy-body {
            white-space: nowrap;
            overflow-y: hidden;
            padding: 50px;
            min-height: 500px;
            padding-top: 10px;
        }

        .genealogy-tree ul {
            padding-top: 20px;
            position: relative;
            padding-left: 0px;
            display: flex;
        }

        .genealogy-tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
        }

        .genealogy-tree li::before,
        .genealogy-tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 2px solid #ccc;
            width: 50%;
            height: 18px;
        }

        .genealogy-tree li::after {
            right: auto;
            left: 50%;
            border-left: 2px solid #ccc;
        }

        .genealogy-tree li:only-child::after,
        .genealogy-tree li:only-child::before {
            display: none;
        }

        .genealogy-tree li:only-child {
            padding-top: 0;
        }

        .genealogy-tree li:first-child::before,
        .genealogy-tree li:last-child::after {
            border: 0 none;
        }

        .genealogy-tree li:last-child::before {
            border-right: 2px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }

        .genealogy-tree li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }

        .genealogy-tree ul ul::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 50%;
            border-left: 2px solid #ccc;
            width: 0;
            height: 70px;
        }


        .genealogy-tree li a {
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma;
            font-size: 11px;
            display: inline-block;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }

        .genealogy-tree li a:hover+ul li::after,
        .genealogy-tree li a:hover+ul li::before,
        .genealogy-tree li a:hover+ul::before,
        .genealogy-tree li a:hover+ul ul::before {
            border-color: #fbba00;
        }

        /*--------------memeber-card-design----------*/
        .member-view-box {
            padding: 0px 20px;
            text-align: center;
            border-radius: 4px;
            position: relative;
        }

        .member-image {
            width: 80px;
            position: relative;
        }

        .member-image img {
            width: 500px;
            height: 100px;
            border-radius: 50%;
            background-color: #000;
            z-index: 1;
            border: 1px solid black ;
            object-fit: cover !important;
        }

        .body {
            background-image: url('img/The Family Tree oF.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin-top: -94px;
        }


        hr {
            border: none;
            border-top: 3px double #333;
            color: #333;
            overflow: visible;
            /* text-align: center; */
            height: 20px;
            margin-top: 50px;
            width: 100px;
            margin-left: -8px;

        }

        hr:after {
            background: #fff;
            content: '❤';
            padding: 0 5px;
            position: relative;
            top: -29px;
            right:1px;
            font-size: 24px;
        }


    </style>
    <div class="body mb-5">
        <div class="body genealogy-body genealogy-scroll" >
            <div class="genealogy-tree" >
                <ul>
                    <li style="padding-top: 377px;">
                        <a href="javascript:void(0);" >
                            <div class="d-flex">
                                <div class="member-view-box">
                                    <div class="member-image">
                                        <img src="img/arafa.jpeg" alt="Member">
                                        <div class="member-details">
                                            <h4>Arafa</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ajout du cœur au-dessus de la ligne horizontale -->

                                    <div class="member-image">
                                     <hr>
                                    </div>


                                <div class="member-view-box">
                                    <div class="member-image">
                                        <img src="img/saadia.jpeg" alt="Member">
                                        <div class="member-details">
                                            <h5>Saadia</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="active">
                            {{-- <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/femme.jpg" alt="Member">
                                            <div class="member-details">
                                                <h5>Ahlam</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a> --}}
                                {{-- <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Member 1-1</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Member 1-2</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Member 1-3</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="member-view-box">
                                                        <div class="member-image">
                                                            <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                                alt="Member">
                                                            <div class="member-details">
                                                                <h5>Member 1-3-1</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="member-view-box">
                                                        <div class="member-image">
                                                            <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                                alt="Member">
                                                            <div class="member-details">
                                                                <h5>Member 1-3-2</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="member-view-box">
                                                        <div class="member-image">
                                                            <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                                alt="Member">
                                                            <div class="member-details">
                                                                <h5>Member 1-3-3</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Member 1-4</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Member 1-5</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Member 1-6</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Member 1-7</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="member-view-box">
                                                        <div class="member-image">
                                                            <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                                alt="Member">
                                                            <div class="member-details">
                                                                <h5>Member 1-7-1</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="member-view-box">
                                                        <div class="member-image">
                                                            <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                                alt="Member">
                                                            <div class="member-details">
                                                                <h5>Member 1-7-2</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div class="member-view-box">
                                                                <div class="member-image">
                                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                                        alt="Member">
                                                                    <div class="member-details">
                                                                        <h5>Member 1-7-2-1</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div class="member-view-box">
                                                                <div class="member-image">
                                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                                        alt="Member">
                                                                    <div class="member-details">
                                                                        <h5>Member 1-7-2-2</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div class="member-view-box">
                                                                <div class="member-image">
                                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                                        alt="Member">
                                                                    <div class="member-details">
                                                                        <h5>Member 1-7-2-3</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="member-view-box">
                                                        <div class="member-image">
                                                            <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                                alt="Member">
                                                            <div class="member-details">
                                                                <h5>Member 1-7-3</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> --}}
                            {{-- </li> --}}
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/homme.jpg" alt="Member">
                                            <div class="member-details">
                                                <h5>Abdlfatah</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="mt-5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Habiba</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Radouane</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/homme.jpg" alt="Member">
                                            <div class="member-details">
                                                <h5>Ismail</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="mt-5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Kaoutar</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Rali</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Ghita</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/homme.jpg" alt="Member">
                                            <div class="member-details">
                                                <h5>Rachid</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="mt-5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Sarah</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Ali</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Simo</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/said.jpeg" alt="Member">
                                            <div class="member-details">
                                                <h5>Said</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="mt-5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Michel</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Zak</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Sanae</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/fouad.jpeg" alt="Member">
                                            <div class="member-details">
                                                <h5>Fouad</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="mt-5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="img/ahmed.jpeg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Ahmed</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class=" member-image">
                                                    <img src="img/meryem.jpeg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Meryem</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="img/yassine.jpeg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Yassine</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/femme.jpg" alt="Member">
                                            <div class="member-details">
                                                <h5>Karima</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="mt-5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Zakaria</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Mehdi</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/femme.jpg" alt="Member">
                                            <div class="member-details">
                                                <h5>Sanae</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="mt-5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Karim</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Safae</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/femme.jpg" alt="Member">
                                            <div class="member-details">
                                                <h5>Fatiha</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="mt-5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Fatima Zohra</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Youssef</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box">
                                        <div class="member-image">
                                            <img src="img/femme.jpg" alt="Member">
                                            <div class="member-details">
                                                <h5>Hanane</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="mt-5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Bilal</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box">
                                                <div class="member-image">
                                                    <img src="https://image.flaticon.com/icons/svg/145/145867.svg"
                                                        alt="Member">
                                                    <div class="member-details">
                                                        <h5>Yahya</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Your script comes after including jQuery -->
<script>
    $(document).ready(function() {
        $('.genealogy-tree ul').hide();
        $('.genealogy-tree>ul').show();
        $('.genealogy-tree ul.active').show();
        $('.genealogy-tree li').on('click', function(e) {
            var children = $(this).find('> ul');
            if (children.is(":visible")) children.hide('fast').removeClass('active');
            else children.show('fast').addClass('active');
            e.stopPropagation();
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
