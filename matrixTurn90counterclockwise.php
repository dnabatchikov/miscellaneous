<?php
function transpCCW(array $m): array {
	
    $out = [];
    $rows = count($m);
    $cols = count($m[0]);
	
    for($i = $cols - 1; $i >= 0; $i --) {
        for($j = $rows - 1; $j >= 0; $j --) {
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
$res = transpCCW($matrix);
