<?php 

class Movie {
    public $title;
    public $genre;
    public $runtime;

    function __construct($_title, $_genre, $_runtime){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->runtime = $_runtime;
    }

    public function getMovie(){
        return "Titolo"." ".$this->title." "."genere"." ".$this->genre." "."durata"." ".$this->runtime;
    }
}

?>