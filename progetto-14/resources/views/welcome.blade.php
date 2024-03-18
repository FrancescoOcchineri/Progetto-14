<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
  rel="stylesheet"/>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"/>
<style>
    #introCarousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item.active {
      height: 100vh;
    }

    .carousel-item:nth-child(1) {
      background-image: url('https://aryanshirani.com/wp-content/uploads/2020/12/front-end-developer-carriera.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    .carousel-item:nth-child(2) {
      background-image: url('https://wallpapercave.com/wp/wp6784380.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    .carousel-item:nth-child(3) {
      background-image: url('https://static.vecteezy.com/system/resources/previews/021/436/050/original/project-management-strategic-plan-to-manage-resources-for-development-working-process-and-schedule-task-completion-concept-smart-businessman-project-manager-manage-multiple-project-dashboards-vector.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    body {
      overflow-y: hidden;
    }

 </style>   
    </head>
    <html>
    <body class="antialiased">
   @component('components.nav-bar')
   @endcomponent

    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-carousel-init>
    <div class="carousel-indicators">
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center" data-mdb-theme="dark">
              <h1 class="mb-3">Publish and manage your projects</h1>
              <h5 class="mb-4">Best & free project hosting</h5>
              @if (Route::has('login'))
              @auth
              <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{url('/projects')}}"
                  role="button">Projects</a>
                 @else
                 <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{ route('login') }}"
                 role="button">Login</a>
                 @if (Route::has('register'))
                 <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{ route('register') }}"
                    role="button">Register</a>
                 @endif
                    @endauth
                    @endif
            </div>
          </div>
        </div>
      </div>

      <!-- Single item -->
      <div class="carousel-item">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center" data-mdb-theme="dark">
              <h1 class="mb-3">Publish and manage your projects</h1>
              <h5 class="mb-4">Best & free project hosting</h5>
              @if (Route::has('login'))
              @auth
              <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{url('/projects')}}"
                  role="button">Projects</a>
                 @else
                 <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{ route('login') }}"
                 role="button">Login</a>
                 @if (Route::has('register'))
                 <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{ route('register') }}"
                    role="button">Register</a>
                 @endif
                    @endauth
                    @endif
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center" data-mdb-theme="dark">
              <h1 class="mb-3">Publish and manage your projects</h1>
              <h5 class="mb-4">Best & free project hosting</h5>
              @if (Route::has('login'))
              @auth
              <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{url('/projects')}}"
                  role="button">Projects</a>
                 @else
                 <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{ route('login') }}"
                 role="button">Login</a>
                 @if (Route::has('register'))
                 <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{ route('register') }}"
                    role="button">Register</a>
                 @endif
                    @endauth
                    @endif
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
        ></script>
    </body>
</html>
