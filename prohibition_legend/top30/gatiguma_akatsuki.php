<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ガチグマ(アカツキ)';
$pokemon->status=[
  'hitpoint'=>113,
  'attack'=>70,
  'defense'=>120,
  'special_attack'=>135,
  'special_defense'=>65,
  'speed'=>52
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);