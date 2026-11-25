<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ConsultaDNPLOCCodigos extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/Consulta_DNPLOC_Codigos',
        'responseType' => 'mixed',
        'serverUrl' => 'https://ovc.catastro.meh.es/OVCServWeb/OVCWcfCallejero/COVCCallejeroCodigos.svc/json',
    ];

    /**
     * Non-protected data of a property by location, by codes
     */
    public function get(?\CatastroSDK\GetParams\ConsultaDNPLOCCodigos $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
