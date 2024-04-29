<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='タケルライコ';
$pokemon->status=[
  'hitpoint'=>125,
  'attack'=>73,
  'defense'=>91,
  'special_attack'=>137,
  'special_defense'=>89,
  'speed'=>75
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);