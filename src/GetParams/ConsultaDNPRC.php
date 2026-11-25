<?php

declare(strict_types=1);

namespace CatastroSDK\GetParams;

final class ConsultaDNPRC extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'RefCat',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'RefCat' => 'RefCat',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'RefCat' => [
        'maxLength' => 20,
    ],
];

    public string $RefCat {
        set {
            $this->assigning('RefCat', $value);
            $this->RefCat = $value;
        }
    }
}
