<?php
$con =mysqli_connect('localhost' , 'root');

if($con){
    echo "connected";

}else{
    echo"not connected";
}
mysqli_select_db($con,'Form');

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$email = $_POST['email'];
$city = $_POST['city'];
$query ="insert into userinfodata (Firstname, Lastname, email, city) values ('$Firstname', '$Lastname', '$email', '$city')";


mysqli_query($con , $query);
header('location:index.php');
?>