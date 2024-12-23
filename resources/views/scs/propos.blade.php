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
 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>À propos</h2>
      <ol>
        <li><a href="/">Accueil</a></li>
        <li>À propos</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->
  <br>
 <!-- ======= Alt Services Section 2 ======= -->
<section id="alt-services-2" class="alt-services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>QUI
            SOMMES-NOUS ?</h3>
          <p>Société de Maintenance et de Logistique des
            Transports Publics (SMLTP) propose une gamme
            compléte de services pour répondre aux besoins des
            entreprises de transport public en Tunisie .</p>
            @foreach ($Propos as $s)
          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <i class="{{$s->icon}}"></i>
            <div>
              <h4><a href="" class="stretched-link">{{$s->name}}</a></h4>
              <p>{{$s->description}}</p>
            </div>
          </div><!-- End Icon Box -->
          @endforeach






        </div>

        <div class="col-lg-6 img-bg" style="background-image: url({{asset('mainasset/img/smltp.png')}});" data-aos="zoom-in" data-aos-delay="100"></div>
      </div>

    </div>
  </section><!-- End Alt Services Section 2 -->

<br>


  <!-- ======= Stats Counter Section ======= -->
  <section id="stats-counter" class="stats-counter section-bg">
    <div class="container">

        <div class="section-header" data-aos="fade-up">
            <h3 style="color: rgba(8, 8, 7, 0.808)">Nos chiffres clès</h3>


          </div>
      <div class="row gy-4">

        @foreach ($Chiffres as $s)

        <div class="col-lg-4 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="{{$s->icon}}"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{$s->Chiffres}} " data-purecounter-duration="1" class="purecounter" ></span>
              <p>
                <b>{{$s->name}}</b><br>
                {{$s->description}}
              </p>
            </div>
          </div>
        </div><!-- End Stats Item -->
@endforeach






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
</section>
<br>

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

