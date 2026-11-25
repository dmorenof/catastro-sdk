<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ObtenerNumerero extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Municipio',
    'NomVia',
    'Provincia',
    'TipoVia',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'Municipio' => 'Municipio',
        'NomVia' => 'NomVia',
        'Numero' => 'Numero',
        'Provincia' => 'Provincia',
        'TipoVia' => 'TipoVia',
    ],
    'header' => [],
];

    public string $Municipio;
    public string $NomVia;
    public ?string $Numero;
    public string $Provincia;
    public string $TipoVia;
}
