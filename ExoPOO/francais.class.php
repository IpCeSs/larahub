<?php
class francais extends Humain{
    private $postal;

    //on modifie setNom() pour que $nom stocke un nom en maj
    //on dit qu'on surcharge la méthode setNom()
    //public function setNom($nouveauNom)
    //{
        //$this->nom=strtoupper($nouveauNom);
    //}
//comme on utilise construct dasn la mère setNom
//n'est plus d'actualité

    public function setPostal($codePostal){
        $this->postal=$codePostal;
}
public function getPostal(){
        return $this->postal;
}
}