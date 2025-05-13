<?php 
//definizione della classe Genre

class Genre{
    public $name;
    public $description;


// Costruttore Genre

 public function __construct($_name, $_description) {
        $this->name = $_name;   
        $this->description = $_description;
    }
}
// Definizione della classe Movie

class Movie {

    public $title;
    public $director;
    public $year;
    public $genres;

    // Costruttore Movie

    public function __construct($_title,$_director,$_year, array $_genres){
         $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genres = $_genres;
    }

    // Metodo per ottenere i dettagli dei film

    public function getMovieDetails(){
        return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->year}, Genere: {$this->genre->name}";
    }

}

// Creazione delle istanze della classe Genre

$actionGenre = new Genre("Azione", "Film con scene di combattimento e adrenalina");
$dramaGenre = new Genre ("Drammatico", "Film che esplorano emozioni profonde");

//creazione di istanzw della classe Movie

$movie1 = new Movie ("Mad Max: Fury Road", "George Miller", 2015, $actionGenre);
$movie2 = new Movie ("The Shawshank Redemption", "Frank Darabont", 1994, $dramaGenre);

//stampa dei valori delle proprietà dei film

echo "<h2>Dettagli Film 1</h2>";
echo "<p>" . $movie1->getMovieDetails() . "</p>";
echo "<p>Descrizione genere: " . $movie1->genre->description . "</p>";

echo "<h2>Dettagli Film 2</h2>";
echo "<p>" . $movie2->getMovieDetails() . "</p>";
echo "<p>Descrizione genere: " . $movie2->genre->description . "</p>";
?>