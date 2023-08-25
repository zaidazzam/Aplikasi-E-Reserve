  <!-- Navbar Start -->
  <div class="container-fluid nav-bar bg-transparent">
      <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
          <a href="" class="navbar-brand d-flex align-items-center text-center">
              <div class="icon p-2 me-2">
                  <img class="" src="{{ asset('img/group12.svg') }}" alt="Icon"
                      style="width: 45px; height: 45px;">
              </div>
              <h3 class="m-0 text-primary">E-Reserve</h3>
          </a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav ms-auto">
                  <a href="{{ url('/beranda') }}" class="nav-item nav-link active">Beranda</a>
                  <a href="{{ url('/beranda/homestay') }}" class="nav-item nav-link">Homestay</a>
                  <a href="{{ url('/paket') }}" class="nav-item nav-link">Paket</a>
                  <a href="{{ url('/blog') }}" class="nav-item nav-link">Blog</a>
                  <a href="{{ url('/u-homestay') }}" class="nav-item nav-link">Mitra</a>
                  <a href="{{ url('/tentang') }}" class="nav-item nav-link">Tentang</a>
              </div>
              <a href="" class="btn btn-primary px-3 m-1 d-none d-lg-flex">Masuk</a>
              <a href="" class="btn btn-secondary px-3 d-none d-lg-flex">Daftar</a>
          </div>
      </nav>
  </div>
