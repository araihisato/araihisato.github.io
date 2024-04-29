<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ネクロズマ';
$pokemon->status=['hitpoint'=>97,'attack'=>107,'defense'=>101,'special_attack'=>127,'special_defense'=>89,'speed'=>79];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);