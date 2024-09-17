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
    }
?>