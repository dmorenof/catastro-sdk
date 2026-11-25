<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ConsultaDNPLOC extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/Consulta_DNPLOC',
        'responseType' => 'mixed',
    ];

    /**
     * Non-protected data of a property by location
     */
    public function get(\CatastroSDK\GetParams\ConsultaDNPLOC $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
