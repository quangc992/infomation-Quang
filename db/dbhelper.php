<?php
require_once ('./db/db.php'); //connectt db


function execute($sql){
    
    // open connect db
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

    // insert , update , delete
    mysqli_query($conn, $sql);

    
    //close connect db
    mysqli_close($conn);
}



function executeResult($sql){
    
    // open connect db
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

    // insert , update , delete
    $result = mysqli_query($conn, $sql);

    $data = [];
    while ($row = mysqli_fetch_array($result, 1)) {
        $data[] = $row;
    }

    //close connect db
    mysqli_close($conn);

    return $data;
}

function executeSingleResult($sql){
    // open connect db
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

    $result = mysqli_query($conn, $sql);
    $row    = mysqli_fetch_array($result, 1);

    //dong ketnoi
    mysqli_close($conn);

    return $row;
}