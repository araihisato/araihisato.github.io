<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ウインディ(ヒスイのすがた)';
$pokemon->status=[
  'hitpoint'=>95,
  'attack'=>115,
  'defense'=>80,
  'special_attack'=>95,
  'special_defense'=>80,
  'speed'=>90
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);