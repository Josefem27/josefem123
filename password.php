<?php

include("connection.php");

mysqli_select_db($conn, "josefem");
$query = "select * from users ";

$result = mysqli_query($conn, $query);
$user_data = mysqli_fetch_assoc($result);
$numrow = mysqli_num_rows($result);
       
        
if (isset( $_POST['signup'])){ 
    $i_d =  $_POST["id"];
    $pass_word = $_POST["password"];
    $npass_word = $_POST["npassword"];
    $cpass_word = $_POST["cpassword"];
    if ($pass_word == $user_data["password"]) {
        if ( $_POST["npassword"] = $_POST["cpassword"]){
            $update1 = mysqli_query($conn, "UPDATE `users` SET `password`='$npass_word' WHERE `id` = '$i_d' ");
            if ($update1) {
               header("Location: index.php");
               
               die;
            }else {
                die("update failed: " . mysqli_connect_error());
            }
        }    else {
            die("password does not match: " . mysqli_connect_error());
        }
    }else {
        die("wrong password: " . mysqli_connect_error());
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
    font-size: 14px;
}
}
strong {
    text-transform: capitalize;
    color: #ffc107;

}
a {
    position: relative;
    color: white;
    text-decoration: none;
}
#aa{
    margin: 0px 25px;
}
h2 {
    color: #ffc107;
    text-align: center;
    background:  rgba(30, 67, 86, 0.8);
    padding: 2px;
    position: relative;
    margin: 10px -25px;
    font-size: 15px;
}
input#submitbtn {
    border-radius: 10px;
    position: relative;
    border: none;
    margin: 8px 20%;
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
    width: 300px;
    margin: auto;
   
    border: 1px solid #ffffff;
    border-radius: 9px;
}
    </style>
</head>
<body>
<div id="login">
<form action="password.php" method="post" id="loginbox" enctype="multipart/form-data" >
    <h2>Change Password</h2>
        <div id="containerlogin">
        <div>
        <input type="hidden" value="<?php echo $user_data['id']; ?>" name="id" id="id" required>
        <label id="label" for="password">Old Password</label><br>
		<input type="password" value="<?php echo $user_data['password']; ?>" name="password" id="password" required>	
		</div>		
		<br>
		<div>
		<label id="label" for="npassword">New Password</label><br>
		<input type="password" name="npassword" id="npassword" required>	
		</div>	
        <br>	
		<div>
		<label id="label" for="cpassword">Confirm Password</label><br>
		<input type="password" name="cpassword" id="cpassword" required>	
		</div>		
		<input type="submit"  name="signup" id="submitbtn" id="submit" value="submit" required>
		</div>
    </form>
</div>