<?php
$a = 1;
while ($a <= 10) {
  if ($a != 8){
    echo "$a";
    echo "<br>";
  }  
  $a++;
}

echo "<hr>";
echo "TABLA DEL 5";
echo "<br> <br>";

// $b = 2;
// $num = 9;
// while ($b <= 10) {
//   $b++;  

//   if ($num % $b != 0){        
//   }
//   else{
//     break;
//   }

//   if ($b == 8){
//     continue;
//   }

//   echo "$num x ".$b."= ".$b*$num."<br>";    
// }

function esPrimo($numero) { 
  $a = 2;
  $primo = true;
  
  while ($primo && $a<($numero/2)) {
    // if (($numero % $a) === 0){
    //   $primo = false;
    //   return $primo
    // }
    $primo = ($numero % $a) != 0;
    $a++;
  }
  return $primo;
}


$b = 0;
$num = 10;
while ($b < 10) {
  $b++;  

  if (esPrimo($num)){
    break;
  }
  if ($b == 8){
    continue;
  }
  echo "$num x ".$b."= ".$b*$num."<br>";    
}