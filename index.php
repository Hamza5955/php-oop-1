<?php
    class Movie {
        public $name;
        public $director;
        public $duratin;
        public $relisedate;
        public $writers;
        public $tipe;

        function __construct($_name, $_director, $_duratin, $_relisedate, $_writers, $_tipe){
            $this->name = $_name;
            $this->director = $_director;
            $this->duratin = $_duratin;
            $this->relisedate = $_relisedate;
            $this->writers = $_writers;
            $this->tipe = $_tipe;
        }

        function getname(){
            return $this->name;
        }

        function setname($_name){
            $this->name = $_name;
        }

    }
    $movie1 = new Movie('Tenet', 'Christopher Nolan', 150, 2020, 'Christopher Nolan', ['Action', 'Science fiction', 'Thriller']);
    $movie2 = new Movie('inception', 'Christopher Nolan', 148, 2010, 'Christopher Nolan', ['Action', 'Science fiction', 'Thriller']);
    var_dump($movie1, $movie2);

    $movie1->setname('sogno');
    echo $movie1->getname();
?>