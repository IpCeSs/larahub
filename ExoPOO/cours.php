<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<br>
<h1>Travail sur les classes POO</h1>
<?php
//On inclus le fichier qui contient nos classes
include('humain.class.php');
include('francais.class.php');
//on ajoute une nouvelle instance à Humain, qu'il faut stocker dans une variable afin
//de pouvoir la manipuler et y accéder
$cecilia=new francais('Cécilia');
$arnaud=new Humain('Arnaud');
//on ajoute de s valeurs à la variable publique $nom de la classe
//$cecilia->nom='Cécilia';
//$arnaud->nom='Arnaud';

//autre exemple, on applle les functions crées (nb. $nom est passé
//en private donc inutilisable seul ici
//on set le nom
//$cecilia->setNom('Cécilia');
$cecilia->setPostal('74000');
//on recupere le nom
echo $cecilia->getNom().'-'.$cecilia->getPostal().'</br>';
echo 'Crée le '. $arnaud->getDateInscrit();
//$arnaud->setNom('Arnaud');
//on recupere le nom
//echo $arnaud->getNom();
echo '<br>'.$arnaud->getNom().'<br>';
echo 'Crée le '. $arnaud->getDateInscrit();
?>
</body>
</html>