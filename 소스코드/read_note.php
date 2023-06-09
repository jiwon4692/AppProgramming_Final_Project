<?php

    $host = 'localhost';
    $user = 'jiwon';
    $pw = '4692';
    $dbName = 'test';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM note"; 
    $result = mysqli_query($mysqli, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $emotion = $row['emotion'];
        $data = $row['data'];

        
    }

    $myObj = new stdClass();

    $myObj->emotion = $emotion;
    $myObj->note = $data;


    $myJSON = json_encode($myObj);

    echo $myJSON;

?>