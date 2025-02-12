<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('/') }}" class="app-brand-link">
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
            <span class="menu-header-text">Master</span>
        </li>
        <li class="menu-item {{ request()->routeIs('master.student') ? 'active' : '' }}">
            <a href="{{ route('master.student') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Siswa">Siswa</div>
            </a>
        </li>
        <li
            class="menu-item {{ request()->routeIs('master.principle', 'master.principle.create', 'master.principle.edit') ? 'active' : '' }}">
            <a href="{{ route('master.principle') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div data-i18n="Kepala Sekolah">Kepala Sekolah</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Verifikasi</span>
        </li>
        <li class="menu-item {{ request()->routeIs('verification.registration') ? 'active' : '' }}">
            <a href="{{ route('verification.registration') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-receipt"></i>
                <div data-i18n="Pendaftaran">Pendaftaran</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('verification.payment') ? 'active' : '' }}">
            <a href="{{ route('verification.payment') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-credit-card"></i>
                <div data-i18n="Pembayaran">Pembayaran</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Laporan</span>
        </li>
        <li
            class="menu-item {{ request()->routeIs('reporting.student.passed', 'reporting.student.passed.show') ? 'active' : '' }}">
            <a href="{{ route('reporting.student.passed') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-clipboard"></i>
                <div data-i18n="Rekap Data Siswa Lolos">Rekap Data Siswa Lolos</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('reporting.student.candidate') ? 'active' : '' }}">
            <a href="{{ route('reporting.student.candidate') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-clipboard"></i>
                <div data-i18n="Rekap Data Calon Siswa">Rekap Data Calon Siswa</div>
            </a>
        </li>
    </ul>
</aside>
