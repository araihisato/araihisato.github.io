<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='エルフーン';
$pokemon->status=[
  'hitpoint'=>60,
  'attack'=>67,
  'defense'=>85,
  'special_attack'=>77,
  'special_defense'=>75,
  'speed'=>116
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);