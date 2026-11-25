<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs;

final class Control extends \Dmorenof\SdkRuntime\DTO
{
    public int $cucons;
    public int $cudnp;
    public int $cuerr;
    public int $cumun;
    public int $cuprov;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cucons' => is_int($value) ? $this->cucons = $value : parent::assignMember($name, $value),
            'cudnp' => is_int($value) ? $this->cudnp = $value : parent::assignMember($name, $value),
            'cuerr' => is_int($value) ? $this->cuerr = $value : parent::assignMember($name, $value),
            'cumun' => is_int($value) ? $this->cumun = $value : parent::assignMember($name, $value),
            'cuprov' => is_int($value) ? $this->cuprov = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
