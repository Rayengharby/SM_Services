<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMLTP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('mainasset/img/logo.png')}}" rel="icon">
  <link href="{{asset('mainasset/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('mainasset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('mainasset/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('mainasset/css/main.css')}}" rel="stylesheet">


</head>

<body>



@include('comp.navbar')
<br> <br><br><br>

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero">


    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

      <div class="carousel-item active" style="background-image: url({{asset('mainasset/img/hero-carousel/')}})">
        <div class="info d-flex align-items-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <h2 data-aos="fade-down">Welcome to <br> <span> SMLTP </span></h2>
                <p data-aos="fade-up">Packs VoIP: Budget<br> maitrisé pour une <br>Expérience 𝕆𝕡𝕥𝕚𝕞𝕒𝕝𝕖.
                </p>
                <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Découvrez Nos Packs</a>
              </div>
            </div>
          </div>
        </div></div>
      <div class="carousel-item" style="background-image: url({{asset('mainasset/img/hero-carousel/hero-carousel-2.jpg')}})">
        <div class="info d-flex align-items-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                  <h2 data-aos="fade-down">Welcome to <br> <span> SMLTP</span></h2>
                  <p data-aos="fade-up">SMLTP édificateur<br>de nouvelles <br>structures digitales.
                  </p>
                  <a data-aos="fade-up" data-aos-delay="200" href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="btn-get-started"><i class="bi bi-play-circle"></i></a>
                </div>
              </div>
            </div>
          </div>
    </div>
      <div class="carousel-item" style="background-image: url({{asset('mainasset/img/hero-carousel/hero-carousel-3.jpg')}})"></div>
      <div class="carousel-item" style="background-image: url({{asset('mainasset/img/hero-carousel/hero-carousel-4.jpg')}})"></div>
      <div class="carousel-item" style="background-image: url({{asset('mainasset/img/hero-carousel/hero-carousel-5.jpg')}})"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

<!--********** -->



<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
          <div class="col-lg-7 section-header text-center">
              <h2><b>QUI </b>SOMMES-NOUS?</h2>
              <div class="our-story">
                  <p>
                      La Société de Maintenance et de Logistique des Transports Public, <b>SMLTP</b>
                      est un prestataire de services renommé, reconnu pour son expertise et son équipe compétente.
                  </p>
                  <div class="watch-video d-flex align-items-center justify-content-center position-relative">
                      <i class="bi bi-arrow-right"></i>
                      <a data-aos="fade-up" data-aos-delay="200" href="/propos" class="btn-get-started">à propos</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

  <!-- End About Section -->

  <!-- ======= Stats Counter Section ======= -->
  <section id="stats-counter" class="stats-counter section-bg">
    <div class="container">

        <div class="section-header" data-aos="fade-up">
            <h3 style="color: rgba(8, 8, 7, 0.808)">Nos chiffres clès</h3>


          </div>
      <div class="row gy-4">

        <div class="col-lg-4 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-cash-coin color-blue flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="3050 " data-purecounter-duration="1" class="purecounter" ></span>
              <p>
                <b>KTND</b><br>
                  De CA en 2020
              </p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-4 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-cash-coin color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="6400 " data-purecounter-duration="1" class="purecounter" ></span>
                <p>
                  <b>KTND</b><br>
                    De CA en 2021
                </p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-speedometer color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="700 " data-purecounter-duration="1" class="purecounter" ></span>
                <p>
                  <b>KM</b><br>
                   Déploiement FO
                </p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-speedometer color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1600 " data-purecounter-duration="1" class="purecounter" ></span>
                <p>
                  <b>KM</b><br>
                    Maintenance FO
                </p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        <div class="col-lg-4 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-cash-coin color-orange flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="260" data-purecounter-duration="1" class="purecounter"></span>
              <p><b>KTND</b><br>
                Capitale Social
            </p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-4 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-headset color-green flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1050" data-purecounter-duration="1" class="purecounter"></span>
              <p>Client Raccordés</p>
            </div>
          </div>
        </div><!-- End Stats Item -->



      </div>

    </div>
  </section>
  <!-- End Stats Counter Section -->
<br><br>

 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2> NOTRE SAVOIR-FAIRE</h2>

      </div>

      <div class="row gy-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>CONSTRUCTION INFRA</h3>
              <p>. Etude d'exécution <br>. Gestion de projet <br>. Construction & Installation <br>. Renforcement infra structure existante </p><br><br><br><br>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="bi bi-wifi"></i>
            </div>
            <h3>RECHERCHE & NÉGOCIATION</h3>
            <p>. Recherche & Négociation <br>. Réseau de partenaires << privilégiés >> négociateurs</p><br><br><br>
            <a href="service-details.html" class="readmore stretched-link">Learn more<i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid bi bi-motherboard"></i>
            </div>
            <h3>INGÉNIERIE & CONCEPTION</h3>
            <p>. Etude & Ingénierie <br>. Bureuax d'etudes et DAO <br>. Mise en place indicateurs de pilotage Performance <br>. Demande et Gestion des autorisations administratives</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->



        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid bi bi-broadcast-pin"></i>
            </div>
            <h3>PYLÔNES ET MÂT</h3>
            <p>. Etudes Dimensionnement Pylônes Treillis, monotubes <br>. Approvisionnement <br>. Fourniture et Pose Pylônes et monotube en marque blanche et Serrurerie <br>. Déploiement des infrastructures radio </p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-helmet-safety"></i>
            </div>
            <h3>INTÉGRATION </h3>
            <p>. Intégration des équipements actif <br>. Mise en supervision avec NOC Opérateur <br>. Trouble Shooting <br>. Renforcement et mise à niveau des structures porteuses des équipements radio  </p><br><br>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid bi bi-wrench-adjustable"></i>
            </div>
            <h3>MAINTENANCE</h3>
            <p>. Pilotage préventif et correctif <br>. Engagement performance <br>. Maintien en condition opérationnelle <br>. Présence sur tout le territoire </p><br>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section>
  <!-- End Services Section -->

 <!-- ======= Recent Blog Posts Section ======= -->
 <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">



<div class=" section-header">
      <h2>SERVICES</h2>

   </div>

    <div class="row gy-5">
@foreach ($Services as $index => $s)

@if ($index ==0 || $index ==1|| $index ==2  )

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="post-item position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="{{asset('imageServices')}}/{{$s->photo}}" class="img-fluid" alt="">
            <span class="post-date"></span>
          </div>
          
          <div class="post-content d-flex flex-column">

            <h3 class="post-title">{{$s->name}}</h3>

            <br>

            <hr>

            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </div>
      </div><!-- End post item -->

      @endif
      @endforeach
    </div>

    </div>
  </section>
  <!-- End Recent Blog Posts Section -->



@include('comp.footer')


 <!-- Vendor JS Files -->
 <script src="{{asset('mainasset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('mainasset/vendor/aos/aos.js')}}"></script>
 <script src="{{asset('mainasset/vendor/glightbox/js/glightbox.min.js')}}"></script>
 <script src="{{asset('mainasset/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
 <script src="{{asset('mainasset/vendor/swiper/swiper-bundle.min.js')}}"></script>
 <script src="{{asset('mainasset/vendor/purecounter/purecounter_vanilla.js')}}"></script>
 <script src="{{asset('mainasset/vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
 <script src="{{asset('mainasset/js/main.js')}}"></script>

</body>

</html>
