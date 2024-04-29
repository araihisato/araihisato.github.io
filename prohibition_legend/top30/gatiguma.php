<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ガチグマ';
$pokemon->status=[
  'hitpoint'=>130,
  'attack'=>140,
  'defense'=>105,
  'special_attack'=>45,
  'special_defense'=>80,
  'speed'=>50
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);