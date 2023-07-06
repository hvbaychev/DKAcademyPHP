<?php

foreach ($emails as $email) {
    echo (filter_var($email, FILTER_VALIDATE_EMAIL)) ?
            "[+] Email '$email' is valid\n":
            "[-] Email '$email' is NOT valid";
}

// Проверка за инт

//predi
//$page_id = $_GET['id'];
//if (is_numeric($page_id)){
  //  do smth;
    //}

// sega

$page_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);