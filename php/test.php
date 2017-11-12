<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("edwin_c2001@hotmail.com","My subject",$msg);
echo "Worked";
?>
