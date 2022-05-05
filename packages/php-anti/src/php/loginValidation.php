<?php
$mail = $_POST['mail'];
$pass = $_POST['pass'];

function userValidation($mail, $pass) {
    include "connectDB.php";
    
    $insertQuery = "select email, senha from tbl_usuario where email = '$mail' and senha = '$pass';";
    
    $queryResult = mysqli_query($conn, $insertQuery);
    
    $row = mysqli_num_rows($queryResult);
    
    if ($row == 1) {
        return 1;
    } else {
        return 0;
    }
}

include "tool.php";

$emailInjVerify = antiInfection($mail);
$passInjVerify = antiInfection($pass);

$validateUser = userValidation($emailInjVerify, $passInjVerify);

function redirectPage ($param1, $param2) {
    if ($param1 == 1 && $param2 == 1) {
        header("Location: ../welcome.php"); 
    } else {
        header("Location: ../index.php");
    }
}
redirectPage($emailInjVerify, $passInjVerify, $validateUser)
?>