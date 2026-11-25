<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ObtenerNumerero extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /ObtenerNumerero [operationId: obtenerNumerero] */
    /**
     * Street numbers of a street
     */
    public static function get(\CatastroSDK\GetParams\ObtenerNumerero $params): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ObtenerNumerero::class)->get($params);
    }

}
