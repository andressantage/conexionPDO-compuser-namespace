<?php
namespace App;
//abstract para la seguridad en la conexion
abstract class credentials{
    use system;
    private $host="172.16.49.20";
    private $dbname="db_M3_prueba_miguel";
    protected $username="sputnik";
    private $password="Sp3tn1kC@";
/*     function __construct(){
        echo "credenciales";
    } */
}
?>