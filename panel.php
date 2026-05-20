<?php
require_once("conexion.php");
require_once("config.php");
if($_SESSION["es_admin"]!==0){

$select=("SELECT * FROM usuarios");


$lanzar=$gbd->prepare($select);

$lanzar->execute();




$fila=$lanzar->fetchAll(PDO::FETCH_ASSOC);



}else{

header("Location: login.php");

}











?>
<?php foreach ($fila as $pepe) {
   
 ?>
 <p><?=$pepe["username"];   ?></p>
  <p><?=$pepe["nombre"] . $pepe["apellido"]   ?></p>

<?php } ?>

