<?php

class User
{
    private $_nom;
    private $_prenom;
    private $_date_de_naissance;

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
        $this->_nom = $_nom;

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
        $this->_prenom = $_prenom;

        return $this;
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
}
