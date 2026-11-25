<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\MunicipiosResponse\ConsultaMunicipieroResult\Municipiero\MuniItem;

final class LoineDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $cm;
    public string $cp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cm' => is_string($value) ? $this->cm = $value : parent::assignMember($name, $value),
            'cp' => is_string($value) ? $this->cp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
