<?php
        require_once 'sqlhelper.php';
        
        $conn = connectToMyDatabase();  
        $uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
        $message = mysqli_real_escape_string($conn, $_REQUEST['msg']);

        $sql = "CALL spInsert('$uname','$message')";
        $result = mysqli_query($conn,$sql);

        // $result = $conn->query("SELECT * from chatbox");
        // $insert = $conn->query("INSERT INTO chatbox(id, username, msg)
        // VALUES (DEFAULT ,'$uname','$message')");

        $num_rows = mysqli_num_rows($result);
?>