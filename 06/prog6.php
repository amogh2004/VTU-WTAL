<?php
  // $file = 'count.txt';
  $count = strval(file_get_contents('count.txt'));
  file_put_contents('count.txt', $count + 1);
  echo("<h1>You are visitor number: " . $count . "</h1>");
?>
