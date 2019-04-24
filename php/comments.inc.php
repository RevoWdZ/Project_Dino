<?php

function setComments($conn)
{
    if (isset($_POST['commentSubmit'])) {
        $user_id = $_POST['user_id'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (user_id, date, message) VALUES ('$user_id', '$date', '$message');";
        $result = $conn->query($sql);
    }
}
