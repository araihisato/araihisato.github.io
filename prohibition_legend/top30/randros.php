<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ランドロス(けしん)';
$pokemon->status=[
  'hitpoint'=>89,
  'attack'=>125,
  'defense'=>90,
  'special_attack'=>115,
  'special_defense'=>80,
  'speed'=>101
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);