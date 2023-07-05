<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visuals</title>
    <link href="space.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: black;
        position: relative;
    }

    h4,
    h6,
    p {
        color: #eee;
    }

    .vid {
        background-color: rgba(45, 46, 47, .2);
        /* padding: 50px 50px 30px 50px; */
        padding-bottom: 56.25%;
        border-radius: 20px;
        position: relative;
        overflow: hidden;
        width: 100%;
        /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
    }

    iframe {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 80%;
    height: 80%;
}

    .img-container {
        height:auto;
    }

    .bbymoon {
        height: 150px;
        width: 150px;
        text-align: center;
    }
</style>

<body>
    <?php
    include 'inc/navbar.php';
    ?>

    <div class="container">
        <div class="p-5">
            <h4>Visual Representations and Simulations</h4>
        </div>
    </div>

    <div class="container">
        <div class="vid">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4disyKG7XtU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <br>
            <p>The Milky way colliding with Andromeda galaxy</p>
        </div>
        <br>

        <div class="img-container">
            <div class="milk">
                <img src="../capstone/images/new-milky-way.jpg" alt="Milky Way">
                <figcaption>Milky Way</figcaption>
            </div>
        </div>
        <br>

        <div class="vid">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4q4ocW7tuG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <br>
            <p>The Voyage</p>
        </div>

        <br>

        <div class="img-container">
            <div class="sat">
                <img src="../capstone/images/solar-system-11578.jpg" alt="satelite locations">
                <figcaption>The furthest we have explored into space has been with the voyager 1 satelite</figcaption>
            </div>
        </div>

        <br>
        
        <div class="vid">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/9P6rdqiybaw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <br>
            <p>Wormholes !!</p>
        </div>


        <div class="container">
            <div class="p-5">
                <img class="bbymoon" src="../capstone/images/moon-png-44669.png">
            </div>
        </div>

        <?php
        include 'inc/footer.php';
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>