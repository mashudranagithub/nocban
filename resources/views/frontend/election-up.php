<?php
                    
    $passcode = $_POST['passcode'];
    
    if($passcode == 'rmb<zej8PN'){
        session_start();
        $_SESSION["user"]= "authenticated";
        header("location:".site_url('welcome/page/election-form'));
    }
    elseif($passcode == 'logout'){
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        header("location:".site_url('welcome/page/election-form'));
    }
    else{
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        header("location:".site_url('welcome/page/election-form'));
    }

    $servername = "localhost";
    $username = "nbnfak_db";
    $password = "DS(3Hf7Oir5i";
    $dbname = "nbnfak_db";
    
    $title = $_POST['title'];
    $file = $_FILES["file"]["name"];
    $status = $_POST['status'];
    $year = $_POST['year'];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        echo "Connection established!";
    
        $target_dir = $_SERVER["DOCUMENT_ROOT"].'/electionFiles/';
        $target_file = $target_dir.'/'. basename($_FILES["file"]["name"]);
        $uploadOk = 1;
    
        // Check if file already exists
        if (file_exists($target_file))
        {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    
        // Check file size
        if ($_FILES["file"]["size"] > 5242880)
        {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0)
        {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            
        }
        else
        {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
            {
                $sql = "INSERT INTO elections (id, title, file, status, year) VALUES ('', '$title', '$file', '$status', '$year')";
                if ($conn->query($sql) === true)
                {
                    session_start();
                    $_SESSION['msg'] = "New record created successfully and the file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
                    header("location:".site_url('welcome/page/boaelec2021'));
                }
                else
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }
            else
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    
    }

?>
