<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>種族値クイズ</title>
</head>

<body>
    <div class="wrapper">
        <div class="fade-in-text">
            <p>ポケモン種族値クイズ</p>
        </div>
        <div class="fade-in-text2">
            <p>どちらか選んでね！</p>

            <button class="btn btn--orange btn--circle btn--circle-a btn--shadow" onclick="prohibition()"><span
                    style="font-size: 30px;">禁止伝説</span></button>
            <button class="btn btn--red btn--circle btn--circle-a btn--shadow" onclick="rank()"> <span
                    style="font-size: 30px;">人気ポケモン</span></button>
        </div>
    </div>
    <!-- <a href="orgapon.php">スタート</a> -->
    <script>
    function prohibition() {
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

        window.location.href = randomItem;
    }

    function rank() {
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
        window.location.href = randomItem;
    }

    const fadeElement = document.querySelector('.fade-in-text2');

    // ページが読み込まれたときに実行
    document.addEventListener('DOMContentLoaded', function() {
        // 1000ミリ秒（1秒）後にfade-inクラスを追加
        setTimeout(function() {
            fadeElement.classList.add('fade-in');
        }, 1500);
    });
    </script>
</body>

</html>