<p>雙 for 迴圈 : 九九乘法表</p>
<?php

for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        echo $i."x".$j."=".($i*$j);
    }
    echo "<br>";
}

?>
<hr>
<?php
for($m=1;$m<10;$m++){
  for($n=1;$n<10;$n++) {
    echo "<span style='display:inline-block;width:70px'>".$n."X".$m."=".($n*$m)."</span>";
  }
echo "<br/>";
}
?>
<hr>
<table border='1'><tr>
<?php
  for($m=1;$m<10;$m++){
    echo "<td width='75'>";
    for($n=1;$n<10;$n++) 
      echo $m."*".$n."=".($m*$n)."<br/>";
    echo "</td>";
  }
?>
</tr></table>
<hr>
<?php
  $clr=0;
  for($m=1;$m<10;$m++){
    for($n=1;$n<10;$n++) {
      echo "<span style='display:inline-block;width:70px;color:rgb(".$clr.",0,".(255-$clr).")'>".$n."X".$m."=".($n*$m)."</span>";
      $clr+=5;
    }
    echo "<br/>";
    }
?>