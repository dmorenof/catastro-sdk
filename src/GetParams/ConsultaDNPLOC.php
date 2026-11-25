<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ConsultaDNPLOC extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Calle',
        'Municipio',
        'Provincia',
        'Sigla',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Bloque' => 'Bloque',
            'Calle' => 'Calle',
            'Escalera' => 'Escalera',
            'Municipio' => 'Municipio',
            'Numero' => 'Numero',
            'Planta' => 'Planta',
            'Provincia' => 'Provincia',
            'Puerta' => 'Puerta',
            'Sigla' => 'Sigla',
        ],
        'header' => [],
    ];

    public ?string $Bloque;
    public string $Calle;
    public ?string $Escalera;
    public string $Municipio;
    public ?string $Numero;
    public ?string $Planta;
    public string $Provincia;
    public ?string $Puerta;
    public string $Sigla;
}
