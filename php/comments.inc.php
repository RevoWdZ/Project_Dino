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

function getComments($conn)
{
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment-box'><p>";
        echo $row['user_id'] . "<br>";
        echo $row['date'] . "<br>";
        echo nl2br($row['message']);
        echo "</p>
            <form class='edit-form' method='POST' action='editcomment.php'>
                <input type='hidden' name='comment_id' value='" . $row['comment_id'] . "'>
                <input type='hidden' name='user_id' value='" . $row['user_id'] . "'>
                <input type='hidden' name='date' value='" . $row['date'] . "'>
                <input type='hidden' name='message' value='" . $row['message'] . "'>
                <button>Edit</button>
            </form>
        </div>";
    }
}
ob_start();
function editComments($conn)
{
    if (isset($_POST['commentSubmit'])) {
        $comment_id = $_POST['comment_id'];
        $user_id = $_POST['user_id'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE comments SET message='$message' WHERE comment_id='$comment_id'";
        $result = $conn->query($sql);
        header("Location: article.php");
        exit;
    }ob_end_flush();   
}