<?php

$toto = [
    'dd1',
    'dd2',
    'dd3',
    'dd4',
    'dd5',
];

echo "<pre>";
print_r($toto);

unset($toto[3]);
print_r($toto);
exit;

require_once('user.php');

$u1 = new User();
$u1->set_nom('Maurcie')
    ->set_prenom('toto')
    ->set_date_de_naissance('2000-01-01');

$u2 = new User();
$u2->set_nom('Maurcie')
    ->set_prenom('toto')
    ->set_date_de_naissance('2000-01-01');

$users = [];
$users[] = $u1;
$users[] = $u2;

echo "<pre>";
print_r($users);
