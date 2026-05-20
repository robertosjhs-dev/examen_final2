 <?php

require_once("conexion.php");
require_once("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

$username=$_POST["username"];
$password=$_POST["password"];
$seleciona="SELECT  password from  usuarios ";



 
$prueba=$gbd->prepare($seleciona);

 
 
$prueba->execute();

$fila=$prueba->fetch(PDO::FETCH_ASSOC);


   
    if($fila){

  
//no se si esta bien ya que funciona bien el admin , admin pero los demas no idk
            if(password_verify($password,$fila["password"])){
                $_SESSION["es_admin"]=$fila["es_admin"];
                $_SESSION["username"]=$username;
                header("location:admin.php");
                    exit;
    


            }else{
          
            header("location:login.php");
            exit;

}
} 

}?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login con Recuérdame</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 300px; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .checkbox-container { margin: 15px 0; display: flex; align-items: center; font-size: 14px; color: #555; }
        .checkbox-container input { margin-right: 8px; cursor: pointer; }
        button { width: 100%; padding: 10px; background: #007BFF; border: 0; color: #fff; border-radius: 4px; cursor: pointer; font-size: 16px; margin-top: 10px; }
        .error { color: #d9534f; background: #f2dede; padding: 10px; border-radius: 4px; margin-bottom: 15px; text-align: center; }
    </style>
</head>
<body>
<div class="login-box">
    <h2>Iniciar Sesión</h2>
    <form action="./login.php" method="POST">
        <label>Usuario</label>
        <input type="text" name="username" required autocomplete="off">
        
        <label>Contraseña</label>
        <input type="password" name="password" required>
        
        <div class="checkbox-container">
            <input type="checkbox" name="recuerdame" id="recuerdame">
            <label for="recuerdame">Recuérdame en este equipo</label>
        </div>

        <button type="submit">Entrar</button>
    </form>
</div>
</body>
</html>