<?php
    if(isset($user['user_name'])){
        echo $user['user_name'];
    }else{
        echo "không có dữ liệu";
    }
?>

<form method="post">
    <input type="email" name="email">
    <input type="submit">
</form>