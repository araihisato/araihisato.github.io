<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='カイリュー';
$pokemon->status=[
  'hitpoint'=>91,
  'attack'=>134,
  'defense'=>95,
  'special_attack'=>100,
  'special_defense'=>100,
  'speed'=>80
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);