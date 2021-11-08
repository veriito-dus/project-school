formulario de creacion empleado
<form action="{{url('/grado')}}" method="post">
@csrf
<h1> grados</h1>
<br>
<label for="Grade">GRADO</label>
<input type="text" name="Grade" placeholder="digite Grado" id="Grade">
<br>
<input type="submit" value="guardar">
</form>