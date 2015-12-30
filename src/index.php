<?php

namespace Two;

require_once '../env.php';

use Two\Dm\Save;

$save = new Save();
print_r($save);

$a  = [1,2,3,4,5];

array_pop($a);