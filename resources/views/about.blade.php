@extends('layout.layout')

@section('content')
    <div style="margin-top: 120px">
        <!-- Hero Start -->
        <div class="container-fluid py-6 my-6 mt-0" style="">
            <div class="container text-center animated bounceInDown"  >
                <h1 class="display-1 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">About</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Satrt -->

        <div class="container-fluid py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInUp;">
                        <img src="img/said_13.jpeg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border rounded-pill px-4 py-1 mb-3">
                                About Us
                        </small>
                        <p class="mb-4">Welcome to our project dedicated to preserving and sharing the life story of <span>Said Seghrouchni Idrissi.</span> <br>
                            Said Seghrouchni Idrissi Born on <span> October 6, 1962, in Morocco</span> and departed on <span> July 16, 2021, In USA </span>
                             Said's journey through life was a remarkable one that bridged two worlds
                            - Morocco and the United States.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About End -->
<br> <br>

        <div class="container-fluid py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow bounceInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInUp;">
                        <p class="mb-4">
                        Said spent his childhood in Morocco, where he forged his earliest memories, traditions, and values. It was in this vibrant and culturally rich environment that he learned about the importance of family, community, and the enduring heritage of Morocco.
                        <br>
                        <br>
                        Later in life, Said embarked on a new chapter, relocating to the United States. In this diverse and dynamic country, he embraced new opportunities, forged connections, and contributed to the rich tapestry of American society. His story serves as a testament to the power of cultural exchange and the ability to bridge cultures and generations.
                        </p>
                    </div>
                    <div class="col-lg-4 wow bounceInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                        <img src="img/said_14.jpeg" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInUp;">
                        <img src="img/mortSaid.jpeg" class="img-fluid rounded w-75 " alt="" >
                    </div>
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                        <p class="mb-4 me-5">
                            Tragically, Said's journey reached its conclusion in July 2021, and he was laid to rest in Morocco, next to his father. His legacy lives on through this project, a digital memorial that honors his life and allows others to explore the rich tapestry of his experiences.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Start -->
        {{-- <div class="container-fluid team py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInUp;">
                    <small
                        class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Why We Share</small>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInUp;">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="img/team-1.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Henry</h4>
                                <p class="text-white mb-0">Decoration Chef</p>
                            </div>
                  
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="img/team-2.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Jemes Born</h4>
                                <p class="text-white mb-0">Executive Chef</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="img/team-3.jpg" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Martin Hill</h4>
                                <p class="text-white mb-0">Kitchen Porter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Team End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top" style="display: none;"><i
                class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </div>
@endsection
