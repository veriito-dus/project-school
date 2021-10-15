<!DOCTYPE html>
<html>

<head>
  <title>Profesor Direccion</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://kit.fontawesome.com/6f70aed298.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/icono.ico" />
  <link rel="stylesheet" type="text/css" href="css/main_styles.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">


</head>

<body>
  <div class="super_container">
    <header class="header d-flex flex-row">
      <div class="header_content d-flex flex-row align-items-center">
        <div class="logo_container">
          <div class="logo">
            <!-- <img src="img/logo.png" alt=""> -->
            <h2>logo</h2>
            <!-- <span>course</span> -->
          </div>
        </div>
        <nav class="main_nav_container">
          <div class="main_nav">
            <ul class="main_nav_list">
              <li class="main_nav_item"><a href="#"><i class="fas fa-home"></i>Inicio</a></li>
              <li class="main_nav_item"><a href="#"><i class="fas fa-user"></i>Perfil</a></li>
              <li class="main_nav_item"><a href="elements.html"><i class="fas fa-list"></i>Lista Direccion</a></li>
              <li class="main_nav_item"><a href="news.html"><i class="fas fa-chart-pie"></i>Prueba saber</a></li>
              <li class="main_nav_item"><a href="contact.html"><i class="fab fa-leanpub"></i>Consolidado</a></li>
						
              <li class="main_nav_item"><a href="contact.html"> <img src="img/icono.ico" ></a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="hamburger_container">
        <i class="fas fa-bars trans_200"></i>
      </div>
    </header>
    <div class="menu_container menu_mm">
      <div class="menu_close_container">
        <div class="menu_close"></div>
      </div>
    </div>
  </div>
  <div class="home">
    <div class="hero_slider_container">
      <div class="hero_slider owl-carousel">

        <!-- Hero Slide -->
        <div class="hero_slide">
          <div class="hero_slide_background" style="background-image:url(img/slider_background.jpg)"></div>
          <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">

          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="hero_boxes">
    <div class="hero_boxes_inner">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 hero_box_col">
            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
              <i class="fas fa-tasks"></i>
              <div class="hero_box_content">
                <h2 class="hero_box_title">NOTAS POR PERIODO</h2>
                <!-- <a href="courses.html" class="hero_box_link">view more</a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 hero_box_col">
            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
              <i class="fas fa-tasks"></i>
              <div class="hero_box_content">
                <h2 class="hero_box_title">NOTAS POR PRUEBA SABER</h2>
                <!-- <a href="courses.html" class="hero_box_link">view more</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row" id="row1">
          <div class="col-lg-6 hero_box_col">
            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
              <i class="fas fa-chart-pie"></i>
              <div class="hero_box_content">
                <h2 class="hero_box_title">PRUEBA SABER</h2>
                <!-- <a href="courses.html" class="hero_box_link">view more</a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 hero_box_col">
            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
              <i class="fab fa-leanpub"></i>
              <div class="hero_box_content">
                <h2 class="hero_box_title">CONSOLIDADOS</h2>
                <!-- <a href="courses.html" class="hero_box_link">view more</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="popular page_section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h1> </h1>
          </div>
        </div>
      </div>

      <div class="row course_boxes">

        <!-- Popular Course Item -->
        <div class="col-lg-6 course_box">
          <!-- <div class="card"> -->
          <img class="card-img-top" src="img/listaAl.png" alt="">
          <div class="course_boxes-text">LISTA ESTUDIANTES</div>
          <!-- <div class="card-body text-center">
							<div class="card-title"><a href="courses.html">A complete guide to design</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div> -->
          <!-- </div> -->
        </div>

        <!-- Popular Course Item -->
        <div class="col-lg-6 course_box">
          <!-- <div class="card"> -->
          <img class="card-img-top" src="img/listaAl.png" alt="">
          <div class="course_boxes-text">LISTA MATERIAS</div>

          <!-- <div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
</body>

</html>