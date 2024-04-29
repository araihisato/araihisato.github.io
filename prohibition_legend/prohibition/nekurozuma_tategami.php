<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ネクロズマ(たそがれのたてがみ)';
$pokemon->status=['hitpoint'=>97,'attack'=>157,'defense'=>127,'special_attack'=>113,'special_defense'=>109,'speed'=>77];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);