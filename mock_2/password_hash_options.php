<?php
// In the following code, which answer in place of /*1*/ 
// will produce the most secure hash?

// A
$options = ['cost' => 16];
/* default cost is 10, so 16 is more secure but slow to generate */

// B
$options = ['cost' => 16, 'algo' => 'aes512'];
/* 'algo' option doesn't exist! */

// C
$options = ['cost' => 16, 'salt' => 'abcdefghijklmnopq/rstuvwxyz'];
/* Deprecated: password_hash(): Use of the 'salt' option to password_hash is deprecated */

// D
$options = ['cost' => 16, 'symmetric' => false];
/* 'symmetric' option doesn't exist! */

/*1*/
$pwd  = 'super-secret';
$algo = PASSWORD_DEFAULT;
$hash = password_hash($pwd, $algo, $options);
echo $hash;
