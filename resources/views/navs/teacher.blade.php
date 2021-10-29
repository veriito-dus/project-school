@extends('head.teacher')
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
            <li class="main_nav_item"><a href="{{route('teacher.index')}}"><i class="fas fa-home"></i>Inicio</a></li>
            <li class="main_nav_item"><a href="{{route('teacher.profile')}}"><i class="fas fa-user"></i>Perfil</a></li>

            <li class="main_nav_item"><a href="contact.html"> <img src="img/icono.ico"></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

</div>