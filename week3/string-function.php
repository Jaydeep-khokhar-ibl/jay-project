<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>

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
    <h4>addcslashes:-</h4>
    <h5>Add a backslash in front of the character "W":</h5>
    <?php
    $str = addcslashes("Hello World!","W");
    echo($str); 
    ?>
</div>

<div>
    <h4>addslashes:-</h4>
    <h5>Add a backslash in front of each double quote ("):</h5>
    <?php
    $str = addslashes('What does "yolo" mean?');
    echo($str);
    ?>
</div>

<div>
    <h4>bin2hex:-</h4>
    <h5>Convert "Hello World!" to hexadecimal values:</h5>
    <?php
    $str = bin2hex("Hello World!");
    echo($str);
    ?>
</div>

<div>
    <h4>chop:-</h4>
    <h5>Remove characters from the right end of a string:</h5>
    <?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo chop($str,"World!");
    ?>
</div>

<div>
    <h4>chr:-</h4>
    <h5>Return characters from different ASCII values:</h5>
    <?php
    echo chr(52) . "<br>"; // Decimal value
    echo chr(052) . "<br>"; // Octal value
    echo chr(0x52) . "<br>"; // Hex value
    ?>
</div>

<div>
    <h4>chunk_split:-</h4>
    <h5>Split the string after each character and add a "." after each split:</h5>
    <?php
    $str = "Hello world!";
    echo chunk_split($str,1,".");
    ?>
</div>

<div>
    <h4>convert_cyr_string:-</h4>
    <h5>Convert a string from one character-set to another:</h5>
    <?php
    $str = "Hello world! æøå";
    echo $str . "<br>";
    echo convert_cyr_string($str,'w','a');
    ?>
</div>

<div>
    <h4>convert_uudecode:-</h4>
    <h5>Decode a uuencoded string:</h5>
    <?php
    $str = ",2&5L;&\@=V]R;&0A `";
    echo convert_uudecode($str);
    ?>
</div>

<div>
    <h4>convert_uuencode:-</h4>
    <h5>Encode a string:</h5>
    <?php
    $str = "Hello world!";
    echo convert_uuencode($str);
    ?>
</div>

<div>
    <h4>count_chars:-</h4>
    <h5>Return a string with all the different characters used in "Hello World!" (mode 3):</h5>
    <?php
    $str = "Hello World!";
    echo count_chars($str,3);
    ?>
</div>

<div>
    <h4>crc32:-</h4>
    <h5>Print the result of crc32():</h5>
    <?php
    $str = crc32("Hello World!");
    printf("%u\n",$str);
    ?>
</div>

<div>
    <h4>echo:-</h4>
    <h5>Write some text to the output:</h5>
    <?php
    echo "Hello world!";

    ?>
</div>

<div>
    <h4>explode:-</h4>
    <h5>Break a string into an array:</h5>
    <?php
    $str = "Hello world. It's a beautiful day.";
    print_r (explode(" ",$str));
    ?>
</div>

<div>
    <h4>fprintf:-</h4>
    <h5>Write some text to a text file named "test.txt":</h5>
    <?php
    $number = 9;
    $str = "Beijing";
    $file = fopen("test.txt","w");
    echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);
    ?>
</div>

<div>
    <h4>print_r:-</h4>
    <h5>Print the translation table used by the htmlspecialchars function:</h5>
    <?php
    print_r(get_html_translation_table());
    ?>
</div>

<div>
    <h4>hebrev:-</h4>
    <h5>Reverse the display of Hebrew characters:</h5>
    <?php
    echo hebrev("á çùåï äúùñâ");
    ?>
</div>

<div>
    <h4>hebrevc:-</h4>
    <h5>Reverse the display of Hebrew characters, and convert new lines(\n) into "br":</h5>
    <?php
    echo hebrevc("� ���� �����\n� ���� �����");

    ?>
</div>

<div>
    <h4>hex2bin:-</h4>
    <h5>Convert hexadecimal values to ASCII characters:</h5>
    <?php
    echo hex2bin("48656c6c6f20576f726c6421");
    ?>
</div>

<div>
    <h4>html_entity_decode:-</h4>
    <h5>Convert HTML entities to characters:</h5>
    <?php
    $str = '&lt;a href=&quot;#&quot;&gt;click&lt;/a&gt;';
    echo html_entity_decode($str);
    ?>
</div>

<div>
    <h4>htmlentities:-</h4>
    <h5>Convert some characters to HTML entities:</h5>
    <?php
    $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
    echo htmlentities($str);
    ?>
</div>

<div>
    <h4>htmlspecialchars_decode:-</h4>
    <h5>Convert the predefined HTML entities "&lt;" (less than) and "&gt;" (greater than) to characters:</h5>
    <?php
    $str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
    echo htmlspecialchars_decode($str);
    ?>
</div>

<div>
    <h4>htmlspecialchars:-</h4>
    <h5>Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities:</h5>
    <?php
    $str = "This is some <b>bold</b> text.";
    echo htmlspecialchars($str);
    
    ?>
</div>

