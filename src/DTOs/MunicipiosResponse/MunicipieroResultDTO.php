<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\MunicipiosResponse;

final class MunicipieroResultDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \CatastroSDK\DTOs\Control $control;
    public \CatastroSDK\Collections\DnprcResponse\ConsultaDnprcResult\LerrCollection $lerr;
    public \CatastroSDK\DTOs\MunicipiosResponse\ConsultaMunicipieroResult\MunicipieroDTO $municipiero;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'control' => $value instanceof \stdClass ? $this->control = new \CatastroSDK\DTOs\Control($value) : parent::assignMember($name, $value),
            'lerr' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->lerr = new \CatastroSDK\Collections\DnprcResponse\ConsultaDnprcResult\LerrCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CatastroSDK\DTOs\Error::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
