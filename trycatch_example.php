<?php
try {
    $num = 10;
    $den = 0;

    if ($den == 0) {
        throw new Exception("Cannot divide by zero!");
    }

    echo $num / $den;
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
