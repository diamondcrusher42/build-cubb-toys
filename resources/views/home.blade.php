@extends('layouts.app')

@section('content')
    <main id="home">
        <section class="project-carousel">
            @include('includes.project-slider', ['projects' => $carouselProjects])
        </section>
        <section class="home-banners">
            <div class="container">
                <div class="banners">
                    <div class="banner">
                        <div class="image">
                            <img src="/img/banner_creators.jpg">
                        </div>
                        <p>Transform YOUR IDEAS into PRODUCTS and start earning MONEY from them</p>
                    </div>
                    <div class="banner">
                        <div class="image">
                            <img src="/img/banner_investors.jpg">
                        </div>
                        <p>Support a creator, FUND A PROJECT you love, and EARN PROFIT from it</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-boxes">
            <div class="container">
                <div class="cta-boxes">
                    <div class="cta-box green">
                        <div class="content">
                            <div class="title">Subscribe</div>
                            <div class="text">Click here to subscribe and be the first to find out when we launch new projects and contests with cool prizes from our creators.</div>
                            <a href="#" class="button" id="mailchimp-popup">Subscribe now</a>
                        </div>
                        <div class="bg-icon"></div>
                    </div>
                    <div class="cta-box blue">
                        <div class="content">
                            <div class="title">Projects</div>
                            <div class="text">Check out and explore all the latest ideas our creators have build. You can show your support, follow your favorite creators or contribute to help bring amazing projects to reality.</div>
                            <a href="/projects" class="button">Show all projects</a>
                        </div>
                        <div class="bg-icon first"><img src="/img/blue-brick.png"></div>
                        <div class="bg-icon second"><img src="/img/blue-brick.png"></div>
                    </div>
                </div>
            </div>
        </section>
        <script id="mcjs">
            function showMailchimpPopup() { 
                !function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/0c890c56cb744d78138573ce3/677a58aefec281d55a5903417.js");
                document.cookie = "MCPopupClosed=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";                  
                document.cookie = "MCPopupSubscribed=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            }
                
            document.getElementById('mailchimp-popup').addEventListener('click', function (e) {
                e.preventDefault();
                showMailchimpPopup();
            });
        </script>
    </main>
@endsection
