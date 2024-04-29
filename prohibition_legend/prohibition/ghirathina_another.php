<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ギラティナ(アナザーフォルム)';
$pokemon->status=['hitpoint'=>150,'attack'=>100,'defense'=>120,'special_attack'=>100,'special_defense'=>120,'speed'=>90];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);