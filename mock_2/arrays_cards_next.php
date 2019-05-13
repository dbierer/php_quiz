<?php
// A
/* Produces:
Notice: Array to string conversion
Notice: Undefined variable: Array
*/
$cards = array('hearts' => array('Ace', '2', '3'),
               'diamonds' => array('4', '5', '6'),
               'spades' => array('7', '8', '9'),
               'clubs' => array('10', 'Jack', 'Queen'));
echo ${next($cards)}[2];


// B
/* Produces: 6 */
$cards = array('hearts' => array('Ace', '2', '3'),
               'diamonds' => array('4', '5', '6'),
               'spades' => array('7', '8', '9'),
               'clubs' => array('10', 'Jack', 'Queen'));
$tmpArray = next($cards); echo $tmpArray[2];
echo PHP_EOL;

// C
/* Produces: 6 */
$cards = array('hearts' => array('Ace', '2', '3'),
               'diamonds' => array('4', '5', '6'),
               'spades' => array('7', '8', '9'),
               'clubs' => array('10', 'Jack', 'Queen'));
echo $cards['diamonds'][2];
echo PHP_EOL;

// D
/* Produces:
Notice: Only variables should be passed by reference
6
*/
$cards = array('hearts' => array('Ace', '2', '3'),
               'diamonds' => array('4', '5', '6'),
               'spades' => array('7', '8', '9'),
               'clubs' => array('10', 'Jack', 'Queen'));
echo array_pop(next($cards));
echo PHP_EOL;
