<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ディアルガ';
$pokemon->status=['hitpoint'=>100,'attack'=>120,'defense'=>120,'special_attack'=>150,'special_defense'=>100,'speed'=>90];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);