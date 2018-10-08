<?php

// http://judge.u-aizu.ac.jp/onlinejudge/description.jsp?id=ALDS1_1_A

fscanf(STDIN, '%d', $count);
$numbers = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $count; $i++) {
  $insertIndex = $i;
  $value = $numbers[$i];
  for ($y = $i - 1; $y >= 0; $y--) {
    if ($value < $numbers[$y]) {
      $insertIndex--;
      $numbers[$y + 1] = $numbers[$y];
    } else {
      break;
    }
  }
  $numbers[$insertIndex] = $value;
  echo implode(" ", $numbers) . PHP_EOL;
}
