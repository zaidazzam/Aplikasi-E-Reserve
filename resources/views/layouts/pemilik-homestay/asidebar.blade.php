        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="" class="app-brand-link">
                    <div class="icon p-2 me-2">
                        <img class="" src="{{ asset('img/group12.svg') }}" alt="Icon"
                            style="width: 40px; height: 40px;">
                    </div>
                    <span class=" menu-text fw-bolder ms-2">Kamojang.id</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item {{ request()->routeIs('pemilik_homestay.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('pemilik_homestay.dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                {{-- Menu Homestay --}}
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Homestay</span>
                </li>
                <li class="menu-item {{ request()->is('datahomestay', 'tambahhomestay') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n=" ">Homestay</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('pemilik_homestay.datahomestay') }}" class="menu-link">
                                <div data-i18n="">Data Homestay</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('pemilik_homestay.tambahhomestay') }}" class="menu-link">
                                <div data-i18n="">Tambah Homestay</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->
