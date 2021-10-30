<head>
  <link rel="icon" href="img/icono.ico" />
</head>

<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="home">
    <div class="alumnosadmin_slider_container">
      <div class="alumnosadmin_slider owl-carousel">

        <!-- alumnosadmin Slide -->
        <div class="alumnosadmin_slide">
          <div class="alumnosadmin_slide_background">
            <div class="alumnosadmin_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-alumnosadmin">ALUMNOS</h1>
                <div class="row" style="margin:0 auto;text-align:center;margin:0 auto">

                  <div class="col-lg-12 alumnosadmin_box_col">
                    <div class="alumnosadmin_filtro" style="margin-top: 20px;">
                      <a type="submit" class="agregaralumno" href="{{url('/addalumnoadmin')}}">Agregar</a>
                    </div>
                  </div>
                </div>
                <div class="tables-alumnosadmin">
                  <div class="diseño-table-alumnosadmin">
                    <table style="width:100%">
                      <tr id="principal">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>T.I</th>
                        <th>Foto</th>
                        <th>Acudiente</th>
                        <th>modificar</th>
                        <th>eliminar</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td style="padding-top: 5px;padding-bottom: 5px;"><a type="submit" class="modificar" href="{{url('/addalumnoadmin')}}">Modificar</a></td>
                        <td><a type="submit" class="eliminar" href="{{url('/teacher')}}">Eliminar</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td id="nombre">texto</td>
                        <td style="padding-top: 5px;padding-bottom: 5px;"><a type="submit" class="modificar" href="{{url('/addalumnoadmin')}}">Modificar</a></td>
                        <td><a type="submit" class="eliminar" href="{{url('/teacher')}}">Eliminar</a></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- acomodar ese left -->
                <div class="row" style="margin-left:960px;padding-bottom:20px;margin-top: 20px;">

                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>