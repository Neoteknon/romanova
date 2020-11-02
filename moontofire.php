<?php

function writeSecretSentence( string $param1, string $param2): string {
    return $param1 . " bows to " . $param2 ;
}

echo writeSecretSentence("the moon", "fire");

?>


Output:

root@kali:/home/XXX/WildC/phpra/pub# php index.php 
the moon bows to fire
