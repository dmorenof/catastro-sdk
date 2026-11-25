<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ObtenerMunicipios extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /ObtenerMunicipios [operationId: obtenerMunicipios] */
    public static function get(\CatastroSDK\GetParams\ObtenerMunicipios $params): \CatastroSDK\DTOs\MunicipiosResponse
    {
        return self::client()->resource(\CatastroSDK\Resources\ObtenerMunicipios::class)->get($params);
    }
}
