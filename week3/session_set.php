    <?php
    session_start();
    $session_value = "Session is already Created This text is from session";
    $_SESSION["session-1"] = $session_value;
    if (isset($_SESSION["session-1"])) {
        echo $_SESSION["session-1"];
    }else{
        echo "Refresh the page to set session";
    }
    ?>