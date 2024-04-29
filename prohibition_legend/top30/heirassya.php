<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ヘイラッシャ';
$pokemon->status=[
  'hitpoint'=>150,
  'attack'=>100,
  'defense'=>115,
  'special_attack'=>65,
  'special_defense'=>65,
  'speed'=>35
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);