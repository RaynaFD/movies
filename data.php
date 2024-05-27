<?php 
session_start();
  //points to movies.json file, it passes it to the fucntion "file_get_contents" it grbs everyhting as plain text
  //after that we use json decode to convert the plain text into an array, this is acheived by passing the second argument as 1.
   $movies = json_decode(file_get_contents('movies.json'), 1);


if (isset($_SESSION['movies'])) {
  $movies = $_SESSION['movies'];

}else{$_SESSION['movies'] = $movies;}



   $genres = [
    'Fantasy',
    'Sci-Fi',
    'Action',
    'Comedy',
    'Drama',
    'Horror',
    'Romance',
    'Family',
  ];