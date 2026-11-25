<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs;

final class Error extends \Dmorenof\SdkRuntime\DTO
{
    public string $cod;
    public string $des;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cod' => is_string($value) ? $this->cod = $value : parent::assignMember($name, $value),
            'des' => is_string($value) ? $this->des = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
