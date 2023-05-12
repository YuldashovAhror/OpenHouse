<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="@include('components.dashboard.logo')" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="@include('components.dashboard.logo')" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled mt-4" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="/dashboard">
                        <i class="uil-star"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>План</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('plan.index')}}">Список</a></li>
                        <li><a href="{{route('plan.create')}}">Создать</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-star"></i>
                        <span>Партнеры</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('partner.index')}}">Список</a></li>
                        <li><a href="{{route('partner.create')}}">Создать</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="{{route('plan.index')}}">
                        <i class="uil-star"></i>
                        <span>План</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{route('build.index')}}">
                        <i class="uil-star"></i>
                        <span>Здание</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('feedback.index')}}">
                        <i class="uil-star"></i>
                        <span>Обратная связь</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('words.index')}}">
                        <i class="uil-star"></i>
                        <span>Словарь</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>