<?php
require_once('lion.php');
require_once('chevre.php');


$lion = new Lion();
$chevre = new Chevre();

echo $lion->getCri().'<br>';
echo $chevre->getCri().'<br>';
