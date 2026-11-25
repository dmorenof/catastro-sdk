<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ObtenerMunicipios extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Provincia',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Municipio' => 'Municipio',
            'Provincia' => 'Provincia',
        ],
        'header' => [],
    ];

    public ?string $Municipio;
    public string $Provincia;
}
