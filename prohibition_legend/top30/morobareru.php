<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='モロバレル';
$pokemon->status=[
  'hitpoint'=>114,
  'attack'=>85,
  'defense'=>70,
  'special_attack'=>85,
  'special_defense'=>80,
  'speed'=>30
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);