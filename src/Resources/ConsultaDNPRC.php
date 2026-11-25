<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ConsultaDNPRC extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/Consulta_DNPRC',
        'responseType' => '\\CatastroSDK\\DTOs\\DnprcResponse',
    ];

    public function get(\CatastroSDK\GetParams\ConsultaDNPRC $params): \CatastroSDK\DTOs\DnprcResponse
    {
        /** @var \CatastroSDK\DTOs\DnprcResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
