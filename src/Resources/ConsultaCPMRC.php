<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ConsultaCPMRC extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/Consulta_CPMRC',
        'responseType' => 'mixed',
        'serverUrl' => 'https://ovc.catastro.meh.es/OVCServWeb/OVCWcfCallejero/COVCCoordenadas.svc/json',
    ];

    /**
     * Coordinates of a cadastral reference
     */
    public function get(\CatastroSDK\GetParams\ConsultaCPMRC $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
