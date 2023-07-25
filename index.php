<?php
require_once 'IntegerArrayProcessor.php';

function generateRandomIntegers($count, $min, $max): array
{
    $numbers = [];
    for ($i = 0; $i < $count; $i++) {
        $numbers[] = mt_rand($min, $max);
    }
    return $numbers;
}

// Generate 100,000 random integers between 1 and 100,000
$integerNumbers = generateRandomIntegers(90000, 1, 100000);

$array = new IntegerArrayProcessor($integerNumbers);

$sortedArray = $array->sort();
$minimum = $array->minimum();
$maximum = $array->maximum();

print_r($sortedArray); // [1, 2, 3, 5, 8]
echo $minimum . "\n"; // 1
echo $maximum; // 8
