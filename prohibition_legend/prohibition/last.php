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

    .correct-text {
        font-size: 70px;
        color: #009ff5;
        /* 他のスタイルを追加することができます */
        text-align: center;
        margin: 100px;
    }

    .top-button {
        text-align: center;
    }

    .top {
        color: #fff;
        background-color: #00c8eb;
        font-size: 25px;
        font-family: MS Sans Serif;
        padding: 15px 30px;
    }

    .top:hover {
        color: #fff;
        background: #009ff5;
    }

    .top {
        border-radius: 100vh;
    }
    </style>
</head>

<body>
    <div class="header">
        <p>ポケモン種族値クイズ</p>
    </div>
    <?php
session_start();
if(isset($_SESSION['correct'])){
  session_destroy();
  $correct=$_SESSION['correct'];
  echo '<div class="correct-text">'.$correct.'問正解</div>';
  
  }
  echo '<div class="top-button">';
  echo '<button class="top" onclick="location.href=\'zero.php\'">トップ</button>';
  echo '</div>';
  ?>
</body>

</html>