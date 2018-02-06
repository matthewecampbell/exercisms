<?php

function from ($date) {
   $dateCopy = clone $date;
   addGigasecond($dateCopy);
   return $dateCopy;
}

function addGigasecond ($date) {
  $date -> add(new DateInterval('PT1000000000S'));
}
