<?php
function transp(array $m): array {
	
    $out = [];
    $rows = count($m);
    $cols = count($m[0]);
	
    for($i = 0; $i < $cols; $i ++) {
        for($j = 0; $j < $rows; $j ++) {
            $out[$i][$j] = $m[$rows - $j - 1][$i];
        }	
    }
    return $out; 	
}

$matrix = [
	['a','b','c'],
	['d','e','f'],
];

// return
// [
//   ['d','a'],
//   ['e','b'],
//   ['f','c']
// ]
$res = transp($matrix);

function transp2(array $m): array {
  array_unshift($m, null);
  $matrix = call_user_func_array('array_map', $m);
  $matrix = array_map('array_reverse', $m);
  
  return $m;
}

transp2($matrix); // return the same
    
