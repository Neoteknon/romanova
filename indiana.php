?php

$filmName = "Indiana Jones and the Last Crusade";
$year = 1989;
$imdbScore = 8.2;
$seen = true;

echo $filmName; echo '...';
if ($seen = true) {
        echo ' oh, I have seen this!';
} else {
        echo 'Havent seen it yet';
}

echo ' Now I remember. '; echo ' It was released in '; echo $year; echo ' and it did quite good on imdb: '; echo $imdbScore;
?> 
