<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='コータス';
$pokemon->status=[
  'hitpoint'=>70,
  'attack'=>85,
  'defense'=>140,
  'special_attack'=>85,
  'special_defense'=>70,
  'speed'=>20
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);