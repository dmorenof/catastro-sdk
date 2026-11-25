<?php

declare(strict_types=1);

namespace CatastroSDK;

final class ConsultaRCCOORDistancia extends \CatastroSDK\CatastroOVCCallejeroSDK
{
    /** GET /Consulta_RCCOOR_Distancia [operationId: consultaRccoorDistancia] */
    /**
     * Cadastral references near some coordinates
     */
    public static function get(\CatastroSDK\GetParams\ConsultaRCCOORDistancia $params): mixed
    {
        return self::client()->resource(\CatastroSDK\Resources\ConsultaRCCOORDistancia::class)->get($params);
    }

}
