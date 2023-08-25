<?php

//Variables: $nombrevariable;
//Parametros de conexion: servidor, usuario, contraseña, nombase de datos.
//Se tiene que hacer por orden
$servidor= "localhost";
$user="root"; //usuario por defecto
$password="";
$basededatos="crudphp";
$conexion=new mysqli($servidor,$user, $password, $basededatos); //Conexion lista:)

//comprobar si existe error de conexion

if(conexion -> connect_errno) //connect_errno verifica un error de conectividad
{
    echo "Nuestra conexion presenta fallas"; //imprime
    exit();
}
?>