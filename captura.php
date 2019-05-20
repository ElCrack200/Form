<?php
//Creamos las variables que recibiran a las variables enviadas con el metodo post. 
//la forma de recibir una variable por el metodo post es $_POST[STRING]
$nom=$_POST['nombre'];
$ma=$_POST['mail'];
$age=$_POST['edad'];
$pass=$_POST['contra'];

//echo nos permite mostrar en pantalla
echo $nom;
//mostramos un salto de linea para que no se mire todo en un solo renglon.
echo "<br/>";
echo $ma;
echo "<br/>";
echo $age;
echo "<br/>";
echo $pass;
?>