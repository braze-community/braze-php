# Changelog

## [2.4.6](https://github.com/braze-community/braze-php/compare/v2.4.5...v2.4.6) (2025-06-06)


### Bug Fixes

* **Model:** correct externalUserIds type in MessagesSendPostBody ([df20856](https://github.com/braze-community/braze-php/commit/df208562378ec11d56e8cf5b6937ba4c6818ca4e))

## [2.4.5](https://github.com/braze-community/braze-php/compare/v2.4.4...v2.4.5) (2025-06-06)


### Bug Fixes

* **Model:** fix type in MessagesScheduleCreatePostBody ([06e11e9](https://github.com/braze-community/braze-php/commit/06e11e96f5aacc61ce34305f9d75c9edc217a37b))

## [2.4.4](https://github.com/braze-community/braze-php/compare/v2.4.3...v2.4.4) (2025-06-06)


### Bug Fixes

* **Model:** add missing request body to UsersIdentifyPostBody ([2e315f9](https://github.com/braze-community/braze-php/commit/2e315f9609f66c6a5dba42cd06c7fcf9404f0eed)), closes [#163](https://github.com/braze-community/braze-php/issues/163)

## [2.4.3](https://github.com/braze-community/braze-php/compare/v2.4.2...v2.4.3) (2025-06-06)


### Bug Fixes

* **lib:** add `email` to allowed params for subscription status GET ([7c949d0](https://github.com/braze-community/braze-php/commit/7c949d03187f2d0c53cfab944538ead2f7893303)), closes [#164](https://github.com/braze-community/braze-php/issues/164)

## [2.4.2](https://github.com/braze-community/braze-php/compare/v2.4.1...v2.4.2) (2025-06-05)


### Bug Fixes

* **Model:** add requestBody to deleteCatalogsByCatalogNameItem ([5f7234e](https://github.com/braze-community/braze-php/commit/5f7234eeb62a3173e698b769911efb265050bc66)), closes [#160](https://github.com/braze-community/braze-php/issues/160)

## [2.4.1](https://github.com/braze-community/braze-php/compare/v2.4.0...v2.4.1) (2025-06-05)


### Bug Fixes

* **Model:** ensure CanvasTriggerSendPostBody is an object ([33b0cc0](https://github.com/braze-community/braze-php/commit/33b0cc00750cf14dd72d351f852a2540f11e875d)), closes [#152](https://github.com/braze-community/braze-php/issues/152)

## [2.4.0](https://github.com/braze-community/braze-php/compare/v2.3.0...v2.4.0) (2025-06-04)


### Features

* **lib:** generate code from braze-specification ([21eac42](https://github.com/braze-community/braze-php/commit/21eac42f5672c27ffcc98a85b64c32369271c9f0))


### Bug Fixes

* **lib:** change `$should_inline_css` type from string to bool ([bd7962c](https://github.com/braze-community/braze-php/commit/bd7962cdb12d0f8377c0c8d8b948ff77ca2b6799))

## [2.3.0](https://github.com/braze-community/braze-php/compare/v2.2.2...v2.3.0) (2025-04-18)


### Features

* **lib:** generate code from braze-specification ([fbe5b6c](https://github.com/braze-community/braze-php/commit/fbe5b6cd61cb6ab83e65a65813709fd1f90a0756))

## [2.2.2](https://github.com/braze-community/braze-php/compare/v2.2.1...v2.2.2) (2024-10-15)


### Bug Fixes

* **deps:** bump braze-specification from 1.2.3 to 1.2.4 ([#116](https://github.com/braze-community/braze-php/issues/116)) ([5b526c2](https://github.com/braze-community/braze-php/commit/5b526c26328d0dea74f573bb93952c6f61387e7f)), closes [#115](https://github.com/braze-community/braze-php/issues/115)

## [2.2.1](https://github.com/braze-community/braze-php/compare/v2.2.0...v2.2.1) (2024-10-10)


### Bug Fixes

* **lib:** generate code from braze-specification 1.2.2 ([88fd3ef](https://github.com/braze-community/braze-php/commit/88fd3ef72e3c2596404829e8b79ae30f2702bcf2))

## [2.2.0](https://github.com/braze-community/braze-php/compare/v2.1.1...v2.2.0) (2024-07-30)


### Features

* **lib:** generate code from braze-specification ([abdc78a](https://github.com/braze-community/braze-php/commit/abdc78abd9dd91a6646a3fa22ec2e88c2f75d129))

## [2.1.1](https://github.com/braze-community/braze-php/compare/v2.1.0...v2.1.1) (2024-07-04)


### Code Refactoring

* **lib:** get fully qualified name with `::class` ([3612123](https://github.com/braze-community/braze-php/commit/3612123ab1f8b83584072bd4228ba6504b20aeb7))
* **lib:** tidy backslash in fully qualified name ([51c6405](https://github.com/braze-community/braze-php/commit/51c64052592910c7ddbd6ff39bfff47c4650bfeb))

## [2.1.0](https://github.com/braze-community/braze-php/compare/v2.0.2...v2.1.0) (2024-06-28)


### Features

* **lib:** generate code from `jane-php/open-api-3` upgrade to 7.7.0 ([3703142](https://github.com/braze-community/braze-php/commit/37031428b94a88a9a4b2f6a8795b18ae65d57644))


### Build System

* **deps:** update jane-php/open-api-runtime requirement ([#82](https://github.com/braze-community/braze-php/issues/82)) ([198f750](https://github.com/braze-community/braze-php/commit/198f750b110f305e1a273dd0740c6e8cb10e16f1))

## [2.0.2](https://github.com/braze-community/braze-php/compare/v2.0.1...v2.0.2) (2024-05-31)


### Build System

* **deps:** update jane-php/open-api-runtime requirement ([#73](https://github.com/braze-community/braze-php/issues/73)) ([c798fa6](https://github.com/braze-community/braze-php/commit/c798fa6a9f45fdd03f1c6c76cdc8f97151ed1d55))

## [2.0.1](https://github.com/braze-community/braze-php/compare/v2.0.0...v2.0.1) (2024-03-13)


### Build System

* **deps:** update jane-php/open-api-runtime requirement from 7.5 to 7.6.1 ([#61](https://github.com/braze-community/braze-php/issues/61)) ([0f47151](https://github.com/braze-community/braze-php/commit/0f4715188f8d93109d36897719d54a8dbdd89c3d))

## [2.0.0](https://github.com/braze-community/braze-php/compare/v1.4.0...v2.0.0) (2024-03-12)


### ⚠ BREAKING CHANGES

* **lib:** drop PHP version 7 and require PHP >=8.0


### Bug Fixes

* **lib:** generate lib and lock `jane-php/open-api-runtime` to 7.5 ([b48a0e2](https://github.com/braze-community/braze-php/commit/b48a0e2a0070082ef2c3f8b9d48c94f80432f92d)), closes [#55](https://github.com/braze-community/braze-php/issues/55)

## [1.4.0](https://github.com/braze-community/braze-php/compare/v1.3.2...v1.4.0) (2024-01-05)


### Features

* **lib:** generate code from braze-specification ([8566005](https://github.com/braze-community/braze-php/commit/8566005bfe84e4297fb6316c4401ebc24de0014d))

## [1.3.2](https://github.com/braze-community/braze-php/compare/v1.3.1...v1.3.2) (2023-12-22)


### Bug Fixes

* **lib:** update 'trigger_properties' so that it's an object ([3abc609](https://github.com/braze-community/braze-php/commit/3abc6097ef37eba3a58bcbcda358d73109541cfb)), closes [#37](https://github.com/braze-community/braze-php/issues/37)

## [1.3.1](https://github.com/braze-community/braze-php/compare/v1.3.0...v1.3.1) (2023-10-09)


### Bug Fixes

* **lib:** replace `findUrlFactory` with `findUriFactory` in Client.php ([f9aec37](https://github.com/braze-community/braze-php/commit/f9aec37398220f0627ff3efea7f31a300e51f721))

## [1.3.0](https://github.com/braze-community/braze-php/compare/v1.2.0...v1.3.0) (2023-08-31)


### Features

* **lib:** generate code from braze-specification ([2816223](https://github.com/braze-community/braze-php/commit/281622366f5c64529a336f4870779609ac694a25))

## [1.2.0](https://github.com/braze-community/braze-php/compare/v1.1.1...v1.2.0) (2023-08-21)


### Features

* **lib:** generate code from braze-specification ([ca6d7a9](https://github.com/braze-community/braze-php/commit/ca6d7a9216541d8c16702b85b6b9f270469616cc))

## [1.1.1](https://github.com/braze-community/braze-php/compare/v1.1.0...v1.1.1) (2023-08-20)


### Bug Fixes

* **lib:** update and remove Model and Normalizer ([37549e1](https://github.com/braze-community/braze-php/commit/37549e1cd1931b21b025521f3559eb88153a644d))

## [1.1.0](https://github.com/braze-community/braze-php/compare/v1.0.1...v1.1.0) (2023-08-19)


### Build System

* **deps:** bump braze-specification from `c2edc38` to `29a5300` ([608477c](https://github.com/braze-community/braze-php/commit/608477ce58c97c133edcd27658a278ce7f3ddf68))

## [1.0.1](https://github.com/braze-community/braze-php/compare/v1.0.0...v1.0.1) (2023-08-15)


### Bug Fixes

* **lib:** update PHPDoc ([337cc58](https://github.com/braze-community/braze-php/commit/337cc5824601cbfc227a8af177413ba74346c33a))

## 1.0.0 (2023-08-13)


### Features

* **lib:** generate PHP code from OpenAPI spec ([558aefb](https://github.com/braze-community/braze-php/commit/558aefb91e58c314f5b4a6b545fc0d0b5f325461))
