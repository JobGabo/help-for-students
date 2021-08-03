<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro | Gabito</title> 
    <link rel="shortcut icon" href="./img/registro.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilo.css">
      
</head>  
<body>
 <form class="formulario" method="post" action="register.php">
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Nombre de Usuario" name="Nombre"required title="Debes completar este campo">
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name="Correo"required title="Debes completar este campo">
        </div>
         
         <div class="input-contenedor">
         <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="Contra"required title="Debes completar este campo">
         </div>

         <input type="submit" value="Registrate" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="index.php">Iniciar Sesion</a></p>
     </div>
    </form>
</body>
</html>
