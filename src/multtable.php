<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>';

///receive parameters from url:
$xMin = $_GET['min-multiplier']+0;
$xMax = $_GET['max-multiplier']+0;
$yMin = $_GET['min-multiplicand']+0;
$yMax = $_GET['max-multiplicand']+0;

///checks if parameters are integers
foreach ($_GET as $key => $value) {
    if (!is_numeric($value) || ((integer)($value) !== ($value + 0))) {
      echo $key . ' must be an integer.  Please re-enter. ';
    } 
}

///checks if all parameters have been entered
if(!isset($_GET['min-multiplier'])){
	echo '<p>';
	echo "min-multiplier not set.  Please enter a numeric parameter for min-multiplier";
}
if(!isset($_GET['max-multiplier'])){
	echo '<p>';
	echo "max-multiplier not set.  Please enter a numeric parameter for max-multiplier";
}
if(!isset($_GET['min-multiplicand'])){
	echo '<p>';
	echo "min-multiplicand not set.  Please enter a numeric parameter for min-multiplicand";
}
if(!isset($_GET['max-multiplicand'])){
	echo '<p>';
	echo "max-multiplicand not set.  Please enter a numeric parameter for max-multiplicand";
}
if(isset($_GET['min-multiplier'])&&($_GET['max-multiplier'])&&($_GET['min-multiplicand'])&&($_GET['max-multiplicand'])){
	$allEntered = 1;
}

///checks if mins are less than max
if(($xMin > $xMax)&&($allEntered == 1)){
	echo '<p>';
	echo 'min-multiplier is greater than max-multiplier.  Please re-enter';
}
if(($yMin > $yMax)&&($allEntered == 1)){
	echo '<p>';
	echo 'min-multiplcand is greater than max-multiplicand.  Please re-enter';
}

///top left empty cell
echo '<table border="1">
';

$tableWidth = $xMax - $xMin;
$tableHeight = $yMax - $yMin;
echo "<tr>\n <th>\n";

///sets top row values as set of cols
for($i = 0; $i <= $tableWidth; $i++){
	$colValue = ($xMin + $i);
	echo "<th> $colValue\n";
}

///sets first column values as set of rows, then nested loop inputs product
for($i = 0; $i <= $tableHeight; $i++){
	echo "<tr>\n";
	$rowValue = ($yMin + $i);
	echo "<th> $rowValue\n";

	for($j = 0; $j <=$tableWidth; $j++){
		$product = ($xMin + $j) * ($yMin + $i);
		echo "<th> $product\n";
	}
}
