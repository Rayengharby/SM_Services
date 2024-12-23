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
    <h1>Liste des À propos</h1>
    <hr/>
    <a data-bs-toggle="modal" data-bs-target="#tooltipModal" class="btn btn-primary mt-3">Ajouter À propos </a>
<div class="mt-4">
    <table class="table table-bordered">

        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom À propos</th>
            <th scope="col">Description À propos</th>
            <th scope="col">Icon À propos</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
@foreach($Propos as $index => $s )

          <tr>
            <td>{{$index +1}}</td>
              <td>{{$s->name}}</td>
              <td>{{$s->description}}</td>

              <td>{{$s->icon}}</td>

                <td >


                  <a data-bs-toggle="modal" data-bs-target="#editPropos{{$s->id}}" class="btn btn-success">Modifier</a>
                  <br><br> <!-- Ajout de deux sauts de ligne pour l'espace -->
                  <a onclick="return confirm('Voulez-vous vraiment supprimer cette propos?')" href="/admin/propos/{{ $s->id }}/delete" class="btn btn-danger">Supprimer</a>
                  


                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">sm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    Body
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div></a>
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
<!-- modal ajouter -->


    <div class="modal fade" id="tooltipModal" tabindex="-1" aria-labelledby="tooltipModallLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="tooltipModalLabel">Ajouter À propos</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>

                            </div>

                            <form action="/admin/propos/store" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">



                      <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Nom À propos</label>
                          <input name="name" class="form-control" id="exampleFormControlInput1" type="texte" placeholder="taper nom À propos...">
                          @error('name')
                          <div class="alert alert-danger">
                          {{$message}}
                          </div>

                          @enderror
                        </div>

                      <div class="mb-0">
                          <label class="form-label" for="exampleTextarea">Description À propos</label>
                           <textarea name="description" class="form-control" rows="3"> </textarea>
                           @error('description')
                          <div class="alert alert-danger">
                          {{$message}}
                          </div>

                          @enderror
                        </div>



                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Icon À propos</label>
                        <input name="icon" class="form-control" id="exampleFormControlInput1" type="texte" placeholder="donner l'icon À propos...">
                        @error('icon')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>

                        @enderror
                      </div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-primary" type="submit">Okay</button>
                                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>

                              </form>
                          </div>
                        </div>
                      </div>
                   <!-- modal modifier -->

                   @foreach( $Propos as $index => $s )
                   <div class="modal fade" id="editPropos{{$s->id}}" tabindex="-1" aria-labelledby="tooltipModallLabel" aria-hidden="true" style="display: none;">
                       <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="tooltipModalLabel">Modifier À propos</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>

                           </div>

                           <form action="/admin/propos/update" method="POST" enctype="multipart/form-data">
                               @csrf
                           <div class="modal-body">

                            <input type="hidden" value="{{$s->id}}" name="idpropos">

                     <div class="mb-3">
                         <label class="form-label" for="exampleFormControlInput1">Nom À propos</label>
                         <input name="name" value="{{$s->name}}"class="form-control" id="exampleFormControlInput1" type="texte" placeholder="taper nom À propos...">
                         @error('name')
                         <div class="alert alert-danger">
                         {{$message}}
                         </div>

                         @enderror
                       </div>
                     <div class="mb-0">
                         <label class="form-label" for="exampleTextarea">Description À propos</label>
                          <textarea name="description" class="form-control" rows="3">{{$s->description}} </textarea>
                          @error('description')
                         <div class="alert alert-danger">
                         {{$message}}
                         </div>

                         @enderror
                       </div>



                         <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">icon À propos</label>
                            <input name="icon" value="{{$s->icon}}"class="form-control" id="exampleFormControlInput1" type="texte" placeholder="donner l'icon À propos...">
                            @error('icon')
                            <div class="alert alert-danger">
                            {{$message}}
                            </div>

                            @enderror
                          </div>

                           </div>
                           <div class="modal-footer"><button class="btn btn-primary" type="submit">Modifier</button>
                               <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>

                             </form>
                         </div>
                       </div>
                     </div>
               @endforeach

    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>
