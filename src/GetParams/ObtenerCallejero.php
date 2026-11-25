<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ObtenerCallejero extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Municipio',
    'Provincia',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'Municipio' => 'Municipio',
        'NomVia' => 'NomVia',
        'Provincia' => 'Provincia',
        'TipoVia' => 'TipoVia',
    ],
    'header' => [],
];

    public string $Municipio;
    public ?string $NomVia;
    public string $Provincia;
    public ?string $TipoVia;
}
