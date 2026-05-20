 <?php

define("DB_HOST","localhost");
define("DB_NAME","gestion_usuarios.sql");
define("DB_USER","root");
define("DB_PASS","");

$dsn="mysql:host=".DB_HOST.";dbname=".DB_NAME;


try {
   $gbd=new PDO ($dsn,DB_USER,DB_PASS );
} catch (PDOException $th) {
    $th->getMessage();
    echo $th;


}
 






?>