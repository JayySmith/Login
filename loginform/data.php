<?php
$name = $_POST['name'];
$email = $_POST['email']; 
$passwort = $_POST['passwort'];
$user_info = array($email, $passwort, $name);

if (!empty($name) AND !empty($email) and !empty($passwort)) {
    $eintrag = implode(';', $user_info)."\r\n";
    file_put_contents("/data.txt", $eintrag, FILE_APPEND);
    echo "$email has been registrated successfully";
} else {
    echo "Please fill out the following fields";
}
?>