<?php

$message1 = '0@sn9sirppa@#?ia\'jgtvryko1';
$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';

function decypher(string $dechy) {
        $key = strlen($dechy) / 2;
        $subLenght = substr($dechy, 5, $key);
        $delimiterParsing = str_replace('@#?',' ', $subLenght);
        $reversed = strrev($delimiterParsing);
        return $reversed;
}

echo decypher($message1) . ' ';
echo decypher($message2) . ' ';
echo decypher($message3) . '.';

?>


Output:

root@kali:/home/XXX/WildC/phpra/pub# php decyph.php
j'ai appris toutes les ficelles des strings.
