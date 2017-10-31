<?php
include "class.csv.php";

$csv = New CSV();

$csv->addHeader('Name');
$csv->addHeader('Age');

$csv->addHeaders(array(
    'Height',
    'Gender'
));

$csv->addList(array(
    'John Doe',
    35,
    175,
    'Male'
));

$csv->download();