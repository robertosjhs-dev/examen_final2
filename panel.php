<?php
require_once("conexion.php");
require_once("config.php");
 

$select=("SELECT * FROM usuarios");


$lanzar=$gbd->prepare($select);

$lanzar->execute();




$fila=$lanzar->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach ($fila as $pepe) {
   
 ?>
 <table>
    
<tr>Foto </tr>
<tr>id</tr>
<tr> Username</tr>
<tr>  Nombre completo</tr>
<td>vacio</td> 
<td><?=$pepe["id"];   ?></td> 
<td><?=$pepe["username"];   ?></td> 
<td><?=$pepe["nombre"] . $pepe["apellido"]   ?></td> 
<td><?=$pepe["fecha_nac"]  ?></td>
 
 

 </table>

<?php } ?>

