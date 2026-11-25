<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ObtenerNumereroCodigos extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ObtenerNumereroCodigos',
        'responseType' => 'mixed',
        'serverUrl' => 'https://ovc.catastro.meh.es/OVCServWeb/OVCWcfCallejero/COVCCallejeroCodigos.svc/json',
    ];

    /**
     * Street numbers of a street, by codes
     */
    public function get(?\CatastroSDK\GetParams\ObtenerNumereroCodigos $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
