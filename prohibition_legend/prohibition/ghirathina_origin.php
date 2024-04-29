<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ギラティナ(オリジンフォルム)';
$pokemon->status=['hitpoint'=>150,'attack'=>120,'defense'=>100,'special_attack'=>120,'special_defense'=>100,'speed'=>90];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);