<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult\Bico\Bi;

final class IdbiDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $cn;
    public \CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult\Bico\Bi\Idbi\RcDTO $rc;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cn' => is_string($value) ? $this->cn = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
