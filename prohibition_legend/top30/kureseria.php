<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='クレセリア';
$pokemon->status=[
  'hitpoint'=>120,
  'attack'=>70,
  'defense'=>110,
  'special_attack'=>75,
  'special_defense'=>120,
  'speed'=>85
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);