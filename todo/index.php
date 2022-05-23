<?php

require_once('classes/todo.php');


// CREATION TODO
// $courses = new ToDo();
// $courses->set_label('Soirée disco');
// $courses->save();

// RECUPERER UNE TOD
$t1 = new ToDo(1);
$t1->set_label('TADAMMMMM');


echo '<pre>';
var_dump($t1);