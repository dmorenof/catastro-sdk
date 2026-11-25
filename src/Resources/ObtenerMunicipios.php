<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ObtenerMunicipios extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ObtenerMunicipios',
        'responseType' => '\\CatastroSDK\\DTOs\\MunicipiosResponse',
    ];

    public function get(\CatastroSDK\GetParams\ObtenerMunicipios $params): \CatastroSDK\DTOs\MunicipiosResponse
    {
        /** @var \CatastroSDK\DTOs\MunicipiosResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
