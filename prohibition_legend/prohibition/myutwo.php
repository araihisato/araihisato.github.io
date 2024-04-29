<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ミュウツー';
$pokemon->status=['hitpoint'=>106,'attack'=>110,'defense'=>90,'special_attack'=>154,'special_defense'=>90,'speed'=>130];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);