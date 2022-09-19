<!-- 
    &&(AND) 與 ||(OR) 
-->
<?php

$money=400;
$dream=true;

if(($money>500) && ($dream)){
    echo "財富自由了";
}else{
    echo "有夢真美";
}

echo "<hr>";

if(($money>500) || ($dream)){
    echo "都會成真";
}

?>