<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ConsultaRCCOOR extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /Consulta_RCCOOR [operationId: consultaRccoor] */
    /**
     * Cadastral reference at some coordinates
     */
    public static function get(\CatastroSDK\GetParams\ConsultaRCCOOR $params): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ConsultaRCCOOR::class)->get($params);
    }
}
