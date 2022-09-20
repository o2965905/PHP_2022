<!-- switch case 路由判斷 -->
<?php

$country='JP';

switch($country){
    case"JP":
        echo "歐嗨唷!!!";
    break;
    case"EN":
        echo "Hello!!!";
    break;
    case"TW":
        echo "你好!!!";
    break;
    default:
        echo "抱歉，沒有適合的語言";
    break;
}

?>