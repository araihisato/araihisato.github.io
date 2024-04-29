<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ウーラオス(いちげきのかた)';
$pokemon->status=[
  'hitpoint'=>100,
  'attack'=>130,
  'defense'=>100,
  'special_attack'=>63,
  'special_defense'=>60,
  'speed'=>97
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);