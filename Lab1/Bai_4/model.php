<?php

function get_category(){
    include './config.php';
    $sql = "SELECT * FROM categories";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result ->num_rows > 0){
        $row = $result->fetch_all(MYSQLI_ASSOC);
        return $row;
    }

    $conn->close();
}

?>