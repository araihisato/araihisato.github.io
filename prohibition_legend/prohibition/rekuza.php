<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='レックウザ';
$pokemon->status=['hitpoint'=>105,'attack'=>150,'defense'=>90,'special_attack'=>150,'special_defense'=>90,'speed'=>95];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);