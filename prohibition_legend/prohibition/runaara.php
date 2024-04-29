<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ルナアーラ';
$pokemon->status=['hitpoint'=>137,'attack'=>113,'defense'=>89,'special_attack'=>137,'special_defense'=>107,'speed'=>97];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);