<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link href="space.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</head>
<style>
    body {
        background-color: black;
        position: relative;
    }

    h6 {
        color: #eee;
    }

    #chat {
        background-color: black;
        color: #eee
    }

    /* .response {
        border-radius: 10px;
        border: white;
        height: 2px;
        width: 50px;
    } */

    .bbymoon {
        width: 200px;
        text-align: center;
    }
</style>

<body>
    <?php
    include 'inc/navbar.php';
    ?>

    <div class="container">
        <div class="pt-3">
            <h1 class="display-3">Chat</h1>
        </div>

        <div class="p-3">
            <h6>
               ~ ask me anything ~
                <br>
            </h6>
        </div>

        <form class="container">
            <div class="row mx-auto col-12 col-md-8 col-lg-6">
                <div class="mb-3">
                    <input type="text" name="question" placeholder="question" id="chat" class="form-control" aria-describedby="chat">
                </div>
                <div class="column mb-3">
                    <div class="row" id="answer">
                        <?php
                        include 'newchat.php';

                        if (isset($_REQUEST['submitchat'])) {
                            // echo $sql;
                            $response = chat($_REQUEST['question']);
                        ?>
                            <p><?= $response ?></p>

                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div>
                    <button type="submit" name="submitchat" class="btn btn-info">
                        <span>&#x1F47E;</span>
                    </button>
                </div class="mb-3">
            </div>
        </form>
    </div>

    <div class="container">
        <div class="p-5">
            <img class="bbymoon" src="../capstone/images/mercury.png">
        </div>
    </div>

    <script>
        $('button[name="submitchat"]').click(function(e) {
            console.log('wait')
            $('body').css('cursor', 'wait');
            $(this).css('cursor', 'wait');
            // $(this).prop('disabled', true)

        })


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>