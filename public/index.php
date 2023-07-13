<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';


spl_autoload_register(function ($class) {

    // dd($class); // => Core\Database

    $class = str_replace('\\', '/', $class);

    // dd($class);  // => Core/Database

    require base_path("Core/{$class}.php");
});


require base_path('Core/router.php');
