<?php

$list = array(
    array(
        'id' => '1',
        'fname' => 'Chris',
        'lname' => 'Cavagin',
        'email' => 'chriscavagin@gmail.com',
        'mnumber' => '9911223388'
    ),
    array(
        'id' => '2',
        'fname' => 'Richard',
        'lname' => 'Simmons',
        'email' => 'rsimmons@media.com',
        'mnumber' => '9911224455'
    ),
    array(
        'id' => '3',
        'fname' => 'Steve',
        'lname' => 'Beaven',
        'email' => 'ateavebeaven@gmail.com',
        'mnumber' => '8855223388'
    ),
    array(
        'id' => '4',
        'fname' => 'Howard',
        'lname' => 'Rawson',
        'email' => 'howardraw@gmail.com',
        'mnumber' => '9911334488'
    ),
    array(
        'id' => '5',
        'fname' => 'Rachel',
        'lname' => 'Dyson',
        'email' => 'racheldyson@gmail.com',
        'mnumber' => '9912345388'
    )
);

// Filter Customer Data
function filterCustomerData(&$str) {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"'))
        $str = '"' . str_replace('"', '""', $str) . '"';
}

// File Name & Content Header For Download
$file_name = "phptoexceldata.csv";
header("Content-Disposition: attachment; filename=\"$file_name\"");
header("Content-Type: application/vnd.ms-excel");

//create backup file
$file = fopen("phptoexceldata.csv","w");
foreach ($list as $line) {
  fputcsv($file, $line);
}
fclose($file);

//To define column name in first row.
$column_names = false;
// run loop through each row in $list
foreach ($list as $row) {
    if (!$column_names) {
        echo implode("\t", array_keys($row)) . "\n";
        $column_names = true;
    }
    // The array_walk() function runs each array element in a user-defined function.
    array_walk($row, 'filterCustomerData');
    echo implode("\t", array_values($row)) . "\n";
}
exit;
?>