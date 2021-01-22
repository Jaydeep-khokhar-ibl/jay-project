<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie and Session</title>
    
    <style>
        h4, h5{
            margin: 0;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        div{
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>

<div>
    <h4>Session set:-</h4>
    <?php
    $session_value = "Session is already Created This text is from session";
    $_SESSION["session-1"] = $session_value;
    if (isset($_SESSION["session-1"])) {
        echo $_SESSION["session-1"];
    }else{
        echo "Refresh the page to set session";
    }
    ?>
</div>

<div>
    <h4>Session unset:-</h4>
    <?php
    session_unset();
    if (!isset($_SESSION["session-1"])) {
        echo "all Value are reset";
    }else{
        echo $_SESSION["session-1"];
    }
    ?>
</div>

<div>
    <h4>Session destroy:-</h4>
    <?php
    session_destroy();
    echo "session is destroyed";
    ?>
</div>

<div>
    <h4>Cookie set:-</h4>
    <?php
    $cookie_name = "user";
    $cookie_value = "Jay for a day";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set! refresh to set";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</div>

<div>
    <h4>Cookie modify:-</h4>
    <?php
    $cookie_name = "user";
    $cookie_value = "Jay2 modify for a day";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set! refresh to set";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</div>

<div>
    <h4>Cookie delete:-</h4>
    <?php
    setcookie($cookie_name, "", time() - 3600);

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set! refresh to set";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Refresh to delete";
    }
    ?>
</div>

<div>
    <h4>Cookie check:-</h4>
    <?php
    setcookie("test_cookie", "test", time() + 3600, '/');
    
    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
      } else {
        echo "Cookies are disabled.";
      }
    ?>
</div>
</body>
</html>