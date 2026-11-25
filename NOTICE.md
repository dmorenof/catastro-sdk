# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with or endorsed by the Dirección General del Catastro.

- The services it calls are the public, free "datos catastrales no protegidos" services documented at <https://www.catastro.hacienda.gob.es/ayuda/servicios_web.htm>. Their terms of use apply; the MIT license does not cover the service or its data.
- The contract in `contract/openapi.json` was written by hand from the services' help pages and the DGC manual (`Webservices_Libres.pdf`). The service does not publish an OpenAPI file, and its help pages do not describe the JSON answers: only `ObtenerProvincias`, `ObtenerMunicipios` and `Consulta_DNPRC` have typed answers (observed from public responses); the other operations return untyped JSON.
- Provided without warranty.
