<?php
echo '<br>--- サイコロの目判定 ----<br>';
$diceRoll = rand(1,6);
if ($diceRoll == 1) {
    echo "出た目:{$diceRoll} ザンネン！  ";
}else{
    echo "出た目: {$diceRoll}";
}



echo '<br>--- シンプルな年齢判定 ----<br>';
$randomAge  = rand(5,25);
echo $randomAge;
echo "<br>";
if ($randomAge >= 20) {
    echo "成人です";
}else {
    echo "未成年です";
}


echo '<br>--- 四季判定 ----<br>';

$month = rand(1,12);
echo $month;
echo "<br>";
switch ($month) {
    case '3':
    case '4':
    case '5':
        echo "季節は春です";
        break;
    case '6':
    case '7':
    case '8':
        echo "季節は夏です";
        break;
    case '9':
    case '10':
    case '11':
        echo "季節は秋です";
        break;
    case '1':
    case '2':
    case '12':
        echo "季節は冬です";
    default:
        break;
}

echo '<br>--- 四季判定 ----<br>';
$month = rand(1,12);
echo $month ,'月：';
if($month == 1 || $month == 2 || $month == 12){
    echo '季節は冬です。';
}
if($month == 3 || $month == 4 || $month == 5){
    echo '季節は春です。';
}
if($month == 6 || $month == 7 || $month == 8){
    echo '季節は夏です。';
}
if($month == 9 || $month == 10 || $month == 11){
    echo '季節は秋です。';
}
