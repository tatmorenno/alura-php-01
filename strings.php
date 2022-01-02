<?php

$age = 28;
echo "Hello! I'm \"$age\" years old." . PHP_EOL;
echo 'Oi! Eu tenho ' .$age . ' anos de idade.';

echo PHP_EOL . PHP_EOL;
echo "You can only enter if you are over 18 years old.";
echo "You are $age years old.";


/* Two ways to break a line in PHP:
\n -> Escape sequence. It's the commom way.
PHP_EOL (PHP End Of Line) -> It's a constant. This way is the most compatible with the Operating Systems.
Some operating systems use the \n character to represent a line break. Others use \r. Windows uses both (\r\n). Using the PHP_EOL constant we abstract this difference and we can leave our code working the same on all platforms.
*/
