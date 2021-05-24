<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";


// //query for connection
$connect = mysqli_connect($server, $username, $password, $dbname);

//send button 

//array for error messages
$arrErrors = array('errEmail' => '', 'errEmailEmpty' => '', 'errMsg' => '', 'errMsgEmpty' => '');
$arrSucc = array('succ' => '');

//if user clicks
if(isset($_POST['send'])){

    //email field has value
    if(!empty($_POST['email'])){
        $email = $_POST['email'];

        //if email is not valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $arrErrors['errEmail'] = 'Invalid email address';
        }
        else{
            $count1 = 0;
            $count1++;
        }
    }
    //email field doesn't have value
    else{
        $arrErrors['errEmailEmpty'] = 'Please enter your email address';
    }

    //message field has value
    if(!empty($_POST['msg'])){
        $msg = $_POST['msg'];

        //if the message is not long enough
        if(strlen($msg) > 60){
            $arrErrors['errMsg'] = '<p style="color: red; font-weight:bold; font-size:18px; padding:0px "> Message is too long! </p>';
        }
        else{
            $count2 = 0;
            $count2++;
        }

    }
    //message field doesn't have value
    else{
        $arrErrors['errMsgEmpty'] = 'Please send us a message';
    }

    //all fields are successful
    $tcount = $count1 + $count2;
    if($tcount == 2){
        // //creating query
        $query = "INSERT INTO usermessages (Email, Messages) VALUES ('$email', '$msg');";

        // //executing query
        $run_q = mysqli_query($connect, $query);
        
        $arrSucc['succ'] = '<p style="color: green; font-weight:bold; font-size:22px; padding:0px "> Message Sent Successfully! </p>';
        
    }
}
else{
    $arrEmpty = array('empty' => 'Enter all details please');
}



?>