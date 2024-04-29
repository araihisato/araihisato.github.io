<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='リキキリン';
$pokemon->status=[
  'hitpoint'=>120,
  'attack'=>90,
  'defense'=>70,
  'special_attack'=>110,
  'special_defense'=>70,
  'speed'=>60
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);