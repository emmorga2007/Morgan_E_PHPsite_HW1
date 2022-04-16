<?php

function getPostDataWithDefault($key)
{
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }
    return "";
}

function getErrorMessageFromSession($key)
{
    if (!isset($_SESSION)) {
        return "";
    }
    if (!array_key_exists('errors', $_SESSION)) {
        return "";
    }
    if (!array_key_exists($key, $_SESSION['errors'])) {
        return "";
    }
    return $_SESSION['errors'][$key];
}

function getSubmissionFromSession($key)
{
    if (!isset($_SESSION)) {
        return "";
    }
    if (!array_key_exists('submission', $_SESSION)) {
        return "";
    }
    if (!array_key_exists($key, $_SESSION['submission'])) {
        return "";
    }
    return $_SESSION['submission'][$key];
}
