<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">         
    <meta name="description" content="Práctica de Tablas con clases">
	<title>Tablas de multiplicar</title>
</head>
<body>
	<form action="tablas.php" method="post">
		<label for="inicio" >¿De qué tabla deseas iniciar?</label>
		<input type="text" id="inicio" name="inicio" required>
		<label for="cantidad" >¿Cuántas tablas deseas ver?</label>
		<input type="text" id="cantidad" name="cantidad" required>
		<button type='submit'>Generar tablas</button>
	</form>
</body>
</html>
