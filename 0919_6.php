<!-- 
    isset() :檢查變數是否有設置
    empty() :檢查變數是否為空值
    is_null() :檢查變數是否為 null ，也等於 變數==null 同效果
 -->
 <?php

$a=123;
$b="";
$c=null;

if(isset($a)){
    echo "<p>當{$a}=被指定了（狀態是 is set) => isset 成立</p>";
}
if(empty($b)){
    echo "<p>當$b=空的字串 => empty 成立</p>";
}
if(is_null($c)){
    echo "<p>當$c 為無 => is_null 成立</p>";
}

echo "<hr>";

if(!isset($b)){
    echo "isset不成立";
}else{
    echo "isset成立";
}

echo "<hr>";

if(!empty($a)){
    echo "empty不為空值";
}else{
    echo "empty為空值";
}
?>