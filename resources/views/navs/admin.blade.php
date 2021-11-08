<!-- @extends('head.admin') -->

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
            <li class="main_nav_item"><a href="{{url('/administrador')}}"><i class="fas fa-home"></i>Inicio</a></li>
            <!-- <li class="main_nav_item"><a href="{{url('/profile-teacher')}}"><i class="fas fa-user"></i>asignacion</a></li> -->
            <li class="main_nav_item"><a href="{{url('/materia')}}"><i class="fas fa-book"></i>Materias</a></li>
            <li class="main_nav_item"><a href="{{url('/alumnoadmin')}}"><i class="fas fa-user-friends"></i>Alumnos</a></li>
            <li class="main_nav_item"><a href="{{url('/teacheradmin')}}"><i class="fas fa-user-tie"></i>Docentes</a></li>
            <li class="main_nav_item"><a href="{{url('/grado')}}"><i class="fas fa-chalkboard-teacher"></i>Grados</a></li>

            <li class="main_nav_item"><a href="{{url('/index-teacher-grade')}}"> <img src="img/icono.ico"></a></li>
          </ul>
        </div>
      </nav>
    </div>

  </header>
</div>