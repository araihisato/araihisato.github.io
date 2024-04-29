<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='キュウコン(アローラのすがた)';
$pokemon->status=[
  'hitpoint'=>73,
  'attack'=>67,
  'defense'=>75,
  'special_attack'=>81,
  'special_defense'=>100,
  'speed'=>109
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);