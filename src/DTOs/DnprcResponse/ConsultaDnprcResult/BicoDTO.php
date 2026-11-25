<?php

declare(strict_types=1);

namespace CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult;

final class BicoDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \CatastroSDK\DTOs\DnprcResponse\ConsultaDnprcResult\Bico\BiDTO $bi;
    public \CatastroSDK\Collections\DnprcResponse\ConsultaDnprcResult\Bico\LconsCollection $lcons;

}
