<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon=new Pokemon();
$pokemon->name='バドレックス(こくばじょうのすがた)';
$pokemon->status=['hitpoint'=>100,'attack'=>85,'defense'=>80,'special_attack'=>165,'special_defense'=>100,'speed'=>150];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz=new Quiz();
$quiz->getQuestion($pokemon);