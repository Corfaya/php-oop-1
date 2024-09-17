<?php
    include "./Models/Movie.php";
    // objects
    $movie1 = new Movie("Paura e delirio a Las Vegas", ["Commedia", "Grottesco", "Drammatico"], 118, "Terry Gilliam", 1998, ["Johnny Depp", "Benicio del Toro", "Tobey Maguire", "Ellen Barkin", "Christina Ricci"]);
    $movie2 = new Movie("...altrimenti ci arrabbiamo!", ["Commedia", "Azione"], 98, "Marcello Fondato", 1974, ["Terence Hill", "Bud Spencer", "John Sharp", "Patty Shepard", "Donald Pleasence"]);
    $movie3 = new Movie("The Northman", ["Avventura", "Azione", "Drammatico", "Storico", "Fantastico"], 137, "Robert Eggers", 2022, ["Alexander Skarsgård", "Claes Bang", "Nicole Kidman", "Willem Defoe", "Ethan Hawke", "Anya Taylot-Joy"]);
    $movie4 = new Movie("Beetlejuice", ["commedia", "fantastico", "grottesco"], 92, "Tim Burton", 1988, ["Michael Keaton", "Alec Baldwin", "Winona Ryder", "Catherine O'Hara"]) ;

    $moviesArray = [$movie1, $movie2, $movie3, $movie4];
    // var_dump($moviesArray)
?>