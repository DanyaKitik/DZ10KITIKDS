<?php

require_once '../vendor/autoload.php';

require_once '../config/eloquent.php';
require_once '../config/blade.php';
require_once '../config/router.php';

echo $blade->make('login')->render();