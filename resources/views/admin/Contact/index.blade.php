<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SMLTP</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('dashassets/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('dashassets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
@include('inc.admin.sidebar')
@include('inc.admin.nav')
        <div class="content">
          <div class="pb-5">
            <div class="row g-5">
<div>
    <h1>Liste des contacts</h1>
    <hr/>

<div class="mt-4">
    <table class="table table-bordered">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom </th>
            <th scope="col">Email</th>

            <th scope="col">Sujet</th>
            <th scope="col">message</th>
            <th scope="col">date de creation</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
@foreach($Contact as $index => $s )

          <tr>
            <td>{{$index +1}}</td>
              <td>{{$s->name}}</td>
              <td>{{$s->email}}</td>

              <td>{{$s->sub}}</td>
              <td>{{$s->message}}</td>
              <td>{{$s->created_at}}</td>
              <td>
                <a onclick="return confirm ('voulez-vous vraiment supprimer cette Contact?')" href="/admin/Contact/{{ $s->id }}/delete" class="btn btn-danger">Supprimer</a>
            </td>



          </tr>
          @endforeach
        </tbody>
      </table>


    </div>



    </div>
            </div>
          </div>

          <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">    <span class="d-none d-sm-inline-block">   </span><span class="mx-1"></span>       <br class="d-sm-none"> </p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">      </p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main>



    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>
