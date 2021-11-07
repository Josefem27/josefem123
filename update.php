<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($conn);
mysqli_select_db($conn, "josefem");

if (isset( $_POST['update'])){   
    $full_name = $_POST["surname"] ." " . $_POST["firstname"] . " " . $_POST["lastname"];
    $i_d =  $_POST["id"];
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
    
   $update1 = mysqli_query($conn, "UPDATE `users` SET `fullname`='$full_name', `surname`='$sur_name',`firstname`='$first_name',`lastname`='$last_name',`email`='$e_mail',`phone`='$phone_num',`state`='$st_ate',`birthday`='$birth_day',`institution`='$insti_tution',`course`='$cou_rse',`identity`='$iden_tity',`statecode`='$state_code',`ppa_lga`='$ppa_lga',`ppa`='$p_pa',`batch`='$bat_ch',`month`='$mo_nth',`year`='$ye_ar',`gender`='$gen_der',`status`='$sta_tus',`post`='$po_st',`lodge`='$lod_ge',`discription`='$dis_cription' WHERE `id` = '$i_d' ");
if ($update1) {
   header("Location: index.php");
   
   die;
}else {
    die("update failed: " . mysqli_connect_error());
}
      //end
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

#label{
    position: relative;
    color: white;
}
#strong {
    text-transform: capitalize;
    color: #ffc107;

}
#a {
    position: relative;
    color: white;
    text-decoration: none;
    margin: 0px 30%;
}
#h2 {
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
#update{
	position: relative;
    width: 250px;
    margin: auto;
   
    border: 1px solid #ffffff;
    border-radius: 9px;
}
    </style>

    <div id="update">
  
    <form  method="post" id="loginbox" enctype="multipart/form-data" >
    <h2 id="h2">Register</h2>
        <div id="containerlogin">
		<div>
		<input type="hidden" value="<?php echo $user_data['id']; ?>" name="id" id="id" required>
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
        <label id="label" for="email">Email</label><br>
        <input type="email" value="<?php echo $user_data['email']; ?>" name="email" id="email" required>	
        </div>
        <br>
        <div>
        <label id="label" for="tel">Phone number</label><br>
        <input type="tel" value="<?php echo $user_data['phone']; ?>" name="tel" id="tel" required>	
        </div>	
        <br>
        <div>
        <label id="label" for="stoo">State Of Origin</label><br>
        <input type="text" value="<?php echo $user_data['state']; ?>" name="stoo" id="stoo" required>	
        </div>	
        <br>
        <div>
        <label id="label" for="bdate">Birthday</label><br>
        <input type="date" value="<?php echo $user_data['birthday']; ?>" name="bdate" id="bdate" placeholder="Select Your Birthday" required>	
        </div>	
        <br>
        <div>
        <label id="label" for="school">Institution Attended</label><br>
        <input type="text" value="<?php echo $user_data['institution']; ?>" name="school" id="school" required>	
        </div>	
        <br>
        <div>
        <label id="label" for="cos">Course Of Study</label><br>
        <input type="text" value="<?php echo $user_data['course']; ?>" name="cos" id="cos" required>	
        </div>		
        <br>
        <div style="text-transform: capitalize;">
        <label  id="label" for="idy">Identity</label><br>
        <input type="text" value="<?php echo $user_data['identity']; ?>" list="Options2"  name="idy" id="idy" placeholder="Select Your Identity" required>	
        <datalist id="Options2">
        <option value="Corp Member"></option>
        <option value="Senior Friend "></option>
        <option value="Non-Corp Member"></option>
        </datalist>
        </div>	
        <br>
        <div>
        <label id="label" for="stc">State Code</label><br>
        <input type="text" value="<?php echo $user_data['statecode']; ?>" name="stc" id="stc" required>
        </div>	
        <br>
        <div>
        <label id="label" for="loc1">PPA LGA </label><br>
        <input class="loc" value="<?php echo $user_data['ppa_lga']; ?>" list="Options3" placeholder="Select Your Location" name="loc1" id="loc1" required>
        <datalist id="Options3">
            </datalist>
        </div>
        <br>
        <div>
        <label id="label" for="ppa">PPA</label><br>
        <input type="text" value="<?php echo $user_data['ppa']; ?>" name="ppa" id="ppa" required>	
        </div>	
        <br>
        <div  id="specialbox">
        <div>
            <label  id="label" for="batch">Batch</label><br>
            <input  type="text" value="<?php echo $user_data['batch']; ?>" name="batch" id="batch" required>	
        </div>	
        <br>
        <div>
            <label id="label" for="year">Year</label><br>
            <input type="text" value="<?php echo $user_data['year']; ?>" name="year" id="year" required>	
        </div>	
        <br>
        <div>
            <label id="label" for="month">Month</label><br>
            <input type="text" value="<?php echo $user_data['month']; ?>" name="month" id="month" required>	
        </div>	
        
        </div>
        <br>
        <div>
        <label id="label" for="sex">Gender </label><br>
        <input  list="Options1" value="<?php echo $user_data['gender']; ?>" name="sex" id="sex" placeholder="Select Your Gender" required>
        <datalist id="Options1">
            <option value="Brother"></option>
            <option value="Sister"></option>
        </datalist>
    </div>
        <br>
        <div>
        <label id="label" for="status">Status </label><br>
        <input value="<?php echo $user_data['status']; ?>" list="Options6"  name="status" id="status" placeholder="select your status" required>
        <datalist id="Options6">
            <option value="Engaged"></option>
            <option value="Not Engaged"></option>
        </datalist>
    </div>
    <br>
    <div>
    <label id="label"  for="pith">Post In The House</label><br>
    <input value="<?php echo $user_data['post']; ?>" list="Options5" name="pith" id="pith" placeholder="select your post" required>
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
		<input type="text" value="<?php echo $user_data['lodge']; ?>" list="Options4" name="room" id="room" placeholder="select your lodge" required>	
        <datalist id="Options4">
            <option value="Papa Suite"></option>
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
		<div>
		<!--<label id="label" for="file">Picture</label><br>
		<input type="file" value="<?php echo $user_data['picture']; ?>" name="file" id="file" required>	
		</div>	-->	
		<br>
        <textarea name="description" value="" id="description" cols="30" rows="5" placeholder="what can we know about you"><?php echo $user_data['discription']; ?></textarea>
		<br>
		<div>	
		<input type="submit"  name="update" id="submitbtn" id="submit" value="submit" required>
		</div>
        <a href="login.php" id="a">click to<strong id="strong"> login</strong></a>
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