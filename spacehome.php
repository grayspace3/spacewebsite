<?php include 'inc/db.php';
$loggedin = false;
session_start();
if (isset($_REQUEST['login'])) {
    $my_sql = "SELECT * FROM `users` WHERE email = '" . $_REQUEST['email'] . "' AND pword = '" . $_REQUEST['pword'] . "';";
    // echo $my_sql;


    // 2b) Perform the query:
    $result = $db->query($my_sql);
    $count = $result->rowCount();
    // echo $count;
    if ($count >= 1) {
        $loggedin = true;
        $row = $result->fetch();
        $_SESSION = $row;
    }
    // Fetch the results of the query:
}

if (isset($_REQUEST['logout'])) {
    unset($_SESSION['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe of Mysteries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="space.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a97bd6d57a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-color: black;
        position: relative;
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

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../capstone/images/universe-4027609_1920notext.jpg" class="d-block w-100 h-100" alt="universe with blackhole">
                <div class="carousel-caption">
                    <h5>Universe
                        <br>
                        of
                        <br>
                        Mysteries
                    </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../capstone/images/black-hole-6274731_1920.jpg" class="d-block w-100  h-100" alt="blackhole">
            </div>
            <div class="carousel-item">
                <img src="../capstone/images/wormholegimp-739872.jpg" class="d-block w-100  h-100" alt="wormhole">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>

    <div class="videocontainer">
        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/uD4izuDMUQA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
        </iframe>
    </div>

    <!-- Adding votes to DB -->
    <?php include 'inc/db.php';
    $my_sql = "SELECT * FROM facts";


    // Are we upvoting a fact?
    if (isset($_REQUEST['upvote'])) {
        $sql = "UPDATE `facts` SET `upvote` = `upvote` + 1 WHERE id = " . $_REQUEST['upvote'];
        $db->query($sql); // no need to fetch results
    }

    // Are we downvoting a fact?
    if (isset($_REQUEST['downvote'])) {
        $sql = "UPDATE `facts` SET `downvote` = `downvote` + 1 WHERE id = " . $_REQUEST['downvote'];
        $db->query($sql); // no need to fetch results
    }
    $result = $db->query($my_sql); // E.g. SELECT * FROM inventory

    ?>

    <!-- facts section -->
    <div class="container">
        <section class="info" id="facts">
            <h1 class="pt-4" style="color:black">Astonishing Facts</h1>
            <br>
            <div class="container">
                <ul style="color:black">
                    <?php include 'inc/db.php';
                    $my_sql = "SELECT * FROM facts";
                    // 2b) Perform the query:
                    $result = $db->query($my_sql); // E.g. SELECT * FROM inventory
                    // Fetch the results of the query:
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <div class="text-start">
                            <li>
                                <h4><?= $row['fact'] ?></h4>
                            </li>
                            <form>
                                <div>
                                    <div class="voting">
                                        <button class="likebtn" name="upvote" value="<?= $row['id'] ?>">
                                            <i class="fa fa-thumbs-up"></i>
                                        </button>
                                        <span class="input1">
                                            <?= $row['upvote'] ?>
                                        </span>
                                        <button class="dislikebtn" name="downvote" value="<?= $row['id'] ?>">
                                            <i class="fa fa-thumbs-down"></i>
                                        </button>
                                        <span class="input1">
                                            <?= $row['downvote'] ?>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <br>
                        </div>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
    </div>


    <div class="container">
        <div class="p-5">
        <img class="bbymoon" src="../capstone/images/moon-png-44669.png">
        </div>
    </div>

    <?php
    include 'inc/footer.php';
    ?>

    <!-- <script>
        let likeBtns = document.querySelectorAll('.likebtn');
        let dislikeBtns = document.querySelectorAll('.dislikebtn');
        let input1s = document.querySelectorAll('.input1');
        let input2s = document.querySelectorAll('.input2');

        likeBtns.forEach((likebtn, index) => {
            likebtn.addEventListener('click', () => {
                input1s[index].value = parseInt(input1s[index].value) + 1;
            });
        });

        dislikeBtns.forEach((dislikebtn, index) => {
            dislikebtn.addEventListener('click', () => {
                input2s[index].value = parseInt(input2s[index].value) + 1;
            });
        });
    </script> -->

    <script>
        $('.voting button').click(function(e) {
            console.log('Hello')
            console.log($(this).attr('name'))
            console.log($(this).attr('value'))
            e.preventDefault()

            var name = $(this).attr('name')
            var value = $(this).attr('value')
            var o = $(this)
            $.ajax({
                url: 'vote.php?' + name + '=' + value,
                dataType: 'json'
                // uncomment this comma and add it to the end of the line above (after 'json'),
                // beforeSend: function(){
                //     console.log('wait')
                //     o.css('cursor', 'wait');

                // }

            }).done(function(data){
                console.log(data.votes)
                o.next().text(data.votes)
                // o.css('cursor', 'pointer');
            })
        }) 

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <?php if ($loggedin) {
    ?><script>
            window.onload = () => {
                const myModal = new bootstrap.Modal('#loggedIn');
                myModal.show();
            }
        </script>
    <?php
    }
    ?>


</body>

</html>