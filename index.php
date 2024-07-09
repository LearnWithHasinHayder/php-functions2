<?php 
$CONFIG['db_username'] = "user";
$CONFIG['db_password'] = "password";

function sendEmail(){
    //send email
    global $CONFIG;
    
    echo $CONFIG['db_username'];
}



sendEmail();