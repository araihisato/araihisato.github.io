<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ムゲンダイナ';
$pokemon->status=['hitpoint'=>140,'attack'=>85,'defense'=>95,'special_attack'=>145,'special_defense'=>95,'speed'=>130];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);