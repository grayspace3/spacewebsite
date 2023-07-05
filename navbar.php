
<div>


    <nav id="navbar-example2" class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
        <a class="navbar-brand" href="spacehome.php"><img src="images/planet-saturn-earth-solar-system-planet-e9210e2c3903eaedd91bb60e6f5a0906.png">
            <!-- Universe of Mysteries -->
        </a>
        <ul class="nav nav-pills">
            <!-- <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading1">Facts</a>
                </li> -->
            <li class="nav-item">
                <a class="nav-link" href="chatgpt.php">ChatGPT</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">More</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" id="nav-login" data-bs-toggle="modal" data-bs-target="#signUpModal" href="#">Sign Up</a></li>
                    <?php if (isset($_SESSION['id'])){
                            ?><li><a class="dropdown-item" id="" href="spacehome.php?logout=1">Log out, <?= $_SESSION['fname'] ?></a></li>
                            <?php
                    } else {
                        ?><li><a class="dropdown-item" id="nav-login" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Login</a></li>
                            <?php
                    } 
                    ?> 
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="vis.php">Visuals</a></li>
                    <li><a class="dropdown-item" href="info.php">Info</a></li>

                </ul>
            </li>
        </ul>
    </nav>
</div>

<!-- Login Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="spacehome.php">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" style="background-color:#222; color:#eee">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pword" class="form-control" id="exampleInputPassword1" style="background-color:#222; color:#eee">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" style="background-color:#222; color:#eee">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" name="login" class="btn btn-info">Sign in</button>

                   
                       
                   
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Sign Up Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="sign">Sign Up</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" id="fname" style="background-color:#222; color:#eee">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last name</label>
                        <input type="text" name="lname" class="form-control" id="lname" style="background-color:#222; color:#eee">
                    </div>
                    <div class="mb-3">
                        <label for="signUpEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="signUpEmail" aria-describedby="emailHelp" style="background-color:#222; color:#eee">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pword" class="form-control" id="exampleInputPassword1" style="background-color:#222; color:#eee">
                    </div>
                    <button type="submit" name="signup" class="btn btn-info">Sign up</button>

                    <?php include 'inc/db.php';
                    if (isset($_REQUEST['signup'])) {
                        $my_sql = "INSERT INTO `users` (`fname`, `lname`, `email`, `pword`) VALUES ('" . $_REQUEST['fname'] . "', '" . $_REQUEST['lname'] . "', '" . $_REQUEST['email'] . "', '" . $_REQUEST['pword'] . "')";

                        // 2b) Perform the query:
                        $result = $db->query($my_sql); // E.g. SELECT * FROM inventory
                        // Fetch the results of the query:
                    ?>
                        <script>
                            
                            window.onload = () => {
                                // $('#thanks').show()
                                const myModal = new bootstrap.Modal('#thanks');
                                myModal.show();
                            }
                        </script>
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>





<!-- Thanks Modal -->
<div class="modal fade" id="thanks" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thanks!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You are now signed up!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- You are signed in Modal -->
<div class="modal fade" id="loggedIn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Awesome!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You are now signed in!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>