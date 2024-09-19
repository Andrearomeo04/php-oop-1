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

$avge = new Movie('Avengers: Endgame', 'Fantasy', '181 min');
$snwh = new Movie('Spider-man: No Way Home', 'Fantasy', '148 min');
$tr = new Movie('Thor: Ragnarok', 'Fantasy', '130 min');
$bb = new Movie('Bad Boys', 'comedy, crime', '119 min');
$io = new Movie('Inside Out 2', 'animation, drama', '96 min');

var_dump($avge);
var_dump($snwh);
var_dump($tr);
var_dump($bb);
var_dump($io);

?>