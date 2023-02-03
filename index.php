<?php
//Creo una classe di nome Movie
class Movie
{
    public $title;
    public $date;
    public $genres;
    public $duration;
    public $motion_picture;
    public $viewing;

    //Creo una funzione costruttore
    function __construct($_title, $_date, $_genres, $_duration, $_motion_picture)
    {
        $this->title = $_title;
        $this->date = $_date;
        $this->genres = $_genres;
        $this->duration = $_duration;
        $this->motion_picture = $_motion_picture;
    }

    public function ratingage($motion)
    {

        if ($motion == 'G') {
            $this->viewing = 'Ammesse tutte le età';
        } elseif ($motion == 'Pg') {
            $this->viewing = 'Alcuni materiali potrebbero non essere adatti ai bambini';
        } elseif ($motion == 'Pg-13') {
            $this->viewing = 'Alcuni materiali potrebbero non essere adatti ai bambini di età inferiore ai 13 anni';
        } elseif ($motion == 'R') {
            $this->viewing = 'I minori di 17 anni richiedono un genitore accompagnatore o un tutore adulto';
        } else {
            $this->viewing = 'Nessuno sotto i 17 anni ammesso';
        }
    }
};
// Primo metodo per aggiungere un film
$title = 'Life Is Beautiful';
$date = 1997;
$genres = 'dramatic';
$duration = 116;
$motion_picture = 'Pg-13';

$movie_1 = new Movie($title, $date, $genres, $duration, $motion_picture);

//Secondo metodo per aggiungere un film
$movie_2 = new Movie('PUSS IN BOOTS: THE LAST WISH', 2022, 'Animated', 116, 'Pg');
echo '<pre>';
echo $movie_1->ratingage($motion_picture);
var_dump($movie_1);
var_dump($movie_2);
