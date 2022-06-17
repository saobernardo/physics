<?php

require 'autoload.php';

use \mecanica\MovimentoUniforme;

$mu = new MovimentoUniforme();

echo $mu->kmhToMs(90);