<div>
    <h4>implode:-</h4>
    <h5>Join array elements with a string:</h5>
    <?php
    $arr = array('Hello','World!','Beautiful','Day!');
    echo implode(" ",$arr);
    ?>
</div>

<div>
    <h4>join:-</h4>
    <h5>Join array elements with a string:</h5>
    <?php
    $arr = array('Hello','World!','Beautiful','Day!');
    echo join(" ",$arr);
    ?>
</div>

<div>
    <h4>lcfirst:-</h4>
    <h5>Convert the first character of "Hello" to lowercase:</h5>
    <?php
    echo lcfirst("Hello world!");

    ?>
</div>

<div>
    <h4>levenshtein:-</h4>
    <h5>Calculate the Levenshtein distance between two strings:</h5>
    <?php
    echo levenshtein("Hello World","ello World");
    echo "<br>";
    echo levenshtein("Hello World","ello World",10,20,30);
    ?>
</div>

<div>
    <h4>localeconv:-</h4>
    <h5>Find the United States locale numeric formatting information:</h5>
    <?php
    setlocale(LC_ALL,"US");
    $locale_info = localeconv();
    print_r($locale_info);
    ?>
</div>

<div>
    <h4>ltrim:-</h4>
    <h5>Remove characters from the left side of a string:</h5>
    <?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo ltrim($str,"Hello");
    ?>
</div>

<div>
    <h4>md5:-</h4>
    <h5>Calculate the MD5 hash of the string "Hello":</h5>
    <?php
    $str = "Hello";
    echo md5($str);
    ?>
</div>

<div>
    <h4>md5file:-</h4>
    <h5>Calculate the MD5 hash of the text file "test.txt":</h5>
    <?php
    $filename = "test.txt";
    $md5file = md5_file($filename);
    echo $md5file;
    ?>
</div>

<div>
    <h4>metaphone:-</h4>
    <h5>Calculate the metaphone key of "World":</h5>
    <?php
    echo metaphone("World");
    ?>
</div>

<div>
    <h4>money_format:-</h4>
    <h5>International en_US format:</h5>
    <?php
    $number = 1234.56;
    setlocale(LC_MONETARY,"en_US");
    //echo money_format("The price is %i", $number);
    ?>
</div>

<div>
    <h4>nl2br:-</h4>
    <h5>Insert line breaks where newlines (\n) occur in the string:</h5>
    <?php
    echo nl2br("One line.\nAnother line.");
    ?>
</div>

<div>
    <h4>number_format:-</h4>
    <h5>Format numbers:</h5>
    <?php
    echo number_format("1000000")."<br>";
    echo number_format("1000000",2)."<br>";
    echo number_format("1000000",2,",",".");
    ?>
</div>

<div>
    <h4>ord:-</h4>
    <h5>Return the ASCII value of:</h5>
    <?php
    echo ord("h")."<br>";
    echo ord("hello")."<br>";
    ?>
</div>

<div>
    <h4>parse_str:-</h4>
    <h5>Parse a query string into variables:</h5>
    <?php
    parse_str("name=Peter&age=43");
    echo $name."<br>";
    echo $age;
    ?>
</div>

<div>
    <h4>print:-</h4>
    <h5>Write some text to the output:</h5>
    <?php
    print "Hello world!";
    ?>
</div>

<div>
    <h4>printf:-</h4>
    <h5>Output a formatted string:</h5>
    <?php
    $number = 9;
    $str = "Beijing";
    printf("There are %u million bicycles in %s.",$number,$str);
    ?>
</div>

<div>
    <h4>quoted_printable_decode:-</h4>
    <h5>Decode a quoted-printable string to an 8-bit ASCII string:</h5>
    <?php
    $str = "Hello=0Aworld.";
    echo quoted_printable_decode($str);
    ?>
</div>

<div>
    <h4>quotemeta:-</h4>
    <h5>Add backslashes in front of the predefined characters:</h5>
    <?php
    $str = "Hello world. (other question?)";
    echo quotemeta($str);
    ?>
</div>

<div>
    <h4>rtrim:-</h4>
    <h5>Remove characters from the right side of a string:</h5>
    <?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo rtrim($str,"World!");
    ?>
</div>

<div>
    <h4>str_replace:-</h4>
    <h5>Replace the characters "world" in the string "Hello world!" with "Peter":</h5>
    <?php
    echo str_replace("world","Peter","Hello world!");
    ?>
</div>

<div>
    <h4>str_split:-</h4>
    <h5>Split the string "Hello" into an array:</h5>
    <?php
    print_r(str_split("Hello"));
    ?>
</div>

<div>
    <h4>strcasecmp:-</h4>
    <h5>Compare two strings (case-insensitive):</h5>
    <?php
    echo strcasecmp("Hello world!","HELLO WORLD!");
    ?>
</div>

<div>
    <h4>strpos:-</h4>
    <h5>Find the position of the first occurrence of "php" inside the string:</h5>
    <?php
    echo strpos("I love php, I love php too!","php");
    ?>
</div>
</body>
</html>