<!DOCTYPE html>
<html lang="es">

  <head>
    <link rel="shortcut icon" href="favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">

    <title>Nimbotune</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-572-designer.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">

  </head>

<body style="background-color:#b4c9df;">


  <div class="loader">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       width="34px" height="40px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
      <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
      </rect>
      <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
      </rect>
      <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
      </rect>
    </svg>
  </div>

  <header id="#top">

      <nav class="main-navigation navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="index.html"><img src="assets/images/white-logo.png" width="50" height="60">></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="music.php">M??sica</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="upload.php">Subida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.html">Sobre Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="form.html">Cont??ctanos</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="php/cerrar_sesion.php">Cerrar sesi??n</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>

  </header>
  <br><br><br><br><br><br><br><br>
  <main>

    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>??Ya tienes una cuenta?</h3>
                <p>Inicia sesi??n para entrar en la p??gina</p>
                <button id="btn__iniciar-sesion">Iniciar Sesi??n</button>
            </div>
            <div class="caja__trasera-register">
                <h3>??A??n no tienes una cuenta?</h3>
                <p>Reg??strate para que puedas iniciar sesi??n</p>
                <button id="btn__registrarse">Reg??strarse</button>
            </div>
        </div>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
            <!--Login-->
            <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                <h2>Iniciar Sesi??n</h2>
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="password" placeholder="Contrase??a" name="contrasena">
                <button>Entrar</button>
            </form>

            <!--Register-->
            <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                <h2>Reg??strarse</h2>
                <input type="text" placeholder="Nombre completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contrase??a" name="contrasena">
                <button>Reg??strarse</button>
            </form>
        </div>
    </div>

</main>

<script src="assets/js/script.js"></script>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <script >
    setTimeout(function(){
        $('.loader').fadeToggle();
    }, 1500);
	
	$("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
  </script>

        <!-- fontawesome icons -->
        
    </div>
    
</div>
<script src="script.js"></script>
<script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>

</body>
</html>