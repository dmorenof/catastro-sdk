<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ConsultaRCCOORDistancia extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/Consulta_RCCOOR_Distancia',
        'responseType' => 'mixed',
        'serverUrl' => 'https://ovc.catastro.meh.es/OVCServWeb/OVCWcfCallejero/COVCCoordenadas.svc/json',
    ];

    /**
     * Cadastral references near some coordinates
     */
    public function get(\CatastroSDK\GetParams\ConsultaRCCOORDistancia $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
