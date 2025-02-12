<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/branding/tut-wuri-handayani.png') }}" alt="tut wuri handayani"
                    class="img-fluid w-75">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">PPDB</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->routeIs('/') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('/') ? 'active' : '' }}">
                    <a href="{{ route('/') }}" class="menu-link">
                        <div data-i18n="Analytics">Analytics</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Laporan</span>
        </li>
        <li class="menu-item {{ request()->routeIs('principle.reporting.student') ? 'active' : '' }}">
            <a href="{{ route('principle.reporting.student') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-clipboard"></i>
                <div data-i18n="Rekap Data Siswa">Rekap Data Siswa</div>
            </a>
        </li>
    </ul>
</aside>
