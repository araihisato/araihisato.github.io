<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='グラードン';
$pokemon->status=['hitpoint'=>100,'attack'=>150,'defense'=>140,'special_attack'=>100,'special_defense'=>90,'speed'=>90];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);