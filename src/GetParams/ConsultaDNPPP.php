<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ConsultaDNPPP extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'Municipio',
        'Parcela',
        'Poligono',
        'Provincia',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Municipio' => 'Municipio',
            'Parcela' => 'Parcela',
            'Poligono' => 'Poligono',
            'Provincia' => 'Provincia',
        ],
        'header' => [],
    ];

    public string $Municipio;
    public string $Parcela;
    public string $Poligono;
    public string $Provincia;
}
