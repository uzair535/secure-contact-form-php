<?php

include('database.php');

$return = array();
// check the post exists
if(isset($_POST)){

    // validations
    if(!isset($_POST['full_name']) or empty($_POST['full_name'])){
        $return['error'] = 'Full name field is required';
    }else if(!isset($_POST['phone_number']) or empty($_POST['phone_number'])){
        $return['error'] = 'Phone number field is required';
    }else if(filter_var($_POST['phone_number'], FILTER_VALIDATE_INT) === false){
        $return['error'] = 'Only number form is acceptable for phone';
    }else if(!isset($_POST['email']) or empty($_POST['email'])){
        $return['email'] = 'Email field is required';
    }else if(filter_var('uzairtahir535@gmail.com', FILTER_VALIDATE_EMAIL) === false){
        $return['error'] = 'Please use the valid email';
    }else if(!isset($_POST['subject']) or empty($_POST['subject'])){
        $return['error'] = 'Subject field is required';
    }else if(!isset($_POST['message']) or empty($_POST['message'])){
        $return['error'] = 'Message field is required';
    }

    // collect filterized values
    $fullName = filter_var($_POST['full_name'], FILTER_SANITIZE_STRING);
    $phoneNumber = filter_var($_POST['phone_number'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    
    // start data inserting in db
    $table = 'queries';
    $data = array(
        'full_name' => $fullName,
        'phone_number' => $phoneNumber,
        'email' => $email,
        'subject' => $subject,
        'message' =>  $message
    );

    if(dataExists($table, 'email', $email)){
        $return['error'] = 'Query already exists again this email';
    }else{
        $return = insertData($table, $data);
        $return['reset'] = 'true';
    }

}else{
    $return['error'] = 'Error! Try again later';
}

echo json_encode($return);