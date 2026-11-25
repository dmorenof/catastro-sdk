<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\ProvinciasResponse\ConsultaProvincieroResult\Provinciero;

final class ProvDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $cpine;
    public string $np;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cpine' => is_string($value) ? $this->cpine = $value : parent::assignMember($name, $value),
            'np' => is_string($value) ? $this->np = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
