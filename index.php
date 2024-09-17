<?php
    class Movie {
        public $title;
        public $genre;
        public $duration;
        public $director;
        public $year;
        public $cast; // array

        function __construct ($_title, $_genre, $_duration, $_director, $_year, Array $_cast) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->duration = $_duration;
            $this->director = $_director;
            $this->year = $_year;
            $this->cast = $_cast;
        }

        // getter function
        public function getInfo() {
            return $this->title." ".$this->genre." ".$this->duration." ".$this->director." ".$this->year." ".$this->cast;
        }
    }

    // objects
    $altrimenti_ci_arrabbiamo = new Movie("...altrimenti ci arrabbiamo!", "Commedia", 98, "Marcello Fondato", 1974, ["Terence Hill", "Bud Spencer", "John Sharp", "Patty Shepard", "Donald Pleasence"]);
    $paura_e_delirio = new Movie("Paura e delirio a Las Vegas", "commedia", 118, "Terry Gilliam", 1998, ["Johnny Depp", "Benicio del Toro", "Tobey Maguire", "Ellen Barkin", "Christina Ricci"]);
    $northman = new Movie("The Northman", "avventura", 137, "Robert Eggers", 2022, ["Alexander Skarsgård", "Claes Bang", "Nicole Kidman", "Willem Defoe", "Ethan Hawke", "Anya Taylot-Joy"]);
?>