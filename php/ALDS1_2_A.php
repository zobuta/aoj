<?php

// http://judge.u-aizu.ac.jp/onlinejudge/description.jsp?id=ALDS1_2_A

fscanf(STDIN, '%d', $count);
$numbers = explode(" ", trim(fgets(STDIN)));

$isContinue = true;
$changeCount = 0;
$y = 0;

while ($isContinue) {
  $isContinue = false;
  for ($i = $count - 1; $i > $y; $i--) {
    if ($numbers[$i] < $numbers[$i - 1]) {
      $tmp = $numbers[$i];
      $numbers[$i] = $numbers[$i - 1];
      $numbers[$i - 1] = $tmp;
      $isContinue = true;
      $changeCount++;
    }
  }
  $y++;
}

echo implode(" ", $numbers) . PHP_EOL;
echo $changeCount . PHP_EOL;
