<head>
  <link rel="icon" href="img/icono.ico" />
</head>

<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="home">
    <div class="addalumnosadmin_slider_container">
      <div class="addalumnosadmin_slider owl-carousel">

        <!-- addalumnosadmin Slide -->
        <div class="addalumnosadmin_slide">
          <div class="addalumnosadmin_slide_background">
            <div class="addalumnosadmin_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-addalumnosadmin">PROFESOR NUEVO</h1>
                <!-- <div class="row" style="margin:0 auto;text-align:center;margin:0 auto">

                  <div class="col-lg-12 addalumnosadmin_box_col">
                    <div class="addalumnosadmin_filtro" style="margin-top: 20px;">
                      <a type="submit" class="agregaralumno" href="#">Agregar</a>
                    </div>
                  </div>
                </div> -->
                <form action="">
                  <div class="row" style="margin:0 auto;left:50px;text-align:center;top:10px">

                    <div class="col-lg-3 teacher_box_col">
                      <img src="img/icono.ico">
                    </div>

                    <div class="col-lg-2 teacher_box_col">
                      <input type="submit" value="Examinar" />
                    </div>

                    <div class="col-lg-3 teacher_box_col">
                      <div class="information">
                        <h2 class="teacher_box_title">Nombre</h2>
                        <input type="text" placeholder="Digite el Nombre" required="" id="Cuenta" />
                      </div>
                      <div class="information">
                        <h2 class="teacher_box_title">Apellido</h2>
                        <input type="text" placeholder="Digite el Apellido" required="" id="Contraseña" />
                      </div>
                      <div class="information">
                        <h2 class="teacher_box_title">Telefono</h2>
                        <input type="text" placeholder="Digite el Telefono" required="" id="Cuenta" />
                      </div>
                      <div class="information">
                        <h2 class="teacher_box_title">Grado director</h2>
                        <select>
                        <option selected class="selected">Selecciona un Grado</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-lg-3 teacher_box_col">
                      <div class="information">
                        <h2 class="teacher_box_title">Direccion</h2>
                        <input type="text" placeholder="Digite la Dirección" required="" id="Cuenta" />
                      </div>
                      <div class="information">
                        <h2 class="teacher_box_title">Correo</h2>
                        <input type="text" placeholder="Digite el Correo" required="" id="Contraseña" />
                      </div>
                      <div class="information">
                        <h2 class="teacher_box_title">Cedula</h2>
                        <input type="text" placeholder="Digite la Cedula" required="" id="Contraseña" />
                      </div>
                      

                      <div class="save col-lg-4" style="margin-left:50%">
                        <input type="submit" value="Guardar" />
                      </div>
                    </div>
                  </div>
                </form>
                <!-- acomodar ese left -->
                <div class="row" style="margin-left:960px;padding-bottom:30px;margin-top: 20px;">

                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>
<style>
.information select {
  width: 80%;
  height: 25px;
  text-align: center;
  outline: none;
  color: rgb(109, 109, 109);
  border: none;
  border-radius: 0;
}
</style>