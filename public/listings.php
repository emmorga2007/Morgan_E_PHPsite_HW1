<?php
include '../includes/functions.php';
session_start();

// followed same formatting as contact
$username = getSubmissionFromSession('username');
$usernameError = getErrorMessageFromSession('username');

$_SESSION['errors'] = [];

?>

<html lang="en">


</html>
