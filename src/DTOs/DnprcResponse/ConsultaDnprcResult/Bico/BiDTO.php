<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult\Bico;

final class BiDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult\Bico\Bi\DebiDTO $debi;
    public \CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult\Bico\Bi\IdbiDTO $idbi;
    public string $ldt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ldt' => is_string($value) ? $this->ldt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
