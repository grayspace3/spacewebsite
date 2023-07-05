<?php // Connect to the DB server and select a given DB:
            $dbhost = "localhost";
            $dbname = "space_site";
            $dbuser = "root";
            $dbpassword = "root";

            if($_SERVER['HTTP_HOST']=="eabbott.pairserver.com") {
                $dbhost = "db176.pair.com";
                $dbname = "eabbott_spacesite";
                $dbuser = "eabbott_3_w";
                $dbpassword = "ffLC5Qz5ED9jtbv5";
            }
            $db = new PDO(
                "mysql:host=$dbhost;dbname=$dbname;charset=utf8",
                $dbuser,
                $dbpassword
            ); // Connect to YOUR_DB_NAME db on MySQL on HOSTNAME using YOUR_DB_USER_NAME and YOUR_DB_PW credentials

?>