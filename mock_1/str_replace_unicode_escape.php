<?php
$search = ["\u{00E9}","\u{00E8}"];
$replace = 'e';
$subject = 'élève';
$result  = str_replace($search, $replace, $subject);
echo strlen($subject) . ' ' . strlen($result);
?>
