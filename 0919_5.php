<!-- 
    自主練習 : 抽卡概念
    完成抽卡機率，顯示輸出文字
    ”你抽到了 SSR 卡”
    ”你抽到了 SR 卡”
    ”你抽到了 R 卡”
    ”你抽到了 N 卡”
    出現機率分別為 4%,10%,35%,51%
 -->
 <?php

$card=rand(1,100);
echo $card."號碼";
echo "<br>";

if($card<5){
    echo "你抽到了 SSR 卡";
}elseif($card<15){
    echo "你抽到了 SR 卡";
}elseif($card<50){
    echo "你抽到了 R 卡";
}else{
    echo "你抽到了 N 卡";
}

?>
<hr>
<?php

$rand=rand(1,100);
if($rand<5) $card="SSR";
elseif ($rand<15) $card="SR";
elseif ($rand<50) $card="R";
else $card="N";
echo "你抽到了".$card."卡";
echo "（隨機號碼為".$rand.")";

?>