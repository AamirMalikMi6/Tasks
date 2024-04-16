<?php
// ----------------- Task ----------------------
// create an accociative array and assiged values in their keys through using loop
$data =[ [
    'name' => 'jeffery',
    'age' => 25,
    'gender' => 'femal',
]
, [
    'name' => 'Asghar',
    'age' => 36,
    'genderggg' =>'male',
],
[
    'namehhh' => 'Alina',
    'age' => 15,
    'gender' => 'female',
]
];

// create function in which apply condition if passing value exist as key then assigned age to their corresponding key
function update($value, $data) {
    $result = [];
    $i = 0;
    foreach ($data as $d) {
        if (array_key_exists($value, $d)) {
            $result[$d[$value]] = $d['age'];
            $i++;
        }
    }
    if ($i==0) {
        echo "your sending value is not matched.";
        die();
    }
    return $result;
}

dd(update('namehhh',$data));

// implementation in foreach
// foreach ($data as $d) {
//     $result[$d['name']] = $d['age'];
// }

//implementation in for loop

// for($i=0; $i < count($data); $i++){
//             $result[$data[$i]['name']] = $data[$i]['age'];
// }

// implementation in while loop
// $i=0;
// while ($i < count($data)){
//     $result[$data[$i]['name']] = $data[$i]['age'];
//     $i++;
// }

// $i = 0;

// implementation in do while
// do {
//     $result[$data[$i]['name']] = $data[$i]['age'];
  
//   $i++;
// } while ($i < count($data));



