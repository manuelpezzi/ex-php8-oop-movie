<?php 
require_once __DIR__ . '/movieInfo.php';
// Definizione della classe Movie

class Movie {
    use MovieInfo;

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
        $genreNames = array_map(function($genre){
            return $genre->name;
        },$this->genres);
        $genresString = implode(",",$genreNames);
        return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->year}, Generi: {$genresString}";
     
    }

}
?>