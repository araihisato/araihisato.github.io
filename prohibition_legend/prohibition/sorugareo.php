<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ソルガレオ';
$pokemon->status=['hitpoint'=>137,'attack'=>137,'defense'=>107,'special_attack'=>113,'special_defense'=>89,'speed'=>97];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);