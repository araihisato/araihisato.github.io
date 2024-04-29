<?php
require_once('pokemon.php');
require_once('quiz.php');

$pokemon=new Pokemon();
$pokemon->name='バドレックス(はくばじょうのすがた)';
$pokemon->status=['hitpoint'=>100,'attack'=>165,'defense'=>150,'special_attack'=>85,'special_defense'=>130,'speed'=>50];

$status=$pokemon->PokemonStatus();
$_SESSION['status']=$status;
// var_dump($status);

$quiz=new Quiz();
$quiz->getQuestion($pokemon);