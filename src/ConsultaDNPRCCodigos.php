<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ConsultaDNPRCCodigos extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /Consulta_DNPRC_Codigos [operationId: consultaDnprcCodigos] */
    /**
     * Non-protected data of a property by cadastral reference, by codes
     */
    public static function get(?\CatastroSDK\GetParams\ConsultaDNPRCCodigos $params = null): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ConsultaDNPRCCodigos::class)->get($params);
    }
}
