<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ConsultaCPMRC extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /Consulta_CPMRC [operationId: consultaCpmrc] */
    /**
     * Coordinates of a cadastral reference
     */
    public static function get(\CatastroSDK\GetParams\ConsultaCPMRC $params): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ConsultaCPMRC::class)->get($params);
    }
}
