<?php
// http://judge.u-aizu.ac.jp/onlinejudge/description.jsp?id=ALDS1_1_D

$max = 1 - 10 ** 9;
fscanf(STDIN, '%d', $count);

for ($i = 0; $i < $count; $i++) {
  fscanf(STDIN, '%d', $current);
  if ($i === 0) {
    $min = $current;
  } else {
    if ($max < $current - $min) {
      $max = $current - $min;
    }

    if ($min > $current) {
      $min = $current;
    }
  }
}

echo $max . PHP_EOL;
