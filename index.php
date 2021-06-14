<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php
class Movie {
    public $name;
    public $genres;
    public $minutes;
    public $actors;

    public function __construct($movieName, $movieGenres,$movieMinutes= 120,$movieActors=[])
    {
        $this->name = $movieName;
        $this->genres = $movieGenres;
        $this->minutes = $movieMinutes;
        $this->actors = $movieActors;
    }


    public function toString(){
        return $this->name . " " . join(" ",$this->genres) ." " . $this->minutes. " " . join(" ",$this->actors);

    }
    public function renderMovie(){
        echo "<h1>". $this->toString() ."</h1>";
    }
}

$movie1 = new Movie("Enemy",["Thriller"],120,["Ben Afleck"]);

$movie1->renderMovie();

$movie2= new  Movie("Pippo",["Avventura"],110,["Fantozzi"]);

$movie2->renderMovie();





?>