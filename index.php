<?php

require 'Speedometer.php';

echo '10 Kms = ' . Speedometer::kmToMiles(10) . 'Miles';
echo '10 Miles = ' . Speedometer::milesToKm(10) . 'Kms';
