@extends('layout.dash')

@section('content')
    <style>
        .product {
            color: #4154f1;
            background: #f6f6fe;
            padding: 13px 16px 4px 15px;
        }

        .user {
            color: #ff771d;
            background: #ffecdf;
            padding: 13px 16px 4px 15px;
        }

        .order {
            color: #2eca6a;
            background: #e0f8e9;
            padding: 13px 16px 4px 15px;
        }

        .message {
            color: #0dcaf0;
            background: #0dcaf02e;
            padding: 13px 16px 4px 15px;
        }
    </style>

    <div class="row gap-2 justify-content-center">

        <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6 mt-2">
                <div class="card info-card sales-card border-0 shadow-sm">
                    <div class="card-body">
                        <a href="{{ route('gallery.index') }}" style="text-decoration: none ; color:black">
                            <h5 class="card-title">Gallery</h5>
                        </a>

                        <div class="d-flex align-items-center">
                            <div class="product card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class='bx bx-images h2'></i>
                            </div>
                            <div class="ps-3">
                                <h6 class="h4">{{ $media->count() }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->



            {{-- <div class="col-xxl-4 col-md-6 mt-2">
            <div class="card info-card sales-card border-0 shadow-sm">
              <div class="card-body">
                <a href="{{route('order.list')}}" style="text-decoration: none ; color:black"> <h5 class="card-title">Commandes</h5></a>

                <div class="d-flex align-items-center">
                  <div class="card-icon order rounded-circle d-flex align-items-center justify-content-center">
                    
                  </div>
                  <div class="ps-3">
                    <h6 class="h4">{{ $orders->count() }}</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card --> --}}

            <div class="col-xxl-4 col-md-6 mt-2">
                <div class="card info-card sales-card border-0 shadow-sm">
                    <div class="card-body">
                        <a href="{{ route('contact.list') }}" style="text-decoration: none ; color:black">
                            <h5 class="card-title">Messages</h5>
                        </a>

                        <div class="d-flex align-items-center">
                            <div class="card-icon message rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-chat h2"></i>
                            </div>
                            <div class="ps-3">
                                <h6 class="h4">{{ $contacts->count() }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-6 mt-2">
                <div class="card info-card sales-card border-0 shadow-sm">
                    <div class="card-body">
                        <a href="{{ route('user.list') }}" style="text-decoration: none ; color:black">
                            <h5 class="card-title">User</h5>
                        </a>

                        <div class="d-flex align-items-center">
                            <div class="card-icon user rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person h2"></i>
                            </div>
                            <div class="ps-3">
                                <h6 class="h4">{{ $users }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->



            <div class="col-12 mt-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Report <small> / Last seven days</small></h5>

                        <!-- Line Chart -->
                        <div id="reportsChart">
                            <div class="d-flex justify-content-center py-5" id="chart-spinner">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", async () => {
                                const product = await fetch("{{ route('product.chart') }}")
                                    .then(res => res.json())
                                    .then(respons => {
                                        document.querySelector('#chart-spinner').remove();

                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'Photos',
                                                data: respons.medias.map(item => item[1])
                                            }, {
                                                name: 'User',
                                                data: respons.users.map(item => item[1])
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#4154f1', '#2eca6a'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy'
                                                },
                                            }
                                        }).render();
                                    });
                            });
                        </script>
                        <!-- End Line Chart -->

                    </div>

                </div>
            </div><!-- End Reports -->
        </div>

    </div>
@endsection
