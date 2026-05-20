<?php
if(isset($_COOKIE["session_id_activa"])){



$session=$_COOKIE["session_id_activa"];

session_id($session);

}

session_start();








?>