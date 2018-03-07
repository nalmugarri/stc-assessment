<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stc-assessment</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search1.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
</head>

<body>



<?php

include 'header.html';

$movieid = $_GET['movieId'];

$url="https://api.themoviedb.org/3/movie/".$movieid."?api_key=ccdc8854e80d379dcabe5369caab7eb9&language=en-US";

$apiresult= file_get_contents($url);

$movie =json_decode($apiresult,true);

$genres= array($movie['genres']);
foreach($movie['genres'] as $item ){
echo $item ;
}

   echo ' 
 <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="intro">
                        <h1 class="text-center" > '.$movie['title'].'  </h1>
                        <p class="text-center"> '.$item.' </p>
                        
                        <span class="date">'.$movie['release_date'].'</span></p>
                        
                        <p class="text-center"><img src="https://image.tmdb.org/t/p/w500'.$movie['poster_path'].'" width="350px"></p>
                    </div>
                    <div class="text">
                        <p> '.$movie['overview'].'</p>
                        <figure></figure>
                        <p> </p>
                    </div>
                </div>
            </div>
        </div>
    </div> ';
    ?>






    <div class="team-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Cast </h2></div>
            <div class="row people">
                <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/jlaw.jpg">
                    <h3 class="name">Jennefir Lawrance</h3>
                    <p class="title">Actress </p>
                </div>
                <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/joel.jpg">
                    <h3 class="name">Joel </h3>
                    <p class="title">Actor </p>
                </div>
                <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/img/jeremy.jpg">
                    <h3 class="name">Jeremy </h3>
                    <p class="title">Actoe </p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>