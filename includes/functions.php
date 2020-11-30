<?php

  define('LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS', array(
    "buckets" => 4,
    "butts" => 108,
    "firkins" => 9,
    "hogsheads" => 54,
    "pints" => 0.125
  )); 

  define('IRISH_LENGTH_TO_CENTIMETERS', array (
    "grain" => 0.7,
    "thumb-length" => 2.1,
    "palm" => 3.3,
    "fist" => 10.4,
    "foot" => 25,
    "step" => 62.5,
    "double-step" => 1500,
    "rod" => 3000
  ));

//----------------- Liquids --------------------

  function convertToGallons($value, $fromUnit) {
    if(array_key_exists($fromUnit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
      return $value * LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$fromUnit];
    }
    else {
      return "Unsupported unit.";
    }
  }
     
  function convertFromGallons($value, $toUnit) {
    if(array_key_exists($toUnit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
      return $value / LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$toUnit];
    }
    else {
      return "Unsupported unit.";
    }
  }

  function convertVolume($value, $fromUnit, $toUnit) {
    $gallonValue = convertToGallons($value, $fromUnit);
    $newValue = convertFromGallons($gallonValue, $toUnit);
    return $newValue;
  }

//------------------ Lengths -------------------

function convertToCentimeters($value, $fromUnit) {
  if(array_key_exists($fromUnit, IRISH_LENGTH_TO_CENTIMETERS)) {
    return $value * IRISH_LENGTH_TO_CENTIMETERS[$fromUnit];
  }
  else {
    return "Unsupported unit.";
  }
}
   
function convertFromCentimeters($value, $toUnit) {
  if(array_key_exists($toUnit, IRISH_LENGTH_TO_CENTIMETERS)) {
    return $value / IRISH_LENGTH_TO_CENTIMETERS[$toUnit];
  }
  else {
    return "Unsupported unit.";
  }
}

function convertLength($value, $fromUnit, $toUnit) {
  $centimeterValue = convertToCentimeters($value, $fromUnit);
  $newValue = convertFromCentimeters($centimeterValue, $toUnit);
  return $newValue;
}

?>