<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='パオジアン';
$pokemon->status=[
  'hitpoint'=>80,
  'attack'=>120,
  'defense'=>80,
  'special_attack'=>90,
  'special_defense'=>65,
  'speed'=>135
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);