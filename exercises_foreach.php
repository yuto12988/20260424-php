<?php
echo '<br>----- 練習問題：1 -----<br>';
$cities = [ "東京" => 1400, "大阪" => 270, "名古屋" => 230, "札幌" => 190, "福岡" => 160 ];
$total = 0;
foreach ($cities as $key => $value) {
   echo "{$key} の人口は {$value}万人です <br>";
    $total += $value;
}
echo $total;

echo '<br>----- 練習問題：2 -----<br>';
$users = [
    ["name" => "Alice", "email" => "alice@example.com", "age" => 30],
    ["name" => "Bob", "email" => "bob@example.com", "age" => 24],
    ["name" => "Charlie", "email" => "charlie@example.com", "age" => 35],
];
$count = 0;
foreach ($users as $user) {

            echo " {$user['name']}:{$user['email']}<br>";
           $count++;
    }
echo $count . "人";

 echo '<br>----- 練習問題：3 -----<br>';
$sales_data = [
    "Jan" => ["ProductA" => 100, "ProductB" => 150, "ProductX" => 50],
    "Feb" => ["ProductA" => 120, "ProductC" => 80],
    "Mar" => ["ProductB" => 200, "ProductA" => 90, "ProductY" => 70]
];
$total = 0;
foreach ($sales_data as $key => $value) {
    $sum = 0;
    foreach ($value as $value_name => $price) {
       $sum += $price;

    }
    echo $key . "の合計:" . $sum . "円<br>";
    $total += $sum;
}
echo "総合計:" . $total . "円";




echo '<br>----- 練習問題：3 -----<br>';
$sales_data = [
    "1月" => ["テレビ" => 100, "パソコン" => 150, "レンジ" => 50],
    "2月" => ["テレビ" => 120, "冷蔵庫" => 80],
    "3月" => ["パソコン" => 200, "テレビ" => 90, "掃除機" => 70]
];
$total = 0;
foreach($sales_data as $MathName => $Sale){
    foreach($Sale as $key => $val){
        var_dump($val);
        if($key == 'テレビ'){
            $total += $val;
        }
        
    }
    
}

echo $total;