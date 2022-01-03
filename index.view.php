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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="formulario">
        <input type="text" name ="nombre" placeholder="Escribe tu nombre" value="">
        <input type="email" name="correo" placeholder="Escribe tu correo" value="">
        <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"></textarea>
            <?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado) : ?>
				<div class="alert success">
					<?php echo 'Enviado Correctamente'; ?>
				</div>
			<?php endif ?>
        <input type="submit" name ="submit" value="Enviar" class="btn-primary">
    </form>
</body>
</html>