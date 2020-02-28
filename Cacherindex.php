<?php
class Employe
{
    /**
     * attribut de classe avec une valeur par défaut
     * @var string
     */
    public $prenom = 'Julien';

    /**
     *  attribut de classe sans valeur par défaut (=null)
     * @var string
     */
    public $nom;

    /**
     * @var int
     */
    private $salaire = 2000;
    /**
     * Une méthode est une fonction interne à la classe
     * @return string
     */

    public function nomComplet()
    {
        // $this fait référence à l'objet instance de la classe qui appelle la méthode
        return $this->prenom . ' ' . $this->nom;
    }

    /**
     * @return int
     */
    public function getSalaire()
    {
        //l'attribut privé salaire est accessible et modifiable
        //depuis les méthodes de la classe
        return $this->salaire;
    }
    //faire une méthode augmenterSalaire() qui prend en parametre
    //le niveau d'augmentation et qui augmente la valeur de l'attribut salaire de l'employé depuis lequel
    //on apellera cette méthode
    /**
     * @param $augmentation
     */
    public function augmenterSalaire($augmentation)
    {
        $this->salaire += $augmentation;
    }
}
//----------------------------------------------------------------------------------------------------------------------

// instanciation de la classe
// $moi est un objet instance de la classe Employé
$moi = new Employe();

// la flèche permet d'accèder à l'attribut
$moi->nom = 'prout';

echo $moi->prenom . ' '; echo $moi->nom . ' ';
var_dump($moi->prenom, $moi->nom);


$toi = new Employe();
$toi->prenom = 'Ben';
var_dump($moi, $toi);

// appel de la méthode nomComplet()
echo $moi->nomComplet();

//fatal error : l'attribut dalaire est privé nous ne pouvons pas directement y acceder
//echo $moi->salaire;

echo '<br>' . $moi->getSalaire();
echo  $moi->augmenterSalaire(1000);
echo '<br>' . $moi->getSalaire();