<?php
require_once('pokemon.php');
require_once('quiz.php');





$pokemon= new Pokemon();
$pokemon->name='ザシアン(けんのおう)';
$pokemon->status=[
  'hitpoint'=>92,
  'attack'=>150,
  'defense'=>115,
  'special_attack'=>80,
  'special_defense'=>115,
  'speed'=>148
];
// var_dump($pokemon);

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);

// データを渡す方法は2つある。もう一つは、引数を使って渡す方法
// session_start()は１回しか使えない