<?php
class Humain{
    // ON MET private pour ne pas que la var soit accessible partout
    //pour des questions de securité
private $nom;

//on déclare des methodes(fonctions)
//set sert à définir
public function setNom($nouveauNom){
    $this->nom=$nouveauNom;
}
//get sert à récupérer
public function getNom(){
    return $this->nom;
}

}