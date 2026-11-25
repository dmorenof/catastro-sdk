# Catastro SDK for PHP: operations

16 operations. Each is a static method of a facade class (`CatastroSDK\...`); configure the SDK once with `CatastroOVCCallejeroSDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Coordinates of a cadastral reference | GET | `/Consulta_CPMRC` | `ConsultaCPMRC::get()` |
| Non-protected data of a property by location | GET | `/Consulta_DNPLOC` | `ConsultaDNPLOC::get()` |
| Non-protected data of a property by location, by codes | GET | `/Consulta_DNPLOC_Codigos` | `ConsultaDNPLOCCodigos::get()` |
| Non-protected data of a property by polygon and parcel | GET | `/Consulta_DNPPP` | `ConsultaDNPPP::get()` |
| Non-protected data of a property by polygon and parcel, by codes | GET | `/Consulta_DNPPP_Codigos` | `ConsultaDNPPPCodigos::get()` |
| consultaDnprc | GET | `/Consulta_DNPRC` | `ConsultaDNPRC::get()` |
| Non-protected data of a property by cadastral reference, by codes | GET | `/Consulta_DNPRC_Codigos` | `ConsultaDNPRCCodigos::get()` |
| Cadastral reference at some coordinates | GET | `/Consulta_RCCOOR` | `ConsultaRCCOOR::get()` |
| Cadastral references near some coordinates | GET | `/Consulta_RCCOOR_Distancia` | `ConsultaRCCOORDistancia::get()` |
| Streets of a municipality | GET | `/ObtenerCallejero` | `ObtenerCallejero::get()` |
| Streets of a municipality, by codes | GET | `/ObtenerCallejeroCodigos` | `ObtenerCallejeroCodigos::get()` |
| obtenerMunicipios | GET | `/ObtenerMunicipios` | `ObtenerMunicipios::get()` |
| Municipalities of a province, by codes | GET | `/ObtenerMunicipiosCodigos` | `ObtenerMunicipiosCodigos::get()` |
| Street numbers of a street | GET | `/ObtenerNumerero` | `ObtenerNumerero::get()` |
| Street numbers of a street, by codes | GET | `/ObtenerNumereroCodigos` | `ObtenerNumereroCodigos::get()` |
| obtenerProvincias | GET | `/ObtenerProvincias` | `ObtenerProvincias::get()` |
