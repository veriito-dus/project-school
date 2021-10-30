<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Profesor</title>
  <link rel="stylesheet" href="css/login.css" />
  <link rel="icon" href="img/icono.ico" />
  <script src="https://kit.fontawesome.com/6f70aed298.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <section id="content">
      <div class="left">
        <form action="">
          <h1>Inicia Sesión</h1>
          <div class="information">
            <i class="fas fa-user"> Usuario</i>
            <input type="text" placeholder="Digite su Usuario" required="" id="Cuenta" style="margin-left:20px"/>
          </div>
          <div class="information">
            <i class="fas fa-unlock-alt"> Contraseña</i>
            <input type="password" placeholder="Digite su Contraseña" required="" id="Contraseña" />
          </div>
          <div class="containeragregar">
            <a type="submit" class="agregar" href="{{route('teacher.index')}}">Ingresar</a>
          </div>
          <!-- <div>
            <a href="#">Lost your password?</a>
            <a href="#">Register</a>
            </div> -->
        </form>
      </div>
      <div class="right">
      </div>
    </section>
  </div>
</body>

</html>
<style>
.left .agregar{
	background: rgb(254,231,154);
	border-radius: 30px;
	box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
	border: 1px solid #D69E31;
	color: #85592e;
	cursor: pointer;
	font: bold 18px Helvetica, Arial, sans-serif;
	width: 130px;
  padding: 10px;
  text-decoration: none;
}
.containeragregar{
margin-top: 40px;
}
</style>