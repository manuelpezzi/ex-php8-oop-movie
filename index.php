<?php







// Creazione delle istanze della classe Genre

$actionGenre = new Genre("Azione", "Film con scene di combattimento e adrenalina");
$dramaGenre = new Genre ("Drammatico", "Film che esplorano emozioni profonde");
$adventureGenre = new Genre("Avventura", "Film con esplorazioni e viaggi emozionanti");


//creazione di istanzw della classe Movie

$movie1 = new Movie ("Mad Max: Fury Road", "George Miller", 2015, [$actionGenre,$adventureGenre]);
$movie2 = new Movie ("The Shawshank Redemption", "Frank Darabont", 1994, [$dramaGenre]);

 $movie1->incrementViews() ;
 $movie1->incrementViews() ; 
 $movie2->incrementViews() ;

// Stampa dei valori delle proprietà dei film
echo "<h2>Dettagli Film 1</h2>";
echo "<p>" . $movie1->getMovieDetails() . "</p>";
echo "<p>Descrizioni generi: ";
$genreDescriptions = array_map(function($genre) {
    return $genre->description;
}, $movie1->genres);
echo implode("; ", $genreDescriptions) . "</p>";
echo "<p>Visualizzazioni: {$movie1->views}</p>";

echo "<h2>Dettagli Film 2</h2>";
echo "<p>" . $movie2->getMovieDetails() . "</p>";
echo "<p>Descrizioni generi: ";
$genreDescriptions = array_map(function($genre) {
    return $genre->description;
}, $movie2->genres);
echo implode("; ", $genreDescriptions) . "</p>";
echo "<p>Visualizzazioni: {$movie2->views}</p>";


?>