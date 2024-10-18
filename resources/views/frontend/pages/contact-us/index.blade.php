@extends('master')

@section('content')
    <section class="pb-130 pt-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="address-area">
                        <div class="address-box mb-30">
                            <p class="enpix-subtitle-3 mb-10">Send us an email</p>
                            <a href="/cdn-cgi/l/email-protection#1871767e7758796a776d767c7936797f7d767b61"><span
                                    class="__cf_email__"
                                    data-cfemail="9df4f3fbf2ddfceff2e8f3f9fcb3fcfaf8f3fee4">[email&#160;protected]</span></a>
                        </div>
                        <div class="address-box mb-30">
                            <p class="enpix-subtitle-3 mb-10">Reach us at</p>
                            <a href="tel:+12345678901">+1 234 567 8901</a>
                        </div>
                        <div>
                            <p class="enpix-subtitle-3 mb-10">Follow us on</p>
                            <div class="social-icons-box">
                                <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://pinterest.com"><i class="fa-brands fa-pinterest-p"></i></a>
                                <a href="https://dribbble.com"><i class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <h2 class="heading-2 mb-80">Hey! Got a project?</h2>
                    <form action="#" class="contact-page-form">
                        <div class="button-container mb-40">
                            <p class="heading-5">Your project's type</p>
                            <div class="button">
                                <input type="radio" id="platform" name="project-type">
                                <label class="btn btn-default" for="platform">Platform</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="mobile-app" name="project-type">
                                <label class="btn btn-default" for="mobile-app">Mobile App</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="website" name="project-type">
                                <label class="btn btn-default" for="website">Corporate Website</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="landing" name="project-type">
                                <label class="btn btn-default" for="landing">Landing Page</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="web-app" name="project-type">
                                <label class="btn btn-default" for="web-app">Web App</label>
                            </div>
                        </div>
                        <div class="button-container mb-40">
                            <p class="heading-5">Services you need</p>
                            <div class="button">
                                <input type="radio" id="identity" name="services">
                                <label class="btn btn-default" for="identity">Brand Identity</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="ui-ux" name="services">
                                <label class="btn btn-default" for="ui-ux">UI/UX Design</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="web-design" name="services">
                                <label class="btn btn-default" for="web-design">Web Design</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="ui-concept" name="services">
                                <label class="btn btn-default" for="ui-concept">UI Concept</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="product-strategy" name="services">
                                <label class="btn btn-default" for="product-strategy">Product Strategy</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="ux-audit" name="services">
                                <label class="btn btn-default" for="ux-audit">UX Audit</label>
                            </div>
                            <div class="button">
                                <input type="radio" id="business" name="services">
                                <label class="btn btn-default" for="business">Business Analysis & Research</label>
                            </div>
                        </div>
                        <div class="input-fields-container mb-30">
                            <div class="input-field">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" autocomplete="name" placeholder="Full Name">
                            </div>
                            <div class="input-field">
                                <label for="email">Your Email</label>
                                <input type="email" id="email" autocomplete="email"
                                    placeholder="example@mail.com">
                            </div>
                        </div>
                        <div class="textarea-container mb-50">
                            <div class="input-field">
                                <label for="message">Tell us more about your idea</label>
                                <textarea id="message" placeholder="Text type .."></textarea>
                            </div>
                        </div>
                        <div class="submit-container">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
