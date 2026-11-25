<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ConsultaRCCOOR extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/Consulta_RCCOOR',
        'responseType' => 'mixed',
        'serverUrl' => 'https://ovc.catastro.meh.es/OVCServWeb/OVCWcfCallejero/COVCCoordenadas.svc/json',
    ];

    /**
     * Cadastral reference at some coordinates
     */
    public function get(\CatastroSDK\GetParams\ConsultaRCCOOR $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
