<?php

for ($i = 1; $i < 11; $i++) {
    if ($i % 2 == 0){
        echo $i;
        echo "<br />";
    }
}

$i = 1;

while ( $i < 21) {
    echo "i = " . $i . "<br />";
    $i += 1;
}

$count = 0;
while ( $count < 20 ) {
    if( $count % 3 == 0){
        $count  += 1;
        continue;
    }else{
        echo "$count"."<br />";
        $count += 1;
    }
}

$nume = 0;

do{
    echo "num = $nume"."<br />";
    $nume ++;
}while ($nume < 3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}

echo "<br />";

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

$count = 1;

for ( $count = 1; $count <= 50; $count++){
    if( $count % 15 ===0 ){
        echo $FizzBuzz;
    }elseif( $count % 5 ===0 ){
        echo $Buzz;
    }elseif( $count % 3 ===0 ){
        echo $Fizz;
    }else{
        echo $count;
    }
}

echo "<br/>";

for( $count = 1; $count <=5; $count ++){
    for( $i = 1; $i <=5; $i ++){
        if( $i % 5 == 0){
            echo "⚫︎"."<br />";
        }else{
            echo "⚫︎";
        }
    }
}