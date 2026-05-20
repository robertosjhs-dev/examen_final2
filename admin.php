 <?php
require_once("conexion.php");


if(!isset($_SERVER["es_admin"])!==1){
 header("location:panel.php");
exit;
}else{
header("location:hola.php");
exit;
}

 




?>