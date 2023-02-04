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
$genres = 'Dramatic';
$duration = 116;
$motion_picture = 'Pg-13';

$movie_1 = new Movie($title, $date, $genres, $duration, $motion_picture);
$movie_1->ratingage($motion_picture);

//Secondo metodo per aggiungere un film
$movie_2 = new Movie('PUSS IN BOOTS: THE LAST WISH', 2022, 'Animated', 102, 'Pg');
$movie_2->ratingage('Pg');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Php oop</title>
</head>

<body>
    <div class="container">
        <div class="row m-4">
            <div class="col-12 d-flex flex-wrap">
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie_1->title; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Date: <?php echo $movie_1->date; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted">Genres: <?php echo $movie_1->genres; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted">Duration: <?php echo $movie_1->duration; ?>m</h6>
                        <p class="card-text">
                            Public:
                            <?php
                            echo $movie_1->motion_picture;
                            echo ' /';
                            echo $movie_1->viewing;
                            ?></p>
                    </div>
                </div>
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie_2->title; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Date: <?php echo $movie_2->date; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted">Genres: <?php echo $movie_2->genres; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted">Duration: <?php echo $movie_2->duration; ?>m</h6>
                        <p class="card-text">
                            Public:
                            <?php
                            echo $movie_2->motion_picture;
                            echo ' /';
                            echo $movie_2->viewing;
                            ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>