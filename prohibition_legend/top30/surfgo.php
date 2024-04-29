<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='サーフゴー';
$pokemon->status=[
  'hitpoint'=>87,
  'attack'=>60,
  'defense'=>95,
  'special_attack'=>133,
  'special_defense'=>91,
  'speed'=>84
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);