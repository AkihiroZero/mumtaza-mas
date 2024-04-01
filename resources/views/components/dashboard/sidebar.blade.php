<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <div class="info_logo info_container">
            <a href="/">
                <img src="{{ asset('images/nav-logo.png') }}" width="50" alt="">
            </a>
        </div>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                @foreach ($menus as $menu)
                    @can($menu->permission_name)
                        <li class="menu-title"><span data-key="t-menu">{{ $menu->name }}</span></li>

                        @foreach ($menu->items as $item)
                            @can($item->permission_name)
                                <li class="nav-item">
                                    <a class="nav-link menu-link{{ request()->routeIs($item->route) ? ' active' : '' }}"
                                        href="{{ route($item->route) }}">
                                        <i class="{{ $item->icon }}"></i> <span
                                            data-key="t-landing">{{ $item->name }}</span>
                                    </a>
                                </li>
                            @endcan
                            <!-- end can item -->
                        @endforeach
                        <!-- end foreach items -->
                    @endcan
                    <!-- end can menu -->
                @endforeach
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
