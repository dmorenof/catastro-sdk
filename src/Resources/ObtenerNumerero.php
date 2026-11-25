<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ObtenerNumerero extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/ObtenerNumerero',
        'responseType' => 'mixed',
    ];

    /**
     * Street numbers of a street
     */
    public function get(\CatastroSDK\GetParams\ObtenerNumerero $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
