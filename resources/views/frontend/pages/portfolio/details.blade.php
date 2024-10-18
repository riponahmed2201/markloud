@extends('master')

@section('content')
    <div class="container">
        <div class="page-thumbnail">
            <img src="assets/frontend/img/portfolio/details.png" alt="enpix">
        </div>
        <div class="project-details mt-80">
            <div class="row">
                <div class="col-md-3">
                    <div class="project-meta-area">
                        <div class="project-meta">
                            <h3>Project Date</h3>
                            <p>10/05/2022</p>
                        </div>
                        <div class="project-meta">
                            <h3>Client</h3>
                            <p><a href="https://example.com/">Creative Glow</a></p>
                        </div>
                        <div class="project-meta">
                            <h3>Category</h3>
                            <p><a href="portfolio.html">Art Direction</a>, <a href="portfolio.html">Graphics</a></p>
                        </div>
                        <div class="project-meta">
                            <h3>Share on</h3>
                            <div class="share-links">
                                <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
                                <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://pinterest.com"><i class="fa-brands fa-pinterest-p"></i></a>
                                <a href="https://dribbble.com"><i class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h1 class="heading-2 mb-30">Smartwatch Design Ideas</h1>
                    <p class="enpix-body-text-2">It is a long established fact that a reader will be distracted by
                        the readable content of a
                        page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content
                        here', making it look like readable English. Many desktop publishing packages and web page
                        editors now use Lorem Ipsum as their default model text, and a search</p>

                    <div class="project-points mt-80">
                        <div class="row">
                            <div class="col-xl-4">
                                <h2 class="heading-5 mb-20">01 Problem</h2>
                                <p class="enpix-body-text-2">It is a long established fact that a reader will be
                                    distracted by the readable
                                    content of a page when looking at its layout.</p>
                            </div>
                            <div class="col-xl-4">
                                <h2 class="heading-5 mb-20">02 Approach</h2>
                                <p class="enpix-body-text-2">It is a long established fact that a reader will be
                                    distracted by the readable
                                    content of a page when looking at its layout.</p>
                            </div>
                            <div class="col-xl-4">
                                <h2 class="heading-5 mb-20">03 Solution</h2>
                                <p class="enpix-body-text-2">It is a long established fact that a reader will be
                                    distracted by the readable
                                    content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-images mt-130">
            <img src="assets/frontend/img/portfolio/image-01.png" alt="enpix">
            <img src="assets/frontend/img/portfolio/image-02.png" alt="enpix">
            <img src="assets/frontend/img/portfolio/image-03.png" alt="enpix">
            <img src="assets/frontend/img/portfolio/image-04.png" alt="enpix">
            <img src="assets/frontend/img/portfolio/image-05.png" alt="enpix">
        </div>
        <div class="project-navigation-button mt-130 mb-130">
            <a href="portfolio-details.html">
                <svg width="28" height="11" viewbox="0 0 28 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.33333 9.90918L1 5.40918L5.33333 0.90918M27 5.40918H1H27Z" stroke="#636466"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Previous
            </a>
            <a href="portfolio-details.html">
                Next
                <svg width="28" height="11" viewbox="0 0 28 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.6667 9.90918L27 5.40918L22.6667 0.90918M1 5.40918H27H1Z" stroke="#FF6701"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="container">
        <div class="cta-section enpix-border-top pt-100 pb-100">
            <div class="row">
                <div class="col-md-6">
                    <h2>
                        Have a project in mind? Let's get to work.
                    </h2>
                </div>
                <div class="col-md-6">
                    <div class="h-100 d-flex align-items-center">
                        <a class="enpix-cta enpix-cta-rounded ml-auto" href="contact.html">Submit a Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
