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
        // public function getInfo()
        // {
        //     return $this->title . " " . $this->duration . " " . $this->director . " " . $this->year;
        // }

        // control function (to create a method that's not just a string return)
        public function isFrom2000s() {
            if ($this->year >= 2000) {
                return $this->year." (film del XXI secolo)";
            } else {
                return $this->year." (film del XX secolo)";
            }
        }
}
