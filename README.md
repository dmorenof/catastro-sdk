# Catastro SDK

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)

Unofficial PHP SDK for the JSON web services of the Spanish Cadastre Virtual Office (Sede Electrónica del Catastro, OVC): street index and non-protected property data, by name, by codes and by coordinates.
The code in `src/` is **generated** from `contract/openapi.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) and runs on
[sdk-runtime](https://github.com/dmorenof/sdk-runtime): typed models and collections, one exception type per kind of failure. Nothing in `src/` is edited by hand.

## Installation

PHP 8.4 or later.

```bash
composer require dmorenof/catastro-sdk
```

## Setup

```php
use CatastroSDK\Configuration;

$configuration = new Configuration();
```

The default servers are the OVC endpoints (`COVCCallejero.svc/json`, `COVCCallejeroCodigos.svc/json`, `COVCCoordenadas.svc/json`). The services need no credentials.

## License

MIT (see [LICENSE.md](LICENSE.md)). See [NOTICE.md](NOTICE.md) for the status of the API itself.
