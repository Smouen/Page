<?php
function vec_add (&$a, $b)
{
$a['х'] += $b['x'];
$a['y'] += $b['y'];
$a['z'] += $b['z'];
}
$a = array ('x' => 3, 'y' => 2, 'z' => 5);
$b = array ('x' => 9, 'y' => 3, 'z' => -7);
vec_add ($a, $b);
print_r ($а);
?>