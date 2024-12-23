<nav class="navbar navbar-light navbar-top navbar-expand">
    <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="/admin/dashboa3rd">
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center"><img src="{{asset('mainasset/img/logo.png')}}" alt="phoenix" width="32">
            <p class="logo-text ms-2 d-none d-sm-block"><font face="time new roman" size="5"><b>SMLTP</b></font></p>
          </div>

        </div>


      </a>

      </div>

    <div class="collapse navbar-collapse">

      <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
        <div class="px-3">
            <a  onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-phoenix-secondary d-flex flex-center w-100" href="/login">
              <span class="me-2" data-feather="log-out"></span><font face="time new roman" ><b>Sign out</b></font></a>
              <br>    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                  @csrf
              </form></div>

      </ul>

    </div>

  </nav>
