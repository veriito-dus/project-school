<body>
  @extends('navs.admin')
  <div class="home">
    <div class="admin_slider_container">
      <div class="admin_slider owl-carousel">

        <!-- admin Slide -->
        <div class="admin_slide">
          <div class="admin_slide_background" style="background-image:url(img/slider_background.jpg)"></div>
          <div class="admin_slide_container d-flex flex-column align-items-center justify-content-center">

          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="admin_boxes">
    <div class="admin_boxes_inner">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesdirector')}}">
              <i class="fas fa-tasks"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">ASIGNACION ALUMNO GRADO</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesaberdirector')}}">
              <i class="fas fa-tasks"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">ASIGNACION DOCENTE MATERIA GRADO</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesaberdirector')}}">
              <i class="fas fa-tasks"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">GRADOS</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>
        </div>
        <div class="row" id="row1admin">
          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesabergrade')}}">
              <i class="fas fa-chart-pie"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">MATERIAS</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesgrade')}}">
              <i class="fab fa-leanpub"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">ALUMNOS</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesgrade')}}">
              <i class="fab fa-leanpub"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">DOCENTES</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>