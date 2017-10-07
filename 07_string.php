<?php

//
// multiline string
//
print '<ul>
<li>Apple</li>
<li>Mango</li>
<li>Cherry</li>
</ul>';

//
// example of heredoc
//
$myheredoc = <<<HTMLBLOCK
<html>

<head>
<title>Fruits</title>
</head>

<body>
<p>This is a paragraph. It usually contains several sentences.
This paragraph is a simple paragraph.
</p>
</body>

</html>
HTMLBLOCK;

print $myheredoc;
print "\n";

// Two string can be concatenated using .
print "My name is " . "Fadjar Fathurrahman\n";
print "Displaying dollar sign: " . "\$ 10,000";


?>

