<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ルギア';
$pokemon->status=['hitpoint'=>106,'attack'=>90,'defense'=>130,'special_attack'=>90,'special_defense'=>154,'speed'=>110];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);