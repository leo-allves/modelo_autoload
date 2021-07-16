<?php
require 'autoload.php';

// use \matematica\Basica; so caso eu ñ queira declarar $mat = new \matematica\Basica();
// chamando só assim $mat = new Basica();
use \foto\Upload;

$mat = new \matematica\Basica();
echo $mat->somar(10, 20);

$upload = new Upload();



