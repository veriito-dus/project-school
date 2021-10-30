<head>
  <link rel="icon" href="img/icono.ico" />
</head>

<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="home">
    <div class="adminpgm_slider_container">
      <div class="adminpgm_slider owl-carousel">

        <!-- adminpgm Slide -->
        <div class="adminpgm_slide">
          <div class="adminpgm_slide_background">
            <div class="adminpgm_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-adminpgm">ASIGNACION PROFESOR - GRADO - MATERIA</h1>
                <div class="row" style="margin-left:10%;text-align:center">

                  <div class="col-lg-5 adminpgm_box_col">
                    <div class="adminpgm_filtro">
                      <h2 class="adminpgm_box_title">Profesor</h2>
                      <select>
                        <option selected class="selected">Selecciona un Profesor</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-5 adminpgm_box_col">
                    <div class="adminpgm_filtro">
                      <h2 class="adminpgm_box_title">Materia</h2>
                      <select>
                        <option selected class="selected">Selecciona una Materia</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row" style="text-align:center;margin-left:10%">

                  <div class="col-lg-5 adminpgm_box_col">
                    <div class="adminpgm_filtro">
                      <h2 class="adminpgm_box_title">Grado</h2>
                      <select>
                        <option selected class="selected">Selecciona un Grado</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                      <!-- <input type="password" placeholder="Texto" required="" id="Contraseña" /> -->
                    </div>
                  </div>

                  <div class="col-lg-2 adminpgm_box_col">
                    <div class="adminpgm_filtro" style="margin-top: 30px;margin-left:100%">
                      <!-- <a type="submit" class="agregarpgm" href="{{url('/teacher')}}">Agregar</a> -->
                      <!-- aca empieza el modal  -->
                      <!-- Button trigger modal -->
                      <button type="button" class="agregarpgm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Asignación Profesor - Grado - Materia</h5>
                            </div>
                            <div class="modal-body">
                              Desea asignar a " " el grado " " y la materia " "
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                              <button type="button" class="btn btn-primary">Aceptar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- aca termina el modal  -->
                    </div>
                  </div>
                </div>
                <div class="tables-adminpgm">
                  <div class="diseño-table-adminpgm">
                    <table style="width:100%">
                      <tr id="principal">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>grado</th>
                        <th>Materia</th>
                        <th>modificar</th>
                        <th>eliminar</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td id="nombre">texto</td>
                        <td id="notas">texto</td>
                        <td>texto</td>
                        <td style="padding-top: 5px;padding-bottom: 5px;"><a type="submit" class="modificar" href="{{url('/teacher')}}">Modificar</a></td>
                        <td><a type="submit" class="eliminar" href="{{url('/teacher')}}">Eliminar</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td id="nombre">texto</td>
                        <td id="notas">texto</td>
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
<style>
.agregarpgm{
	/* border-radius: 25px; */
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  font-size: 15px;
  background: #26A0DA;
	border-radius: 30px;
	cursor: pointer;
  border:none;
  color: rgb(255, 255, 255);
}
.modal-title{
  color: green;
}
.modal-body{
  font-size: 15px;
  color: #000;
}
</style>