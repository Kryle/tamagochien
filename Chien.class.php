<?php
include_once("Nourriture.class.php");

class Chien {
    private $nomChien, $humeurChien, $santeChien, $energieChien, $hygieneChien;

    public function __construct($nom, $humeur, $sante, $energie, $hygiene) {
        if(!is_string($nom)){
            $this->nomChien = null;
        } else {
            $this->nomChien = $nom;
        }
        if(!is_int($humeur)){
            $this->humeurChien = 100;
        } else {
            $this->humeurChien = $humeur;
        }
        if(!is_int($sante)){
            $this->santeChien = 100;
        } else {
            $this->santeChien = $sante;
        }
        if(!is_int($energie)){
            $this->energieChien = 100;
        } else {
            $this->energieChien = $energie;
        }
        if(!is_int($hygiene)){
            $this->hygieneChien = 100;
        } else {
            $this->hygieneChien = $hygiene;
        }
    }

    /**
     * @return string
     */
    public function getNomChien()
    {
        return $this->nomChien;
    }

    /**
     * @param string $nomChien
     */
    public function setNomChien($nomChien)
    {
        $this->nomChien = $nomChien;
    }

    /**
     * @return string
     */
    public function getHumeurChien()
    {
        return $this->humeurChien;
    }

    /**
     * @param string $humeurChien
     */
    public function setHumeurChien($humeurChien)
    {
        $this->humeurChien = $humeurChien;
    }

    /**
     * @return int
     */
    public function getSanteChien()
    {
        return $this->santeChien;
    }

    /**
     * @param int $santeChien
     */
    public function setSanteChien($santeChien)
    {
        $this->santeChien = $santeChien;
    }

    /**
     * @return int
     */
    public function getEnergieChien()
    {
        return $this->energieChien;
    }

    /**
     * @param int $energieChien
     */
    public function setEnergieChien($energieChien)
    {
        $this->energieChien = $energieChien;
    }

    /**
     * @return int
     */
    public function getHygieneChien()
    {
        return $this->hygieneChien;
    }

    /**
     * @param int $hygieneChien
     */
    public function setHygieneChien($hygieneChien)
    {
        $this->hygieneChien = $hygieneChien;
    }

    public function aboyer(){
        $this->energieChien = $this->energieChien-5;
        return $this->nomChien." aboie ! Il perd 5 d'énergie";
    }

    public function dormir(){
        $this->energieChien = 100;
        return $this->nomChien." dort, son énergie monte à 100 !";
    }

    public function mordre(){
        $this->energieChien = $this->energieChien-10;
        $this->humeurChien = 0;
        return $this->nomChien." vous a mordu ! Il perd 10 d'énergie et son humeur est de 0 !";
    }

    public function sePromener(){
        $this->energieChien = $this->energieChien-50;
        $this->humeurChien = 100;
        return $this->nomChien." et vous êtes aller en promenade, l'humeur de ".$this->nomChien." est de 100 mais il à perdu 50 d'énergie !";
    }

    public function statistique(){
        if($this->santeChien > 0){
            return "Le nom du chien est ".$this->nomChien.", son humeur est de ".$this->humeurChien.", sa santé est de ".$this->santeChien.", son énergie est de ".$this->energieChien.", son hygiène est de ".$this->hygieneChien.".";
        } else {
            return $this->nomChien." est mort !!!! Sa santé est de 0 !";
        }

    }

    public function manger($repas){
        $this->santeChien = $this->santeChien + $repas->getSanteNourriture();
        $this->humeurChien = $this->humeurChien + $repas->getHumeurNourriture();
        if($this->santeChien < 0){
            return $this->nomChien." est mort !!!! Sa santé est de 0 ! Il n'aurait pas dut manger un ".$repas->getNomNourriture()." !";
        }
        return $this->nomChien." mange un(e) ".$repas->getNomNourriture().", sa santé est de ".$this->getSanteChien().", son humeur est de ".$this->getHumeurChien();
    }
}