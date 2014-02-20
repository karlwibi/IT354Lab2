
<?php

$email = $_POST['phpemail'];

header('Content-Type: application/json; charset=utf-8', true,200);

if ( $email != "student@it354.com"){
    $return = array('success' => 1, 'login' => $email, 'message' => 'You successfully logged in!');
    echo json_encode($return);
}
else {
    $return = array('success' => 0, 'login' => $email, 'message' => 'Username already exists.');
    echo json_encode($return);
}

?>
