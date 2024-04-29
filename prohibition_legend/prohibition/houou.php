<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ホウオウ';
$pokemon->status=['hitpoint'=>106,'attack'=>130,'defense'=>90,'special_attack'=>110,'special_defense'=>154,'speed'=>90];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);