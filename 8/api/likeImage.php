<?php

    include 'dbConnection.php';

    $conn = getDatabaseConnection("img_likes");
    
    $sql = "INSERT INTO img_likes (favorite, img) VALUES('1', )";
    
    $stmt = $conn->prepare($sql); // This will send the sql you provided
	$stmt->execute(); // This will execute the sql
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($records);

?>