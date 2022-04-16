<?php

session_start();

include 'functions.php';
include 'validation.php';

$_SESSION['errors'] = [];
$_SESSION['submission'] = $_POST;

if (!array_key_exists('HTTP_REFERER', $_SERVER)) {
    exit;
}

if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$firstName = getPostDataWithDefault('first_name');
$lastName = getPostDataWithDefault('last_name');
$email = getPostDataWithDefault('email');
$userMessage = getPostDataWithDefault('message');

$firstNameValid = isFieldValid($firstName);
$lastNameValid = isFieldValid($lastName);
$emailValid = isEmailValid($email);
$messageValid = isFieldValid($userMessage);

if (!$firstNameValid) {
    $_SESSION['errors']['first_name'] = 'First name is not valid';
}

if (!$lastNameValid) {
    $_SESSION['errors']['last_name'] = 'Last name is not valid';
}

if (!$emailValid) {
    $_SESSION['errors']['email'] = 'Email is not valid';
}

if (!$messageValid) {
    $_SESSION['errors']['message'] = 'Message is not valid';
}

if (!$firstNameValid || !$lastNameValid || !$emailValid || !$messageValid) {
    // set errors to show to user here
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$to = "emily189morgan@hotmail.com";
$subject = "New email from contact form!";
$message = "<html><body>";
$message .= "First name: " . $firstName . "<br>";
$message .= "Last name: " . $lastName . "<br>";
$message .= "Email: " . $email . "<br>";
$message .= $userMessage . "<br>";
$message .= "</body></html>";

mail($to, $subject, $message);

$_SESSION['submission'] = [];

header('Location: ' . $_SERVER['HTTP_REFERER']);
