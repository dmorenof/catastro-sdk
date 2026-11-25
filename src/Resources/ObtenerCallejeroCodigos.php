<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ObtenerCallejeroCodigos extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ObtenerCallejeroCodigos',
        'responseType' => 'mixed',
        'serverUrl' => 'https://ovc.catastro.meh.es/OVCServWeb/OVCWcfCallejero/COVCCallejeroCodigos.svc/json',
    ];

    /**
     * Streets of a municipality, by codes
     */
    public function get(?\CatastroSDK\GetParams\ObtenerCallejeroCodigos $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
