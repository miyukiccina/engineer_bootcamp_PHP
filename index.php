<?php 
    // // 演習２
    // echo "PHPを勉強しています";
    // // 改行↓
    // echo "<br>";

    // //　演習３
    // $apple = "りんご";
    // $num = 10 + 10 ;
    // echo $apple;
    // echo $num;
    // echo "<br>";

    // // 演習４
    // $a = 1;
    // $b = 2;

    // // 下記の方法でも改行できる
    // if($a == 1){echo "1が表示されました"."<br>";}
    // if($b == 2){echo "2が表示されました";}
    // echo "<br>";

    // // 演習５
    // echo mt_rand(1,6)."⇦ランダムな数字";
    // // mt_rand(1,6);　1-6の間でランダムな数字を作成するコード

    // //　課題　おみくじアプリ
    // $number = mt_rand(1,4);
    // echo "<br>";
    // // echo $number; ⇦ランダム数字テスト

    // // ここまで動作確認済み＝＝＝＝






    // // ここから今日の最後の課題

    $number = mt_rand(1,4);

    // header関数でコンテンツの形式が画像であると宣言
    header('Content-Type: image/jpg');
    
    if($number == 1){readfile('IMG/daikichi.jpg');}
    elseif($number == 2){readfile('IMG/chukichi.jpg');}
    elseif($number == 3){readfile('IMG/kichi.jpg');} 
    elseif($number == 4){readfile('IMG/kyo.jpeg');}   

    // // 画像のパスを作る
    // $filePath1 = 'IMG/daikichi.jpg';

    // // パスから画像データを取得
    // $data1 = file_get_contents($filePath1);

    // // header関数でコンテンツの形式が画像であると宣言
    // header('Content-type: image/jpg');

    // //データを出力
    // echo $data1; 



    // if($number == 1){echo "<img src="IMG/daikichi.png">"."大吉";}
    // elseif($number == 2){echo "<img src="img/chukichi.png">"."中吉";}
    // elseif($number == 3){echo "<img src="img/syokichi.png" >"."吉";}
    // elseif($number == 4){echo "<img src="img/kyo.png" >"."凶";}

?>