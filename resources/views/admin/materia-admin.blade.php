<head>
  <link rel="icon" href="img/icono.ico" />
</head>

<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="home">
    <div class="materiaadmin_slider_container">
      <div class="materiaadmin_slider owl-carousel">

        <!-- materiaadmin Slide -->
        <div class="materiaadmin_slide">
          <div class="materiaadmin_slide_background">
            <div class="materiaadmin_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-materiaadmin">MATERIA</h1>
                <div class="row" style="margin:0 auto;text-align:center;margin-left:100px">

                  <div class="col-lg-4 materiaadmin_box_col">
                    <div class="materiaadmin_filtro">
                      <h2 class="materiaadmin_box_title">Nombre Materia</h2>
                      <select>
                        <option selected class="selected">Selecciona una Materia</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                      <!-- <input type="password" placeholder="Texto" required="" id="Contraseña" /> -->
                    </div>
                  </div>

                  <div class="col-lg-4 materiaadmin_box_col">
                    <div class="materiaadmin_filtro">
                      <h2 class="materiaadmin_box_title">Horas materia</h2>
                      <input type="number" placeholder="Digite las horas por materia" required="" id="materia" />
                    </div>
                  </div>

                  <div class="col-lg-2 materiaadmin_box_col">
                    <div class="materiaadmin_filtro" style="margin-top: 35px;">
                      <a type="submit" class="agregar" href="{{url('/teacher')}}">Agregar</a>
                    </div>
                  </div>
                </div>
                <div class="tables-materiaadmin">
                  <div class="diseño-table-materiaadmin">
                    <table style="width:100%">
                      <tr id="principal">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>horas</th>
                        <th>modificar</th>
                        <th>eliminar</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td id="nombre">texto</td>
                        <td id="notas">texto</td>
                        <td style="padding-top: 5px;padding-bottom: 5px;"><a type="submit" class="modificar" href="{{url('/teacher')}}">Modificar</a></td>
                        <td><a type="submit" class="eliminar" href="{{url('/teacher')}}">Eliminar</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td id="nombre">texto</td>
                        <td id="notas">texto</td>
                        <td style="padding-top: 5px;padding-bottom: 5px;"><a type="submit" class="modificar" href="{{url('/teacher')}}">Modificar</a></td>
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