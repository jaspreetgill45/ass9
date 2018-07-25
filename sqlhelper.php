<?php

function connectToMyDatabase(){
    $user = 'CPSC2030';
    $pwd = 'CPSC2030';
    $server = 'localhost';
    $dbname = 'ass10';
 
    $conn = new mysqli($server, $user, $pwd, $dbname);
    return $conn;
}
function setupMyTwigEnvironment(){
    $loader = new Twig_Loader_Filesystem('./templates');
    $twig = new Twig_Environment($loader); 
    return $twig;  
}
?>

