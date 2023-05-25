<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Feedback</title>
</head>
<body>
    <div class="container mt-3">
        <h1>Thank you for your valuable feedback</h1>
    </div>
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
    if(!$result)
        echo $result;
    ?>      
</body>
</html>
