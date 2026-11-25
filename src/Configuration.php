<?php

declare(strict_types=1);

namespace CatastroSDK;

final class Configuration extends \Dmorenof\SdkRuntime\Configuration
{
    public string $baseUrl = 'https://ovc.catastro.meh.es/OVCServWeb/OVCWcfCallejero/COVCCallejero.svc/json';
}
