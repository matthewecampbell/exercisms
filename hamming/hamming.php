<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
  if ($a == $b){
    return 0;
  } elseif (strlen($a) != strlen($b)){
    throw new InvalidArgumentException("DNA strands must be of equal length.");
  } else {
    $differences = 0;
    for ($i=0,$l=strlen($a); $i < $l; $i++) {
      if ($a{$i} !== $b{$i}) {
        $differences++;
      }
    }
    return $differences;
  }
}
