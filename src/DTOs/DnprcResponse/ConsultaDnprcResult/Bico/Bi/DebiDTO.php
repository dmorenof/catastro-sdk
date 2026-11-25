<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult\Bico\Bi;

final class DebiDTO extends \Dmorenof\SdkRuntime\DTO
{
    public string $ant;
    public string $cpt;
    public string $luso;
    public string $sfc;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ant' => is_string($value) ? $this->ant = $value : parent::assignMember($name, $value),
            'cpt' => is_string($value) ? $this->cpt = $value : parent::assignMember($name, $value),
            'luso' => is_string($value) ? $this->luso = $value : parent::assignMember($name, $value),
            'sfc' => is_string($value) ? $this->sfc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
