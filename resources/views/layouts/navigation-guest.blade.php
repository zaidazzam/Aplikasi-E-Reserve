  <!-- Navbar Start -->
  <div class="container-fluid nav-bar bg-transparent">
      <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
          <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center text-center">
              <div class="icon p-2 me-2">
                  <img class="" src="{{ asset('img/group12.svg') }}" alt="Icon"
                      style="width: 45px; height: 45px;">
              </div>
              <h3 class="m-0 text-primary">Kamojang.id</h3>
          </a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav ms-auto">
                  <a href="{{ url('/') }}"
                      class="nav-item nav-link{{ Request::is('/') ? ' active' : '' }}">Beranda</a>
                  <a href="{{ url('/homestay') }}"
                      class="nav-item nav-link{{ Request::is('homestay') ? ' active' : '' }}">Homestay</a>
                  <a href="{{ url('/paket') }}"
                      class="nav-item nav-link{{ Request::is('paket') ? ' active' : '' }}">Paket</a>
                  <a href="{{ url('/blog') }}"
                      class="nav-item nav-link{{ Request::is('blog') ? ' active' : '' }}">Blog</a>
                  <a href="{{ url('/u-homestay') }}"
                      class="nav-item nav-link{{ Request::is('u-homestay') ? ' active' : '' }}">Mitra</a>
                  <a href="{{ url('/tentang') }}"
                      class="nav-item nav-link{{ Request::is('tentang') ? ' active' : '' }}">Tentang</a>
              </div>
              <a href="{{ url('/login') }}" class="btn btn-primary px-3 m-1 d-none d-lg-flex">Masuk</a>
              <a href="{{ url('/register') }}" class="btn btn-secondary px-3 d-none d-lg-flex">Daftar</a>
          </div>

      </nav>
  </div>
