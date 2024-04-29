<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='イーユイ';
$pokemon->status=[
  'hitpoint'=>55,
  'attack'=>80,
  'defense'=>80,
  'special_attack'=>135,
  'special_defense'=>120,
  'speed'=>100
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);