<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ObtenerProvincias extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /ObtenerProvincias [operationId: obtenerProvincias] */
    public static function get(): \CatastroSDK\DTOs\ProvinciasResponse
    {
        return self::client()->resource(\CatastroSDK\Resources\ObtenerProvincias::class)->get();
    }
}
