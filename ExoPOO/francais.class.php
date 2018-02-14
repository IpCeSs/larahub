<?php
class francais extends Humain{
    private $postal;

    //on modifie setNom() pour que $nom stocke un nom en maj
    //on dit qu'on surcharge la méthode setNom()
    //public function setNom($nouveauNom)
    public function __construct($nouveauNom){
        parent::__construct($nouveauNom);

        $this->nom=strtoupper($nouveauNom);
        //$this->dateInscrit=date('d-m-Y H:i:s');
        //devient redondant car on recupère le construct du parent::


    }
//comme on utilise construct dasn la mère setNom
//n'est plus d'actualité on met un construct ici aussi
//ppour afficher upper . qui ve surcharger
//humain

    public function setPostal($codePostal){
        $this->postal=$codePostal;
}
public function getPostal(){
        return $this->postal;
}
}