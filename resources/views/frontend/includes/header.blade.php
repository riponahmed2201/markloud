<header class="enpix-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-9">
                <div class="logo">
                    <a href="/">
                        <img style="width: 194px; height:56px" src="{{ asset('assets/logo/markloud-logo.jpg') }}"
                            alt="Markloud">
                    </a>
                </div>
            </div>
            <div class="col-xl-8 col-3 d-flex align-items-center">
                <a class="menu-opener ml-auto d-xl-none" href="#menu">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <nav id="menu" class="site-menu ml-auto">
                    <ul>
                        <li class="current-menu-item">
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/about-us">About Us</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Services</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('service.webDevelopment') }}">Web Development</a>
                                </li>
                                <li>
                                    <a href="{{ route('service.graphicDesign') }}">Graphics Design</a>
                                </li>
                                <li><a href="{{ route('service.ppcEmailSmsMarketing') }}">PPC Ad, Email & SMS</a></li>
                                <li><a href="{{ route('service.ppcEmailSmsMarketing') }}">Digital Marketing</a></li>
                                <li><a href="{{ route('service.ppcEmailSmsMarketing') }}">Business Consultancy</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/portfolio">Portfolio</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-2 d-xl-flex d-none align-items-center">
                <a href="/contact-us" class="enpix-cta ml-auto">Contact Us</a>
            </div>
        </div>
    </div>
</header>
