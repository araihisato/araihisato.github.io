<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='オーガポン';
$pokemon->status=[
  'hitpoint'=>80,
  'attack'=>120,
  'defense'=>84,
  'special_attack'=>60,
  'special_defense'=>96,
  'speed'=>110
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);