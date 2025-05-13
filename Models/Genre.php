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
?>