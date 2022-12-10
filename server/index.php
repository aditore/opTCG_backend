<?php
    #CONNECTED TO MYSQL
    require './conn/connection.php';
    
    
    $test = 'This is a test string';
    echo '<section>' . $test . '</section>';


    if ($_SERVER['REQUEST_URI'] === '/index.php') {
        echo '<p> Not on /, please go back to / to view website from the index. </p>';
    }
?>