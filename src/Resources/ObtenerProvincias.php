<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ObtenerProvincias extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ObtenerProvincias',
        'responseType' => '\\CatastroSDK\\DTOs\\ProvinciasResponse',
    ];

    public function get(): \CatastroSDK\DTOs\ProvinciasResponse
    {
        /** @var \CatastroSDK\DTOs\ProvinciasResponse $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
