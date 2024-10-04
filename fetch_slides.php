<?php
    include('Connection.php');

    $sql = "SELECT * FROM user_comment WHERE 1";

    $result = $conn->query($sql);

    $slides = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $slides[] = array(
                'text' => $row['comment']
            );
        }
    }

    header('Content-Type: application/json');
    echo json_encode($slides);

    $conn->close();
?>
