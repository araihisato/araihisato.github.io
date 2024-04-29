<?php
require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');




$pokemon= new Pokemon();
$pokemon->name='テツノカイナ';
$pokemon->status=[
  'hitpoint'=>154,
  'attack'=>140,
  'defense'=>108,
  'special_attack'=>50,
  'special_defense'=>68,
  'speed'=>50
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestiontwo($pokemon);