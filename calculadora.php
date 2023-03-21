<!DOCTYPE html>
<html>
<head>
	<title>Pruebas</title>
</head>
<body>
	<form method="post" action="operaciones.php">
		Numero 1:<br>
		<input type="text" name="numero_1" id="numero_1"><br>
		Numero 2:<br>
		<input type="text" name="numero_2" id="numero_2"><br>
		Resultado:<br>
		<input type="text" name="resultado" id="resultado" value=><br>
		Qué operacion deseas realizar:<br>
		<input type="radio" name="opcion" id="opcion" value="1">Suma<br>
		<input type="radio" name="opcion" id="opcion" value="2">Resta<br>
		<input type="radio" name="opcion" id="opcion" value="3">Multiplicacion<br>
		<input type="radio" name="opcion" id="opcion" value="4">Division<br>

		<input type="submit" name="enviar" id="enviar" value="Enviar"><br><br>
	</form>

</body>
</html>