<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ConsultaDNPRC extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /Consulta_DNPRC [operationId: consultaDnprc] */
    public static function get(\CatastroSDK\GetParams\ConsultaDNPRC $params): \CatastroSDK\DTOs\DnprcResponse
    {
        return self::client()->resource(\CatastroSDK\Resources\ConsultaDNPRC::class)->get($params);
    }
}
