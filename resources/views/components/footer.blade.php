
<footer>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Important links</h2>
          </li>

          <li class="footer-nav-item">
            <a href="/" class="footer-nav-link">Home</a>
          </li>

          <li class="footer-nav-item">
            <a href="{{route('about.index')}}" class="footer-nav-link">About Us</a>
          </li>

          <li class="footer-nav-item">
            <a href="{{ route('gallery.index') }}" class="footer-nav-link">Gallery</a>
          </li>

          <li class="footer-nav-item">
            <a href="{{ route('gallery.index') }}" class="footer-nav-link">Vidios</a>
          </li>

          <li class="footer-nav-item">
            <a href="{{ route('gallery.index') }}" class="footer-nav-link">Family history</a>
          </li>

          <li class="footer-nav-item">
            <a href="{{route('storie.index')}}" class="footer-nav-link">Stories</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

            <li class="footer-nav-item">
                <a href="{{ route('contact.create') }}" class="footer-nav-link">Contact Us</a>
              </li>

            @auth

                @if(auth()->user()->role === 1)
                    <li class="footer-nav-item">
                        <a href="{{ route('dashboard') }}" class="footer-nav-link">Dashboard</a>
                    </li>
                @endif
                
                <li class="footer-nav-item">
                    <a href="{{ route('user.update', auth()->user()->id) }}" class="footer-nav-link">Profile</a>
                </li>

                <li class="footer-nav-item">
                    <a href="{{ route('logout') }}" class="footer-nav-link">Lougout</a>
                </li>

            @else

                <li class="footer-nav-item">
                    <a href="{{ route('login') }}" class="footer-nav-link">Login</a>
                </li>

                <li class="footer-nav-item">
                    <a href="{{ route('register') }}" class="footer-nav-link">Register</a>
                </li>

            @endauth
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline" role="img" class="md hydrated" aria-label="location outline"></ion-icon>
            </div>

            <address class="content">
               hay saada
              Fes, Fes Mekenas,Maroc
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline" role="img" class="md hydrated" aria-label="call outline"></ion-icon>
            </div>

            <a href="tel:+212936-8058" class="footer-nav-link">(+212) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
            </div>

            <a href="mailto:meyrShop@freesad.com" class="footer-nav-link">meyr@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Suivez-nous</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <p class="copyright">
          Copyright © <a href="/">SAID</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>

