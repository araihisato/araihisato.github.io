<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon= new Pokemon();
$pokemon->name='ザマゼンタ(たてのおう)';
$pokemon->status=['hitpoint'=>92,'attack'=>120,'defense'=>140,'special_attack'=>80,'special_defense'=>140,'speed'=>128];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz = new Quiz;
$quiz->getQuestion($pokemon);