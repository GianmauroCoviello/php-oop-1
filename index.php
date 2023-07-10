<?php

    // qui verranno inseriti gli oggetti con le instanze
    // inserita la classe Movie
    class Movie{
        // inseriamoci prima tutti i suoi relativi dati
        public $title;
        public $years;
        public $genre;
        public $rating;
        public $lenght_song;

        // inseriamo il constructor
        public  function __construct($title, $years, $genre,$rating,$lenght_song) {
            $this->title = $title;
            $this->years = $years;
            $this->genre = $genre;
            $this->rating = $rating;
            $this->lenght_song = $lenght_song;
            
        }


        public function getDateMovies(){

        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>