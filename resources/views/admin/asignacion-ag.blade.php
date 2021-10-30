<head><link rel="icon" href="img/icono.ico" /></head>
<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="home">
    <div class="adminag_slider_container">
      <div class="adminag_slider owl-carousel">

        <!-- adminag Slide -->
        <div class="adminag_slide">
          <div class="adminag_slide_background">
            <div class="adminag_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-adminag">ASIGNACION ALUMNO - GRADO</h1>
                <div class="row" style="margin:0 auto;text-align:center;margin-left:100px">

                  <div class="col-lg-4 adminag_box_col">
                    <div class="adminag_filtro">
                      <h2 class="adminag_box_title">Alumno</h2>
                      <select>
                        <option selected class="selected">Selecciona un Alumno</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                      <!-- <input type="password" placeholder="Texto" required="" id="Contraseña" /> -->
                    </div>
                  </div>

                  <div class="col-lg-4 adminag_box_col">
                    <div class="adminag_filtro">
                      <h2 class="adminag_box_title">Grado</h2>
                      <select>
                        <option selected class="selected">Selecciona un Grado</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-2 adminag_box_col">
                    <div class="adminag_filtro" style="margin-top: 35px;">
                      <a type="submit" class="agregar" href="{{url('/teacher')}}">Agregar</a>
                    </div>
                  </div>
                </div>
                <div class="tables-adminag">
                  <div class="diseño-table-adminag">
                    <table style="width:100%">
                      <tr id="principal">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>grado</th>
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