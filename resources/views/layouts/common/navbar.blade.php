<!-- Main header -->
<header class="main-header">
    <!--Header-Upper-->
    <div class="header-upper black-120-bg">
        <div class="container clearfix">
            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="{{ url('/') }}"><img width="150" height="89"
                                src="{{ asset('logos/logo.png') }}" alt="Seivar - Lebanese Contracting Agency" title="Seivar"></a></div>
                </div>

                <div class="nav-outer ms-auto clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="{{ url('/') }}"><img width="150" height="89"
                                        src="{{ asset('logos/logo.png') }}" alt="Seivar - Lebanese Contracting Agency" title="Seivar"></a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}#about">About</a></li>
                                <li><a href="{{ url('/') }}#projects">Projects</a></li>
                                <li><a href="{{ url('/') }}#faq">FAQ</a></li>
                                <li><a href="{{ url('/') }}#contact">Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
<!-- End main header -->
