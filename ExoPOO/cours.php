<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Travail sur les classes POO</h1>
<?php
//On inclus le fichier qui contient nos classes
include('humain.class.php');
//on ajoute une nouvelle instance à Humain, qu'il faut stocker dans une variable afin
//de pouvoir la manipuler et y accéder
$cecilia=new Humain();
$arnaud=new Humain();
//on ajoute de s valeurs à la variable publique $nom de la classe
$cecilia->nom='Cécilia';
$arnaud->nom='Arnaud';
?>
</body>
</html>