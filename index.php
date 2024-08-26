<?php
session_start();
if(isset($_SESSION['username'])){
    header('Location: feed.php?' .  basename($_SERVER['QUERY_STRING']));
}
?>
<!DOCTYPE html>
<html lang="en" uri="www.gr8brik.rf.gd">

<head>

    <title>GR8BRIK - Block building browser game</title>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="lib/theme.css">
    <script src="lib/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="robots" content="noarchive"> 
    <meta name="description" content="Gr8brik is a block building browser game written in JavaScript, W3CSS and JSC3D. No download required">
    <meta name="keywords" content="legos, online block builder, gr8brik, online lego modeler, barbies-legos8885 balteam, lego digital designer, churts, anti-coppa, anti-kosa, churtsontime, sussteve226, manofmenx, gr8brik-3d, all online lego builder">
    <meta name="author" content="sussteve226">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body class="w3-light-blue w3-container">

    <?php 

        include('navbar.php');

    ?>

    <div class="w3-content w3-card-24 w3-center w3-round w3-border" style="max-width:800px;position:relative">

        <a href="#feed"><img class="mySlides" src="img/feed.jpg" style="width:500px" loading='lazy' class="w3-animate-right"></a>
        <a href="#community"><img class="mySlides" src="img/com.jpg" style="width:500px" loading='lazy' class="w3-animate-right"></a>
        <a href="#creations"><img class="mySlides" src="img/creations.jpg" style="width:500px" loading='lazy' class="w3-animate-right"></a>
        <a href="#uploads"><img class="mySlides" src="img/upload.jpg" style="width:500px" loading='lazy' class="w3-animate-right"></a>

        <a class="w3-btn-floating w3-blue w3-xlarge w3-hover-white" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <a class="w3-btn-floating w3-blue w3-xlarge w3-hover-white" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

    </div>

    <!-- <script>

        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        setInterval(function() {
            plusDivs(1);
        }, 3000);

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }


    </script> -->
	
	<script>
	$(document).ready(function() {
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    setInterval(function() {
        plusDivs(1);
    }, 3000);

    function showDivs(n) {
        var x = $(".mySlides"); // Use jQuery selector
        if (n > x.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = x.length;
        }
        x.fadeOut(); // Hide all slides
        x.eq(slideIndex - 1).fadeIn(); // Show the current slide
    }
});

	</script>

    <div class="w3-container w3-center" id="main">

        <h1>Welcome to GR8BRIK!</h1>

        <p>GR8BRIK is a block building browser game written in JavaScript, W3CSS and ThreeJS.</p> 

        <p>No download needed, just click the big white button below.</p>

        <a href="modeler.php" class="w3-btn w3-white w3-hover-blue w3-large" target="_blank">START BUILDING!</a>

        <b>Or...</b>

        <a href="/acc/login" class="w3-btn w3-blue w3-hover-opacity">LOGIN</a>

        <a href="/acc/register" class="w3-btn w3-blue w3-hover-opacity">REGISTER</a>

    </div><hr />

            <div id="feed">
            <h1>A feed just for you</h1>
                <img class="w3-right w3-card-24 w3-padding w3-mobile" src="img/feed.jpg" width="25%" height="25%" alt="User PFP" loading='lazy'>
                <br /><p>When you <a href="acc/register">Register</a> on GR8BRIK; there is now a personalised feed of the 6 newest models uploaded to GR8BRIK. You can view these models by clicking on them and enabling the WebGl window; or download it and import it into <a href="http://www.github.com/gr8brik-locallife">GR8BRIK desktop</a>.</p>
                <a href="/acc/register" class="w3-btn w3-blue w3-hover-opacity">REGISTER</a><hr />
            </div>

            <div id="community">
                <img class="w3-right w3-card-24 w3-padding w3-mobile" src="img/com.jpg" width="25%" height="25%" alt="User PFP" loading='lazy'><br />
                <h1>Awesome community</h1>
                <p>In the GR8BRIK community, you can view posts of other and if you <a href="acc/register">Register</a>, you can post on the community forums!</p>
                <a href="/com/" class="w3-btn w3-blue w3-hover-opacity">COMMUNITY</a><hr />
            </div>

            <div id="creations">
                <img class="w3-right w3-card-24 w3-padding w3-mobile" src="img/creations.jpg" width="25%" height="25%" alt="Blured creation" loading='lazy'><br />
                <h1>Full of builds</h1>
                <p>On GR8BRIK, you can scroll on for hours looking at people's builds via the <a href="cre/index.php">Creations</a> page.</p>
                <a href="list" class="w3-btn w3-blue w3-hover-opacity">CREATIONS</a><hr />
            </div>

            <div id="uploads">
                <img class="w3-right w3-card-24 w3-padding w3-mobile" src="img/upload.jpg" width="25%" height="25%" alt="Blured creation" loading='lazy'><br />
                <h1>Upload your creations</h1>
                <p>When you Login to you're GR8BRIK account; you can upload a model you've created from the <a herf="modeler.php">Modeler</a> (not other people's builds, you will be banned for stealing!). Once done, you can view it on the <a href="/cre/index">Creations</a> page.</p>
                <a href="/acc/index#upload" class="w3-btn w3-blue w3-hover-opacity">UPLOAD</a><hr />
            </div>

        <?php include('linkbar.php'); ?>


</div>

</body>
</html>