<?php

// http://judge.u-aizu.ac.jp/onlinejudge/description.jsp?id=ALDS1_2_B

fscanf(STDIN, '%d', $count);
$numbers = explode(" ", trim(fgets(STDIN)));
$exchangeCount = 0;

for($i = 0; $i < $count; $i++){
  $min = $i;
  for($j = $i + 1; $j < $count; $j++){
    if($numbers[$min] > $numbers[$j]){
      $min = $j;
    }
  }
  if($i != $min){
    $tmp = $numbers[$min];
    $numbers[$min] = $numbers[$i];
    $numbers[$i] = $tmp;
    $exchangeCount++;
  }
}

echo implode(" ", $numbers) . PHP_EOL;
echo $exchangeCount . PHP_EOL;
