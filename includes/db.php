<?php 
// Using Medoo namespace
use Medoo\Medoo;
 
$server = ($_SERVER['HTTP_HOST'] == "localhost") ? "localhost" : "localhost" ;

// Initialize
$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'name', //nombre de la base de datos
    'server' => $server,
    'username' => 'your_username', //nombre de usuario
    'password' => 'your_password'  //contraseña
]);

 ?>