<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ObtenerCallejeroCodigos extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /ObtenerCallejeroCodigos [operationId: obtenerCallejeroCodigos] */
    /**
     * Streets of a municipality, by codes
     */
    public static function get(?\CatastroSDK\GetParams\ObtenerCallejeroCodigos $params = null): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ObtenerCallejeroCodigos::class)->get($params);
    }
}
