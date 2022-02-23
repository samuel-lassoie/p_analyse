<?php

class Maison
{
    private $_content;
    private $_couleur;
    private $_largeur;
    private $_longueur;

    function __construct($couleur, $largeur, $longueur)
    {
        $this->_content = '';
        $this->_largeur = $largeur;
        $this->_couleur = $couleur;
        $this->_longueur = $longueur;
    }

    public function fenetre($hauteur, $largeur, $couleur, $left, $top): void
    {
        $this->_content .= '<div style="position: absolute;left: ' . $left . 'px;top: ' . $top . 'px;display: flex;flex-direction: row;">';
        $this->_content .= '<div style="border: 2px solid ' . $couleur . ';width: ' . ( $largeur / 2). 'px;height: ' . $hauteur . 'px;">';
        $this->_content .= '</div>';
        $this->_content .= '<div style="border: 2px solid ' . $couleur . ';width: ' . ( $largeur / 2 ). 'px;height: ' . $hauteur . 'px;">';
        $this->_content .= '</div>';
        $this->_content .= '</div>';
    }


    public function getRendu() {
        $view = "<div style='width: 0;height: 0;border-left: ".($this->_largeur/2)."px solid transparent;border-right: ".($this->_largeur/2)."px solid transparent;border-bottom: ".($this->_largeur/4)."px solid black;'></div>";
        $view .= '<div style="position: relative;width: ' . $this->_largeur . 'px;height: ' . $this->_longueur. 'px;border: 2px solid ' . $this->_couleur . ';">' . $this->_content.'</div>';

        return $view;
    }

}


$maMaison = new Maison('orange', 300, 150);
$maMaison->fenetre(100, 250, 'blue', 20, 40);


echo $maMaison->getRendu();




//echo $maMaison->fenetre(300, 200, '#FF0000');



