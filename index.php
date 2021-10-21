/*- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */
<?php

    class Movie {
        public $name;
        public $director;
        public $duratin;
        public $relisedate;
        public $writers;
        public $tipe;

        function __construct($_name,$_director,$_duratin,$_relisedate,$_writers,$_tipe){
            
            $this->name = $_name;
            $this->director = $_director;
            $this->duratin = $_duratin;
            $this->relisedate = $_relisedate;
            $this->writers = $_writers;
            $this->tipe = $_tipe;

        }
    }