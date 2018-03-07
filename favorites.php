<!DOCTYPE html >
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

<?php include 'header.html'; ?>
<div class="projects-horizontal">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Favorites </h2></div>
        <div class="row projects">
            <?php



            $url="https://api.themoviedb.org/3/discover/movie?api_key=ccdc8854e80d379dcabe5369caab7eb9&language=en-US&sort_by=release_date.desc&include_adult=false&include_video=false&page=1&release_date.lte=".date("Y-m-d");
            $apiresult= file_get_contents($url);

            $json =json_decode($apiresult,true);

            foreach($json['results'] as $movie) {
                echo '<div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="movie.php?movieId='.$movie['id'].'"><img style="height: 300px;"class="img-responsive" src="https://image.tmdb.org/t/p/w500'.$movie['poster_path'].'"></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="name">'.$movie['title'].'</h3>
                            <p>'.$movie['release_date'].'</p>
                            <p class="description">'.substr($movie['overview'],0,425).'</p>
                        </div>
                    </div>
                </div>' ;
            }
            ?>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-5">
                        <a href="#"><img class="img-responsive" src="assets/img/uZwnaMQTdwZz1kwtrrU3IOqxnDu.jpg"></a>
                    </div>
                    <div class="col-md-7">
                        <h3 class="name">Red Sparrow </h3>
                        <p>2018 </p>
                        <p class="description">Prima ballerina Dominika Egorova faces a bleak and uncertain future after she suffers an injury that ends her career. She soon turns to Sparrow School, a secret intelligence service that trains exceptional young people to use
                            their minds and bodies as weapons. Egorova emerges as the most dangerous Sparrow after </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>


</body>


</html>