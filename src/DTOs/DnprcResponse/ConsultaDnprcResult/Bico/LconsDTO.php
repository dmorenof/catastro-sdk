<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult\Bico;

final class LconsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $lcd;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'lcd' => is_string($value) ? $this->lcd = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
