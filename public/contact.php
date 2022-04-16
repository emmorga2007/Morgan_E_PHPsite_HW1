<?php
include '../includes/functions.php';
session_start();

// gets the current item if there is one in the session
$currentItem = null;
if($_SESSION['current']){
    $currentItem = $_SESSION['current'];
}

// just added message after class stuff
$firstName = getSubmissionFromSession('first_name');
$lastName = getSubmissionFromSession('last_name');
$email = getSubmissionFromSession('email');
$message = getSubmissionFromSession('message');

$firstNameError = getErrorMessageFromSession('first_name');
$lastNameError = getErrorMessageFromSession('last_name');
$emailError = getErrorMessageFromSession('email');
$messageError = getErrorMessageFromSession('message');

$_SESSION['errors'] = [];
$_SESSION['submission'] = [];

?>


<!DOCTYPE html>
<html lang="en">


</html>