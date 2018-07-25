<?php

require_once 'sqlhelper.php';
        
$conn = connectToMyDatabase();
$sql = "CALL spLimit()";
$result = mysqli_query($conn,$sql);

while($extract = mysqli_fetch_assoc($result)) {
	echo "Username = " . $extract['username'] ."	". "Message = " . $extract['msg'] ." 	" . $extract['tym'] . "<br>";
}