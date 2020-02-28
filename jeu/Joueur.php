<?php


class Joueur
{
    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var int
     */
    private $pointsVie = 100;

    private static $intensites = [
        'faible' => 10,
        'moyen' => 20,
        'fort' => 50,
    ];
    public function __construct(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     * @return Joueur
     */
    public function setPseudo(string $pseudo): Joueur
    {
        $this->pseudo = $pseudo;
        return $this;
    }

    /**
     * @return int
     */
    public function getPointsVie(): int
    {
        return $this->pointsVie;
    }

    /**
     * @param int $pointsVie
     * @return Joueur
     */
    public function setPointsVie(int $pointsVie): Joueur
    {
        if($pointsVie <0){
            $pointsVie = 0 ;
        }
        $this->pointsVie = $pointsVie;
        return $this;
    }

    public function frapper(Joueur $joueur, string $intensite)
    {
        if(!array_key_exists($intensite, self::$intensites)){
            trigger_error('Intensité inconnue',E_USER_WARNING);
            return;
        }

        $niveauVie = $joueur->getPointsVie() - self::$intensites[$intensite];
        $joueur->setPointsVie($niveauVie);
    }


}