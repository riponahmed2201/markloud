@extends('master')

@section('content')
    <section class="pt-130 pb-130">
        <div class="container">
            <h1 class="text-center">Our Portfolio</h1>

            <div class="portfolio-filter-buttons mt-65 mb-80">
                <button class="selected" data-filter="*">All</button>
                <button data-filter=".web-design">Web Design</button>
                <button data-filter=".branding">Branding</button>
                <button data-filter=".design">UI/UX Design</button>
                <button data-filter=".development">Development</button>
            </div>

            <div class="enpix-portfolio-grid">
                <div class="portfolio-item design branding">
                    <div class="portfolio-image relative">
                        <img src="assets/frontend/img/portfolio/1.png" alt="enpix">
                        <div class="portfolio-hover-overlay"></div>
                        <a href="#" class="portfolio-hover-link">View</a>
                    </div>
                    <div class="portfolio-text mt-30">
                        <div class="portfolio-tags">
                            <a href="portfolio.html">Branding</a>,
                            <a href="portfolio.html">Design</a>
                        </div>
                        <h2 class="heading-5 mt-15"><a href="portfolio-details.html">Smartwatch Design Ideas</a></h2>
                    </div>
                </div>
                <div class="portfolio-item design development">
                    <div class="portfolio-image relative">
                        <img src="assets/frontend/img/portfolio/2.jpg" alt="enpix">
                        <div class="portfolio-hover-overlay"></div>
                        <a href="#" class="portfolio-hover-link">View</a>
                    </div>
                    <div class="portfolio-text mt-30">
                        <div class="portfolio-tags">
                            <h2 class="heading-5 mt-15"><a href="portfolio-details.html">Smartwatch Design Ideas</a></h2>
                        </div>
                        <h2 class="heading-5 mt-15"><a href="portfolio-details.html">Smartwatch Design Ideas</a></h2>
                    </div>
                </div>
                <div class="portfolio-item web-design development">
                    <div class="portfolio-image relative">
                        <img src="assets/frontend/img/portfolio/4.png" alt="enpix">
                        <div class="portfolio-hover-overlay"></div>
                        <a href="#" class="portfolio-hover-link">View</a>
                    </div>
                    <div class="portfolio-text mt-30">
                        <div class="portfolio-tags">
                            <a href="portfolio-details.html">Graphics</a>
                        </div>
                        <h2 class="heading-5 mt-15"><a href="portfolio-details.html">Smartwatch Design Ideas</a></h2>
                    </div>
                </div>
                <div class="portfolio-item web-design branding">
                    <div class="portfolio-image relative">
                        <img src="assets/frontend/img/portfolio/3.png" alt="enpix">
                        <div class="portfolio-hover-overlay"></div>
                        <a href="#" class="portfolio-hover-link">View</a>
                    </div>
                    <div class="portfolio-text mt-30">
                        <div class="portfolio-tags">
                            <a href="portfolio.html">Development</a>
                        </div>
                        <h2 class="heading-5 mt-15"><a href="portfolio-details.html">Smartwatch Design Ideas</a></h2>
                    </div>
                </div>
                <div class="portfolio-item design development">
                    <div class="portfolio-image relative">
                        <img src="assets/frontend/img/portfolio/6.png" alt="enpix">
                        <div class="portfolio-hover-overlay"></div>
                        <a href="#" class="portfolio-hover-link">View</a>
                    </div>
                    <div class="portfolio-text mt-30">
                        <div class="portfolio-tags">
                            <a href="portfolio-details.html">Graphics</a>
                        </div>
                        <h2 class="heading-5 mt-15"><a href="portfolio-details.html">Smartwatch Design Ideas</a></h2>
                    </div>
                </div>
                <div class="portfolio-item web-design branding">
                    <div class="portfolio-image relative">
                        <img src="assets/frontend/img/portfolio/5.png" alt="enpix">
                        <div class="portfolio-hover-overlay"></div>
                        <a href="#" class="portfolio-hover-link">View</a>
                    </div>
                    <div class="portfolio-text mt-30">
                        <div class="portfolio-tags">
                            <a href="portfolio-details.html">Graphics</a>
                        </div>
                        <h2 class="heading-5 mt-15"><a href="portfolio-details.html">Smartwatch Design Ideas</a></h2>
                    </div>
                </div>
                <div class="portfolio-item web-design design">
                    <div class="portfolio-image relative">
                        <img src="assets/frontend/img/portfolio/7.png" alt="enpix">
                        <div class="portfolio-hover-overlay"></div>
                        <a href="#" class="portfolio-hover-link">View</a>
                    </div>
                    <div class="portfolio-text mt-30">
                        <div class="portfolio-tags">
                            <a href="portfolio-details.html">Graphics</a>
                        </div>
                        <h2 class="heading-5 mt-15"><a href="portfolio-details.html">Smartwatch Design Ideas</a></h2>
                    </div>
                </div>
                <div class="portfolio-item branding design">
                    <div class="portfolio-image relative">
                        <img src="assets/frontend/img/portfolio/8.png" alt="enpix">
                        <div class="portfolio-hover-overlay"></div>
                        <a href="#" class="portfolio-hover-link">View</a>
                    </div>
                    <div class="portfolio-text mt-30">
                        <div class="portfolio-tags">
                            <a href="portfolio-details.html">Graphics</a>
                        </div>
                        <h2 class="heading-5 mt-15"><a href="portfolio-details.html">Smartwatch Design Ideas</a></h2>
                    </div>
                </div>
            </div>
            <button class="blog-show-more">Show More <i class="fa-solid fa-angles-down"></i></button>
        </div>
    </section>
@endsection
