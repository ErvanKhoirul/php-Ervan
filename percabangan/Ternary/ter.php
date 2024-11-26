<?php
$years = 2023;

//ternary

$kabisat = $years % 4 == 0 ? 'Kabisat' : "Bukan Kabisat";

echo "$years itu tahun $kabisat";