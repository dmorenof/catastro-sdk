<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ConsultaDNPLOCCodigos extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /Consulta_DNPLOC_Codigos [operationId: consultaDnplocCodigos] */
    /**
     * Non-protected data of a property by location, by codes
     */
    public static function get(?\CatastroSDK\GetParams\ConsultaDNPLOCCodigos $params = null): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ConsultaDNPLOCCodigos::class)->get($params);
    }

}
