<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult\Bico\Bi\Idbi;

final class RcDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $car;
    public string $cc1;
    public string $cc2;
    public string $pc1;
    public string $pc2;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'car' => is_string($value) ? $this->car = $value : parent::assignMember($name, $value),
            'cc1' => is_string($value) ? $this->cc1 = $value : parent::assignMember($name, $value),
            'cc2' => is_string($value) ? $this->cc2 = $value : parent::assignMember($name, $value),
            'pc1' => is_string($value) ? $this->pc1 = $value : parent::assignMember($name, $value),
            'pc2' => is_string($value) ? $this->pc2 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
