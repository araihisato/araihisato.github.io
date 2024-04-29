<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='コライドン';
$pokemon->status=['hitpoint'=>100,'attack'=>135,'defense'=>115,'special_attack'=>85,'special_defense'=>100,'speed'=>135];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);