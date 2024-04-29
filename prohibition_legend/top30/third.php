<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>種族値クイズ</title>
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

require_once('../prohibition/pokemon.php');
require_once('../prohibition/quiz.php');

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
  echo '<button class="next" onclick="location.href=\'../prohibition/last.php\'">結果</button>';
  echo '</div>';
}else{
  echo '<div class="button-container">';
  echo '<button class="next" onclick="randomPage()">次へ</button>';
  echo '</div>';
echo '<script>

    function randomPage(){
      let items = [
        "../top30/habatakukami.php",
        "../top30/takeruraiko.php",
        "../top30/burijurasu.php",
        "../top30/dodogezan.php",
        "../top30/enthi.php",
        "../top30/eruhun.php",
        "../top30/gaogaen.php",
        "../top30/gatiguma_akatsuki.php",
        "../top30/gatiguma.php",
        "../top30/gorillander.php",
        "../top30/heirassya.php",
        "../top30/iesan.php",
        "../top30/iyui.php",
        "../top30/kairyu.php",
        "../top30/kotasu.php",
        "../top30/kureseria.php",
        "../top30/kyukon_arora.php",
        "../top30/morobareru.php",
        "../top30/orgapon.php",
        "../top30/paojian.php",
        "../top30/randros.php",
        "../top30/rikikirin.php",
        "../top30/surfgo.php",
        "../top30/tetsunokaina.php",
        "../top30/toruneros.php",
        "../top30/ugatsuhomura.php",
        "../top30/uneruminamo.php",
        "../top30/uraos_aku.php",
        "../top30/uraos_mizu.php",
        "../top30/windhi_hisui.php"


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