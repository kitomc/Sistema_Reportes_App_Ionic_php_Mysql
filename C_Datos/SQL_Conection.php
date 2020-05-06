<?php


class Mysql_Conexion  {}{


        // atributos
$hosting='localhost';
$user="root";
$pw="";
$status;
$dataBase;
$puerto=3306;

 //Conexion con base
 $enlace=mysqli_connect($hosting,$user,$pw,$dataBase,$puerto);


//  sentenecias MySQL

// creacion de base de datos 
$sql="create database sistema_Reportes;"

function estructura_DB ()
{

if (mysql_query($sql,$enlace)) {
    echo "Base de datos creada Correctamente \n";
    
}
else
{
    echo "Error al crear Base de Dato \n";

}


}








