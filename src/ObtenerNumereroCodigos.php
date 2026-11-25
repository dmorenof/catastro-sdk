<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ObtenerNumereroCodigos extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /ObtenerNumereroCodigos [operationId: obtenerNumereroCodigos] */
    /**
     * Street numbers of a street, by codes
     */
    public static function get(?\CatastroSDK\GetParams\ObtenerNumereroCodigos $params = null): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ObtenerNumereroCodigos::class)->get($params);
    }

}
