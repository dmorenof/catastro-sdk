<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ConsultaDNPLOCCodigos extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Bloque' => 'Bloque',
            'CodigoMunicipio' => 'CodigoMunicipio',
            'CodigoMunicipioINE' => 'CodigoMunicipioINE',
            'CodigoProvincia' => 'CodigoProvincia',
            'CodigoVia' => 'CodigoVia',
            'Escalera' => 'Escalera',
            'Numero' => 'Numero',
            'Planta' => 'Planta',
            'Puerta' => 'Puerta',
        ],
        'header' => [],
    ];

    public ?string $Bloque;
    public ?string $CodigoMunicipio;
    public ?string $CodigoMunicipioINE;
    public ?string $CodigoProvincia;
    public ?string $CodigoVia;
    public ?string $Escalera;
    public ?string $Numero;
    public ?string $Planta;
    public ?string $Puerta;
}
