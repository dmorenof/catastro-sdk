<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ObtenerMunicipiosCodigos extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ObtenerMunicipiosCodigos',
        'responseType' => 'mixed',
        'serverUrl' => 'https://ovc.catastro.meh.es/OVCServWeb/OVCWcfCallejero/COVCCallejeroCodigos.svc/json',
    ];

    /**
     * Municipalities of a province, by codes
     */
    public function get(?\CatastroSDK\GetParams\ObtenerMunicipiosCodigos $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
