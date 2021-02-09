<?php

include './incs/db_connection.php';

function validate($email)
{
    if (!$email) {
        return 'Email field is empty';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Invalid email format';
    } else {
        $conn = OpenCon();
        $sql = "INSERT INTO emails (email) VALUES ('$email')";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return 'Success';
        } else {
            $conn->close();
            return 'Email is already in database';
        }

    }
}




