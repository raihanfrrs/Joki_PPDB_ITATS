<ul class="nav nav-pills flex-column flex-md-row mb-4">
    @if (auth()->user()->role->role == 'admin')
        <li class="nav-item mt-3">
            <a class="nav-link {{ request()->routeIs('admin.settings') ? 'active' : '' }}"
                href="{{ route('admin.settings') }}"><i class="ti-xs ti ti-lock me-1"></i> Keamanan</a>
        </li>
    @elseif (auth()->user()->role->role == 'principle')
    @else
        <li class="nav-item ">
            <a class="nav-link {{ request()->routeIs('student.profile') ? 'active' : '' }}"
                href="{{ route('student.profile') }}"><i class="ti-xs ti ti-users me-1"></i> Profil</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{ request()->routeIs('student.settings') ? 'active' : '' }}"
                href="{{ route('student.settings') }}"><i class="ti-xs ti ti-lock me-1"></i> Keamanan</a>
        </li>
    @endif

</ul>
