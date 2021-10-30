<head>
  <link rel="icon" href="img/icono.ico" />
</head>

<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="home">
    <div class="gradeadmin_slider_container">
      <div class="gradeadmin_slider owl-carousel">

        <!-- gradeadmin Slide -->
        <div class="gradeadmin_slide">
          <div class="gradeadmin_slide_background">
            <div class="gradeadmin_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-gradeadmin">GRADOS</h1>
                <div class="row" style="margin:0 auto;text-align:center;margin-left:30%">

                  <div class="col-lg-5 gradeadmin_box_col">
                    <div class="gradeadmin_filtro">
                      <h2 class="gradeadmin_box_title">Grado</h2>
                      <select>
                        <option selected class="selected">Selecciona un Grado</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                      <!-- <input type="password" placeholder="Texto" required="" id="Contraseña" /> -->
                    </div>
                  </div>

                  <div class="col-lg-2 gradeadmin_box_col">
                    <div class="gradeadmin_filtro" style="margin-top: 35px;">
                      <a type="submit" class="agregar" href="{{url('/teacher')}}">Agregar</a>
                    </div>
                  </div>
                </div>
                <div class="tables-gradeadmin">
                  <div class="diseño-table-gradeadmin">
                    <table style="width:100%">
                      <tr id="principal">
                        <th>#</th>
                        <th>Grado</th>
                        <th>modificar</th>
                        <th>eliminar</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>texto</td>
                        <td style="padding-top: 5px;padding-bottom: 5px;"><a type="submit" class="modificar" href="{{url('/teacher')}}">Modificar</a></td>
                        <td><a type="submit" class="eliminar" href="{{url('/teacher')}}">Eliminar</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>texto</td>
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