<?php

abstract class Mammifere
{
    protected $_cri = 'PAS DE CRI';

    private $_reproduction = 'vivipare';

    private $_pilosite = 'poilu';

    private $_sang = 'chaud';


    public function getReproduction(): string
    {
        return $this->_reproduction;
    }

    public function getPilosite(): string
    {
        return $this->_pilosite;
    }

    public function getSang(): string
    {
        return $this->_sang;
    }

    public function getCri(): string
    {
        return $this->_cri;
    }
}
