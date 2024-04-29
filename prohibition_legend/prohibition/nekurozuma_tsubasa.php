<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ネクロズマ(あかつきのつばさ)';
$pokemon->status=['hitpoint'=>97,'attack'=>113,'defense'=>109,'special_attack'=>157,'special_defense'=>127,'speed'=>77];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);