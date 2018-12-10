<?php
$con = new MySQLi('localhost', 'root', '', 'autonomo');
if($con->connect_error){
   //echo "Desconectado! Erro: " . $con->connect_error;
}else{
   //echo "Conectado!"."<br>";
}



?>
