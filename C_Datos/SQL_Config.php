<?php

class SQL_Config  
{
 public $host='127.0.0.0';
 public $user="root";
 public $pw="";
 public $status;
 public $dataBase;
 public $puerto=3306;




public function GetDataBase(){



}

}

  


        // atributos


 //Conexion con base
 $enlace=mysqli_connect($hosting,$user,$pw,$dataBase,$puerto);


//  sentenecias MySQL

// creacion de base de datos 
$sql="create database sistema_Reportes"








?>