<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ブリジュラス';
$pokemon->status=[
  'hitpoint'=>90,
  'attack'=>105,
  'defense'=>130,
  'special_attack'=>125,
  'special_defense'=>65,
  'speed'=>85
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);