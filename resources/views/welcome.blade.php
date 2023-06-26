<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>GLOMA S.R.L</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
        margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
        }
        .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
        }


        /* Featurettes
        ------------------------- */

        .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */

        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
        }

        @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
        }

            body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
        margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
        }
        /* rtl:begin:ignore */
        .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
        }
        /* rtl:end:ignore */


        /* Featurettes
        ------------------------- */

        .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        /* rtl:begin:remove */
        .featurette-heading {
        letter-spacing: -.05rem;
        }

        /* rtl:end:remove */

        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
        }

        @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">GLOMA S.R.L</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <nav class="nav nav-masthead justify-content-center">
            @if (Route::has('login'))
              @auth
              <a href="{{ route('/home') }}" class="nav-link fw-bold py-1 px-0" href="#">Casa</a>
              @else
              <a href="{{ route('login') }}" class="nav-link fw-bold py-1 px-20" href="#">Ingresa</a>
              @if (Route::has('register'))
              <a href ="{{ route('register') }}" class="nav-link fw-bold py-1 px-0" href="#">Registrate</a>
              @endif
              @endauth
           @endif
        </nav>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://img.freepik.com/fotos-premium/foto-transporte-camion-plataforma-grande-diseno-grafico-fondo-o-impresiones_800563-4577.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="70%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Todo tipo de transporte</h1>
            <p>Llevamos mercaderia pesada y tambien ligera</p>
            <p><a class="btn btn-lg btn-primary" href="#">Registrate</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ54QVxUruHysdddkAmcR6NQCfKGEbjMLY6LA&usqp=CAU" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="true"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Envia tu mercaderia con GLOMA</h1>
            <p>Envia con nosotros de una Forma segura y confiable al 100%</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWclYFxmQ0xdIMvl2jVBOK0wZcdc5WvOEOlA&usqp=CAU" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Contactanos al numero *******</h1>
            <p>Ahora contamos con mas de 5 caminones a tu disposicion y en buen estado</p>
            <p><a class="btn btn-lg btn-primary" href="#">Llamanos</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="data:image/jpeg;base64,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iu8PKfgcewvKFjgGvIB/Pit3HM13muvuK6KOR3B9tPIfxpfg5SY+SrCm6qeT/uKn/wBihla53M0qOnnFYnHPYczzkzupdaiyAw5uqlH7UkzuL1I/QrD9tHAe03P9664/Cy6Sd6fpcIP5o4watgNs9t+i+revnFoYZomtaJjICTnMs5pvszCRq6dek7h2+nySw+PzKGkbuhjHwWwhw6FnmRRt7LGjgFNC3Udpn3Ol51tmMLoXr9pdR+UJ8JqwTm087hsIYTfuF19U0VVG4E0tTo6YpP6L9bBgGoBfSkdNPeUldyi8o/ONFUyOAzoJwfuZDwapboZreTSVjugR083HNsF+g14ovwsc7zRWnq6jjVXbt+p+XKvI3FqiR8rsPqBfQBmgWaNQsTdWukybrmtDfkVQT2QPa4hd4Xq7lRjIq0NKVaOWkm3vzn6n53xHk1xOpl5xsDWAgC0sjGu0dQJU/BuTbEoCc6Fh07JWdFtpXeUX3kYtYOI6RqxqOosZe3d0nPsiMm6umqTJPHG1pje3RIHnOcWEaAP1SugBeouoQUFhFe5uZ3E9ee/cERF2QBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAf/Z" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Promocion 20% de descuento </h2>
        <p>Por 10 viajes llevate un viaje con el 20% de descuento</p>
        <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQK_P5q0h5s_14iwdR20ByUNsBvukJo1bl8eA&usqp=CAU" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Promocion por tonelada </h2>
        <p>Envie con nosotros y obten un 10% de descuento </p>
        <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSe5tLusa99xgu4JbpH6y75ejSemg6QZ853gg&usqp=CAU" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Camiones</h2>
        <p>Tenemos 5 camiones a su dispocion </p>
        <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Descuentos en los viajes por el uso de nuestra pagina web <span class="text-muted">¡INTENTALO!</span></h2>
        <p class="lead">Por el debut de nuestra pagina web otorgamos un 10% de descuento en nuestros transportes</p>
      </div>
      <div class="col-md-5">
        <image src="data:image/jpeg;base64,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" height="400" width="450"/>

      </div>
    </div>

    <hr class="featurette-divider">


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2020–2023 GLOMA S.R.L &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y condiciones</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
