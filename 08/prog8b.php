<?php
  header('Content-Type: text/plain');

  $matrix1 = array(array(1, 2), array(4, 5),);

  $matrix2 = array(array(3, 4), array(6, 7),);

  echo "The order of the matrix A is: " .count($matrix1)."x".count($matrix1[0]);
  echo "\n";
  echo "The order of the matrix B is: " .count($matrix2)."x".count($matrix2[0]);
  echo "\n";

  $rowCount1 = count($matrix1);
  $colCount1 = count($matrix1[0]);

  $rowCount2 = count($matrix2);
  $colCount2 = count($matrix2[0]);

  echo "The input matrix A is:\n";
  for($r=0; $r<$rowCount1; $r++) {
    for($c=0; $c < $colCount1; $c++) {
      echo $matrix1[$r][$c]." \t";
    }
    echo "\n";
  }

  echo "The input matrix B is:\n";
  for($r=0; $r<$rowCount2; $r++) {
    for($c=0; $c < $colCount2; $c++) {
      echo $matrix1[$r][$c]." \t";
    }
    echo "\n";
  }

  echo "\nThe output Transpose of matrix is:\n";
  for($r=0; $c < $colCount1; $r++) {
    for($c=0; $c < $rowCount1; $c++) {
      echo $matrix1[$c][$r]." \t";
    }
    echo "\n";
  }

  echo "\nThe sum of matrices is:\n";
  for($r = 0; $r < $rowCount1; $r++) {
    for($c=0; $c < $colCount1; $c++) {
      $val= $matrix1[$r][$c] + $matrix2[$r][$c];
      echo $val."\t";
    }
    echo "\n";
  }

  echo "\nThe Multiplication of matrix is:\n";
  if($colCount1 == $rowCount2) {
    for($r=0; $r < $rowCount1; $r++) {
      for($c=0; $c < $colCount1; $c++) {
        $val= $matrix1[$r][$c] * $matrix2[$r][$c];
        echo $val."\t";
      }
      echo "\n";
    }
  }

  else {
    echo "The matrix multiplication is not possible.";
  }
?>
