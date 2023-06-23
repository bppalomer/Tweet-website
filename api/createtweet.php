<?php

include "config.php";

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);

    $content = $data['content'];
    $user_id = $data['user_id'];

    $sql = "INSERT INTO posts (content, user_id) VALUES ('$content','$user_id')";
    if($conn->query($sql)){
        $response = array (
            'success' => true,
            'message' => 'Post successfull'
        );
        echo json_encode($response);
    }
} else {
    echo "Invalid request! Only POST requests are allowed";
}

?>