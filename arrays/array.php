<?php

// old school
/**
 *
 */
$names = array(

  'lalo',
  'juan',
  'pedro',
  'pablo'

  );

array_push($names, "pepe", "alfredo");

var_dump($names);
echo "<br>";

$fruits = [

  'orange',
  'banana',
  'apple'

];

var_dump($fruits);
echo "<br> &nbsp";

$numbers = [];

for ($i=0; $i < 100; $i++) {

  // old school
  //array_push($numbers, i);

  $numbers[] = i;

}

var_dump($numbers);

echo "<br>";

/**
 *
 */
foreach ($names as $key => $value) {

  echo $key. ' - ' .$value;

}

//objects

echo "<br>";
