<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='カイオーガ';
$pokemon->status=['hitpoint'=>100,'attack'=>100,'defense'=>90,'special_attack'=>150,'special_defense'=>140,'speed'=>90];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);



// $pokemon=[
// 'hitpoint'=>100,'attack'=>100,'defense'=>90,'special_attack'=>150,'special_defense'=>140,'speed'=>90
// ];