<?php
// If - else 

//  1. Parasts if - else
if (isset($x)) {
    $y = $x;
} else {
    $y = 'Nav vertibas!';
}

// 2. Ternary Operator - trīskāršs operātors
$y = isset($x) ? $x : 'Nav vērtības!';

// 3. Null coalecting operator
$y = $x ?? "nav vērtības!";
?>