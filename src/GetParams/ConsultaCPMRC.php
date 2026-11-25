<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ConsultaCPMRC extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'RefCat',
        'SRS',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'Municipio' => 'Municipio',
            'Provincia' => 'Provincia',
            'RefCat' => 'RefCat',
            'SRS' => 'SRS',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'RefCat' => [
            'maxLength' => 20,
        ],
    ];

    public ?string $Municipio;
    public ?string $Provincia;
    public string $RefCat {
        set {
            $this->assigning('RefCat', $value);
            $this->RefCat = $value;
        }
    }
    public string $SRS;
}
