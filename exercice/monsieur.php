<?php

require_once('user.php');


class Monsieur extends User {
    protected $_genre = 'monsieur';
}


$monsieur = new Monsieur();
$monsieur->set_nom('Robert');
$monsieur->set_prenom('TOTO');
// $monsieur->set_nom('ROGER')
//        ->set_prenom('Bernard');


echo $monsieur->salutation();