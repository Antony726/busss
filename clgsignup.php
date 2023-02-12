<?php
$schlname = filter_input(INPUT_POST,'schlname');
$usname = filter_input(INPUT_POST,'usname');
$pass = filter_input(INPUT_POST,'pass');
$conn = new mysqli('localhost','root','','bustrack');
if($conn->connect_error){
    die("connection failed :".$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into sig(schlname,usname,pass)
    values ($schlname,$usname,$pass)");
    
    $stmt->execute();
    echo "reg successful..";
    $stmt->close();
    $conn->close();

}
?>
