# Catastro SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/catastro-sdk.svg)](https://packagist.org/packages/dmorenof/catastro-sdk)

**Spanish cadastre street index, property data and coordinates from PHP, with no credentials.**

The free public services of the Sede Electrónica del Catastro (provinces, municipalities, streets, numbers, non-protected property data and coordinate conversion) behind typed PHP calls. No account, no key.

> Unofficial. Not affiliated with, endorsed by or supported by the Spanish Cadastre (Dirección General del Catastro). See [NOTICE.md](NOTICE.md).

## Why this SDK

- 16 operations across the by-name, by-code and coordinates services, each with its own server already set.
- Verified against the live service: provinces, municipalities and streets were fetched with this SDK.
- Typed answers for provinces, municipalities and cadastral references; the rest come back as plain JSON values.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/openapi.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 16 operations and 19 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/catastro-sdk
```

## Quick start

```php
<?php
use CatastroSDK\Configuration;
use CatastroSDK\CatastroOVCCallejeroSDK;
use CatastroSDK\GetParams\ObtenerMunicipios as MunicipiosParams;
use CatastroSDK\ObtenerMunicipios;

CatastroOVCCallejeroSDK::configure(new Configuration());

$answer = ObtenerMunicipios::get(new MunicipiosParams((object) ['Provincia' => 'MADRID', 'Municipio' => 'ALCALA DE HENARES']));

foreach ($answer->consulta_municipieroResult->municipiero->muni as $municipality) {
    echo json_encode($municipality), "\n"; // the municipality name (`nm`) and its codes
}
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

16 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `Consulta_CPMRC` | 1 |
| `Consulta_DNPLOC` | 1 |
| `Consulta_DNPLOC_Codigos` | 1 |
| `Consulta_DNPPP` | 1 |
| `Consulta_DNPPP_Codigos` | 1 |
| `Consulta_DNPRC` | 1 |
| `Consulta_DNPRC_Codigos` | 1 |
| `Consulta_RCCOOR` | 1 |
| `Consulta_RCCOOR_Distancia` | 1 |
| `ObtenerCallejero` | 1 |
| `ObtenerCallejeroCodigos` | 1 |
| `ObtenerMunicipios` | 1 |

…and 4 more areas; the full list is in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- The service does not publish an OpenAPI file: the contract was written from its help pages and manual, and only three answers are typed (see NOTICE.md).
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://www.catastro.hacienda.gob.es/ayuda/servicios_web.htm)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
