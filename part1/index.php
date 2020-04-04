<?php
require 'Calculator.php';
require 'AdvanceCalculator.php';
require 'Interfaceclass.php';
require 'Implementclass.php';
$number1 = 20;
$number2 = 10;


$ad = new AdvanceCalculator($number1, $number2);
$response =  $ad->division()->showValue()->result;
echo $response;
