<?php


class Nourriture {
    private $nomNourriture, $santeNourriture, $humeurNourriture;

    public function __construct($nom, $sante, $humeur) {
        $this->nomNourriture = $nom;
        $this->santeNourriture = $sante;
        $this->humeurNourriture = $humeur;
    }

    /**
     * @return mixed
     */
    public function getNomNourriture()
    {
        return $this->nomNourriture;
    }

    /**
     * @return mixed
     */
    public function getSanteNourriture()
    {
        return $this->santeNourriture;
    }

    /**
     * @return mixed
     */
    public function getHumeurNourriture()
    {
        return $this->humeurNourriture;
    }

    public function is_nourriture($nourriture){
        if($nourriture.$this->getNomNourriture() == null) {
            return false;
        }
        return true;
    }

}