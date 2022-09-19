<!-- 加強 isset/empty/is_null 概念 -->
<?php
$num=123;
$str="456";
$nostr="";
$null=null;

//切換這四種
// $try=$num;
// $try=$str;
// $try=$nostr;
$try=$null;

if(isset($try)){
    echo "<p>".$try." 是 isset";
    echo "<br>";
    var_dump($try);
    echo "</p>";
}
if(empty($try)){
    echo "<p>".$try." 是 empty";
    echo "<br>";
    var_dump($try);
    echo "</p>";
}
if(is_null($try)){
    echo "<p>".$try." 是 is_null";
    echo "<br>";
    var_dump($try);
    echo "</p>";
}

?>