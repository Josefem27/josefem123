<?php
include("connection.php");


if (isset( $_POST['signup']){

  $pname = $_POST['name'];
  $pemail = $_POST['email'];
  $psubject = $_POST['subject'];
  $pmessage =  $_POST['message'];

 
}

  echo $contact->send();
?>
