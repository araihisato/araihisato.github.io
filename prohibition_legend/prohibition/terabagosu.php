<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='テラパゴス(テラスタルフォルム)';
$pokemon->status=['hitpoint'=>95,'attack'=>95,'defense'=>110,'special_attack'=>105,'special_defense'=>110,'speed'=>85];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);