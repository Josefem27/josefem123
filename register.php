<?php
session_start();

include("connection.php");
//include("function.php");

if (isset( $_POST['signup'])){   
    $full_name = $_POST["surname"] ." " . $_POST["firstname"] . " " . $_POST["lastname"];
    $sur_name =  $_POST["surname"];
    $first_name =  $_POST["firstname"];
    $last_name =  $_POST["lastname"];
    $e_mail = $_POST["email"];
    $phone_num = $_POST["tel"];
    $st_ate = $_POST["stoo"];
    $birth_day = $_POST["bdate"];
    $insti_tution = $_POST["school"];
    $cou_rse = $_POST["cos"];
    $iden_tity = $_POST["idy"];
    $state_code = $_POST["stc"];
    $ppa_lga = $_POST["loc1"];
    $p_pa = $_POST["ppa"];
    $bat_ch = $_POST["batch"];
    $mo_nth = $_POST["month"];
    $ye_ar = $_POST["year"];
    $gen_der = $_POST["sex"];
    $sta_tus = $_POST["status"];
    $po_st = $_POST["pith"];
    $lod_ge = $_POST["room"];
    $dis_cription = $_POST["description"];
    $pass_word = $_POST["password"];
    $cpass_word = $_POST["cpassword"];
if ( $_POST["password"] = $_POST["cpassword"]){
    if (!empty($sur_name) &&  !empty($pass_word) && !empty($e_mail))
         {
            //save to db
           // $query = "INSERT INTO users (username, email, phone) VALUES ('$user_name', '$e_mail', '$phone_num')";
           if (isset($_POST["signup"])) {
// Create database
    mysqli_select_db($conn, "josefem");
    $query = "CREATE TABLE if not exists users
    (
        id int(11) AUTO_INCREMENT PRIMARY KEY not null,
        fullname varchar(200) not null, 
        surname varchar(200) not null, 
        firstname varchar(200) not null, 
        lastname varchar(200) not null, 
        email varchar(200) not null, 
        phone varchar(200) not null, 
        state varchar(200)  not null, 
        birthday varchar(200) not null, 
        institution varchar(200) not null, 
        course varchar(200)  not null, 
        identity varchar(200)  not null, 
        statecode varchar(200)  not null,
        ppa_lga varchar(200)  not null,
        ppa varchar(200)  not null, 
        batch varchar(200)  not null, 
        month varchar(200)  not null, 
        year varchar(200)  not null, 
        gender varchar(200) not null, 
        status varchar(200) not null, 
        post varchar(200) not null , 
        lodge varchar(200) not null, 
        name varchar(50) not null, 
        picture LONGBLOB not null, 
        discription varchar(200) not null, 
        password varchar(200) not null,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        
    );";    
     mysqli_query($conn, $query);

    if (mysqli_query($conn, $query)) {
        echo "Table MyGuests created successfully";
        
        mysqli_select_db($conn, "josefem");
           $query1 = "INSERT INTO `users`(`fullname`,`surname`, `firstname`, `lastname`, `email`, `phone`, `state`, `birthday`, `institution`, `course`, `identity`, `statecode`, `ppa_lga`, `ppa`,`batch`,
           `month`, `year`, `gender`,`status`, `post`, `lodge`,`discription`, `password`) VALUES
           ('$full_name','$sur_name', '$first_name', '$last_name','$e_mail','$phone_num','$st_ate','$birth_day','$insti_tution','$cou_rse','$iden_tity','$state_code','$ppa_lga','$p_pa','$bat_ch','$mo_nth','$ye_ar','$gen_der','$sta_tus','$po_st', '$lod_ge','$dis_cription', '$pass_word')";

        mysqli_query($conn, $query1);

       header("Location: login.php");
        die;
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
           

     }else{
        echo "Error";
         }
    
                  } else {
                    die("empty field: " . mysqli_connect_error());
                    header("Location: register.php"); 
                        }  
}else {
    die("password failed: " . mysqli_connect_error());
}
   
      //end
        
    }     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    background:while;
    position: relative;
    border: none;
    margin: 8px 30%;
    padding: 4px;
    width: 89px;
}
#loginbox{
    position: absolute;
    background: #0d2735;
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
  
    <form action="register.php" method="post" id="loginbox" enctype="multipart/form-data" >
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
        <label id="label" for="email">Email</label><br>
        <input type="email" name="email" id="email" required>	
        </div>
        <br>
        <div>
        <label id="label" for="tel">Phone number</label><br>
        <input type="tel" name="tel" id="tel" required>	
        </div>	
        <br>
        <div>
        <label id="label" for="stoo">State Of Origin</label><br>
        <input type="text" name="stoo" id="stoo" required>	
        </div>	
        <br>
        <div>
        <label id="label" for="bdate">Birthday</label><br>
        <input type="date" name="bdate" id="bdate" placeholder="Select Your Birthday" required>	
        </div>	
        <br>
        <div>
        <label id="label" for="school">Institution Attended</label><br>
        <input type="text" name="school" id="school" required>	
        </div>	
        <br>
        <div>
        <label id="label" for="cos">Course Of Study</label><br>
        <input type="text" name="cos" id="cos" required>	
        </div>		
        <br>
        <div style="text-transform: capitalize;">
        <label  id="label" for="idy">Identity</label><br>
        <input type="text"  list="Options2"  name="idy" id="idy" placeholder="Select Your Identity" required>	
        <datalist id="Options2">
        <option value="Corp Member"></option>
        <option value="Senior Friend "></option>
        <option value="Non-Corp Member"></option>
        </datalist>
        </div>	
        <br>
        <div>
        <label id="label" for="stc">State Code</label><br>
        <input type="text" name="stc" id="stc" required>	
        </div>	
        <br>
        <div>
        <label id="label" for="loc1">PPA LGA </label><br>
        <input class="loc" list="Options3" placeholder="Select Your Location" name="loc1" id="loc1" required>
        <datalist id="Options3">
            </datalist>
        </div>
        <br>
        <div>
        <label id="label" for="ppa">PPA</label><br>
        <input type="text" name="ppa" id="ppa" required>	
        </div>	
        <br>
        <div  id="specialbox">
        <div>
            <label  id="label" for="batch">Batch</label><br>
            <input  type="text" name="batch" id="batch" required>	
        </div>	
        <br>
        <div>
            <label id="label" for="year">Year</label><br>
            <input type="text" name="year" id="year" required>	
        </div>	
        <br>
        <div>
            <label id="label" for="month">Month</label><br>
            <input type="text" name="month" id="month" required>	
        </div>	
        
        </div>
        <br>
        <div>
        <label id="label" for="sex">Gender </label><br>
        <input  list="Options1" name="sex" id="sex" placeholder="Select Your Gender" required>
        <datalist id="Options1">
            <option value="Brother"></option>
            <option value="Sister"></option>
        </datalist>
    </div>
        <br>
        <div>
        <label id="label" for="status">Status </label><br>
        <input  list="Options6"  name="status" id="status" placeholder="select your status" required>
        <datalist id="Options6">
            <option value="Engaged"></option>
            <option value="Not Engaged"></option>
        </datalist>
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
            <option value="Brothers' Co'ord"></option>
            <option value="Assistant Brothers' Co'ord"></option>
            <option value="Public Relation Manager"></option>
            <option value="Man Of God"></option>
            <option value="Landlady"></option>
            <option value="Woman Of God"></option>
            <option value="Assistant Landlady"></option>
            <option value="Cheif Security Officer"></option>
            <option value="Bishop 1"></option>
            <option value="Bishop 2"></option>
            <option value="Bishop 3"></option>
            <option value="Bishop 4"></option>
            <option value="Head Of Department Landlady"></option>
            <option value="Monitor 1"></option>
            <option value="Monitor 2"></option>
            <option value="Monitor 3"></option>
            <option value="Monitor 4"></option>
            <option value="Monitor 5"></option>
            <option value="Monitor 6"></option>
            <option value="Jesus baby"></option>
            <option value="Last Born Boy"></option>
            <option value="Last Born girl"></option>
            <option value="Cousin/libarian"></option>
            <option value="Sanitation 1"></option>
            <option value="Sanitation 2"></option>
            <option value="Sanitation 3"></option>
            <option value="Head Huser"></option>
            <option value="Assistant Head Huser"></option>
            <option value="commercial 1"></option>
            <option value="commercial 2"></option>
            <option value="Member"></option>
        </datalist>
    </div>	
		<br>
		<div>
		<label id="label" for="room">Lodge</label><br>
		<input type="text"list="Options4" name="room" id="room" placeholder="select your lodge" required>	
        <datalist id="Options4">
            <option value="Papa Suite"></option>
            <option value="secreteriat"></option>
            <option value="Kings Court"></option>
            <option value="Mary's Haven"></option>
            <option value="Divine"></option>
            <option value="Zion"></option>
            <option value="Caleb"></option>
            <option value="Paul"></option>
            <option value="Stephen"></option>
            <option value="Peter"></option>
            <option value="Deborah"></option>
            <option value="Hephzibah"></option>
            <option value="Grace"></option>
            <option value="Elizabeth"></option>
            
        </datalist>
		</div>				
		<br>
        <textarea name="description" id="description" cols="30" rows="5" placeholder="what can we know about you"></textarea>
		<br>
		<div>
		<label id="label" for="password">Password</label><br>
		<input type="password" name="password" id="password" required>	
		</div>		
		<br>
		<div>
		<label id="label" for="cpassword">Confirm Password</label><br>
		<input type="password" name="cpassword" id="cpassword" required>	
		</div>		
		<input type="submit"  name="signup" id="submitbtn" id="submit" value="submit" required>
		</div>
        <a href="login.php">click to<strong> login</strong></a>
    </form>
</div>
    <script>

var Options = document.getElementById("Options3");
var loc = [
"Asa",
"Bacita",
"Agbo-Oba",
"Baruten",
"Ekiti",
"Gbaja",
"Isin Zone",
"Ilorin",
"Jebba",
"Kaiama",
"Lafiagi",
"Moro",
"Omu-Aran",
"Offa",
"Oro",
"Share",
"Others"
]
   // function inPutclear() {
   // locinput.reset;
    //} 
    var opt = document.getElementById("opt");
    var loc1 = document.getElementById("loc1");
    var j; 
    var len = loc.length;
    for (j = 0; j<len; j++) {
        Options.innerHTML += "<option>" + loc[j] + "</option>";
        
    }
    if (loc1.click()) {
        alert("dood ");
    }

    </script>
</body>
</html>