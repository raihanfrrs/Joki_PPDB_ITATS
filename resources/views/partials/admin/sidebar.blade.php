<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('/') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold">JSKom</span>
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
                    <a href="/" class="menu-link">
                        <div data-i18n="Analytics">Analytics</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Master -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master</span>
        </li>
        <li class="menu-item {{ request()->routeIs('master.customer') ? 'active' : '' }}">
            <a href="{{ route('master.customer') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Customer">Customer</div>
            </a>
        </li>
        <li
            class="menu-item {{ request()->routeIs('master.product', 'master.product.add', 'master.product.edit') ? 'active' : '' }}">
            <a href="{{ route('master.product') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-briefcase"></i>
                <div data-i18n="Product">Product</div>
            </a>
        </li>
        <li
            class="menu-item {{ request()->routeIs('master.category_product', 'master.category_product.create', 'master.category.show.product') ? 'active' : '' }}">
            <a href="{{ route('master.category_product') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-tag"></i>
                <div data-i18n="Category">Category</div>
            </a>
        </li>

        <!-- Transaction -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Transaction</span>
        </li>
        <li class="menu-item">
            <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                <div data-i18n="Purchasing">Purchasing</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-chat.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-truck"></i>
                <div data-i18n="Shipment">Shipment</div>
            </a>
        </li>

        <!-- Reports -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Reports</span>
        </li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-clipboard"></i>
                <div data-i18n="Sales">Sales</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">6</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="cards-basic.html" class="menu-link">
                        <div data-i18n="Activity">Activity</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="cards-advance.html" class="menu-link">
                        <div data-i18n="Top Products">Top Products</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="cards-advance.html" class="menu-link">
                        <div data-i18n="Customer Insight">Customer Insight</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
