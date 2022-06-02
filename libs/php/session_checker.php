<?php
session_start();
unset($username);
$secret_word = 'if i ate spinach';
if (isset($_SESSION['login'])) {
    list($c_username, $cookie_hash) = explode(',', $_SESSION['login']);
    if (md5($c_username.$secret_word) == $cookie_hash) {
        $username = $c_username;
    } else {
        print "You have tampered with your session.";
    }
}
?>