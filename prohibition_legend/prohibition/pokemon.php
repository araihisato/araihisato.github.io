<?php
session_start();
class Pokemon{
  public $name;
  public $status;
  // public function PokemonName(){
  //   return $this->name;
  // }

  public function PokemonStatus(){
    return $this->status;
  }
}