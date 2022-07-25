<?php

// Connect With Database

$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Display Error If Failed To Connect

if($db->connect_errno) {
    printf("Connect Failed: %s/n",$db->connect_error);
    exit();
}