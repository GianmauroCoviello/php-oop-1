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
            $stringMovie = 'movie: '.$this->title.'</br> year: '.$this->years.'</br> genre: ' . $this->genre.'</br> rate: '.$this->rating.'</br> lenght_song: '.$this->lenght_song.'min </br></br>';


            return $stringMovie;
        }
    }


    // inseriamo le instanze della classe
    $It_The_Clown = new Movie ('IT-the Clown', 2020 , 'Horror', 4 , 210,);
    $Dark = new Movie ('Dark', 2018 , 'Horror', 3 , 250);

    // stampoamo a schermo i due ogetti
    echo( $It_The_Clown ->getDateMovies());
    echo( $Dark ->getDateMovies());


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