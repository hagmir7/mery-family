<header id="nav-header" class="navbar fixed-top navbar-expand-lg navbar-light ">
    <div class="container-xxl">
        <a class="navbar-brand monospace" href="">
            <img class="img-logo" src="{{ asset('img/SAID-logo.png') }}" alt=""
                style="width: 80px; height: 80px; margin-top: -20px">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                @if (auth()->user()?->role === 1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endif
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.update', auth()->user()->id) }}">Profile</a>
                    </li>
                @endauth

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/docs/react/">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('storie.index')}}">Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/license/">Family History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/license/">Quotes</a>
                </li>
                @auth
                    <li class="nav-item nav-item-social">
                        <a href="{{ route('logout') }}">
                            <i class="bi bi-box-arrow-in-right nav-link" style="font-size: 28px; margin-top:-8px"></i>
                        </a>
                    </li>
                @else
                    <li class=" nav-item-social">
                        <div class="mt-4">
                            <a class="btn btn-info text-white btn-sm" href="{{ route('login') }}">
                                Join Us
                            </a>
                        </div>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</header>





