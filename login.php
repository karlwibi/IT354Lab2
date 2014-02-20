<?php
 $username = $_POST['name'];
 $password = $_POST['pwd'];

 if(  $username=="student@it354.com" && $password=="123456" ) {
  echo 'true';
  
 }
 else{
 echo 'false';
 }
?>