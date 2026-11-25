<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ConsultaRCCOORDistancia extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'CoorX',
    'CoorY',
    'SRS',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CoorX' => 'CoorX',
        'CoorY' => 'CoorY',
        'SRS' => 'SRS',
    ],
    'header' => [],
];

    public string $CoorX;
    public string $CoorY;
    public string $SRS;
}
