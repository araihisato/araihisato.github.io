<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .correct-message {
        color: #009ff5;
        /* 正解メッセージのテキスト色 */
        font-size: 70px;
        /* 正解メッセージのフォントサイズ */
        text-align: center;
        margin: 100px;
    }

    .incorrect-message {
        color: #009ff5;
        /* 不正解メッセージのテキスト色 */
        font-size: 70px;
        /* 不正解メッセージのフォントサイズ */
        text-align: center;
        margin: 100px;
    }

    .button-container {
        text-align: center;

    }

    .next {
        color: #fff;
        background-color: #00c8eb;
        font-size: 25px;
        font-family: MS Sans Serif;
        padding: 15px 30px;
    }

    .next:hover {
        color: #fff;
        background: #009ff5;
    }

    .next {
        border-radius: 100vh;
    }
    </style>
</head>

<body>


    <?php

require_once('pokemon.php');
require_once('quiz.php');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


// $hitpoint=intval($_POST['hitpoint']);
// $attack=intval($_POST['attack']);
// $defense=intval($_POST['defense']);
// $special_attack=intval($_POST['special_attack']);
// $special_defense=intval($_POST['special_defense']);
// $speed=intval($_POST['speed']);

$numbers=[
  'hitpoint'=>intval($_POST['hitpoint']),
  'attack'=>intval($_POST['attack']),
  'defense'=>intval($_POST['defense']),
  'special_attack'=>intval($_POST['special_attack']),
  'special_defense'=>intval($_POST['special_defense']),
  'speed'=> intval($_POST['speed'])

];
// $pokemon=[
// 'hitpoint'=>100,'attack'=>100,'defense'=>90,'special_attack'=>150,'special_defense'=>140,'speed'=>90
// ];
// $pokemon= new Pokemon();

// $status = $pokemon->PokemonStatus();
if(isset($_SESSION['status'])){
  $pokemonStatus = $_SESSION['status'];
  // var_dump($pokemonStatus);
  }else{
    echo 'セッションなし';
  }
  // var_dump($pokemonStatus);

if(isset($_SESSION['correct'])){
  $correct=$_SESSION['correct'];
}else{
  $_SESSION['correct']=0;
  $correct=$_SESSION['correct'];
}

// 　＝　だと比較にならない、比較にするには==
if($numbers===$pokemonStatus){
  echo '<div class="correct-message">正解</div>';
  $_SESSION['correct']++;
  $correct=$_SESSION['correct'];
}else{
 echo '<div class="incorrect-message">不正解</div>';
}
// var_dump($correct);
// chatgptに頼った部分　セッションがあったら数字をプラスする方法
if(isset($_SESSION['questionNumber'])){
 $_SESSION['questionNumber']++;
 $quizNumber=$_SESSION['questionNumber'];
//  echo 'セッションあり';
}else{
  $_SESSION['questionNumber']=0;
  $quizNumber=$_SESSION['questionNumber'];
  echo 'セッションなし';
}
// var_dump($quizNumber);
// 途中で$quizNumberを変えてしまうと、セッションが終わらなくなってしまう(10から3に変えると,3を過ぎているため)
if($quizNumber==10){
  // session_destroy();

  echo '<div class="button-container">';
  echo '<button class="next" onclick="location.href=\'last.php\'">結果</button>';
  echo '</div>';
}else{
  echo '<div class="button-container">';
  echo '<button class="next" onclick="randomPage()">次へ</button>';
  echo '</div>';
echo '<script>

    function randomPage(){
      let items = [
        "kaioga.php",
        "zasian.php",
        "kurobadorex.php",
        "shirobadrex.php",
        "black_kyuremu.php",
        "dhiaruga.php",
        "ghirathina_another.php",
        "ghirathina_origin.php",
        "guradon.php",
        "houou.php",
        "koraidon.php",
        "kyuremu.php",
        "myutwo.php",
        "miraidon.php",
        "mugendaina.php",
        "nekurozuma_tategami.php",
        "nekurozuma_tsubasa.php",
        "nekurozuma.php",
        "parukia.php",
        "rekuza.php",
        "reshiramu.php",
        "rugia.php",
        "runaara.php",
        "sorugareo.php",
        "terabagosu.php",
        "terapagosu_sutera.php",
        "white_kyuremu.php",
        "zamazenta.php"


    ];
        let randomIndex = Math.floor(Math.random() * items.length);
        let randomItem = items[randomIndex];
        // console.log("orgapon.php:" + randomItem);
        window.location.href =randomItem;
    }
</script>';
}
?>
</body>

</html>