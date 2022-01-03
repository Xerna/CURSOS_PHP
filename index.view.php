<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link rel="stylesheet" href="cssreset.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario">
			
			<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">
		
			<input type="text" class="form-control" name="correo" id="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo?>">
		
			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>
		
			<?php if (!empty($errores)): ?>
				<div class="alert error" role="alert">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado) : ?>
				<div class="alert succes" role="alert">
					<?php echo 'Enviado Correctamente'; ?>
				</div>
			<?php endif; ?>
		
			<input type="submit" name="submit" class="btn-primary" value="Enviar Correo">
		</form>
</body>
</html>