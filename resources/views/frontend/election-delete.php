<?php

    $servername = "localhost";
    $username = "nbnfak_db";
    $password = "DS(3Hf7Oir5i";
    $dbname = "nbnfak_db";
    
    $file_id = $_POST['id'];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        $file_id = $_POST['id'];
        $sql = 'DELETE FROM elections WHERE id='.$file_id;
        if ($conn->query($sql) === true)
        {
            session_start();
            $_SESSION['msg'] = "Record deleted successfully";
            header("location:".site_url('welcome/page/boaelec2021'));
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

?>
