<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='キュレム';
$pokemon->status=['hitpoint'=>125,'attack'=>130,'defense'=>90,'special_attack'=>130,'special_defense'=>90,'speed'=>95];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);