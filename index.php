<?php
  $x = 0.0001;
  for ($i = 0; $i <= 1000000; $i++) {
    $x += sqrt($x);
  }
  $a = substr(bin2hex(random_bytes(8)), 0, 5);
  $$a = [];
  for($j=0;$j<10000;$j++) {
      $$a[] = $j;
  }
  echo "memory usage:".memory_get_usage() / (1024 * 1024)."MB\n";
  echo "OK!";
?>
