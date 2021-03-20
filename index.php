<?php
$insert= false;
if(isset($_POST['name'])){
$_SERVER="localhost";
$username="root";
$password ="";

$con= mysqli_connect($_SERVER,$username,$password);

if(!$con){
    die("connect to data base is failed due to m".mysqli_connect_error());
}
//echo " connection establish sucessfully";


$name =$_POST['name'];
$gender =$_POST['gender'];
$age =$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc =$_POST['desc'];

$sql=" INSERT INTO `trip`.`tour` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";


if($con->query($sql)==true){
    //echo "sucessfully entered ";
    $insert = true;
}

else{
    echo "Error : $sql <br> $con->error";
}
$con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="city.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>welcome to my Tour</h1>
        <p>Registor and go ahed</p>
     <?php
     if($insert == true)
     {
        echo "<p class='msg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
     }
    ?>
    <form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter ur name">
    <input type="text" name="age" id="age" placeholder="Enter ur age">
    <input type="text" name="gender" id="gender" placeholder="Enter ur gender">
    <input type="email" name="email" id="email" placeholder="Enter ur email">
    <input type="phone" name="phone" id="phone" placeholder="Enter ur phone">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any vthing u want"></textarea><br>
     <button class="btn">Submit</button>

</form>
</div>
    <script src="index.js"></script>
   

   
    </body>
</html>