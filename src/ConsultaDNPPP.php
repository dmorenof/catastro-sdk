<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ConsultaDNPPP extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /Consulta_DNPPP [operationId: consultaDnppp] */
    /**
     * Non-protected data of a property by polygon and parcel
     */
    public static function get(\CatastroSDK\GetParams\ConsultaDNPPP $params): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ConsultaDNPPP::class)->get($params);
    }

}
