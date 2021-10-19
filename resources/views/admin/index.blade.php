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
              <i class="fas fa-file-signature"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">ASIGNACION ALUMNO GRADO</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesaberdirector')}}">
              <i class="fas fa-file-signature"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">ASIGNACION DOCENTE MATERIA GRADO</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesaberdirector')}}">
              <i class="fas fa-chalkboard-teacher"></i>
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
              <i class="fas fa-book"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">MATERIAS</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesgrade')}}">
              <i class="fas fa-user-friends"></i>
              <div class="admin_box_content">
                <h2 class="admin_box_title">ALUMNOS</h2>
                <!-- <a href="courses.html" class="admin_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-4 admin_box_col">
            <a class="admin_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesgrade')}}">
              <i class="fas fa-user-tie"></i>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>