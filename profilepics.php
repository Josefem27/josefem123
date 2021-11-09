<?php

include("connection.php");

mysqli_select_db($conn, "josefem");
$query = "select * from users ";

$result = mysqli_query($conn, $query);
$user_data = mysqli_fetch_assoc($result);
$numrow = mysqli_num_rows($result);
       
        
if (isset( $_POST['signup'])){ 
    $i_d =  $_POST["id"];
    if (getimagesize($_FILES["file"]["tmp_name"])== FALSE) {
        echo "please select an image";
    }else {
        $pic_ture = addslashes($_FILES["file"]["tmp_name"]);
        $name = addslashes($_FILES["file"]["name"]);
        $pic_ture= file_get_contents($pic_ture);
        $pic_ture= base64_encode($pic_ture);
        changeimage($name, $pic_ture);
    }
}

function changeimage($name, $pic_ture)
{
    $conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "josefem");
$i_d =  $_POST["id"];
$qry = "UPDATE `users` SET `name`='$name',`picture`='$pic_ture' WHERE `id` = '$i_d' ";
$result = mysqli_query($conn, $qry);
if ($result) {
    echo "Image uploaded";
    header("Location: index.php");
    die;
} else {
    echo "image not uploaded only jpg allowed";
}
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
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
<form action="profilepics.php" method="post" id="loginbox" enctype="multipart/form-data" >
    <h2>Change Profile Picture</h2>
        <div id="containerlogin">
        <div>
        <?php 
               echo '<img src="data:image;base64,'.$user_data['picture'].' " class="bx bxl-dribbble" style="width: 100%; height: 200px; border-radius: 50%;" id="facimg" >'; 
            ?>
        </div>
        <input type="hidden" value="<?php echo $user_data['id']; ?>" name="id" id="id" required>
        <br>
        <div>
		<label id="label" for="file">Choose Picture</label><br>
		<input type="file"  name="file" id="file" required>	
		</div>
		<input type="submit"  name="signup" id="submitbtn" id="submit" value="submit" required>
		</div>
    </form>
</div>