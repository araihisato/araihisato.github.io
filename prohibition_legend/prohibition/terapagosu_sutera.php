<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='テラパゴス(ステラフォルム)';
$pokemon->status=['hitpoint'=>160,'attack'=>105,'defense'=>110,'special_attack'=>130,'special_defense'=>110,'speed'=>85];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);