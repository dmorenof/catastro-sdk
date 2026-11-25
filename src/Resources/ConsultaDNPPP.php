<?php

declare(strict_types=1);

namespace CatastroSDK\Resources;

final class ConsultaDNPPP extends \CatastroSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/Consulta_DNPPP',
        'responseType' => 'mixed',
    ];

    /**
     * Non-protected data of a property by polygon and parcel
     */
    public function get(\CatastroSDK\GetParams\ConsultaDNPPP $params): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
