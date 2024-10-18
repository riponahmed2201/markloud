<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarkLoud - Marketing Consultancy Agency</title>

    <!-- Stylesheet Starts-->
    @include('frontend.includes.stylesheet')
    <!-- Stylesheet Starts-->

</head>

<body class="enpix-bg-1">

    <!-- Preloader Starts-->
    @include('frontend.includes.preloader')
    <!-- Preloader Ends -->

    <!-- =========================== Menu Area =========================================== -->

    <!-- Header Starts -->
    @include('frontend.includes.header')
    <!-- Header Ends -->

    <main>

        <!-- =========================== Banner Section =========================================== -->
        @include('frontend.pages.home.banner')

        <!-- =========================== Brands Logo Slider =========================================== -->
        @include('frontend.pages.home.brand-logo-slider')

        <!-- =========================== Services Area =========================================== -->
        @include('frontend.pages.home.services-area')

        <!-- =========================== Branding Area =========================================== -->
        @include('frontend.pages.home.branding-area')

        <!-- =========================== Speciality Area =========================================== -->
        <section class="speciality-area ">
            <div class="container">
                <div class="speciality-container pt-130 pb-130">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-5 col-lg-6 wow animate__animated animate__fadeInLeft">
                            <div class="speciality-text">
                                <h2 class="heading-1">Why you should choose <span>Enpix</span>?</h2>
                                <p class="enpix-subtitle-2 mt-50">So how does it work? Let's check our Getting Started
                                    tutorial. It is a long established fact that a reader will be distracted.</p>
                                <a href="about.html"
                                    class="mt-80 d-inline-block wow animate__animated animate__flipInX animate__delay-1s">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                            <div class="speciality-video-thumbnail-container relative">
                                <img class="speciality-video-shape" src="assets/img/svg/Group21.svg" alt="enpix">
                                <img class="speciality-video-triangle" src="assets/img/svg/Rectangle8.svg"
                                    alt="enpix">
                                <img class="speciality-video-thumbnail"
                                    src="assets/img/home/speciality/Rectangle920.png" alt="enpix">
                                <div class="video-play-icon">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=d4FM0mITAx4">
                                        <svg width="28" height="37" viewbox="0 0 28 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.47652 1.75485C3.15096 0.826962 1.32959 1.77527 1.32959 3.39331V33.5311C1.32959 35.1491 3.15096 36.0975 4.47651 35.1696L26.0035 20.1007C27.1409 19.3045 27.1409 17.6199 26.0035 16.8237L4.47652 1.75485Z"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="video-play-icon-layer-2"></div>
                                <div class="video-play-icon-layer-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="speciality-features row pt-130 wow animate__animated animate__fadeInUp">
                        <div class="col-md-4">
                            <div class="speciality-box">
                                <img src="assets/img/home/speciality/005-layers1.svg" alt="enpix">
                                <h3 class="heading-5 mt-35">Friendly Interface</h3>
                                <p class="enpix-body-text-2 mt-20">Exercit ullamo quis nostrud ea laboris nisi ut
                                    aliqui
                                    duis aut iru. Donec bibendum urna vel bibendum.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="speciality-box">
                                <img src="assets/img/home/speciality/006-customer-support1.svg" alt="enpix">
                                <h3 class="heading-5 mt-35">Quality Support</h3>
                                <p class="enpix-body-text-2 mt-20">Exercit ullamo quis nostrud ea laboris nisi ut
                                    aliqui
                                    duis aut iru. Donec bibendum urna vel bibendum.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="speciality-box">
                                <img src="assets/img/home/speciality/005-layers1.svg" alt="enpix">
                                <h3 class="heading-5 mt-35">Great Pricing</h3>
                                <p class="enpix-body-text-2 mt-20">Exercit ullamo quis nostrud ea laboris nisi ut
                                    aliqui
                                    duis aut iru. Donec bibendum urna vel bibendum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================== Projects Area =========================================== -->
        <section class="projects-area pt-130 pb-130">
            <div class="container">
                <div class="projects-header">
                    <div class="row">
                        <div class="col-xl-7">
                            <h2 class="heading-1">Our recent <span>projects</span>.</h2>
                            <p class="mt-50 mb-0">Aliquam tristique libero at dui sodales, et placerat orci lobortis.
                                Donec
                                metus lorem, vulputate at sapien sit amet, auctor iaculis lorem.</p>
                        </div>
                        <div class="col-xl-5">
                            <div class="projects-link">
                                <a href="portfolio.html">
                                    Show More Projects
                                    <svg width="20" height="21" viewbox="0 0 20 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 13L17.5 10.5L15 8M2.5 10.5H17.5H2.5Z" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="projects-container pt-80">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <a href="portfolio-details.html"><img src="assets/img/home/projects/Rectangle925.png"
                                    alt="enpix"></a>
                        </div>
                        <div class="project-details pt-35">
                            <div class="row">
                                <div class="col-9">
                                    <div class="project-text">
                                        <h3><a href="portfolio-details.html">Plastic Credit Card</a></h3>
                                        <p class="enpix-body-text-2">Identity, Mockup</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="project-url">
                                        <a href="portfolio-details.html">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.75 6.73047V1.73047H13.75M1.25 19.2305L18.75 1.73047L1.25 19.2305Z"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <a href="portfolio-details.html"><img src="assets/img/home/projects/Rectangle926.png"
                                    alt="enpix"></a>
                        </div>
                        <div class="project-details pt-35">
                            <div class="row">
                                <div class="col-9">
                                    <div class="project-text">
                                        <h3><a href="portfolio-details.html">3D Illustration</a></h3>
                                        <p class="enpix-body-text-2">Development, Mobile App</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="project-url">
                                        <a href="portfolio-details.html">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.75 6.73047V1.73047H13.75M1.25 19.2305L18.75 1.73047L1.25 19.2305Z"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <a href="portfolio-details.html"><img src="assets/img/home/projects/image.png"
                                    alt="enpix"></a>
                        </div>
                        <div class="project-details pt-35">
                            <div class="row">
                                <div class="col-9">
                                    <div class="project-text">
                                        <h3><a href="portfolio-details.html">Statistics Mobile App</a></h3>
                                        <p class="enpix-body-text-2">Development, Mobile App</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="project-url">
                                        <a href="portfolio-details.html">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.75 6.73047V1.73047H13.75M1.25 19.2305L18.75 1.73047L1.25 19.2305Z"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <a href="portfolio-details.html"><img src="assets/img/home/projects/image(1).png"
                                    alt="enpix"></a>
                        </div>
                        <div class="project-details pt-35">
                            <div class="row">
                                <div class="col-9">
                                    <div class="project-text">
                                        <h3><a href="portfolio-details.html">Color Blending Effect</a></h3>
                                        <p class="enpix-body-text-2">Design, Graphics</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="project-url">
                                        <a href="portfolio-details.html">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.75 6.73047V1.73047H13.75M1.25 19.2305L18.75 1.73047L1.25 19.2305Z"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <a href="portfolio-details.html"><img src="assets/img/home/projects/image(2).png"
                                    alt="enpix"></a>
                        </div>
                        <div class="project-details pt-35">
                            <div class="row">
                                <div class="col-9">
                                    <div class="project-text">
                                        <h3><a href="portfolio-details.html">3D Animation</a></h3>
                                        <p class="enpix-body-text-2">Design, Dimension</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="project-url">
                                        <a href="portfolio-details.html">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.75 6.73047V1.73047H13.75M1.25 19.2305L18.75 1.73047L1.25 19.2305Z"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================== Reviews Area =========================================== -->
        <section class="reviews-area pt-130 pb-130 relative">
            <img src="assets/img/svg/Group34.svg" alt="enpix" class="review-shape-circle">
            <img src="assets/img/svg/Trianglelineshape.svg" alt="enpix" class="review-shape-triangle">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="reviews-area-heading wow animate__animated animate__fadeInLeft">
                            <h2 class="heading-1">What our <span>clients</span> say about us.</h2>
                            <p class="enpix-subtitle-2 mt-50">Aliquam tristique libero at dui sodales, et placerat orci
                                lobortis. Donec metus lorem, vulputate at sapien.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 offset-xl-1">
                        <img src="assets/img/svg/quote.svg" alt="enpix">
                        <div class="splide" id="reviewSlider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="reviews-container">
                                            <div class="review-text">
                                                <p>5 stars design agency! If anyone wants an example of what you can do
                                                    with this theme, check out my site at artishthemes.com.</p>
                                            </div>
                                            <div class="review-author">
                                                <h3 class="enpix-subtitle-3">Cooper Saris</h3>
                                                <p class=" enpix-body-small-1">Project Manager, Corder</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="reviews-container">
                                            <div class="review-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a leo
                                                    tellus. </p>
                                            </div>
                                            <div class="review-author">
                                                <h3 class="enpix-subtitle-3">John Doe</h3>
                                                <p class=" enpix-body-small-1">Project Manager, Corder</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="reviews-container">
                                            <div class="review-text">
                                                <p>5 stars design agency! If anyone wants an example of what you can do
                                                    with this theme, check out my site at artishthemes.com.</p>
                                            </div>
                                            <div class="review-author">
                                                <h3 class="enpix-subtitle-3">Cooper Saris</h3>
                                                <p class=" enpix-body-small-1">Project Manager, Corder</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="reviews-container">
                                            <div class="review-text">
                                                <p>5 stars design agency! If anyone wants an example of what you can do
                                                    with this theme, check out my site at artishthemes.com.</p>
                                            </div>
                                            <div class="review-author">
                                                <h3 class="enpix-subtitle-3">Cooper Saris</h3>
                                                <p class=" enpix-body-small-1">Project Manager, Corder</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="splide__arrows mt-80">
                                <button class="splide__arrow splide__arrow--prev">
                                    <svg width="18" height="8" viewbox="0 0 18 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 1.28906L1.5 3.78906L4 6.28906M16.5 3.78906H1.5H16.5Z"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button class="splide__arrow splide__arrow--next">
                                    <svg width="18" height="8" viewbox="0 0 18 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 6.28906L16.5 3.78906L14 1.28906M1.5 3.78906H16.5H1.5Z"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================== Blog Area =========================================== -->
        <section class="blog-area pt-130 pb-130">
            <div class="container">
                <div class="blog-area-header pb-80">
                    <div class="row">
                        <div class="col-xl-9">
                            <h2 class="heading-1">Our inside <span>news</span>.</h2>
                        </div>
                        <div class="col-xl-3">
                            <div class="projects-link">
                                <a href="blog.html">
                                    Check Our All News
                                    <svg width="20" height="21" viewbox="0 0 20 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 13L17.5 10.5L15 8M2.5 10.5H17.5H2.5Z" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-blog-grid">
                    <div class="enpix-post-item m-0">
                        <div class="relative">
                            <div class="post-thumbnail">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/Rectangle928.png" alt="enpix-blog">
                                </a>
                                <a class="category-badge" href="blog.html">Grid Layout</a>
                            </div>
                            <div class="post-meta">
                                <div class="post-author">
                                    <div class="author-thumbnail">
                                        <img src="assets/img/blog/author/author3.png" alt="enpix-blog">
                                    </div>
                                    <div class="author-name">
                                        <p><a href="blog.html">Sanzary Rezvy</a></p>
                                    </div>
                                </div>
                                <div class="post-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <p><a href="blog.html">December 20, 2021</a></p>
                                </div>
                            </div>
                            <div class="post-title">
                                <h2><a href="blog-details.html">Designer's Checklist for Every UX Project.</a></h2>
                            </div>
                            <div class="post-readmore">
                                <a href="blog-details.html">Read more <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="enpix-post-item m-0">
                        <div class="relative">
                            <div class="post-thumbnail">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/Rectangle928(2).png" alt="enpix-blog">
                                </a>
                                <a class="category-badge" href="#">Grid Layout</a>
                            </div>
                            <div class="post-meta">
                                <div class="post-author">
                                    <div class="author-thumbnail">
                                        <img src="assets/img/blog/author/author-1.png" alt="enpix-blog">
                                    </div>
                                    <div class="author-name">
                                        <p><a href="blog.html">Jaxson Geldit</a></p>
                                    </div>
                                </div>
                                <div class="post-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <p><a href="blog.html">December 20, 2021</a></p>
                                </div>
                            </div>
                            <div class="post-title">
                                <h2><a href="blog-details.html">Designer's Checklist for Every UX Project.</a></h2>
                            </div>
                            <div class="post-readmore">
                                <a href="blog-details.html">Read more <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="enpix-post-item m-0">
                        <div class="relative">
                            <div class="post-thumbnail">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/image(2).png" alt="enpix-blog">
                                </a>
                                <a class="category-badge" href="#">Grid Layout</a>
                            </div>
                            <div class="post-meta">
                                <div class="post-author">
                                    <div class="author-thumbnail">
                                        <img src="assets/img/blog/author/author-2.png" alt="enpix-blog">
                                    </div>
                                    <div class="author-name">
                                        <p><a href="blog.html">Cooper Saris</a></p>
                                    </div>
                                </div>
                                <div class="post-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <p><a href="blog.html">December 20, 2021</a></p>
                                </div>
                            </div>
                            <div class="post-title">
                                <h2><a href="blog.html">Designer's Checklist for Every UX Project.</a></h2>
                            </div>
                            <div class="post-readmore">
                                <a href="blog-details.html">Read more <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================= Subscribe Area ======================================= -->
        <div class="subscribe-form-area bg-white">
            <img src="assets/img/svg/Group34.svg" alt="enpix" class="subscribe-shape-circle">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <h2 class="heading-3">Get update by <span>signup</span> Newsletter.</h2>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-flex align-items-center justify-content-end">
                        <form action="#" class="enpix-subscribe-form">
                            <input type="email" name="email" placeholder="Enter your email" autocomplete="on">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- =========================== Footer Section =========================================== -->
    @include('frontend.includes.footer')

    <!-- scripts -->
    @include('frontend.includes.script')
</body>

</html>
