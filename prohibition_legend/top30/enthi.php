<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='エンティ';
$pokemon->status=[
  'hitpoint'=>115,
  'attack'=>115,
  'defense'=>85,
  'special_attack'=>90,
  'special_defense'=>75,
  'speed'=>100
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);