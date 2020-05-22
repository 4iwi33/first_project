<?php

session_start();

include "../src/autoload.php";

include "../config/config.php";


use Core\Dispatcher;

(new Dispatcher())->run();
