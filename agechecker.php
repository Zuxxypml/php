<?php
function checkAge($age)
{
    if ($age == 0) {
        echo 'Restricted';
    } elseif ($age > 0 && $age < 7) {
        echo "You're an Infant";
    } elseif ($age > 7 && $age < 17) {
        echo 'You are a teenager';
    } elseif ($age > 17 && $age < 49) {
        echo 'You are an Adult';
    } elseif ($age > 49 && $age < 99) {
        echo 'You are Old';
    } else {
        echo 'You are too Old ';
    }
}

checkAge(89);
?>
