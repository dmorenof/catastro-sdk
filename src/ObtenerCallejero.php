<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ObtenerCallejero extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /ObtenerCallejero [operationId: obtenerCallejero] */
    /**
     * Streets of a municipality
     */
    public static function get(\CatastroSDK\GetParams\ObtenerCallejero $params): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ObtenerCallejero::class)->get($params);
    }

}
