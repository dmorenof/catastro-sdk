<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ConsultaDNPPPCodigos extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /Consulta_DNPPP_Codigos [operationId: consultaDnpppCodigos] */
    /**
     * Non-protected data of a property by polygon and parcel, by codes
     */
    public static function get(?\CatastroSDK\GetParams\ConsultaDNPPPCodigos $params = null): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ConsultaDNPPPCodigos::class)->get($params);
    }

}
