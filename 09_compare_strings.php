<?php

$str1 = "ffr";
$str2 = "FFR";

if( $str1 == $str2 ) {
  print "\$str1 and \$str2 are the same\n";
}
else {
  print "\$str1 and \$str2 are NOT the same\n";
}


print "\nUsing strcasecmp\n";
print strcasecmp($str1,$str2) . "\n";
if( strcasecmp($str1, $str2) == 0 ) {
  print "\$str1 and \$str2 are the same\n";
}
else {
  print "\$str1 and \$str2 are NOT the same\n";
}



?>
