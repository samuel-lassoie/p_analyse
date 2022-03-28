<?php


require_once('user.php');

class Madame extends User {
    protected $_genre = 'madame';
}


$madame = new Madame();
$madame->set_nom('Dupond');
$madame->set_prenom('Marie');
// $madame->set_nom('ROGER')
//        ->set_prenom('Bernard');


echo $madame->salutation();