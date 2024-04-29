<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ハバタクカミ';
$pokemon->status=['hitpoint'=>55,'attack'=>55,'defense'=>55,'special_attack'=>135,'special_defense'=>135,'speed'=>135];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);