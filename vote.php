<?php 
// error_reporting(E_ALL);

include 'inc/db.php';

    // Are we upvoting a fact?
    if (isset($_REQUEST['upvote'])) {
        $sql = "UPDATE `facts` SET `upvote` = `upvote` + 1 WHERE id = " . $_REQUEST['upvote'];
        $db->query($sql); // no need to fetch results    
        $sql = "SELECT `upvote` FROM `facts` WHERE id = " . $_REQUEST['upvote'];
        $result = $db->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $votes = $row['upvote'];
    }

    // Are we downvoting a fact?
    if (isset($_REQUEST['downvote'])) {
        $sql = "UPDATE `facts` SET `downvote` = `downvote` + 1 WHERE id = " . $_REQUEST['downvote'];
        $db->query($sql); // no need to fetch results
        $sql = "SELECT `downvote` FROM `facts` WHERE id = " . $_REQUEST['downvote'];
        $result = $db->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $votes = $row['downvote'];
    }

    // sleep(10);
    header('Content-Type: application/json');
    echo json_encode(['success'=>true,'votes'=>$votes]);
