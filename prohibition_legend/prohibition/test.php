<?php
class Pokemon{
  public $name;
  public $status;

  // status プロパティの値を取得するメソッド
  public function getStatus(){
      return $this->status;
  }
}

// Pokemon インスタンスを生成
$pokemon = new Pokemon();
$pokemon->name = 'カイオーガ';
$pokemon->status=['hitpoint'=>92,'attack'=>150,'defense'=>115,'special_attack'=>80,'special_defense'=>115,'speed'=>148];

// getStatus メソッドを呼び出して status プロパティの値を取得
$status = $pokemon->getStatus();

// 取得した値を表示
// var_dump($status);