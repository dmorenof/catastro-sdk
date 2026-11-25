<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ObtenerCallejeroCodigos extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CodigoMunicipio' => 'CodigoMunicipio',
        'CodigoMunicipioINE' => 'CodigoMunicipioINE',
        'CodigoProvincia' => 'CodigoProvincia',
        'CodigoVia' => 'CodigoVia',
    ],
    'header' => [],
];

    public ?string $CodigoMunicipio;
    public ?string $CodigoMunicipioINE;
    public ?string $CodigoProvincia;
    public ?string $CodigoVia;
}
