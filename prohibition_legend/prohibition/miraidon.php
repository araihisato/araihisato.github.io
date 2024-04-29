<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='カイオーガ';
$pokemon->status=['hitpoint'=>100,'attack'=>85,'defense'=>100,'special_attack'=>135,'special_defense'=>115,'speed'=>135];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);