<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ウガツホムラ';
$pokemon->status=[
  'hitpoint'=>105,
  'attack'=>115,
  'defense'=>121,
  'special_attack'=>65,
  'special_defense'=>93,
  'speed'=>91
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);