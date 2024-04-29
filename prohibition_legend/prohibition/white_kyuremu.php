<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ホワイトキュレム';
$pokemon->status=['hitpoint'=>125,'attack'=>120,'defense'=>90,'special_attack'=>170,'special_defense'=>100,'speed'=>95];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);