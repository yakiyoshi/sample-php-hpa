<?php
  // CPU Stress Test
  $x = 0.0001;
  for ($i = 0; $i <= 1000000; $i++) {
    $x += sqrt($x);
  }

  // Memory Stress Test
  /*
  class Foo
  {
    public $var = '3.14159265359';
  }
  $baseMemory = memory_get_usage();
  for ( $i = 0; $i <= 100000; $i++ )
  {
    $a = new Foo;
    $a->self = $a;
  }
  */

  echo "OK!";
?>
