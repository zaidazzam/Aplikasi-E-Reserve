        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="" class="app-brand-link">
                    <div class="icon p-2 me-2">
                        <img class="" src="{{ asset('img/group12.svg') }}" alt="Icon"
                            style="width: 40px; height: 40px;">
                    </div>
                    <span class=" menu-text fw-bolder ms-2">E-Reserve</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                {{-- Menu Homestay --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Homestay</span>
                </li>
                <li class="menu-item {{ request()->is('datahomestay', 'createhomestay') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n=" ">Homestay</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ url('/datahomestay') }}" class="menu-link">
                                <div data-i18n="">Data Homestay</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/createhomestay') }}" class="menu-link">
                                <div data-i18n="">Tambah Homestay</div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Menu Homestay --}}

                {{-- Menu Paket Wisata --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Paket Wisata</span>
                </li>
                <li class="menu-item {{ request()->is('datapaketwisata', 'tambahpaketwisata') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n=" ">Paket Wisata</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="">Data Wisata</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="">Tambah Wisata</div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Menu Paket Wisata --}}

                {{-- Menu Transaksi --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Transaksi</span>
                </li>
                <li
                    class="menu-item {{ request()->is('datatransaksi', 'datapengeluaran', 'datapendapatanfee') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="">Transaksi</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="">Data Transaksi</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="">Data Pengeluaran</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="">Data Pendapatan Fee</div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Menu Transaksi --}}

                {{-- Menu Pemilik Homestay --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Pemilik Homestay</span>
                </li>
                <li class="menu-item {{ request()->is('datapemilikhomestay') ? 'active' : '' }}">
                    <a href="" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-collection"></i>
                        <div data-i18n="Basic">Data Pemilik Homestay</div>
                    </a>
                </li>
                {{-- Menu Pemilik Homestay --}}

                {{-- Menu  Customer --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Customer</span>
                </li>
                <li class="menu-item {{ request()->is('datacustomer') ? 'active' : '' }}">
                    <a href="" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-collection"></i>
                        <div data-i18n="Basic">Data Customer</div>
                    </a>
                </li>
                {{-- Menu Customer --}}


                {{-- Menu Artikel --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Artikel</span>
                </li>
                <li class="menu-item {{ request()->is('dataartikel', 'tambahartikel') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="">Artikel</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="">Data Artikel</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="">Tambah Artikel</div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Menu Artikel --}}

                {{-- Menu Service Tambahan --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Layanan Tambahan</span>
                </li>
                <li class="menu-item {{ request()->is('datalayanan', 'tambuhlayanan') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="">Layanan Tambahan</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="">Data Layanan</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <div data-i18n="">Tambah Layanan</div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Menu Service Tambahan --}}
            </ul>
        </aside>
        <!-- / Menu -->
