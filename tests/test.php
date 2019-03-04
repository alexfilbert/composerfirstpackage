<?php

    // Print the time on the server in 24H format.

    require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

    use FirstPackage\TimeObj;

    $current_time = new TimeObj;
    $current_time->printTime();
