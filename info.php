<?php
    
$conn = mysqli_connect('localhost','root',"",'sparksbank');
if(!$conn){
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}

mysqli_select_db($conn,'abhyaz');
$id = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
$name = $_POST['name'];
$email = $_POST['email'];
$prod = $_POST['optradio'];
$rating = $_POST['rating'];
$comment = $_POST['text'];

$query = "INSERT INTO `feedback`(`id`, `name`, `email`, `product`, `ratings`, `comments`) 
          VALUES ('$id','$name','$email','$prod','$rating','$comment')";

$result =  mysqli_query($conn,$query);
echo $result;
?>