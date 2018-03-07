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
<?php include 'header.html';
?>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-12">
<?php


$url="https://api.themoviedb.org/3/person/7062?api_key=ccdc8854e80d379dcabe5369caab7eb9&language=en-US";

$apiresult= file_get_contents($url);

$person =json_decode($apiresult,true);
$gender;
if($person['gender']==1){
    $gender='Female';
}else{
    $gender="Male";
}
    echo '
                            <h1 class="text-center">'.$person['name'].' </h1>
                          
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <p class="text-center"> <img width="300px" src="https://image.tmdb.org/t/p/w500'.$person['profile_path'].'" width="350px"></p>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <h3>Personal Info</h3>
                            
                            <p class="startHeading"><strong>Gender:</strong></p>
                            <p>'.$gender.'</p>
                            <p class="startHeading"><strong>Birth Day:</strong></p>
                            <p>'.$person['birthday'].'</p>
                            <p class="startHeading"><strong>Place of Birth:</strong></p>
                            <p>'.$person['place_of_birth'].'</p>
                        </div>
                    </div> ';
        ?>
                    <div class="text">
                        <p> <?php echo $person['biography'] ?> </p>  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed" style="background-color:#ffffff;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Known For</h2></div>
            <div class="row people">
                <div class="col-md-4 col-sm-6 item">
                    <div class="box"><img class="img-circle" src="assets/img/iLJdwmzrHFjFwI5lvYAT1gcpRuA.jpg">
                        <h3 class="name">The hunger games</h3></div>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <div class="box"><img class="img-circle" src="assets/img/SLP.jpg">
                        <h3 class="name">Silver linings playbook</h3></div>
                </div>
                <div class="col-md-4 col-sm-6 item">
                    <div class="box"><img class="img-circle" src="assets/img/5gJkVIVU7FDp7AfRAbPSvvdbre2.jpg">
                        <h3 class="name">Passengers </h3></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>