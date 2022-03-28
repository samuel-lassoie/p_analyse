<?php

date_default_timezone_set('Europe/Paris');

abstract class User
{
    private $_nom;
    private $_prenom;
    private $_date_de_naissance;
    protected $_genre = '';


    private function _moment()
    {
        $h = date('H');
        if ($h >= 0 && $h <= 12) {
            echo 'Bonjour';
        } else if($h > 12 && $h <= 17){
            echo 'Bon après-midi';
        } else {
            echo 'Bonsoir';
        }
    }

    public function salutation()
    {
        return $this->_moment() .  ' '  . $this->_genre . ' ' . $this->get_prenom() . ' ' . $this->get_nom();
    }
    /**
     * Get the value of _date_de_naissance
     */
    public function get_date_de_naissance()
    {
        return $this->_date_de_naissance;
    }

    /**
     * Set the value of _date_de_naissance
     *
     * @return  self
     */
    public function set_date_de_naissance($_date_de_naissance)
    {
        $this->_date_de_naissance = $_date_de_naissance;

        return $this;
    }

    /**
     * Get the value of _prenom
     */
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */
    public function set_prenom($_prenom)
    {
        $this->_prenom = strtoupper($_prenom);

        return $this;
    }

    /**
     * Get the value of _nom
     */
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */
    public function set_nom($_nom)
    {
        $this->_nom = strtoupper($_nom);

        return $this;
    }
}
