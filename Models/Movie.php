<?php
    class Movie
    {
        public $title;
        public $genres; // array
        public $duration;
        public $director;
        public $year;
        public $cast; // array
    
        function __construct($_title, array $_genres, $_duration, $_director, $_year, array $_cast)
        {
            $this->title = $_title;
            $this->genres = $_genres;
            $this->duration = $_duration;
            $this->director = $_director;
            $this->year = $_year;
            $this->cast = $_cast;
        }
    
        // getter function
        public function getInfo()
        {
            return $this->title . " " . $this->duration . " " . $this->director . " " . $this->year;
        }
}
