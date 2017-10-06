<?php

// FIXME: not tested for other than string ?
/*function println($string_message) {
  $_SERVER['SERVER_PROTOCOL'] ? print "$string_message<br />" : print "$string_message\n";
}*/


function println($string_message) {
  print_r("$string_message\n");
}

$a = 12.3;
$b = "ffr";

println($a);

println($b);
?>

