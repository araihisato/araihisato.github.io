


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


// $pokemon= new Pokemon();
// $pokemon->name='カイオーガ';
// $pokemon->status=['hitpoint'=>100,'attack'=>100,'defense'=>90,'special_attack'=>150,'special_defense'=>140,'speed'=>90];
// $pokemon->PokemonName();
// var_dump($pokemon);

class Quiz{
  public $questionNumber;
//   public function session(){
//     session_start();
// $questionNumber=$_SESSION['questionNumber'];
// // echo $questionNumber;
//   }

  public function __construct()
  {
     $questionNumber=$this->questionNumber;
  }

public function getQuestion($pokemon){
  if(isset($_SESSION['questionNumber'])){
$session_number=$_SESSION['questionNumber'];
}else{
 $_SESSION['questionNumber']=1;
 $session_number=$_SESSION['questionNumber'];
}

echo "第{$session_number}問<br>";
echo "{$pokemon->name}の種族値を入力してください<br>";
echo '<form method="post" action="second.php">';
echo '<input name="hitpoint" type="number">';
echo '<input name="attack" type="number">';
echo '<input name="defense" type="number">';
echo '<input name="special_attack" type="number">';
echo '<input name="special_defense" type="number">';
echo '<input name="speed" type="number">';
echo '<input type="submit" value=解答>';
echo '</form>';

}
//   public function __construct()
//   {
//     return $this->questionNumber;
//  }

//  $quizNumber= new Quiz;
}

