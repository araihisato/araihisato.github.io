<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ウネルミナモ';
$pokemon->status=[
  'hitpoint'=>99,
  'attack'=>83,
  'defense'=>91,
  'special_attack'=>125,
  'special_defense'=>83,
  'speed'=>109
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);