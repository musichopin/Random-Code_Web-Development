<?php

// 2 vars in one loop (multi array de�il)

for ($i=0, $k=10; ($i<=10 && $k>=5); $i++, $k--) {
    echo "Var " . $i . " is " . $k . "<br>";
}

// farkl� print eder

for ($i = 0 ; $i <= 10 ; $i++){
  for ($j = 10 ; $j >= 5 ; $j--){
     echo "Var " . $i . " is " . $j . "<br>";
  }
}