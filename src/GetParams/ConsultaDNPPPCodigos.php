<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ConsultaDNPPPCodigos extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CodigoMunicipio' => 'CodigoMunicipio',
        'CodigoMunicipioINE' => 'CodigoMunicipioINE',
        'CodigoProvincia' => 'CodigoProvincia',
        'Parcela' => 'Parcela',
        'Poligono' => 'Poligono',
    ],
    'header' => [],
];

    public ?string $CodigoMunicipio;
    public ?string $CodigoMunicipioINE;
    public ?string $CodigoProvincia;
    public ?string $Parcela;
    public ?string $Poligono;
}
