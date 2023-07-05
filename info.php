<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link href="space.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
    body {
        background-image: url("../capstone/images/moon-png-44669.png");
        background-color: black;
        background-size: 350px; 
        background-repeat: no-repeat;
        background-attachment:fixed;
        background-position: center bottom;
        color: #eee;
    }

    .info {
        margin: 20px 50px 0 50px;
    }



</style>

<body>
    <?php include 'inc/navbar.php'; ?>

    <div class="container">
        <div class="m-5">
            <div class="info">
                <h1>About</h1>
                <p>Author: Emilie Abbott, coding bootcamp graduate</p>
                <p>Contact Info: abbott.emilie@gmail.com</p>

            </div>
            <div class="links">
            <div class="m-5">
                <h1>Sources</h1>
                <p><a href="https://chat.openai.com/">chat.openai.com</p>
            </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

    </script>
</body>


</html>