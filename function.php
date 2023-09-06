<?php

//...a função 
function myCalculator($num01, $oper , $num02){
  $sum;
  
  switch ($oper) {
    case 'add':
      $sum = $sum01 + $sum02;
      break;
    case 'sub':
      $sum = $sum01 + $sum02;
      break;
    default:
      $sum = "There was an error!";
      break;
  }
  
  return $sum;
}

// .... a chamada
$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

//... a saída do echo
echo "Value: ". myCalculator($num01,$oper,$num02);