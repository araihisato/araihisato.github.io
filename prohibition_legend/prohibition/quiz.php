<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>種族値クイズ</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-image:
            radial-gradient(290px 300px, rgba(123, 222, 217, 0.5) 20%, transparent 20%),
            radial-gradient(800px 780px, rgba(123, 222, 217, 0.5) 20%, transparent 20%),
            radial-gradient(1000px 990px, rgba(123, 222, 217, 0.5) 20%, transparent 20%),
            radial-gradient(400px 380px, rgba(123, 222, 217, 0.5) 20%, transparent 20%),
            radial-gradient(750px 750px, rgba(123, 222, 217, 0.5) 20%, transparent 20%),
            radial-gradient(100px 100px, rgba(123, 222, 217, 0.5) 20%, transparent 20%);
        background-size:
            1230px 1280px,
            810px 910px,
            1470px 990px,
            1200px 1700px,
            1520px 1200px,
            1100px 1300px;
        background-position:
            -300px -550px,
            -200px 100px,
            50px 510px,
            -200px -550px,
            -180px -250px,
            130px -150px;
    }

    .header {
        background-color: #00c8eb;
        margin: 0px;
        padding: 20px;
        font-size: 30px;
        font-family: MS Sans Serif;
        color: #ffff;
        text-align: left;
    }

    .question {
        width: 1000px;
        height: 600px;
        margin: 0 auto;
        text-align: center;
        /* border-width: 2px; 
    border-style: solid;
    border-color: #000000; ボーダーカラーを黒色に設定 */
    }

    .number {
        text-align: left;
        margin: 10px;
        font-size: 30px;
    }

    .name {
        padding: 20px;
        font-size: 20px;
    }

    input {
        width: 300px;
        height: 40px;
        margin: 10px;
        border: 2px solid #5b5b5b;

    }

    .custom-submit-button {
        color: #fff;
        background-color: #00c8eb;
        font-size: 25px;
        font-family: MS Sans Serif;
    }

    .custom-submit-button:hover {
        color: #fff;
        background: #009ff5;
    }

    .custom-submit-button {
        border-radius: 100vh;
    }
    </style>
</head>

<body>
    <div class="header">
        <p>ポケモン種族値クイズ</p>
    </div>
    <?php
require_once('pokemon.php');
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

echo "<div class='question'>";
echo "<div class='number'>";
echo "第{$session_number}問<br>";
echo "</div>";
echo "<div class='name'>";
echo "{$pokemon->name}の種族値を入力してください<br>";
echo "</div>";
echo '<form method="post" action="second.php">';
echo '<input name="hitpoint" type="number" placeholder="HP"><br>';
echo '<input name="attack" type="number" placeholder="こうげき"><br>';
echo '<input name="defense" type="number" placeholder="ぼうぎょ"><br>';
echo '<input name="special_attack" type="number" placeholder="とくこう"><br>';
echo '<input name="special_defense" type="number" placeholder="とくぼう"><br>';
echo '<input name="speed" type="number" placeholder="すばやさ"><br>';
echo '<input type="submit" value=解答 class="custom-submit-button">';
echo '</form>';
echo '</div>';
}

public function getQuestiontwo($pokemon){
  if(isset($_SESSION['questionNumber'])){
$session_number=$_SESSION['questionNumber'];
}else{
 $_SESSION['questionNumber']=1;
 $session_number=$_SESSION['questionNumber'];
}

echo "<div class='question'>";
echo "<div class='number'>";
echo "第{$session_number}問<br>";
echo "</div>";
echo "<div class='name'>";
echo "{$pokemon->name}の種族値を入力してください<br>";
echo "</div>";
echo '<form method="post" action="third.php">';
echo '<input name="hitpoint" type="number" placeholder="HP"><br>';
echo '<input name="attack" type="number" placeholder="こうげき"><br>';
echo '<input name="defense" type="number" placeholder="ぼうぎょ"><br>';
echo '<input name="special_attack" type="number" placeholder="とくこう"><br>';
echo '<input name="special_defense" type="number" placeholder="とくぼう"><br>';
echo '<input name="speed" type="number" placeholder="すばやさ"><br>';
echo '<input type="submit" value=解答 class="custom-submit-button">';
echo '</form>';
echo '</div>';
}

}
?>
</body>

</html>