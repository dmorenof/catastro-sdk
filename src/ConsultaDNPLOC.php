<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ConsultaDNPLOC extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /Consulta_DNPLOC [operationId: consultaDnploc] */
    /**
     * Non-protected data of a property by location
     */
    public static function get(\CatastroSDK\GetParams\ConsultaDNPLOC $params): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ConsultaDNPLOC::class)->get($params);
    }

}
