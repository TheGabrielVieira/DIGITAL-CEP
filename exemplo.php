<?php 

require_once "vendor/autoload.php";

use Avell\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('55700000');

print_r($resultado);