<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\MunicipiosResponse\ConsultaMunicipieroResult\Municipiero;

final class MuniDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \CatastroSDK\DTOs\MunicipiosResponse\ConsultaMunicipieroResult\Municipiero\MuniItem\LoineDTO $loine;
    public string $nm;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'nm' => is_string($value) ? $this->nm = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
