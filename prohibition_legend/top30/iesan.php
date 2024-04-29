<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='イエッサン';
$pokemon->status=[
  'hitpoint'=>70,
  'attack'=>55,
  'defense'=>65,
  'special_attack'=>95,
  'special_defense'=>105,
  'speed'=>85
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);