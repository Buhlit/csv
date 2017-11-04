<?php
include "class.csv.php";

$csv = new CSV();

$csv->addHeader('Name');

$csv->addHeaders(array(
    'Height',
    'Gender'
));

$csv->addList(array(
    'John Doe',
    175,
    'Male'
));

$csv->download();