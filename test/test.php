<?php

require_once '../src/functions.php';

$amount = 10000;
$expected = 12500;

$result = calculateVAT($amount);

echo $result === $expected ? 'Test passes<br>' : "Test fails asserting that $result matches expected $expected<br>";

$amount = 20000;
$expected = 25000;

$result = calculateVAT($amount);

echo $result === $expected ? 'Test passes<br>' : "Test fails asserting that $result matches expected $expected<br>";

$amount = 0;
$expected = 0;

$result = calculateVAT($amount);

echo $result === $expected ? 'Test passes<br>' : "Test fails asserting that $result matches expected $expected<br>";

$amount = -10000;
$expected = 0;

$result = calculateVAT($amount);

echo $result === $expected ? 'Test passes<br>' : "Test fails asserting that $result matches expected $expected<br>";

$amount = 'A';
$expected = 0;

$result = calculateVAT($amount);

echo $result === $expected ? 'Test passes<br>' : "Test fails asserting that $result matches expected $expected<br>";

$amount = 14000.78;
$expected = strval(17500.975);

$result = strval(calculateVAT($amount));

echo $result === $expected ? 'Test passes<br>' : "Test fails asserting that $result matches expected $expected<br>";