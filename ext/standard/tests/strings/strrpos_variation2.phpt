--TEST--
Test strrpos() function : usage variations - single quoted strings for 'haystack' & 'needle' arguments
--FILE--
<?php
/* Prototype  : int strrpos ( string $haystack, string $needle [, int $offset] );
 * Description: Find position of last occurrence of 'needle' in 'haystack'.
 * Source code: ext/standard/string.c
*/

/* Test strrpos() function by passing single quoted strings to 'haystack' & 'needle' arguments */

echo "*** Testing strrpos() function: with single quoted strings ***\n";
$haystack = 'Hello,\t\n\0\n  $&!#%()*<=>?@hello123456he \x234 \101 ';
$needle = array(
  //regular strings
  'l',
  'L',
  'HELLO',
  'hEllo',

  //escape characters
  '\t',
  '\T',
  '     ',
  '\n',
  '\N',
  '
',  //new line

  //nulls
  '\0',
  NULL,
  null,

  //boolean false
  FALSE,
  false,

  //empty string
  '',

  //special chars
  ' ',
  '$',
  ' $',
  '&',
  '!#',
  '()',
  '<=>',
  '>',
  '=>',
  '?',
  '@',
  '@hEllo',

  '12345', //decimal numeric string
  '\x23',  //hexadecimal numeric string
  '#',  //hexadecimal numeric string
  '\101',  //octal numeric string
  'A',
  '456HEE',  //numerics + chars
  42, //needle as int(ASCII value of '*')
  $haystack  //haystack as needle
);

/* loop through to get the position of the needle in haystack string */
$count = 1;
for($index=0; $index<count($needle); $index++) {
  echo "-- Iteration $count --\n";
  var_dump( strrpos($haystack, $needle[$index]) );
  var_dump( strrpos($haystack, $needle[$index], $index) );
  $count++;
}
echo "*** Done ***";
?>
--EXPECTF--
*** Testing strrpos() function: with single quoted strings ***
-- Iteration 1 --
int(32)
int(32)
-- Iteration 2 --
bool(false)
bool(false)
-- Iteration 3 --
bool(false)
bool(false)
-- Iteration 4 --
bool(false)
bool(false)
-- Iteration 5 --
int(6)
int(6)
-- Iteration 6 --
bool(false)
bool(false)
-- Iteration 7 --
bool(false)
bool(false)
-- Iteration 8 --
int(12)
int(12)
-- Iteration 9 --
bool(false)
bool(false)
-- Iteration 10 --
bool(false)
bool(false)
-- Iteration 11 --
int(10)
int(10)
-- Iteration 12 --

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
bool(false)

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
bool(false)
-- Iteration 13 --

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
bool(false)

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
bool(false)
-- Iteration 14 --

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
bool(false)

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
bool(false)
-- Iteration 15 --

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
bool(false)

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
bool(false)
-- Iteration 16 --
bool(false)
bool(false)
-- Iteration 17 --
int(53)
int(53)
-- Iteration 18 --
int(16)
bool(false)
-- Iteration 19 --
int(15)
bool(false)
-- Iteration 20 --
int(17)
bool(false)
-- Iteration 21 --
int(18)
bool(false)
-- Iteration 22 --
int(21)
int(21)
-- Iteration 23 --
int(24)
int(24)
-- Iteration 24 --
int(26)
int(26)
-- Iteration 25 --
int(25)
int(25)
-- Iteration 26 --
int(27)
int(27)
-- Iteration 27 --
int(28)
int(28)
-- Iteration 28 --
bool(false)
bool(false)
-- Iteration 29 --
int(34)
int(34)
-- Iteration 30 --
int(43)
int(43)
-- Iteration 31 --
int(19)
bool(false)
-- Iteration 32 --
int(49)
int(49)
-- Iteration 33 --
bool(false)
bool(false)
-- Iteration 34 --
bool(false)
bool(false)
-- Iteration 35 --

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
int(23)

Deprecated: strrpos(): Non-string needles will be interpreted as strings in %s on line %d
bool(false)
-- Iteration 36 --
int(0)
bool(false)
*** Done ***
