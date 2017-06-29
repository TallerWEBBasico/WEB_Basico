<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Instruction</title>
</head>
<body>
	<h1><?php 
		foreach ($subjects as $key => $value) {
			echo $key.'.- '.$instruction->getInstruction().' '.$value.'<br/>';
		}
		?></h1>
</body>
</html>