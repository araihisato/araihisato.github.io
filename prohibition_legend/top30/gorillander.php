<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ゴリランダー';
$pokemon->status=[
  'hitpoint'=>100,
  'attack'=>125,
  'defense'=>90,
  'special_attack'=>60,
  'special_defense'=>70,
  'speed'=>85
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);