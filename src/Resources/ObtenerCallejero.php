<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ObtenerCallejero extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ObtenerCallejero',
        'responseType' => 'mixed',
    ];

    /**
     * Streets of a municipality
     */
    public function get(\CatastroSDK\GetParams\ObtenerCallejero $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
