<?php


class SQL_Conection  { }
{



        // atributos

$hosting;
$user;
$pw;
$status;
$instance= new SQL_Conection;
 $counter;
 $dataBase;
 $puerto;

 //Conexion con base
 $enlace=mysqli_connect($hosting,$user,$pw,$dataBase,$puerto);


// funciones
 function __constructor($Localhost,$User,$Pw,$DataBase,$Puerto){
    
    $hosting=$Localhost;
    $user = $User;
    $pw= $Pw;
    $dataBase= $DataBase;
    $puerto=$Puerto;

    

}

//Patron de diseño Singleton para unica instancia de la clase
function get_Instancia()
{
   if (isset($instance)) {
       return $instance;
    }
    $instance= new SQL_Conection  ;
}




function open(){


}

}

?>