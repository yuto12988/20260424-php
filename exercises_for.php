<?php


echo '<br>--- 問題：1 ---<br>';
for ($i=1; $i <= 10; $i++) { 
   echo $i;
}

echo '<br>--- 問題：2 ---<br>';

for ($i=1; $i <= 20; $i++) { 
if ($i % 2 == 0) {
   echo $i;
}
}

echo '<br>--- 問題：3 ---<br>';
$items = ["ペン", "ノート", "消しゴム", "定規", "ハサミ"];
for($i = 0 ; $i < count($items) ; $i++){
    echo $items[$i] , '、';
}

echo '<br>--- 問題：4 ---<br>';

for ($x=4; $x <= 5 ; $x++) { 
  for ($y=1; $y <= 9 ; $y++) { 
    $re = $x * $y;
    echo "{$x} × {$y} = {$re} <br>";
  }
}