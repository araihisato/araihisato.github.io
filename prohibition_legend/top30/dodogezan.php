<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='ドドゲザン';
$pokemon->status=[
  'hitpoint'=>100,
  'attack'=>135,
  'defense'=>120,
  'special_attack'=>60,
  'special_defense'=>85,
  'speed'=>50
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);