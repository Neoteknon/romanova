<?php

$filmsIndiana = [
        'Les Aventuriers de l\'arche perdue' => 2000,
        'Something about Miss Ke' => 2014,
        'Oh my darling excuse me pardon' => 2016,
        'Let me lemon thee' => 2068
];

foreach ($filmsIndiana as $title => $year){
        sort($filmsIndiana);
        echo $year . ' - ';
        echo $title . '. ';
};

?>


Output:

root@kali:/home/XXX/WildC/phpra/pub# php ohrrays.php 
2000 - Les Aventuriers de l'arche perdue. 2014 - Something about Miss Ke. 2016 - Oh my darling excuse me pardon. 2068 - Let me lemon thee.
