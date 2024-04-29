<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='トルネロス(けしん)';
$pokemon->status=[
  'hitpoint'=>79,
  'attack'=>115,
  'defense'=>70,
  'special_attack'=>125,
  'special_defense'=>80,
  'speed'=>111
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);