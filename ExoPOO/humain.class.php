<?php
class Humain{
    // ON MET protected pour que les filles heritent des propriétés et aussi
    //pour des questions de securité
protected $nom;
protected $dateInscrit;


//on déclare des methodes(fonctions)
//set sert à définir
public function __construct($nouveauNom){
    $this->nom=$nouveauNom;
    $this->dateInscrit=date('d-m-Y H:i:s');
}
//get sert à récupérer
public function getNom(){
    return $this->nom;
}
public function getDateInscrit(){
    return $this->dateInscrit;
}

}