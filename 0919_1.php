<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Html 與 PHP 的關係</h3>
    <p>這一行是由 HTML 產生</p>
    <?php
    echo "<p>這一行是由 PHP 產生，包含 p 標籤</p>";
    echo "這一行沒有 p 標籤";
    echo "<p>這一行是由 PHP 產生，包含 p 標籤</p>";
    ?>
    <?= "<p>這一行是由 PHP 的另一種方式產生，省略 echo </p>"; ?>
    <hr>
    <h3>Html 與 PHP 註解方式</h3>
    <!-- 註解能幫助做提示說明或除錯 -->
    <ul>
        <li>php 的註解為 /* */ 或是 // 兩種</li>
        <li>HTML 的註解為 < !-- -->
        </li>
    </ul>
    <hr>
    <h3>PHP 的輸出方式</h3>
    <ul>
        <li>echo:語句型比較直接，通常後面直接接字串或內容，且可以多個組合串接一起輸出。</li>
        <li>print():<b>函數型</b>比較正式簡潔，將變數放在 () 內並對該變數印出。</li>
        <li>print_r():偏向檢查用的輸出，<b>主要為對陣列的細節說明。</b></li>
        <li>var_dump(): 偏向檢查用的輸出，<b>主要為對變數的細節說明。</b></li>
    </ul>
    <hr>
    <h3>變數</h3>
    <p>PHP 的變數都會用 <b>$</b> 做開頭 + 自訂名稱</p>
    <p>變數名稱有大小寫之分。</p>
    <p>變數名稱第一個字元不能以<b>數字</b>開頭。</p>
    <p style="background-color:antiquewhite;display:inline-block;"> 練習:變數為文字串 </p>
    <?php
    echo "<p style='color:red;'>輸出方式 1</p>";
    $a = "冷笑話";
    echo $a;
    echo "<br>";

    echo "<p style='color:red;'>輸出方式 2</p>";
    $b = "<b>" . $a . "</b>";
    print($b);
    echo "<br>";

    echo "<p style='color:red;'>輸出方式 3</p>";
    $who = "Riley";
    $where = "家";
    $when = "Sunday";
    $what = "看Netflix";
    $how = "電腦";
    print $who . "在" . $where . "用" . $how . $what . "那天是個" . $when . "的下午";
    ?>

    <br>
    <p style="background-color:antiquewhite;display:inline-block;"> 練習:變數為數學式 </p>
    <br>
    <?php
    echo "<p style='color:red;'>輸出方式 1</p>";
    // 將計算結果存入變數後印出來
    $a = 7 + 5;
    echo "7 + 5 =" . $a;
    ?>
    <br>
    <?php
    echo "<p style='color:red;'>輸出方式 2</p>";
    // 變數跟變數做數學計算
    $b = 5;
    $b = $b + $a;
    print($b);
    ?>
    <br>
    <?php
    echo "<p style='color:red;'>輸出方式 3</p>";
    // 變數自身變化
    $c = 10;
    $c = $c + 5;
    $c = $c - 5;
    $c = $c * 2;
    $c = $c / 5;
    echo $c;
    ?>
    <br>
    <?php
    echo "<p style='color:red;'>輸出方式 4</p>";
    $d = 5;
    echo $d + 5; //10
    echo "<br>";

    echo $d += 5;    //10
    echo "<br>";

    echo $d += 1; //11
    echo "<br>";

    echo $d++; //11
    echo "<br>";

    echo $d;    //12
    echo "<br>";

    echo ++$d; //13
    echo "<br>";
    ?>

</body>

</html>