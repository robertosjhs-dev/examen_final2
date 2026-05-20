<?php
require_once("conexion.php");
require_once("config.php");
 

$select=("SELECT * FROM usuarios");


$lanzar=$gbd->prepare($select);

$lanzar->execute();




$fila=$lanzar->fetchAll(PDO::FETCH_ASSOC);
//sobre las fotos la unica forma que se me hace posible seria insertandolas a la base de datos
//luego podriamos en el <> <?=$pepe["foto"]? y asi se verian las fotos   
?>

<tr>Foto </tr>

<tr>id</tr>

<tr> Username</tr>
<tr>  Nombre completo</tr>
<tr>  fecha de nacimiento</tr>
 <tr> condicion</tr>
<?php foreach ($fila as $pepe) { ?>
   

 <table>
    
<td>    </td>
<td><?=$pepe["id"];   ?></td> 
<td><?=$pepe["username"];   ?></td> 
<td><?=$pepe["nombre"] , $pepe["apellido"]   ?></td> 
<td><?=$pepe["fecha_nac"]  ?></td>
<td><?php if($pepe["es_admin"]==1){  
    echo "ADMIN";
} else{    
    echo "USER";
 } ?> 
</td>

 

 </table>

<?php } ?>

