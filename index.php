<?php
  $x = 0.0001;
  for ($i = 0; $i <= 1000000; $i++) {
    $x += sqrt($x);
  }
  echo "first:".memory_get_usage() / (1024 * 1024)."MB\n";
  $arr = [];
  for($j=0;$j<10000;$j++) {
      $arr[] = $j;
  }
  echo "first:".memory_get_usage() / (1024 * 1024)."MB\n";
  echo "OK!";
?>
