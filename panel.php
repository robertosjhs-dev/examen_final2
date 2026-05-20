<?php
require_once("conexion.php");

$select=("SELECT * FROM usuarios");


$lanzar=$gbd->prepare($select);

$lanzar->execute();




$fila=$lanzar->fetchAll(PDO::FETCH_ASSOC);









?>
<?php foreach ($fila as $pepe) {
   
 ?>
 <p></p>

<?php } ?>

