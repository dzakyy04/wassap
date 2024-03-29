<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::segment(2) == 'berita-saya' ? 'active' : '' }}"
                href="{{ route('my-articles') }}">
                <i class="bi bi-newspaper"></i>
                <span>Berita saya</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::segment(2) == 'tulis-berita' ? 'active' : '' }}"
                href="{{ route('create-news') }}">
                <i class="bi bi-pen"></i>
                <span>Tulis berita</span>
            </a>
        </li>

        @can('admin')
            <li class="nav-heading">Admin</li>

            <li class="nav-item">
                <a class="nav-link {{ Request::segment(3) == 'pengguna' ? 'active' : '' }}"
                    href="{{ route('admin.user') }}">
                    <i class="bi bi-people"></i>
                    <span>Pengguna</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::segment(3) == 'admin' ? 'active' : '' }}"
                    href="{{ route('admin.admin') }}">
                    <i class="bi bi-person"></i>
                    <span>Admin</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::segment(3) == 'berita' ? 'active' : '' }}"
                    href="{{ route('admin.article') }}">
                    <i class="bi bi-newspaper"></i>
                    <span>Semua Berita</span>
                </a>
            </li>
        @endcan
    </ul>

</aside><!-- End Sidebar-->
