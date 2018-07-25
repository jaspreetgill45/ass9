<!DOCTYPE html>
<html lang="en">
	<head>
        <title>ChatBox</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="javascript.js"></script>
        <style>
        div{
            padding: 2em;
            background-color: #ccc;
            color: white;
            text-align: center;
            margin-left: 2em;
            }
        </style>
	</head>
	<body>
        <form name="form1">        
        <label for="uname"><b>Username</b></label>
            <input id="uname" type="text" placeholder="Enter Username" name="uname" required>
        <label for="message"><b>message</b></label>
            <input id="msg" type="text" placeholder="Enter your message here" name="msg" required>
            <button type="submit" onclick="submitChat()"  id="btn">submit</button>
        <div id="logs">
            
        </div>
    </body>

</html>