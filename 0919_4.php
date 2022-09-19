<!--  rand + if else 的設計 -->
<?php

$a=rand(0,100);
if($a>90){
    echo "出現大於90的數字 : ".$a;
}else if($a>70){
    echo "出現介於70-90的數字 : ".$a;
}else if($a>50){
    echo "出現介於50-70的數字 : ".$a;
}else if($a>30){
    echo "出現介於30-50的數字 : ".$a;
}else{
    echo "出現小於30的數字 :".$a;
}


?>