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

      <h2>Références</h2>
      <ol>
        <li><a href="/">Accueil</a></li>
        <li>Références</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->
  <br>

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">



          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($Reference as $index => $s)


     <li data-filter=".filter-{{$s->name}}">{{$s->name}}</li>





     @endforeach



            </ul><!-- End Projects Filters -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($References as $index => $s)
              <div class="col-lg-4 col-md-6 portfolio-item filter-{{$s->name}}">
                <div class="portfolio-content h-100">
                  <img src="{{asset('imageReferences')}}/{{$s->photo}}" class="img-fluid" alt="">

                </div>
              </div><!-- End Projects Item -->

              @endforeach




            </div><!-- End Projects Container -->

          </div>

        </div>
      </section><!-- End Our Projects Section -->



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


