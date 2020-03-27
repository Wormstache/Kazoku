@if (Auth::check())
<!-- HEADER DESKTOP-->
<header class="header-desktop4">
    <div class="container">
        <div class="header4-wrap">
            <div class="header__logo">
                <a href="{{ route('adminRole') }}">
                    <img src="{{ asset('images/kazoku-logo.png') }}" alt="Kazoku" style="width:200px" />
                </a>
            </div>
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>You got a email notification</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{ Auth::user()->first_name }}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{ Auth::user()->full_name }}</a>
                                    </h5>
                                    <span class="email">{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</header>
<!-- WELCOME-->
<section class="welcome2 p-t-40 p-b-55">
    <div class="container">
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb3">
                    <div class="au-breadcrumb-left">
                        <span class="au-breadcrumb-span">You are here:</span>
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item seprate">
                                <span>/</span>
                            </li>
                            <li class="list-inline-item">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="welcome2-inner m-t-60">
                    <div class="welcome2-greeting">
                        <h1 class="title-6">Hi
                            <span>{{ Auth::user()->first_name }}</span>, Welcome back</h1>
                    </div>
                    {{-- <form class="form-header form-header2" action="" method="post">
                        <input class="au-input au-input--w435" type="text" name="search" placeholder="Search for datas &amp; reports...">
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END WELCOME-->
<div class="page-container3">
    <section>
        <div class="row">
            <div class="col-md-3">
                <!-- MENU SIDEBAR-->
                <aside class="menu-sidebar3 js-spe-sidebar">
                    <nav class="navbar-sidebar2 navbar-sidebar3">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="{{ route('adminRole') }}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.index') }}">
                                    <i class="fas fa-shopping-basket"></i>Users</a>
                            </li>
                            <li>
                                <a href="{{ route('adminIcon.index') }}">
                                    <i class="fas fa-shopping-basket"></i>Icons</a>
                            </li>
                            <li>
                                <a href="{{ route('adminCategory.index') }}">
                                    <i class="fas fa-shopping-basket"></i>Category</a>
                            </li>
                            <li>
                                <a href="{{ route('notice.index') }}">
                                    <i class="fas fa-shopping-basket"></i>Notice</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('member.index') }}">
                                    <i class="fas fa-shopping-basket"></i>Member</a>
                            </li>
                            <li>
                                <a href="{{ route('budget.index') }}">
                                    <i class="fas fa-shopping-basket"></i>Budget</a>
                            </li>
                            <li>
                                <a href="{{ route('expense.index') }}">
                                    <i class="fas fa-shopping-basket"></i>Expense</a>
                            </li> --}}
                        </ul>
                    </nav>
                </aside>
                <!-- END MENU SIDEBAR-->
            </div>
            
@else
<header class="header-desktop4">
    <div class="container">
        <div class="header4-wrap">
            <div class="header__logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('images/kazoku-logo.png') }}" alt="Kazoku" style="width:200px" />
                </a>
            </div>
            <div class="header__tool">
                <div>
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </div>
                <div>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
    </div>
</header>
@endif
<!-- END HEADER DESKTOP -->
    
        