<header id="nav-header" class="navbar fixed-top navbar-expand-lg navbar-light ">
    <div class="container-xxl">
        <a class="navbar-brand monospace" href="">
            <img class="img-logo" src="{{ asset('img/SAID-logo.png') }}" alt=""
                style="width: 80px; height: 80px; margin-top: -20px">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><svg
                class="navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                fill="currentcolor" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 11.5A.5.5.0 013 11h10a.5.5.0 010 1H3a.5.5.0 01-.5-.5zm0-4A.5.5.0 013 7h10a.5.5.0 010 1H3a.5.5.0 01-.5-.5zm0-4A.5.5.0 013 3h10a.5.5.0 010 1H3a.5.5.0 01-.5-.5z">
                </path>
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                @if(auth()->user()?->role === 1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="/demos/thumbnails/">Abous Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/docs/react/">Vidios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/docs/react/">Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/license/">Family History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/license/">Quotes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
                </li>
                @auth
                <li class="nav-item nav-item-social">
                    <a href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-in-right nav-link" style="font-size: 28px; margin-top:-8px"></i>
                    </a>
                </li>
                @else
                <li class="nav-item nav-item-social">
                    <a href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-in-right nav-link" style="font-size: 28px; margin-top:-8px"></i>
                    </a>
                </li>
                @endauth

            </ul>
        </div>
    </div>
</header>
