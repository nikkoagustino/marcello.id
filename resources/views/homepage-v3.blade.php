<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jasa Pembuatan Website - Marcello.id</title>
        <link rel="icon" href="{{ url('assets/img/favicon-white.webp') }}">
        <link rel="shortcut-icon" href="{{ url('assets/img/favicon-white.webp') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ca0010aa25.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,700;0,800;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">
    </head>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            font-weight: 500;
        }
        img {
            max-width: 100%;
        }
        .text-primary {
            color: #001a53 !important;
        }
        .nav-link {
            color: darkblue !important;
        }
        .no-decor {
            text-decoration: none;
            color: black;
        }
        #hero-banner {
            min-height: 800px;
            background-image: url('assets/img/hero-img.webp');
            background-position: top right;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #profile {
            background-image: url('assets/img/circuit-right.webp');
            background-position: top right;
            background-repeat: no-repeat;
        }
        #services {
            background-image: url('assets/img/service-bg.webp');
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #portfolio {
            background-image: url('assets/img/porto-bg.webp');
            background-position: top center;
            background-size: cover;
            background-repeat: no-repeat;   
        }
        #contact-us {
            background-image: url('assets/img/contact-bg-left.webp'), url('assets/img/contact-bg-right.webp');
            background-position: top left, top right;
            background-repeat: no-repeat;
        }
        #section-5 {
            background-image: url('assets/img/footer-bg.webp');
            background-position: top center;
            background-repeat: no-repeat;
            color: white !important;
        }
        .bg-service {
            background-color: rgba(255,255,255,0.8);
            border: 10px solid;
            border-image: linear-gradient(to bottom, skyblue, #001a53) 1;
            box-shadow: 3px 3px 5px black;
        }
        .btn-primary {
            background-color: #001a53 !important;
            border-radius: 50px;
            border-color: #001a53 !important;
        }
        .btn-primary:hover {
            background-color: darkslateblue !important;
            border-radius: 50px;
            border-color: darkslateblue !important;
        }
        .back-to-top {
          position: fixed;
          bottom: 20px;
          right: 20px;
          display: none;
          background: #001a53;
          color: #fff;
          width: 40px;
          height: 40px;
          text-align: center;
          line-height: 40px;
          border-radius: 50%;
        }

        .back-to-top:hover {
          background: blue;
          color: white;
        }

        .back-to-top i {
          font-size: 24px;
          line-height: 40px;
        }
        .navbar-brand img {
            height: 80px;
        }
        @media screen and (max-width: 768px) {
            .navbar-brand img {
                height: 60px;
            }
            #hero-banner {
                min-height: 80vh;
                background-position: bottom right;
            }
            #services {
                background-size: cover;
            }
        }
    </style>
    <body>
        <div class="container-fluid" id="home">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#home">
                        <img src="{{ url('assets/img/logo.webp') }}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item px-3">
                                <a class="nav-link" aria-current="page" href="#home">Beranda</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="#profile">Profil Kami</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="#services">Layanan</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="#portfolio">Portofolio</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="#contact-us">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container-fluid" id="hero-banner">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12 col-md-6 text-dark">
                        <h1 class="fw-bolder text-primary">Perkenalkan Bisnis Anda Kapan Saja, Dimana Saja</h1>
                        <p class="mt-4">#TimMarcelloID hadir sebagai solusi pengembangan bisnis dalam jasa pembuatan website yang dapat disesuaikan dengan konsep identitas visual perusahaan Anda, agar dominan di pasar masyarakat</p>
                        <a href="#services" class="btn btn-lg py-3 px-5 btn-primary mt-3">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="profile">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-md-6 py-md-5">
                        <h2 class="fw-bolder text-primary">TENTANG KAMI</h2>
                        <p class="mt-3">
                            Marcello.id merupakan jasa yang bergerak di bidang Pembuatan dan Pengembangan Website, IT Development, Mobile Apps Development, Digital Marketing, dan Graphic Design dengan kreativitas dan imajinasi untuk membantu merk atau bisnis anda dengan tujuan mampu bersaing hingga menjadi dominan pada era digital.
                        </p>
                        <p class="mt-3">
                            <b><i>Optimalisasi platform digital menjadi hal yang selalu berkembang pesat dan menjadi sarana untuk dimanfaatkan sebagai wadah penyaluran ide pengembangan usaha.</i></b>
                        </p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-12 col-md-6 pe-md-5">
                        <img src="{{ url('assets/img/about-left.webp') }}" alt="">
                    </div>
                    <div class="col-12 col-md-6 pt-3 py-md-5">
                        <b>
                            Kami percaya bahwa dengan menggabungkan nilai marcello.id dengan bisnis Anda, kesuksesan dapat ditingkatkan sebagai hasil dari realisasi potensi cemerlang di era digital ini.
                        </b>
                        <div class="row mt-3">
                            <div class="col-2 pe-0">
                                <img src="{{ url('assets/img/about-icon-1.webp') }}" alt="">
                            </div>
                            <div class="col-10">
                                <b>Perkenalkan bisnismu kapan saja, dimana saja</b>
                                <br>
                                Website merupakan portal 24 jam yang setia dan terbuka untuk siapa saja dan dimana saja dalam belahan dunia manapun!
                                <br>
                                Perkenalkan usaha dan bisnis anda segera agar berpotensi dikenal lebih banyak orang dari sebelumnya.
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 pe-0">
                                <img src="{{ url('assets/img/about-icon-3.webp') }}" alt="">
                            </div>
                            <div class="col-10">
                                <b>Dapat diandalkan</b>
                                <br>
                                Kami dengan hati-hati mengevaluasi implikasi dari setiap ide, konsep, dan desain yang kami hasilkan sesuai dengan strategi, tanpa mengabaikan nilai merek Anda yang sangat penting untuk memberikan performa yang optimal.
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 pe-0">
                                <img src="{{ url('assets/img/about-icon-2.webp') }}" alt="">
                            </div>
                            <div class="col-10">
                                <b>Kreatif</b>
                                <br>
                                Kami merancang desain website yang menarik, dan autentik untuk visual bisnis yang optimal.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <div class="container-fluid" id="services">
            <div class="container py-md-5">
                <div class="row py-md-5">
                    <div class="col-12 col-md-6 p-3 pt-5 p-md-5 text-light">
                        <h2 class="fw-bolder">LAYANAN KAMI</h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, officia, expedita consectetur veniam culpa ipsa. Sit ducimus distinctio necessitatibus aperiam veniam dolores suscipit ut ex, impedit vel, explicabo, dolor qui?
                        </p>
                    </div>
                    <div class="col-md-2"></div>

                    <div class="col-12 col-md-4 p-3">
                        <div class="bg-service h-100 p-2 p-md-5">
                            <img src="{{ url('assets/img/service-hosting.webp') }}" alt="">
                            <br>
                            <b class="fs-5 mt-2">Web Hosting</b>
                            <ul>
                                <li>Web Hosting untuk Website/Web Apps</li>
                                <li>Pusat data tingkat atas</li>
                                <li>Gratis SSL</li>
                                <li>Spesifikasi menyesuaikan kebutuhan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3">
                        <div class="bg-service h-100 p-2 p-md-5">
                            <img src="{{ url('assets/img/service-website.webp') }}" alt="">
                            <br>
                            <b class="fs-5 mt-2">Website Development</b>
                            <ul>
                                <li>Membuat Website dan Web Apps</li>
                                <li>Registrasi domain</li>
                                <li>Paket Hosting</li>
                                <li>Dapat diakses Mobile</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3">
                        <div class="bg-service h-100 p-2 p-md-5">
                            <img src="{{ url('assets/img/service-api.webp') }}" alt="">
                            <br>
                            <b class="fs-5 mt-2">Application Programming Interface (API) Development</b>
                            <ul>
                                <li>Membuat API di Backend</li>
                                <li>Integrasi External API</li>
                                <li>Dokumentasi API di Gitbook</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3">
                        <div class="bg-service h-100 p-2 p-md-5">
                            <img src="{{ url('assets/img/service-mobile.webp') }}" alt="">
                            <br>
                            <b class="fs-5 mt-2">Mobile Apps</b>
                            <ul>
                                <li>Aplikasi Native iOS dan Native Android.</li>
                                <li>Integrasi dengan layanan pihak ketiga, mis. Google Maps, gateway pembayaran, platform sosial, dan layanan lainnya melalui API.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3">
                        <div class="bg-service h-100 p-2 p-md-5">
                            <img src="{{ url('assets/img/service-uiux.webp') }}" alt="">
                            <br>
                            <b class="fs-5 mt-2">UI/UX Desain</b>
                            <ul>
                                <li>Visual desain</li>
                                <li>Interaktif</li>
                                <li>Konsep page layout</li>
                                <li>Memberikan pengalaman terbaik untuk user</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3">
                        <div class="bg-service h-100 p-5">
                            <img src="{{ url('assets/img/service-graphic.webp') }}" alt="">
                            <br>
                            <b class="fs-5 mt-2">Grafik Desain</b>
                            <ul>
                                <li>Logo</li>
                                <li>Moodboard, visual reference</li>
                                <li>Adaptasi key visual ke berbagai kebutuhan brand mu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-3">
                        <div class="bg-service h-100 p-5">
                            <img src="{{ url('assets/img/service-marketing.webp') }}" alt="">
                            <br>
                            <b class="fs-5 mt-2">Digital Marketing</b>
                            <ul>
                                <li>Media sosial</li>
                                <li>Content strategy</li>
                                <li>Content writing</li>
                                <li>Photography</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 px-0 px-md-3 py-mt-5">
                        <h2 class="mb-5 fw-bolder text-primary">PORTOFOLIO</h2>
                        <center>
                            <img src="{{ url('assets/img/porto.webp') }}" alt="">
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="contact-us">
            <div class="container">
                <div class="row py-5">
                    <div class="col"></div>
                    <div class="col-12 col-md-3 px-0">
                        <h2 class="text-primary">HUBUNGI KAMI</h2>
                        <p class="py-4">
                            Instagram: <a class="fw-bolder no-decor" href="https://instagram.com/marcello.idofficial" target="_blank">@marcello.idofficial</a>
                            <br>
                            Email: <a class="fw-bolder no-decor" href="mailto:info@marcello.id">info@marcello.id</a>
                            <br>
                            Phone (WhatsApp): <a class="fw-bolder no-decor" href="https://wa.me/6281287228948" target="_blank">+6281287228948</a>
                        </p>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="section-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex justify-content-center align-items-center pt-3">
                        <a class="text-light" href="mailto:info@marcello.id">
                        <i class="fs-4 ms-3 fa-regular fa-envelope"></i>
                        </a>
                        <a class="text-light" href="https://instagram.com/marcello.idofficial" target="_blank">
                        <i class="fs-4 ms-3 fa-brands fa-instagram"></i>
                        </a>
                        <a class="text-light" href="https://wa.me/6281287228948" target="_blank">
                        <i class="fs-4 ms-3 fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-center align-items-center py-2 py-md-4">
                        <img src="{{ url('assets/img/footer-logo.webp') }}" height="100px" alt="">
                    </div>
                    <div class="col-12 col-md-4 text-light d-flex justify-content-center align-items-center">
                        &copy; 2023 Copyrights & Protected
                    </div>
                </div>
            </div>
        </div>

        <a href="#home" class="back-to-top"><i class="fa-solid fa-chevron-up"></i></a>

        <script>
            $('a[href^="#"]').on('click', function(event) {
              var target = $(this.getAttribute('href'));
              if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                  scrollTop: target.offset().top
                }, 1000);
              }
            });

            $(window).scroll(function() {
              if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
              } else {
                $('.back-to-top').fadeOut();
              }
            });

            $('.back-to-top').click(function() {
              $('html, body').animate({scrollTop : 0},800);
              return false;
            });

        </script>
    </body>
</html>