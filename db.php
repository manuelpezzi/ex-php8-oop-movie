<?php 
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';
// Creazione delle istanze della classe Genre

$actionGenre = new Genre("Azione", "Film con scene di combattimento e adrenalina");
$dramaGenre = new Genre ("Drammatico", "Film che esplorano emozioni profonde");
$adventureGenre = new Genre("Avventura", "Film con esplorazioni e viaggi emozionanti");


//creazione di istanzw della classe Movie
$movies[
 new Movie ("Mad Max: Fury Road", "George Miller", 2015, [$actionGenre,$adventureGenre]);
 new Movie ("The Shawshank Redemption", "Frank Darabont", 1994, [$dramaGenre]);
 new Movie("The Grand Budapest Hotel", "Wes Anderson", 2014, [$comedyGenre, $dramaGenre])
];
$movies[0]->incrementViews();
$movies[0]->incrementViews();
$movies[1]->incrementViews();
$movies[2]->incrementViews();
$movies[2]->incrementViews();

return $movies;
?>