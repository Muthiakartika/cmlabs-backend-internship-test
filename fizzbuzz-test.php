<?php
for ($i = 1; $i <= 100; $i++) {
    $output = '';

    if ($i % 3 === 0) {
        $output .= 'Fizz';
    } else if ($i % 5 === 0) {
        $output .= 'Buzz';
    } else if ($i % 3 == 0) {
        $output .= 'Fizz';
    } else {
        $output = $i;
    }
   echo $output;
}
?>
