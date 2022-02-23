<?php

class Maison
{
    private $_view;

    function __construct($couleur, $largeur, $longueur)
    {
        $this->_view = "<div style='width: 0;height: 0;border-left: ".($largeur/2)."px solid transparent;border-right: ".($largeur/2)."px solid transparent;border-bottom: ".($largeur/4)."px solid black;'></div>";
        $this->_view .= '<div style="width: ' . $largeur . 'px;height: ' . $longueur. 'px;border: 2px solid ' . $couleur . ';"></div>';
    }

    public function fenetre($hauteur, $largeur, $couleur)
    {
        $fenetre = '<div style="display: flex;flex-direction: row;">';
        $fenetre .= '<div style="border: 2px solid ' . $couleur . ';width: ' . ( $largeur / 2). 'px;height: ' . $hauteur . 'px;">';
        $fenetre .= '</div>';
        $fenetre .= '<div style="border: 2px solid ' . $couleur . ';width: ' . ( $largeur / 2 ). 'px;height: ' . $hauteur . 'px;">';
        $fenetre .= '</div>';
        $fenetre .= '</div>';

        return $fenetre;
    }


    public function getRendu() {
        return $this->_view;
    }

}


$maMaison = new Maison('orange', 300, 150);

echo $maMaison->getRendu();




//echo $maMaison->fenetre(300, 200, '#FF0000');



