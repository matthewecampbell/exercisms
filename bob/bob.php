<?php

class Bob {
  function respondTo ($phrase) {
    if ($phrase == strtoupper($phrase) && $phrase != strtolower($phrase)){
      return "Whoa, chill out!";
    } elseif (substr(rtrim($phrase), -1) == '?'){
      return "Sure.";
    } elseif (trim($phrase) == "") {
      return "Fine. Be that way!";
    } else {
      return "Whatever.";
    }
  }
}

?>
