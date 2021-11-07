<?php
session_start();

include("connection.php");
//include("function.php");

if (isset( $_POST['login']))
{
     $state_code = $_POST["stc"];
     $pass_word = $_POST["password"];

     if (!empty($state_code) && !empty($pass_word)){

        //read  db
        mysqli_select_db($conn, "josefem");
        $query = "SELECT * FROM users WHERE statecode = '$state_code' limit  1";
         $result = mysqli_query($conn, $query);

         if ($result) {
            if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] ===  $_POST["password"] && $user_data['statecode'] = $_POST["stc"]  ) 
            {
             $_SESSION["stc"] = $user_data["statecode"];
             echo $_SESSION["stc"];
             header("Location: index.php");
             die;
            }else {
                echo '<div>wrong password or statecode</div>';
                //die("wrong password or statecode: " .mysqli_connect_error());
            }

        }else {
            echo '<div>user does not exist, do well to register</div>';
           // die("user does not exist, do well to register: " .mysqli_connect_error());
        }
         }

     }else {
        //die("field empty: " .mysqli_connect_error());
        echo '<div>field is empty; input your details</div>';
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
    left: -52px;
}
#loginbox{
    position: absolute;
    width: 100%;
    z-index: 3;
    
}
strong {
    text-transform: capitalize;
    color: #ffc107;
    margin: 4px;

}
a {
    color: white;
    text-decoration: none;
}
h2 {
    color: #ffc107;
}
input#submitbtn {
    border-radius: 10px;
    border: none;
    margin: 12px;
    padding: 5px;
    width: 89px;
}
#login{
	position: relative;
    width: 215px;
    text-align: center;
    padding: 9px;
    margin: auto;
    background: #0d2735;
    background: #11224dbd;
    border: 1px solid #ffffff;
    border-radius: 9px;
}
    </style>
</head>
<body>
    <form action="login.php" method="post" id="loginbox" >
		<div id="login">
		<h2>Login</h2>
		<div id="containerlogin">
		<div>
		<label id="label" for="stc">State Code</label>
		<input type="text" name="stc" id="stc">
		</div>
		<br>
		<div>
		<label id="label" for="password">Password</label>
		<input type="password" name="password" id="password" >	
		</div>		
		<input type="submit" id="submitbtn" id="submit" value="submit" name="login">
		</div>
        <a href="register.php">create a account now <strong> signup</strong></a>
		</div>
    </form>
    <script src="javascript.js"></script>
</body>
</html>