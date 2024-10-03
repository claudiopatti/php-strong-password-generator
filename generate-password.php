<?php

session_start();

require_once __DIR__.'/partials/functions.php';

$_SESSION['password'] = randomPassword($_GET['lenghtPassword']);

header('Location: ./result.php');