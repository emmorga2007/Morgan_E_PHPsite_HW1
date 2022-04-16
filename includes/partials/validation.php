<?php

function isFieldValid($input)
{
    if (empty($input)) {
        return false;
    }
    if (strlen($input) < 3) {
        return false;
    }
    return true;
}

function isEmailValid($email)
{
    if (empty($email)) {
        return false;
    }
    if (strlen($email) < 6) {
        return false;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}
