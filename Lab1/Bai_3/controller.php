<?php

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    if($email){
        $user = get_user($email);
    }

?>