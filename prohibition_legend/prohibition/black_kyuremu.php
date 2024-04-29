<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ブラックキュレム';
$pokemon->status=['hitpoint'=>125,'attack'=>170,'defense'=>100,'special_attack'=>120,'special_defense'=>90,'speed'=>95];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);