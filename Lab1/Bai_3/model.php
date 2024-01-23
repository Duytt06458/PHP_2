<?php

function get_user($email){
    include './config.php';
    $sql = "SELECT * FROM accounts WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result ->num_rows > 0){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
    }

    $conn->close();
}

?>