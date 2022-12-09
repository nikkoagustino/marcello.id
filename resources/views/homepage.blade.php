<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MRC Solusindo</title>
        <link rel="icon" href="{{ url('assets/img/favicon.webp') }}">
        <link rel="shortcut-icon" href="{{ url('assets/img/favicon.webp') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ca0010aa25.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;1,300;1,700;0,500;1,500&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                font-weight: 300;
            }
            h1, h2 {
                font-weight: 700;
            }
            .topbar-wrapper {
                font-size: 0.8rem;
            }
            .header-social {
                text-align: right;
            }
            .topbar-wrapper a,
            .header-social a {
                text-decoration: none;
                color: inherit;
                white-space: nowrap;
            }
            .bg-yellow {
                background: #ffd800 url('assets/img/bg.jpg') center; /* Image by vector_corp on Freepik */
                background-size: cover;
                min-height: 80vh;
            }
            img {
                max-height: 100%;
                max-width: 100%;
            }
            .service-wrapper {
                text-align: center;
                margin: 15px;
                border: 5px solid #ffb400;
                position: relative;
                padding-bottom: 150px;
            }
            .service-wrapper ul {
                text-align: left;
                list-style-type: none;
                padding-left: 0;
                font-size: 0.8rem;
            }
            .service-wrapper li {
                padding: 5px;
            }
            .service-wrapper li:nth-child(odd) {
                background: #fbf7ba;
                margin: 0px -12px;
                padding-left: 17px;
            }
            .service-wrapper img {
                width: 100px;
                margin-top: -50px;
                display: block;
            }
            .service-wrapper h4 {
                color: #ffb400;
                font-weight: 500;
            }
            .bg-contact {
                background: #444 url('assets/img/footer.webp') top left; /* Image by Creative_hat on Freepik */
                background-size: cover;
                color: white;
            }
            .footer-social span {
                margin-top: 20px;
                display: block;
            }
            .footer-social a {
                display: inline-block;
                border-radius: 50%;
                width: 2.5rem;
                height: 2.5rem;
                font-size: 1.5rem;
                padding-top: .2rem;
                text-align: center;
                background: darkorange;
                color: white;
                text-decoration: none;
            }
            .contact-wrapper {
                position: relative;
                width: 100%;
                border: 3px solid darkorange;
                border-radius: 25px;
                margin-bottom: 1rem;
                line-height: 2.5rem;
                background: rgba(0,0,0,0.4);
                cursor: pointer;
                font-weight: 700;
            }
            .contact-wrapper span {
                padding-left: 4rem;
            }
            .contact-wrapper i {
                position: absolute;
                border-radius: 50%;
                width: 3.5rem;
                height: 3.5rem;
                font-size: 2rem;
                padding-top: 0.75rem;
                text-align: center;
                background: darkorange;
                color: white;
                top: -0.5rem;
                left: -0.5rem;
            }
            .nav-link {
                padding: 10px 20px !important;
                cursor: pointer;
                font-weight: 500;
            }
            .nav-link:hover,
            .nav-link.active {
                color: #ffb400 !important;
                border-bottom: 5px solid #ffb400;
            }
            #goToTop {
                position: fixed;
                z-index: 999;
                background: orangered;
                color: white;
                border-radius: 50%;
                width: 3rem;
                height: 3rem;
                font-size: 2rem;
                padding-left: 0.5rem;
                box-shadow: 0 0 5px black;
                cursor: pointer;
                bottom: 20px;
                right: 20px;
            }
            .pricing {
                margin-top: 30px;
                background: #ffb400;
                color: white;
                margin-left: -15px;
                padding: 10px;
                position: absolute;
                bottom: 0;
            }
            .pricing span {
                display: block;
            }
            .pricing h2 {
                font-weight: 700;
                display: inline;
                font-size: 2.75rem;
                /*color: orangered;*/
            }
            .pricing h3.light {
                font-weight: 400;
                display: inline;
            }
            .bg-porto {
                background: darkorange;
            }
            #contact-us h2 {
                color: darkorange;
            }
            .btn-orange {
                margin-top: 10px;
                background: orangered;
                color: white;
                font-weight: 500;
            }
            .btn-orange:hover {
                background: white;
                color: orangered;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid bg-dark text-light py-2 topbar-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-md-6">
                        <a href="https://wa.me/6287880011050" target="_blank">
                            <i class="fas fa-phone"></i> +62 878 8001 1050
                        </a>
                        <a href="mailto:mrcsolusindo@gmail.com">
                            <i class="ms-md-5 fas fa-envelope"></i> mrcsolusindo@gmail.com
                        </a>
                    </div>
                    <div class="col-4 col-md-6 header-social">
                        <span>
                            Follow Us <br class="d-md-none">
                        </span>
                        <a href="https://instagram.com" class="ms-2" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://instagram.com" class="ms-2" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com" class="ms-2" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="https://via.placeholder.com/150x40?text=MRC+Logo" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="pageJump('services')">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="pageJump('portfolio')">OUR PORTFOLIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="pageJump('contact-us')">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-yellow py-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <img src="{{ url('assets/img/mockup.webp') }}" alt="">
                    </div>
                    <div class="col-12 col-md-5 py-5">
                        <h1>Lorem Ipsum Dolor Sit Amet</h1>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam molestiae ipsa, consectetur adipisci ipsam dolorem consequatur molestias aliquam vel, temporibus libero velit laborum, doloremque maiores obcaecati architecto ex. Modi aliquid architecto distinctio velit animi molestiae hic labore quod iure quo.</span><br>
                        <br>
                        <button class="btn btn-lg btn-dark" onclick="pageJump('contact-us')">
                            CONTACT US
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5" id="services">
            <div class="row">
                <div class="col pb-5 text-center">
                    <h2>OUR SERVICES</h2>
                    <span>We Provide Various Web Services to Turn Your Idea into Reality. <br>Contact Our Project Manager to Discuss Your Needs.</span>
                </div>
            </div>
            <div class="row px-5">
                <div class="col service-wrapper mt-5 mt-md-3">
                    <center>
                        <img src="{{ url('assets/img/hosting.webp') }}" alt="">
                        <h4 class="py-2">
                            Web Hosting
                        </h4>
                            <ul>
                                <li>Web Hosting for Your Website / Web Apps</li>
                                <li>Top Tier Data Center</li>
                                <li>Free SSL</li>
                                <li>Flexible Specification Depends on Your Needs</li>
                            </ul>
                        <div class="pricing">
                            <span>Start From</span>
                            <h3 class="light">IDR </h3><h2>200</h2><h3 class="light">k / month</h3>
                        <button class="btn btn-orange form-control" onclick="pageJump('contact-us')">
                            CONTACT US NOW
                        </button>
                        </div>
                    </center>
                </div>
                <div class="col service-wrapper mt-5 mt-md-3">
                    <center>
                        <img src="{{ url('assets/img/web.webp') }}" alt="">
                        <h4 class="py-2">
                            Web Development
                        </h4>
                            <ul>
                                <li>Create Website or Web Application</li>
                                <li>Register Domain With Us or Use Your Own Domain</li>
                                <li>Hosting Package Included</li>
                                <li>100% Mobile Friendly</li>
                            </ul>
                        <div class="pricing">
                            <span>Start From</span>
                            <h3 class="light">IDR </h3><h2>5.000</h2><h3 class="light">k</h3>
                        <button class="btn btn-orange form-control" onclick="pageJump('contact-us')">
                            CONTACT US NOW
                        </button>
                        </div>
                    </center>
                </div>
                <div class="col service-wrapper mt-5 mt-md-3">
                    <center>
                        <img src="{{ url('assets/img/api.webp') }}" alt="">
                        <h4 class="py-2">
                            API Development
                        </h4>
                            <ul>
                                <li>Make Your Own API</li>
                                <li>API Documentation Included</li>
                                <li>-or-</li> 
                                <li>Connect Your Existing Web with 3rd Party Providers</li>
                            </ul>
                        <div class="pricing">
                            <span>Start From</span>
                            <h3 class="light">IDR </h3><h2>1.000</h2><h3 class="light">k</h3>
                        <button class="btn btn-orange form-control" onclick="pageJump('contact-us')">
                            CONTACT US NOW
                        </button>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-porto text-light text-center py-5" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col pb-5">
                        <h2>OUR PORTFOLIO</h2>
                        <span>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Excepturi, voluptatem.</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-4">
                        <img src="{{ url('assets/portfolio/repair-agency.jpg') }}" alt="">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="{{ url('assets/portfolio/repair-agency.jpg') }}" alt="">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="{{ url('assets/portfolio/repair-agency.jpg') }}" alt="">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="{{ url('assets/portfolio/repair-agency.jpg') }}" alt="">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="{{ url('assets/portfolio/repair-agency.jpg') }}" alt="">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="{{ url('assets/portfolio/repair-agency.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-contact py-5" id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="https://via.placeholder.com/200x60?text=MRC+Logo" alt="">
                        <h2>MRC Solusindo</h2>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro qui, vel provident. Illo officiis debitis facilis architecto quam laudantium quis.</span>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-12 col-md-4">
                        <div class="mt-3 d-md-none"></div>
                        <div class="contact-wrapper" onclick="window.open('https://wa.me/6287880011050')">
                            <i class="fas fa-phone"></i> 
                            <span>+62 878 8001 1050</span>
                        </div>
                        <div class="contact-wrapper" onclick="window.open('mailto:mrcsolusindo@gmail.com')">
                            <i class="fas fa-envelope"></i> 
                            <span>mrcsolusindo@gmail.com</span>
                        </div>
                        <div class="footer-social">
                            <span>
                                Follow Us
                            </span>
                            <a href="https://instagram.com" class="ms-2" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://instagram.com" class="ms-2" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com" class="ms-2" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="goToTop" style="display: none" onclick="goToTop()">
            <i class="fas fa-chevron-up"></i>
        </div>
        <script>
            function pageJump(pagesection) {
                var pos = document.getElementById(pagesection).offsetTop;
                $("html, body").animate({ scrollTop: pos }, 600);
            }

            jQuery(document).ready(function($){
                // hide the topbutton on page load/ready.
                $('#goToTop').hide();
                if ($(this).scrollTop() > 100) {
                    $('#goToTop').fadeIn();
                } else {
                    $('#goToTop').fadeOut();
                }

                //Check to see if the window is top if not then display button
                $(window).scroll(function(){
                    if ($(this).scrollTop() > 100) {
                        $('#goToTop').fadeIn();
                    } else {
                        $('#goToTop').fadeOut();
                    }
                });
                //Click event to scroll to top
                $('#goToTop').click(function(){
                    $('html, body').animate({scrollTop : 0},600);
                    return false;
                });
            });
        </script>
    </body>
</html>