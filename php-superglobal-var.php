<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SuperGlobal Array</title>

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
        <h4>$GLOBALS</h4>
        <p>
            <?php 
            $a = 1; 
            $b = 2;
            
            function say_hello() { 
                $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b']; 
            }
            say_hello(); 
            echo $c; 
            ?>
        </p>
    </div>

    <div>
        <h4>$_REQUEST</h4>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="name">
            Message: <input type="text" name="message">
            <input type="submit" value="Send">
        </form>
        <p>
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $name 	= $_REQUEST['name'];
                $message= $_REQUEST['message'];
            
                if (empty($name)) {
                    echo "Name is empty";
                } elseif (empty($message)) {
                     echo "Message is empty";
                } else {
                    echo "Hello $name, here is your message: $message";
                }
            }
            ?>
        </p>
    </div>

    <div>
        <h4>$_GET</h4>
        <p><a href="?name='name'&location='location'">Click to get</a></p>
        <p>
            <?php 
            $name 	= $_GET['name'];
            $location= $_GET['location'];
        
            echo "Hello $name form $location";
            ?>
        </p>
    </div>

    <div>
        <h4>$_SERVER</h4>
        <pre>
            <?php 
            print_r($_SERVER);
            ?>
        </pre>
    </div>
</body>
</html>