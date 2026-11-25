<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ObtenerMunicipiosCodigos extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /ObtenerMunicipiosCodigos [operationId: obtenerMunicipiosCodigos] */
    /**
     * Municipalities of a province, by codes
     */
    public static function get(?\CatastroSDK\GetParams\ObtenerMunicipiosCodigos $params = null): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ObtenerMunicipiosCodigos::class)->get($params);
    }

}
