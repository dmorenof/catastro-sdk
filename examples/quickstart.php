<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use CatastroSDK\Configuration;
use CatastroSDK\CatastroOVCCallejeroSDK;
use CatastroSDK\GetParams\ObtenerMunicipios as MunicipiosParams;
use CatastroSDK\ObtenerMunicipios;

CatastroOVCCallejeroSDK::configure(new Configuration());

$answer = ObtenerMunicipios::get(new MunicipiosParams((object) ['Provincia' => 'MADRID', 'Municipio' => 'ALCALA DE HENARES']));

foreach ($answer->consulta_municipieroResult->municipiero->muni as $municipality) {
    echo json_encode($municipality), "\n"; // the municipality name (`nm`) and its codes
}
