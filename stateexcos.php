<?php

include("connection.php");

if (isset( $_POST['signup'])){   
    $full_name = $_POST["surname"] ." " . $_POST["firstname"] . " " . $_POST["lastname"];
    $sur_name =  $_POST["surname"];
    $first_name =  $_POST["firstname"];
    $last_name =  $_POST["lastname"];
    $po_st = $_POST["pith"];

    mysqli_select_db($conn, "josefem");
    $query = "CREATE TABLE if not exists excos
    (
        id int(11) AUTO_INCREMENT PRIMARY KEY not null,
        fullname varchar(200) not null, 
        surname varchar(200) not null, 
        firstname varchar(200) not null, 
        lastname varchar(200) not null,
        post varchar(200) not null, 
        name varchar(200) not null, 
        picture LONGBLOB not null 
);";    
     mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)) {
        echo "Table excos created successfully";
        
        mysqli_select_db($conn, "josefem");
        if (getimagesize($_FILES["file"]["tmp_name"])== FALSE) {
            echo "please select an image";
        }else {
            $pic_ture = addslashes($_FILES["file"]["tmp_name"]);
            $name = addslashes($_FILES["file"]["name"]);
            $pic_ture= file_get_contents($pic_ture);
            $pic_ture= base64_encode($pic_ture);
        } 
            $query1 = "INSERT INTO `excos`(`fullname`,`surname`, `firstname`, `lastname`, `post`, `name`, `picture`) VALUES
            ('$full_name','$sur_name', '$first_name', '$last_name','$po_st','$name', '$pic_ture')";
        
         mysqli_query($conn, $query1);
        
        //header("Location: login.php");
         die;
        }else{
            echo "Error creating table: " . mysqli_error($conn);
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
<form action="stateexcos.php" method="post" id="loginbox" enctype="multipart/form-data" >
    <h2>Register</h2>
        <div id="containerlogin">
		<div>
		<label id="label" for="surname">Surname</label><br>
		<input type="text" name="surname" id="surname" required>
		</div>
		<br>
		<div>
		<label id="label" for="firstname">Firstname</label><br>
		<input type="text" name="firstname" id="firstname" required>
		</div>
		<br>
		<div>
		<label id="label" for="lastname">Lastname</label><br>
		<input type="text" name="lastname" id="lastname" required>
		</div>
        <br>
        <div>
        <label id="label"  for="pith">Post In The House</label><br>
    <input  list="Options5" name="pith" id="pith" placeholder="select your post" required>
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