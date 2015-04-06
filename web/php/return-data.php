<?php

// This is the server-side script.
// Set the content type.
header('Content-Type: text/plain');

if (isset($_REQUEST['firstname'])){
    $firstname = $_REQUEST['firstname'];
} else {
    echo "Firstname is empty!";
    exit();
}

if (isset($_REQUEST['lastname'])){
    $lastname = $_REQUEST['lastname'];
} else {
    echo "Firstname is empty!";
    exit();
}

// Send the data back.
echo $firstname, " ", $lastname;
?>