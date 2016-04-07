<?php
$age  = $argv[1];

if ($age >= 18) {
    echo "Vous pouvez accedez :)\n";
}
else{
    echo "Vous ne pouvez pas accedez vous etes mineur :(\n";
}