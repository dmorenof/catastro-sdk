<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ObtenerMunicipiosCodigos extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'CodigoMunicipio' => 'CodigoMunicipio',
        'CodigoMunicipioINE' => 'CodigoMunicipioINE',
        'CodigoProvincia' => 'CodigoProvincia',
    ],
    'header' => [],
];

    public ?string $CodigoMunicipio;
    public ?string $CodigoMunicipioINE;
    public ?string $CodigoProvincia;
}
