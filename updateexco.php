<?php

include("connection.php");


if (isset($_POST['search'])){ 
    $escoid = $_POST["id"];
    echo $escoid;
if ($escoid > 0) {
    mysqli_select_db($conn, "josefem");
$query = "SELECT * FROM excos  where id = '$escoid' ";

$result = mysqli_query($conn, $query);
$user_data = mysqli_fetch_assoc($result);
$numrow = mysqli_num_rows($result);
    
}

}

if (isset( $_POST['signup'])){ 
    $escoid1 = $_POST["userid"];
    $full_name = $_POST["surname"] ." " . $_POST["firstname"] . " " . $_POST["lastname"];
    $sur_name =  $_POST["surname"];
    $first_name =  $_POST["firstname"];
    $last_name =  $_POST["lastname"];
    $po_st = $_POST["pith"];
    
    mysqli_select_db($conn, "josefem");
        if (getimagesize($_FILES["file"]["tmp_name"])== FALSE) {
            echo "please select an image";
        }else {
            $pic_ture = addslashes($_FILES["file"]["tmp_name"]);
            $name = addslashes($_FILES["file"]["name"]);
            $pic_ture= file_get_contents($pic_ture);
            $pic_ture= base64_encode($pic_ture);
        
        }   
        mysqli_select_db($conn, "josefem");
        
        $update1 = mysqli_query($conn, "UPDATE `excos` SET `fullname`='$full_name', `surname`='$sur_name', `firstname`='$first_name', `lastname`='$last_name',`post`='$po_st',`name`='$name', `picture`='$pic_ture'  WHERE `id` = '$escoid1' ");
        if ($update1) {
            echo "update successful: ";
        }else {
            die("update failed: " . mysqli_connect_error());
        }
           
    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        label{
    color: white;
}
#label{
    position: relative;
}
strong {
    text-transform: capitalize;
    color: #ffc107;

}
a {
    position: relative;
    color: white;
    text-decoration: none;
    margin: 0px 30%;
}
h2 {
    color: #ffc107;
    text-align: center;
    background:  rgba(30, 67, 86, 0.8);
    padding: 2px;
    position: relative;
    margin: 10px -25px;
}
input#submitbtn {
    border-radius: 10px;
    position: relative;
    border: none;
    margin: 8px 30%;
    padding: 4px;
    width: 89px;
}
#loginbox{
    position: absolute;
    background:#0d2735;
    padding: 20px 25px;
    z-index: 3;
}
input{
    border-radius: 3px;
    border: 1px solid;`
    margin: 3px;
    width: 100%;
}
div#specialbox {
    display: flex;
}
#login{
	position: relative;
    width: 250px;
    margin: auto;
   
    border: 1px solid #ffffff;
    border-radius: 9px;
}
    </style>
</head>
<body>
    <div id="login">
        <form action="updateexco.php" method="post">
        <input type="text" value="<?php ?>" name="id" id="id" required>
        <input type="submit" name="search" value="search">
        </form>
<form action="updateexco.php" method="post" id="loginbox" enctype="multipart/form-data" >
    <h2>Register</h2>
        <div id="containerlogin">
		<div>
        <input type="text" value="<?php echo $user_data['id']; ?>" name="userid" id="id" required>
		<label id="label" for="surname">Surname</label><br>
		<input type="text" value="<?php echo $user_data['surname']; ?>" name="surname" id="surname" required>
		</div>
		<br>
		<div>
		<label id="label" for="firstname">Firstname</label><br>
		<input type="text" value="<?php echo $user_data['firstname']; ?>" name="firstname" id="firstname" required>
		</div>
		<br>
		<div>
		<label id="label" for="lastname">Lastname</label><br>
		<input type="text" value="<?php echo $user_data['lastname']; ?>" name="lastname" id="lastname" required>
		</div>
        <br>
        <div>
        <label id="label"  for="pith">Post In The House</label><br>
    <input  list="Options5" value="<?php echo $user_data['post']; ?>" name="pith" id="pith" placeholder="select your post" required>
    <datalist id="Options5">
            <option value="President"></option>
            <option value="General Secretary"></option>
            <option value="Assistant General Secretary"></option>
            <option value="Sister Co'ord. & Welfare Secretary"></option>
            <option value="Transport and Organizing Secretary"></option>
            <option value="Financing Secretary"></option>
            <option value="Treasurer"></option>
            <option value="Prayer Secretary"></option>
            <option value="Bible Study Secretary"></option>
            <option value="Evangelism Secretary"></option>
            <option value="Drama Director"></option>
            <option value="Music Director"></option>
            <option value="Publicty Secretary"></option>
        </datalist>	
        </div>
        <br>
		<div>
		<label id="label" for="file">Picture</label><br>
		<input type="file" name="file" id="file" required>	
		</div>
        <br>
        <div>
        <input type="submit"  name="signup" id="submitbtn" id="submit" value="submit" required>
        </div>