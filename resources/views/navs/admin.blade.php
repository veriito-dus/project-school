@extends('head.admin')

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
            <li class="main_nav_item"><a href="{{url('/admin')}}"><i class="fas fa-home"></i>Inicio</a></li>
            <!-- <li class="main_nav_item"><a href="{{url('/profile-teacher')}}"><i class="fas fa-user"></i>asignacion</a></li> -->
            <li class="main_nav_item"><a href="{{url('/grade')}}"><i class="fas fa-list"></i>Materias</a></li>
            <li class="main_nav_item"><a href="{{url('/notesabergrade')}}"><i class="fas fa-chart-pie"></i>Alumnos</a></li>
            <li class="main_nav_item"><a href="{{url('/notesgrade')}}"><i class="fab fa-leanpub"></i>Docentes</a></li>
            <li class="main_nav_item"><a href="{{url('/notesgrade')}}"><i class="fab fa-leanpub"></i>Grados</a></li>

            <li class="main_nav_item"><a href="{{url('/index-teacher-grade')}}"> <img src="img/icono.ico"></a></li>
          </ul>
        </div>
      </nav>
    </div>

  </header>
</div>