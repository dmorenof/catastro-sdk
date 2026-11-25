<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ConsultaDNPRCCodigos extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'CodigoMunicipio' => 'CodigoMunicipio',
            'CodigoMunicipioINE' => 'CodigoMunicipioINE',
            'CodigoProvincia' => 'CodigoProvincia',
            'RefCat' => 'RefCat',
        ],
        'header' => [],
    ];

    public ?string $CodigoMunicipio;
    public ?string $CodigoMunicipioINE;
    public ?string $CodigoProvincia;
    public ?string $RefCat;
}
