<!-- 三元運算子 -->
<?php

$num=rand(0,100);
echo "<p style='color:red;'>";
echo "數字為 : ".$num;
echo "</p>";

if(($num>50)){
    echo "數字大於50";
}else{
    echo "數字小於50";
}

echo "<hr>";

$ans=($num>50)?"數字大於50":"數字小於50";
echo $ans;
?>