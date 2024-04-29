<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ガオガエン';
$pokemon->status=[
  'hitpoint'=>95,
  'attack'=>115,
  'defense'=>90,
  'special_attack'=>80,
  'special_defense'=>90,
  'speed'=>60
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);