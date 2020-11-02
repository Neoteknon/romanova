<?php

$movies = [
        'Johnny\'s Fuzzing' => ['Robert D', 'Friedrich Nietzsche', 'Pius IX'],
        'Freaking Mytra' => ['Pius IX', 'Sid Vicious'],
        'Mary Eilelly ' => ['Robert D', 'Mad Paul']
];

foreach ($movies as $movie => $actors){
        echo 'Dans le film ' . $movie . ', les principaux acteurs sont: ';
        foreach ($actors as $actor){
                echo $actor . ' ';
        }
        echo '.';
};
?>

Output:

root@kali:/home/XXX/WildC/phpra/pub# php multire.php 
Dans le film Johnny's Fuzzing, les principaux acteurs sont: Robert D Friedrich Nietzsche Pius IX .Dans le film Freaking Mytra, les principaux acteurs sont: Pius IX Sid Vicious .Dans le film Mary Eilelly , les principaux acteurs sont: Robert D Mad Paul 
