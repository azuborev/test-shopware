<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/_action/access-key/intergration' => [[['_route' => 'api.action.access-key.integration', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateIntegrationKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/access-key/user' => [[['_route' => 'api.action.access-key.user', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateUserKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/access-key/sales-channel' => [[['_route' => 'api.action.access-key.sales-channel', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateSalesChannelKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/access-key/product-export' => [[['_route' => 'api.action.access-key.product-export', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AccessKeyController::generateProductExportKey'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/acl/privileges' => [[['_route' => 'api.acl.privileges.get', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AclController::getPrivileges'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/acl/additional_privileges' => [[['_route' => 'api.acl.privileges.additional.get', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AclController::getAdditionalPrivileges'], null, ['GET' => 0], null, false, false, null]],
        '/api/_search' => [[['_route' => 'api.composite.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::compositeSearch'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/oauth/authorize' => [[['_route' => 'api.oauth.authorize', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::authorize'], null, ['POST' => 0], null, false, false, null]],
        '/api/oauth/token' => [[['_route' => 'api.oauth.token', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\AuthController::token'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/cache_info' => [[['_route' => 'api.action.cache.info', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::info'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/index' => [[['_route' => 'api.action.cache.index', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/cache_warmup' => [[['_route' => 'api.action.cache.delete_and_warmup', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCacheAndScheduleWarmUp'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/cache' => [[['_route' => 'api.action.cache.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearCache'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/cleanup' => [[['_route' => 'api.action.cache.cleanup', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearOldCacheFolders'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/container_cache' => [[['_route' => 'api.action.container-cache.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\CacheController::clearContainerCache'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/_action/indexing' => [[['_route' => 'api.action.indexing', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::indexing'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/index-products' => [[['_route' => 'api.action.indexing.products', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::products'], null, ['POST' => 0], null, false, false, null]],
        '/api/_info/openapi3.json' => [[['_route' => 'api.info.openapi3', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::info'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/queue.json' => [[['_route' => 'api.info.queue', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::queue'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/open-api-schema.json' => [[['_route' => 'api.info.open-api-schema', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::openApiSchema'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/entity-schema.json' => [[['_route' => 'api.info.entity-schema', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::entitySchema'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/events.json' => [[['_route' => 'api.info.business-events', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::businessEvents'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/swagger.html' => [[['_route' => 'api.info.swagger', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/config' => [[['_route' => 'api.info.config', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::config'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/version' => [[['_route' => 'api.info.shopware.version', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoShopwareVersion'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/_info/version' => [[['_route' => 'api.info.shopware.version_old_version', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::infoShopwareVersion'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/flow-actions.json' => [[['_route' => 'api.info.actions', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\InfoController::flowActions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_proxy/switch-customer' => [[['_route' => 'api.proxy.switch-customer', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::assignCustomer'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_proxy/modify-shipping-costs' => [[['_route' => 'api.proxy.modify-shipping-costs', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::modifyShippingCosts'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_proxy/disable-automatic-promotions' => [[['_route' => 'api.proxy.disable-automatic-promotions', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::disableAutomaticPromotions'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_proxy/enable-automatic-promotions' => [[['_route' => 'api.proxy.enable-automatic-promotions', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::enableAutomaticPromotions'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/sync' => [[['_route' => 'api.action.sync', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SyncController::sync'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension/refresh' => [[['_route' => 'api.extension.refresh', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::refreshExtensions'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension/upload' => [[['_route' => 'api.extension.upload', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::uploadExtensions'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension/installed' => [[['_route' => 'api.extension.installed', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreDataController::getInstalledExtensions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/frw/start' => [[['_route' => 'api.custom.store.frw.start', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwStart'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/language-plugins' => [[['_route' => 'api.custom.store.language-plugins', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getLanguagePluginList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/demo-data-plugins' => [[['_route' => 'api.custom.store.demo-data-plugins', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDemoDataPluginList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/recommendation-regions' => [[['_route' => 'api.custom.store.recommendation-regions', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendationRegions'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/recommendations' => [[['_route' => 'api.custom.store.recommendations', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getRecommendations'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/frw/login' => [[['_route' => 'api.custom.store.frw.login', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwLogin'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/license-domains' => [[['_route' => 'api.custom.store.license-domains', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::getDomainList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/verify-license-domain' => [[['_route' => 'api.custom.store.verify-license-domain', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::verifyDomain'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/frw/finish' => [[['_route' => 'api.custom.store.frw.finish', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\FirstRunWizardController::frwFinish'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/ping' => [[['_route' => 'api.custom.store.ping', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::pingStoreAPI'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/login' => [[['_route' => 'api.custom.store.login', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/checklogin' => [[['_route' => 'api.custom.store.checklogin', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::checkLogin'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/logout' => [[['_route' => 'api.custom.store.logout', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::logout'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/licenses' => [[['_route' => 'api.custom.store.licenses', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/updates' => [[['_route' => 'api.custom.store.updates', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getUpdateList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/download' => [[['_route' => 'api.custom.store.download', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::downloadPlugin'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/store/license-violations' => [[['_route' => 'api.custom.store.license-violations', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::getLicenseViolations'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/store/plugin/search' => [[['_route' => 'api.action.store.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\StoreController::searchPlugins'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/update/check' => [[['_route' => 'api.custom.updateapi.check', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::updateApiCheck'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/check-requirements' => [[['_route' => 'api.custom.update.check_requirements', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::checkRequirements'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/plugin-compatibility' => [[['_route' => 'api.custom.updateapi.plugin_compatibility', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::pluginCompatibility'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/download-latest-update' => [[['_route' => 'api.custom.updateapi.download_latest_update', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::downloadLatestUpdate'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/unpack' => [[['_route' => 'api.custom.updateapi.unpack', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::unpack'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/update/deactivate-plugins' => [[['_route' => 'api.custom.updateapi.deactivate-plugins', '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::deactivatePlugins'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/message-queue/consume' => [[['_route' => 'api.action.message-queue.consume', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\Api\\ConsumeMessagesController::consumeMessages'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/scheduled-task/run' => [[['_route' => 'api.action.scheduled-task.run', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\ScheduledTask\\Api\\ScheduledTaskController::runScheduledTasks'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/scheduled-task/min-run-interval' => [[['_route' => 'api.action.scheduled-task.min-run-interval', '_controller' => 'Shopware\\Core\\Framework\\MessageQueue\\ScheduledTask\\Api\\ScheduledTaskController::getMinRunInterval'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/database/sync-migration' => [[['_route' => 'api.action.database.sync-migration', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::syncMigrations'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/database/migrate' => [[['_route' => 'api.action.database.migrate', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::migrate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/database/migrate-destructive' => [[['_route' => 'api.action.database.migrate-destructive', '_controller' => 'Shopware\\Core\\Framework\\Migration\\Api\\MigrationController::migrateDestructive'], null, ['POST' => 0], null, false, false, null]],
        '/api/app-system/modules' => [[['_route' => 'api.app_system.modules', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getModules'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/cms/blocks' => [[['_route' => 'api.app_system.cms.blocks', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppCmsController::getBlocks'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/app-url-change/strategies' => [[['_route' => 'api.app_system.app-url-change-strategies', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::getAvailableStrategies'], null, ['GET' => 0], null, false, false, null]],
        '/api/app-system/app-url-change/resolve' => [[['_route' => 'api.app_system.app-url-change-resolve', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::resolve'], null, ['POST' => 0], null, false, false, null]],
        '/api/app-system/app-url-change/url-difference' => [[['_route' => 'api.app_system.app-url-difference', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppUrlChangeController::getUrlDifference'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/user/user-recovery' => [[['_route' => 'api.action.user.user-recovery', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::createUserRecovery'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/user/user-recovery/hash' => [[['_route' => 'api.action.user.user-recovery.hash', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::checkUserRecovery'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/user/user-recovery/password' => [[['_route' => 'api.action.user.user-recovery.password', 'auth_required' => false, '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserRecoveryController::updateUserPassword'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/user/check-email-unique' => [[['_route' => 'api.action.check-email-unique', '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isEmailUnique'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/user/check-username-unique' => [[['_route' => 'api.action.check-username-unique', '_controller' => 'Shopware\\Core\\System\\User\\Api\\UserValidationController::isUsernameUnique'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/snippet-set' => [[['_route' => 'api.action.snippet-set.getList', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getList'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/snippet/filter' => [[['_route' => 'api.action.snippet.get.filter', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getFilterItems'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/snippet-set/baseFile' => [[['_route' => 'api.action.snippet-set.base-file', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getBaseFiles'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/snippet-set/author' => [[['_route' => 'api.action.snippet-set.author', '_controller' => 'Shopware\\Core\\System\\Snippet\\Api\\SnippetController::getAuthors'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/attribute-set/relations' => [[['_route' => 'api.action.attribute-set.get-relations', '_controller' => 'Shopware\\Core\\System\\CustomField\\Api\\CustomFieldSetActionController::getAvailableRelations'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/system-config' => [
            [['_route' => 'api.action.core.save.system-config', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::saveConfiguration'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api.action.core.system-config.value', '_controller' => 'Swag\\PayPal\\Webhook\\Registration\\WebhookSystemConfigController::getConfigurationValues'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/_action/system-config/batch' => [[['_route' => 'api.action.core.save.system-config.batch', '_controller' => 'Shopware\\Core\\System\\SystemConfig\\Api\\SystemConfigController::batchSaveConfiguration'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/_info/openapi3.json' => [[['_route' => 'store-api.info.openapi3', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::info'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/open-api-schema.json' => [[['_route' => 'store-api.info.open-api-schema', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::openApiSchema'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/_info/swagger.html' => [[['_route' => 'store-api.info.swagger', 'auth_required' => '1', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\StoreApiInfoController::infoHtml'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/context' => [
            [['_route' => 'store-api.context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextRoute::load'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'store-api.switch-context', '_controller' => 'Shopware\\Core\\System\\SalesChannel\\SalesChannel\\ContextSwitchRoute::switchContext'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/store-api/currency' => [[['_route' => 'store-api.currency', '_controller' => 'Shopware\\Core\\System\\Currency\\SalesChannel\\CurrencyRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/language' => [[['_route' => 'store-api.language', '_controller' => 'Shopware\\Core\\System\\Language\\SalesChannel\\LanguageRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/salutation' => [[['_route' => 'store-api.salutation', '_controller' => 'Shopware\\Core\\System\\Salutation\\SalesChannel\\SalutationRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/country' => [[['_route' => 'store-api.country', '_controller' => 'Shopware\\Core\\System\\Country\\SalesChannel\\CountryRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/media/provide-name' => [[['_route' => 'api.action.media.provide-name', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::provideName'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/mail-template/send' => [[['_route' => 'api.action.mail_template.send', '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::send'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/mail-template/validate' => [[['_route' => 'api.action.mail_template.validate', '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/mail-template/build' => [[['_route' => 'api.action.mail_template.build', '_controller' => 'Shopware\\Core\\Content\\MailTemplate\\Api\\MailActionController::build'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/features' => [[['_route' => 'api.action.import_export.features', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::features'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/import-export/prepare' => [[['_route' => 'api.action.import_export.initiate', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::initiate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/process' => [[['_route' => 'api.action.import_export.process', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::process'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/file/download' => [[['_route' => 'api.action.import_export.file.download', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::download'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/import-export/cancel' => [[['_route' => 'api.action.import_export.cancel', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::cancel'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/prepare-template-file-download' => [[['_route' => 'api.action.import_export.template_file.prepare_download', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::prepareTemplateFileDownload'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/import-export/mapping-from-template' => [[['_route' => 'api.action.import_export.template_file.mapping', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::mappingFromTemplate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/product-export/validate' => [[['_route' => 'api.action.product_export.validate', '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/product-export/preview' => [[['_route' => 'api.action.product_export.preview', '_controller' => 'Shopware\\Core\\Content\\ProductExport\\Api\\ProductExportController::preview'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url-template/validate' => [[['_route' => 'api.seo-url-template.validate', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url-template/preview' => [[['_route' => 'api.seo-url-template.preview', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::preview'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url-template/context' => [[['_route' => 'api.seo-url-template.context', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getSeoUrlContext'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/seo-url/canonical' => [[['_route' => 'api.seo-url.canonical', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::updateCanonicalUrl'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/seo-url/create-custom-url' => [[['_route' => 'api.seo-url.create', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::createCustomSeoUrls'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/category' => [[['_route' => 'store-api.category.search', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\CategoryListRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/product' => [[['_route' => 'store-api.product.search', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\ProductListRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/search' => [[['_route' => 'store-api.search', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Search\\ResolvedCriteriaProductSearchRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/search-suggest' => [[['_route' => 'store-api.search.suggest', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Suggest\\ProductSuggestRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/contact-form' => [[['_route' => 'store-api.contact.form', '_controller' => 'Shopware\\Core\\Content\\ContactForm\\SalesChannel\\ContactFormRoute::load'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/newsletter/confirm' => [[['_route' => 'store-api.newsletter.confirm', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterConfirmRoute::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/newsletter/subscribe' => [[['_route' => 'store-api.newsletter.subscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::subscribe'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/newsletter/unsubscribe' => [[['_route' => 'store-api.newsletter.unsubscribe', '_controller' => 'Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterUnsubscribeRoute::unsubscribe'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/seo-url' => [[['_route' => 'store-api.seo.url', '_controller' => 'Shopware\\Core\\Content\\Seo\\SalesChannel\\SeoUrlRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/sitemap' => [[['_route' => 'store-api.sitemap', '_controller' => 'Shopware\\Core\\Content\\Sitemap\\SalesChannel\\SitemapRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/calculate-price' => [[['_route' => 'api.action.calculate-price', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\PriceActionController::calculate'], null, ['POST' => 0], null, false, false, null]],
        '/payment/finalize-transaction' => [[['_route' => 'payment.finalize.transaction', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\Controller\\PaymentController::finalizeTransaction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/promotion/setgroup/packager' => [[['_route' => 'api.action.promotion.setgroup.packager', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupPackagers'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/setgroup/sorter' => [[['_route' => 'api.action.promotion.setgroup.sorter', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getSetGroupSorters'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/discount/picker' => [[['_route' => 'api.action.promotion.discount.picker', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getDiscountFilterPickers'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/generate-fixed' => [[['_route' => 'api.action.promotion.codes.generate-fixed', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::generateFixedCode'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/generate-individual' => [[['_route' => 'api.action.promotion.codes.generate-individual', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::generateIndividualCodes'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/replace-individual' => [[['_route' => 'api.action.promotion.codes.replace-individual', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::replaceIndividualCodes'], null, ['PATCH' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/add-individual' => [[['_route' => 'api.action.promotion.codes.add-individual', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::addIndividualCodes'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/promotion/codes/preview' => [[['_route' => 'api.action.promotion.codes.preview', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionController::getCodePreview'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/handle-payment' => [[['_route' => 'store-api.payment.handle', '_controller' => 'Shopware\\Core\\Checkout\\Payment\\SalesChannel\\HandlePaymentMethodRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/shipping-method' => [[['_route' => 'store-api.shipping.method', '_controller' => 'Shopware\\Core\\Checkout\\Shipping\\SalesChannel\\ShippingMethodRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/account/newsletter-recipient' => [[['_route' => 'store-api.newsletter.recipient', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AccountNewsletterRecipientRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/account/change-profile' => [[['_route' => 'store-api.account.change-profile', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeCustomerProfileRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/change-email' => [[['_route' => 'store-api.account.change-email', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangeEmailRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/change-password' => [[['_route' => 'store-api.account.change-password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePasswordRoute::change'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/customer' => [
            [['_route' => 'store-api.account.customer', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'store-api.account.customer.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteCustomerRoute::delete'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/store-api/account/list-address' => [[['_route' => 'store-api.account.address.list.get', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ListAddressRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/customer/wishlist' => [[['_route' => 'store-api.customer.wishlist.load', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoadWishlistRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/account/login' => [[['_route' => 'store-api.account.login', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LoginRoute::login'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/logout' => [[['_route' => 'store-api.account.logout', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\LogoutRoute::logout'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/customer/wishlist/merge' => [[['_route' => 'store-api.customer.wishlist.merge', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\MergeWishlistProductRoute::merge'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/register-confirm' => [[['_route' => 'store-api.account.register.confirm', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterConfirmRoute::confirm'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/register' => [[['_route' => 'store-api.account.register', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RegisterRoute::register'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/recovery-password-confirm' => [[['_route' => 'store-api.account.recovery.password', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ResetPasswordRoute::resetPassword'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/recovery-password' => [[['_route' => 'store-api.account.recovery.send.mail', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SendPasswordRecoveryMailRoute::sendRecoveryMail'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/account/address' => [[['_route' => 'store-api.account.address.create', 'addressId' => null, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/order/state/cancel' => [[['_route' => 'store-api.order.state.cancel', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\CancelOrderRoute::cancel'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/order' => [[['_route' => 'store-api.order', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/order/payment' => [[['_route' => 'store-api.order.set-payment', '_controller' => 'Shopware\\Core\\Checkout\\Order\\SalesChannel\\SetPaymentOrderRoute::setPayment'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/checkout/cart' => [
            [['_route' => 'store-api.checkout.cart.delete', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartDeleteRoute::delete'], null, ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.read', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartLoadRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/store-api/checkout/cart/line-item' => [
            [['_route' => 'store-api.checkout.cart.add', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemAddRoute::add'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.remove-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemRemoveRoute::remove'], null, ['DELETE' => 0], null, false, false, null],
            [['_route' => 'store-api.checkout.cart.update-lineitem', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartItemUpdateRoute::change'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/store-api/checkout/order' => [[['_route' => 'store-api.checkout.cart.order', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\SalesChannel\\CartOrderRoute::order'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension-sdk/run-action' => [[['_route' => 'api.action.extension-sdk.run-action', '_controller' => 'Shopware\\Administration\\Controller\\AdminExtensionApiController::runAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/search' => [[['_route' => 'api.admin.search', '_controller' => 'Shopware\\Administration\\Controller\\AdminSearchController::search'], null, ['POST' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'administration.index', 'auth_required' => false, '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/_admin/snippets' => [[['_route' => 'api.admin.snippets', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::snippets'], null, ['GET' => 0], null, false, false, null]],
        '/api/_admin/known-ips' => [[['_route' => 'api.admin.known-ips', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::knownIps'], null, ['GET' => 0], null, false, false, null]],
        '/api/_admin/reset-excluded-search-term' => [[['_route' => 'api.admin.reset-excluded-search-term', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::resetExcludedSearchTerm'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/check-customer-email-valid' => [[['_route' => 'api.admin.check-customer-email-valid', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::checkCustomerEmailValid'], null, ['POST' => 0], null, false, false, null]],
        '/api/_admin/sanitize-html' => [[['_route' => 'api.admin.sanitize-html', '_controller' => 'Shopware\\Administration\\Controller\\AdministrationController::sanitizeHtml'], null, ['POST' => 0], null, false, false, null]],
        '/api/notification' => [[['_route' => 'api.notification', '_controller' => 'Shopware\\Administration\\Controller\\NotificationController::saveNotification'], null, ['POST' => 0], null, false, false, null]],
        '/api/notification/message' => [[['_route' => 'api.notification.message', '_controller' => 'Shopware\\Administration\\Controller\\NotificationController::fetchNotification'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/config-me' => [
            [['_route' => 'api.config_me.get', 'auth_required' => true, '_controller' => 'Shopware\\Administration\\Controller\\UserConfigController::getConfigMe'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api.config_me.update', 'auth_required' => true, '_controller' => 'Shopware\\Administration\\Controller\\UserConfigController::updateConfigMe'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/order' => [[['_route' => 'frontend.account.order.page', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderOverview'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/account/order/cancel' => [[['_route' => 'frontend.account.order.cancel', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::cancelOrder'], null, ['POST' => 0], null, false, false, null]],
        '/account/payment' => [
            [['_route' => 'frontend.account.payment.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::paymentOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.payment.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountPaymentController::savePayment'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account' => [[['_route' => 'frontend.account.home.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/account/profile' => [
            [['_route' => 'frontend.account.profile.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::profileOverview'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.profile.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveProfile'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/profile/email' => [[['_route' => 'frontend.account.profile.email.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::saveEmail'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/password' => [[['_route' => 'frontend.account.profile.password.save', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::savePassword'], null, ['POST' => 0], null, false, false, null]],
        '/account/profile/delete' => [[['_route' => 'frontend.account.profile.delete', '_controller' => 'Shopware\\Storefront\\Controller\\AccountProfileController::deleteProfile'], null, ['POST' => 0], null, false, false, null]],
        '/account/address' => [[['_route' => 'frontend.account.address.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountAddressOverview'], null, ['GET' => 0], null, false, false, null]],
        '/account/address/create' => [[['_route' => 'frontend.account.address.create.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountCreateAddress'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/address-book' => [[['_route' => 'frontend.account.addressbook', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::addressBook'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/captcha_list' => [[['_route' => 'api.action.captcha.list', '_controller' => 'Shopware\\Storefront\\Controller\\Api\\CaptchaController::list'], null, ['GET' => 0], null, false, false, null]],
        '/account/login' => [
            [['_route' => 'frontend.account.login.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::loginPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.login', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::login'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/guest/login' => [[['_route' => 'frontend.account.guest.login.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::guestLoginPage'], null, ['GET' => 0], null, false, false, null]],
        '/account/logout' => [[['_route' => 'frontend.account.logout.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/account/recover' => [
            [['_route' => 'frontend.account.recover.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::recoverAccountForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.request', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::generateAccountRecovery'], null, ['POST' => 0], null, false, false, null],
        ],
        '/account/recover/password' => [
            [['_route' => 'frontend.account.recover.password.page', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPasswordForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.recover.password.reset', '_controller' => 'Shopware\\Storefront\\Controller\\AuthController::resetPassword'], null, ['POST' => 0], null, false, false, null],
        ],
        '/basic-captcha' => [[['_route' => 'frontend.captcha.basic-captcha.load', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CaptchaController::loadBasicCaptcha'], null, ['GET' => 0], null, false, false, null]],
        '/basic-captcha-validate' => [[['_route' => 'frontend.captcha.basic-captcha.validate', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CaptchaController::validate'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/promotion/add' => [[['_route' => 'frontend.checkout.promotion.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addPromotion'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/product/add-by-number' => [[['_route' => 'frontend.checkout.product.add-by-number', '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addProductByNumber'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/line-item/add' => [[['_route' => 'frontend.checkout.line-item.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::addLineItems'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/cart' => [[['_route' => 'frontend.checkout.cart.page', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::cartPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/confirm' => [[['_route' => 'frontend.checkout.confirm.page', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::confirmPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/finish' => [[['_route' => 'frontend.checkout.finish.page', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::finishPage'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/order' => [[['_route' => 'frontend.checkout.finish.order', '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::order'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/checkout/info' => [[['_route' => 'frontend.checkout.info', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::info'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/offcanvas' => [[['_route' => 'frontend.cart.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CheckoutController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/configure' => [[['_route' => 'frontend.checkout.configure', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::configure'], null, ['POST' => 0], null, false, false, null]],
        '/checkout/language' => [[['_route' => 'frontend.checkout.switch-language', '_controller' => 'Shopware\\Storefront\\Controller\\ContextController::switchLanguage'], null, ['POST' => 0], null, false, false, null]],
        '/cookie/offcanvas' => [[['_route' => 'frontend.cookie.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/cookie/permission' => [[['_route' => 'frontend.cookie.permission', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CookieController::permission'], null, ['GET' => 0], null, false, false, null]],
        '/country/country-state-data' => [[['_route' => 'frontend.country.country.data', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CountryStateController::getCountryData'], null, ['POST' => 0], null, false, false, null]],
        '/csrf/generate' => [[['_route' => 'frontend.csrf.generateToken', 'csrf_protected' => false, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CsrfController::generateCsrf'], null, ['POST' => 0], null, false, false, null]],
        '/form/contact' => [[['_route' => 'frontend.form.contact.send', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::sendContactForm'], null, ['POST' => 0], null, false, false, null]],
        '/form/newsletter' => [[['_route' => 'frontend.form.newsletter.register.handle', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\FormController::handleNewsletter'], null, ['POST' => 0], null, false, false, null]],
        '/maintenance' => [[['_route' => 'frontend.maintenance.page', 'allow_maintenance' => true, '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderMaintenancePage'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'frontend.home.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::home'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'root.fallback'], null, null, null, false, false, null],
        ],
        '/widgets/menu/offcanvas' => [[['_route' => 'frontend.menu.offcanvas', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::offcanvas'], null, ['GET' => 0], null, false, false, null]],
        '/newsletter-subscribe' => [[['_route' => 'frontend.newsletter.subscribe', '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeMail'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/account/newsletter' => [[['_route' => 'frontend.account.newsletter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\NewsletterController::subscribeCustomer'], null, ['POST' => 0], null, false, false, null]],
        '/account/register' => [
            [['_route' => 'frontend.account.register.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::accountRegisterPage'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'frontend.account.register.save', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::register'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkout/register' => [[['_route' => 'frontend.checkout.register.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::checkoutRegisterPage'], null, ['GET' => 0], null, false, false, null]],
        '/registration/confirm' => [[['_route' => 'frontend.account.register.mail', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::confirmRegistration'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'frontend.search.page', '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::search'], null, ['GET' => 0], null, false, false, null]],
        '/suggest' => [[['_route' => 'frontend.search.suggest', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::suggest'], null, ['GET' => 0], null, false, false, null]],
        '/widgets/search' => [[['_route' => 'widgets.search.pagelet.v2', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::ajax'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/widgets/search/filter' => [[['_route' => 'widgets.search.filter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\SearchController::filter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'frontend.sitemap.xml', '_format' => 'xml', '_controller' => 'Shopware\\Storefront\\Controller\\SitemapController::sitemapXml'], null, ['GET' => 0], null, false, false, null]],
        '/_proxy/store-api' => [[['_route' => 'frontend.store-api.proxy', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\StoreApiProxyController::proxy'], null, null, null, false, false, null]],
        '/sw-domain-hash.html' => [[['_route' => 'api.verification-hash.load', 'auth_required' => false, '_controller' => 'Shopware\\Storefront\\Controller\\VerificationHashController::load'], null, ['GET' => 0], null, false, false, null]],
        '/.well-known/change-password' => [[['_route' => 'frontend.well-known.change-password', '_controller' => 'Shopware\\Storefront\\Controller\\WellKnownController::changePassword'], null, ['GET' => 0], null, false, false, null]],
        '/wishlist' => [[['_route' => 'frontend.wishlist.page', '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::index'], null, ['GET' => 0], null, false, false, null]],
        '/wishlist/guest-pagelet' => [[['_route' => 'frontend.wishlist.guestPage.pagelet', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::guestPagelet'], null, ['POST' => 0], null, false, false, null]],
        '/widgets/wishlist' => [[['_route' => 'widgets.wishlist.pagelet', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxPagination'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wishlist/list' => [[['_route' => 'frontend.wishlist.product.list', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxList'], null, ['GET' => 0], null, false, false, null]],
        '/wishlist/merge' => [[['_route' => 'frontend.wishlist.product.merge', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxMerge'], null, ['POST' => 0], null, false, false, null]],
        '/wishlist/merge/pagelet' => [[['_route' => 'frontend.wishlist.product.merge.pagelet', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxPagelet'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/_action/paypal/saleschannel-default' => [[['_route' => 'api.action.paypal.saleschannel_default', '_controller' => 'Swag\\PayPal\\Administration\\PayPalPaymentMethodController::setPayPalPaymentMethodAsSalesChannelDefault'], null, ['POST' => 0], null, false, false, null]],
        '/paypal/plus/payment/finalize-transaction' => [[['_route' => 'payment.paypal.plus.finalize.transaction', 'auth_required' => false, '_controller' => 'Swag\\PayPal\\Checkout\\Plus\\PlusPaymentFinalizeController::finalizeTransaction'], null, ['GET' => 0], null, false, false, null]],
        '/store-api/paypal/express/create-order' => [[['_route' => 'store-api.paypal.express.create_order', '_controller' => 'Swag\\PayPal\\Checkout\\ExpressCheckout\\SalesChannel\\ExpressCreateOrderRoute::createPayPalOrder'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/paypal/express/prepare-checkout' => [[['_route' => 'store-api.paypal.express.prepare_checkout', '_controller' => 'Swag\\PayPal\\Checkout\\ExpressCheckout\\SalesChannel\\ExpressPrepareCheckoutRoute::prepareCheckout'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/paypal/spb/create-order' => [[['_route' => 'store-api.paypal.spb.create_order', '_controller' => 'Swag\\PayPal\\Checkout\\SPBCheckout\\SalesChannel\\SPBCreateOrderRoute::createPayPalOrder'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/paypal/create-order' => [[['_route' => 'store-api.paypal.create_order', '_controller' => 'Swag\\PayPal\\Checkout\\SalesChannel\\CreateOrderRoute::createPayPalOrder'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/paypal/error' => [[['_route' => 'store-api.paypal.error', 'XmlHttpRequest' => true, '_controller' => 'Swag\\PayPal\\Checkout\\SalesChannel\\ErrorRoute::addErrorMessage'], null, ['POST' => 0], null, false, false, null]],
        '/store-api/payment-method' => [[['_route' => 'store-api.payment.method', '_controller' => 'Swag\\PayPal\\Checkout\\SalesChannel\\FilteredPaymentMethodRoute::load'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/store-api/paypal/payment-method-eligibility' => [[['_route' => 'store-api.paypal.payment-method-eligibility', 'XmlHttpRequest' => true, '_controller' => 'Swag\\PayPal\\Checkout\\SalesChannel\\MethodEligibilityRoute::setPaymentMethodEligibility'], null, ['POST' => 0], null, false, false, null]],
        '/api/paypal/dispute' => [[['_route' => 'api.paypal.dispute_list', '_controller' => 'Swag\\PayPal\\Dispute\\Administration\\DisputeController::disputeList'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/paypal/pos/validate-api-credentials' => [[['_route' => 'api.action.paypal.pos.validate.api.credentials', '_controller' => 'Swag\\PayPal\\Pos\\Setting\\SettingsController::validateApiCredentials'], null, ['POST' => 0], null, false, false, null]],
        '/api/paypal/pos/fetch-information' => [[['_route' => 'api.paypal.pos.fetch.information', '_controller' => 'Swag\\PayPal\\Pos\\Setting\\SettingsController::fetchInformation'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/paypal/pos/clone-product-visibility' => [[['_route' => 'api.action.paypal.pos.clone.product.visibility', '_controller' => 'Swag\\PayPal\\Pos\\Setting\\SettingsController::cloneProductVisibility'], null, ['POST' => 0], null, false, false, null]],
        '/api/paypal/pos/product-count' => [[['_route' => 'api.paypal.pos.product.count', '_controller' => 'Swag\\PayPal\\Pos\\Setting\\SettingsController::getProductCounts'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/paypal/validate-api-credentials' => [[['_route' => 'api.action.paypal.validate.api.credentials', '_controller' => 'Swag\\PayPal\\Setting\\SettingsController::validateApiCredentials'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/paypal/get-api-credentials' => [[['_route' => 'api.action.paypal.get.api.credentials', '_controller' => 'Swag\\PayPal\\Setting\\SettingsController::getApiCredentials'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/paypal/get-merchant-integrations' => [[['_route' => 'api.action.paypal.get.merchant.integrations', '_controller' => 'Swag\\PayPal\\Setting\\SettingsController::getMerchantIntegrations'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/system-config/check' => [[['_route' => 'api.action.core.system-config.check', '_controller' => 'Swag\\PayPal\\Webhook\\Registration\\WebhookSystemConfigController::checkConfiguration'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/system-config/schema' => [[['_route' => 'api.action.core.system-config', '_controller' => 'Swag\\PayPal\\Webhook\\Registration\\WebhookSystemConfigController::getConfiguration'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/paypal/webhook/execute' => [[['_route' => 'api.action.paypal.webhook.execute', 'auth_required' => false, '_controller' => 'Swag\\PayPal\\Webhook\\WebhookController::executeWebhook'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension-store/list' => [[['_route' => 'api.extension.list', '_controller' => 'SwagExtensionStore\\Controller\\DataController::getExtensionList'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/api/_action/extension-store/store-filters' => [[['_route' => 'api.extension.store_filters', '_controller' => 'SwagExtensionStore\\Controller\\DataController::listingFilters'], null, ['GET' => 0], null, false, false, null]],
        '/api/_action/extension-store/cart/new' => [[['_route' => 'api.extension.create_new_cart', '_controller' => 'SwagExtensionStore\\Controller\\LicenseController::createCart'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension-store/cart/order' => [[['_route' => 'api.extension.order', '_controller' => 'SwagExtensionStore\\Controller\\LicenseController::orderCart'], null, ['POST' => 0], null, false, false, null]],
        '/api/_action/extension-store/cart/payment-means' => [[['_route' => 'api.extension.payment-means', '_controller' => 'SwagExtensionStore\\Controller\\LicenseController::availablePaymentMeans'], null, ['GET' => 0], null, false, false, null]],
        '/api/_info/me' => [
            [['_route' => 'api.info.me', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::me'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api.change.me', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateMe'], null, ['PATCH' => 0], null, false, false, null],
        ],
        '/api/_info/ping' => [[['_route' => 'api.info.ping', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::status'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi/(?'
                        .'|_(?'
                            .'|a(?'
                                .'|ction/(?'
                                    .'|c(?'
                                        .'|lone/([a-zA-Z-]+)/([0-9a-f]{32})(*:71)'
                                        .'|ustomer\\-group\\-registration/(?'
                                            .'|accept(?:/([^/]++))?(*:130)'
                                            .'|decline(?:/([^/]++))?(*:159)'
                                        .')'
                                    .')'
                                    .'|version/(?'
                                        .'|([a-zA-Z-]+)/([0-9a-f]{32})(*:207)'
                                        .'|merge/([a-zA-Z-]+)/([0-9a-f]{32})(*:248)'
                                        .'|([^/]++)/([a-zA-Z-]+)/([^/]++)(*:286)'
                                    .')'
                                    .'|i(?'
                                        .'|n(?'
                                            .'|dexing/([^/]++)(*:318)'
                                            .'|crement/([^/]++)(?'
                                                .'|(*:345)'
                                            .')'
                                        .')'
                                        .'|mport\\-export/file/prepare\\-download/([^/]++)(*:400)'
                                    .')'
                                    .'|extension(?'
                                        .'|/(?'
                                            .'|d(?'
                                                .'|ownload/([^/]++)(*:445)'
                                                .'|eactivate/([^/]++)/([^/]++)(*:480)'
                                            .')'
                                            .'|install/([^/]++)/([^/]++)(*:514)'
                                            .'|u(?'
                                                .'|ninstall/([^/]++)/([^/]++)(*:552)'
                                                .'|pdate/([^/]++)/([^/]++)(*:583)'
                                            .')'
                                            .'|remove/([^/]++)/([^/]++)(*:616)'
                                            .'|activate/([^/]++)/([^/]++)(*:650)'
                                        .')'
                                        .'|\\-store/(?'
                                            .'|detail/([^/]++)(*:685)'
                                            .'|([^/]++)/reviews(*:709)'
                                        .')'
                                    .')'
                                    .'|update/finish/([^/]++)(*:741)'
                                    .'|d(?'
                                        .'|ecrement/([^/]++)(*:770)'
                                        .'|ocument/([^/]++)/(?'
                                            .'|([^/]++)(*:806)'
                                            .'|upload(*:820)'
                                        .')'
                                    .')'
                                    .'|reset\\-increment/([^/]++)(*:855)'
                                    .'|number\\-range/(?'
                                        .'|reserve/([^/]++)(?:/([^/]++))?(*:910)'
                                        .'|preview\\-pattern(?:/([^/]++))?(*:948)'
                                    .')'
                                    .'|s(?'
                                        .'|tate\\-machine/([^/]++)/([^/]++)/state(?'
                                            .'|(*:1001)'
                                            .'|/([^/]++)(*:1019)'
                                        .')'
                                        .'|eo\\-url\\-template/default/([^/]++)(*:1063)'
                                    .')'
                                    .'|p(?'
                                        .'|ro(?'
                                            .'|duct/([^/]++)/combinations(*:1108)'
                                            .'|motion/([^/]++)/codes/individual(?'
                                                .'|(*:1152)'
                                            .')'
                                        .')'
                                        .'|aypal(?'
                                            .'|/(?'
                                                .'|pos/(?'
                                                    .'|sync/(?'
                                                        .'|([^/]++)(?'
                                                            .'|/(?'
                                                                .'|products(*:1213)'
                                                                .'|i(?'
                                                                    .'|mages(*:1231)'
                                                                    .'|nventory(*:1248)'
                                                                .')'
                                                            .')'
                                                            .'|(*:1259)'
                                                        .')'
                                                        .'|abort/([^/]++)(*:1283)'
                                                        .'|reset/([^/]++)(*:1306)'
                                                    .')'
                                                    .'|log/cleanup/([^/]++)(*:1336)'
                                                    .'|webhook/(?'
                                                        .'|registration/([^/]++)(?'
                                                            .'|(*:1380)'
                                                        .')'
                                                        .'|execute/([^/]++)(*:1406)'
                                                    .')'
                                                .')'
                                                .'|refund\\-payment/([^/]++)/([^/]++)/([^/]++)(*:1459)'
                                                .'|capture\\-payment/([^/]++)/([^/]++)/([^/]++)(*:1511)'
                                                .'|void\\-payment/([^/]++)/([^/]++)/([^/]++)(*:1560)'
                                                .'|webhook/(?'
                                                    .'|register/([^/]++)(*:1597)'
                                                    .'|deregister/([^/]++)(*:1625)'
                                                .')'
                                            .')'
                                            .'|\\-v2/(?'
                                                .'|refund\\-capture/([^/]++)/([^/]++)/([^/]++)(*:1686)'
                                                .'|capture\\-authorization/([^/]++)/([^/]++)(*:1735)'
                                                .'|void\\-authorization/([^/]++)/([^/]++)(*:1781)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|media(?'
                                        .'|\\-folder/([^/]++)/dissolve(*:1827)'
                                        .'|/([^/]++)/(?'
                                            .'|upload(*:1855)'
                                            .'|rename(*:1870)'
                                        .')'
                                    .')'
                                    .'|order(?'
                                        .'|/([^/]++)/(?'
                                            .'|c(?'
                                                .'|onvert\\-to\\-cart(*:1922)'
                                                .'|reditItem(*:1940)'
                                            .')'
                                            .'|recalculate(*:1961)'
                                            .'|pro(?'
                                                .'|duct/([^/]++)(*:1989)'
                                                .'|motion\\-item(*:2010)'
                                            .')'
                                            .'|lineItem(*:2028)'
                                            .'|toggleAutomaticPromotions(*:2062)'
                                            .'|([^/]++)/document/([^/]++)/preview(*:2105)'
                                            .'|document/([^/]++)(*:2131)'
                                            .'|state/([^/]++)(*:2154)'
                                        .')'
                                        .'|\\-address/([^/]++)/customer\\-address/([^/]++)(*:2209)'
                                        .'|_(?'
                                            .'|transaction/([^/]++)/state/([^/]++)(*:2257)'
                                            .'|delivery/([^/]++)/state/([^/]++)(*:2298)'
                                        .')'
                                    .')'
                                    .'|theme/([^/]++)(?'
                                        .'|/(?'
                                            .'|configuration(*:2343)'
                                            .'|assign/([^/]++)(*:2367)'
                                            .'|reset(*:2381)'
                                            .'|structured\\-fields(*:2408)'
                                        .')'
                                        .'|(*:2418)'
                                    .')'
                                .')'
                                .'|dmin/product\\-stream\\-preview/([^/]++)(*:2467)'
                            .')'
                            .'|proxy(?'
                                .'|/store\\-api/([^/]++)/(.*)(*:2510)'
                                .'|\\-order/([^/]++)(*:2535)'
                            .')'
                        .')'
                        .'|license/(?'
                            .'|cancel/([^/]++)(*:2572)'
                            .'|rate/([^/]++)(*:2594)'
                        .')'
                        .'|a(?'
                            .'|pp(?'
                                .'|\\-system/action\\-button/(?'
                                    .'|([^/]++)/([^/]++)(*:2657)'
                                    .'|run/([^/]++)(*:2678)'
                                .')'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:2757)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:2823)'
                                .')'
                                .'|\\-(?'
                                    .'|action\\-button(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:2924)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:2990)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:3085)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:3151)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|cms\\-block(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:3245)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:3311)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:3406)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:3472)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|payment\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:3571)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:3637)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|emplate(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:3731)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:3797)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:3890)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:3956)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|cl\\-(?'
                                .'|role(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:4050)'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4112)'
                                .')'
                                .'|user\\-role(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:4204)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:4270)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|s(?'
                            .'|cript/(.+)(*:4297)'
                            .'|earch(?'
                                .'|/(?'
                                    .'|a(?'
                                        .'|cl\\-(?'
                                            .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4386)'
                                            .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4458)'
                                        .')'
                                        .'|pp(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4526)'
                                            .'|\\-(?'
                                                .'|action\\-button(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4610)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4685)'
                                                .')'
                                                .'|cms\\-block(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4761)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4836)'
                                                .')'
                                                .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4914)'
                                                .'|t(?'
                                                    .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:4987)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5059)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|ategory(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5139)'
                                            .'|\\-t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5209)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5281)'
                                            .')'
                                        .')'
                                        .'|ms\\-(?'
                                            .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5357)'
                                            .'|page(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5426)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5501)'
                                            .')'
                                            .'|s(?'
                                                .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5574)'
                                                .'|lot(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5642)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5717)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ountry(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5791)'
                                            .'|\\-(?'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5866)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:5941)'
                                                .')'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6015)'
                                            .')'
                                        .')'
                                        .'|u(?'
                                            .'|rrency(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6092)'
                                                .'|\\-(?'
                                                    .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6176)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6249)'
                                                .')'
                                            .')'
                                            .'|stom(?'
                                                .'|\\-field(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6330)'
                                                    .'|\\-set(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6400)'
                                                        .'|\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6472)'
                                                    .')'
                                                .')'
                                                .'|er(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6541)'
                                                    .'|\\-(?'
                                                        .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6615)'
                                                        .'|group(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6685)'
                                                            .'|\\-(?'
                                                                .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6781)'
                                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6854)'
                                                            .')'
                                                        .')'
                                                        .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6926)'
                                                        .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:6991)'
                                                        .'|wishlist(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7064)'
                                                            .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7135)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|\\-ids/(?'
                                    .'|a(?'
                                        .'|cl\\-(?'
                                            .'|role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7228)'
                                            .'|user\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7300)'
                                        .')'
                                        .'|pp(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7368)'
                                            .'|\\-(?'
                                                .'|action\\-button(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7452)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7527)'
                                                .')'
                                                .'|cms\\-block(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7603)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7678)'
                                                .')'
                                                .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7756)'
                                                .'|t(?'
                                                    .'|emplate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7829)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7901)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|ategory(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:7981)'
                                            .'|\\-t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8051)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8123)'
                                            .')'
                                        .')'
                                        .'|ms\\-(?'
                                            .'|block((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8199)'
                                            .'|page(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8268)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8343)'
                                            .')'
                                            .'|s(?'
                                                .'|ection((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8416)'
                                                .'|lot(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8484)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8559)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ountry(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8633)'
                                            .'|\\-(?'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8708)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8783)'
                                                .')'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8857)'
                                            .')'
                                        .')'
                                        .'|u(?'
                                            .'|rrency(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:8934)'
                                                .'|\\-(?'
                                                    .'|country\\-rounding((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9018)'
                                                    .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9091)'
                                                .')'
                                            .')'
                                            .'|stom(?'
                                                .'|\\-field(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9172)'
                                                    .'|\\-set(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9242)'
                                                        .'|\\-relation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9314)'
                                                    .')'
                                                .')'
                                                .'|er(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9383)'
                                                    .'|\\-(?'
                                                        .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9457)'
                                                        .'|group(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9527)'
                                                            .'|\\-(?'
                                                                .'|registration\\-sales\\-channels((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9623)'
                                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9696)'
                                                            .')'
                                                        .')'
                                                        .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9768)'
                                                        .'|tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9833)'
                                                        .'|wishlist(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9906)'
                                                            .'|\\-product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:9977)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|paypal(?'
                            .'|/(?'
                                .'|dispute/([^/]++)(*:10024)'
                                .'|p(?'
                                    .'|os/product\\-log/([^/]++)(*:10062)'
                                    .'|ayment\\-details/([^/]++)/([^/]++)(*:10105)'
                                .')'
                                .'|resource\\-details/([^/]++)/([^/]++)/([^/]++)(*:10160)'
                            .')'
                            .'|\\-v2/(?'
                                .'|order/([^/]++)/([^/]++)(*:10202)'
                                .'|authorization/([^/]++)/([^/]++)(*:10243)'
                                .'|capture/([^/]++)/([^/]++)(*:10278)'
                                .'|refund/([^/]++)/([^/]++)(*:10312)'
                            .')'
                        .')'
                        .'|c(?'
                            .'|ategory(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:10407)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:10474)'
                                .')'
                                .'|\\-t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:10565)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:10632)'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:10726)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:10793)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|ms\\-(?'
                                .'|block(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:10891)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:10958)'
                                    .')'
                                .')'
                                .'|page(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:11046)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:11113)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:11209)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:11276)'
                                        .')'
                                    .')'
                                .')'
                                .'|s(?'
                                    .'|ection(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:11371)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:11438)'
                                        .')'
                                    .')'
                                    .'|lot(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:11525)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:11592)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:11688)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:11755)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|ountry(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:11848)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:11915)'
                                .')'
                                .'|\\-(?'
                                    .'|state(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:12008)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:12075)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:12171)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:12238)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:12334)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:12401)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|u(?'
                                .'|rrency(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:12497)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:12564)'
                                    .')'
                                    .'|\\-(?'
                                        .'|country\\-rounding(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:12669)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:12736)'
                                            .')'
                                        .')'
                                        .'|translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:12831)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:12898)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|stom(?'
                                    .'|\\-field(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:12998)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:13065)'
                                        .')'
                                        .'|\\-set(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:13153)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:13220)'
                                            .')'
                                            .'|\\-relation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:13313)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:13380)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|er(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:13468)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:13535)'
                                        .')'
                                        .'|\\-(?'
                                            .'|address(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:13630)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:13697)'
                                                .')'
                                            .')'
                                            .'|group(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:13786)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:13853)'
                                                .')'
                                                .'|\\-(?'
                                                    .'|registration\\-sales\\-channels(?'
                                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                            .'|(*:13970)'
                                                        .')'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                            .'|(*:14037)'
                                                        .')'
                                                    .')'
                                                    .'|translation(?'
                                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                            .'|(*:14132)'
                                                        .')'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                            .'|(*:14199)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|recovery(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:14293)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:14360)'
                                                .')'
                                            .')'
                                            .'|tag(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:14447)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:14514)'
                                                .')'
                                            .')'
                                            .'|wishlist(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:14606)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:14673)'
                                                .')'
                                                .'|\\-product(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:14765)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:14832)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|dead\\-message(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:14935)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:14999)'
                        .')'
                    .')'
                    .'|ccount/(?'
                        .'|order/(?'
                            .'|([^/]++)(*:15038)'
                            .'|edit/([^/]++)(*:15061)'
                            .'|payment/([^/]++)(*:15087)'
                            .'|update/([^/]++)(*:15112)'
                            .'|document/([^/]++)/([^/]++)(*:15148)'
                        .')'
                        .'|address/(?'
                            .'|([^/]++)(*:15178)'
                            .'|de(?'
                                .'|fault\\-([^/]++)/([^/]++)(*:15217)'
                                .'|lete/([^/]++)(*:15240)'
                            .')'
                            .'|create(*:15257)'
                            .'|([^/]++)(*:15275)'
                        .')'
                    .')'
                .')'
                .'|/store(?'
                    .'|\\-api/(?'
                        .'|script/(.+)(*:15317)'
                        .'|p(?'
                            .'|roduct(?'
                                .'|\\-(?'
                                    .'|export/([^/]++)/([^/]++)(*:15369)'
                                    .'|listing/([^/]++)(*:15395)'
                                .')'
                                .'|/([^/]++)(?'
                                    .'|/(?'
                                        .'|cross\\-selling(*:15436)'
                                        .'|review(?'
                                            .'|s(*:15456)'
                                            .'|(*:15466)'
                                        .')'
                                    .')'
                                    .'|(*:15478)'
                                .')'
                            .')'
                            .'|aypal/pui/payment\\-instructions/([^/]++)(*:15530)'
                        .')'
                        .'|navigation/([^/]++)/([^/]++)(*:15569)'
                        .'|landing\\-page/([^/]++)(*:15601)'
                        .'|c(?'
                            .'|ms/([^/]++)(*:15626)'
                            .'|ustomer(?'
                                .'|/wishlist/(?'
                                    .'|add/([^/]++)(*:15671)'
                                    .'|delete/([^/]++)(*:15696)'
                                .')'
                                .'|\\-group\\-registration/config/([^/]++)(*:15744)'
                            .')'
                            .'|ategory/([^/]++)(*:15771)'
                        .')'
                        .'|account/(?'
                            .'|change\\-payment\\-method/([^/]++)(*:15825)'
                            .'|address/(?'
                                .'|([^/]++)(*:15854)'
                                .'|default\\-(?'
                                    .'|shipping/([^/]++)(*:15893)'
                                    .'|billing/([^/]++)(*:15919)'
                                .')'
                                .'|([^/]++)(*:15938)'
                            .')'
                        .')'
                    .')'
                    .'|front/script/(.+)(*:15968)'
                .')'
                .'|/wi(?'
                    .'|dgets/(?'
                        .'|account/order/detail/([^/]++)(*:16023)'
                        .'|cms(?'
                            .'|(?:/([^/]++))?(*:16053)'
                            .'|/(?'
                                .'|navigation(?'
                                    .'|(?:/([^/]++))?(*:16094)'
                                    .'|/([^/]++)/filter(*:16120)'
                                .')'
                                .'|buybox/([^/]++)/switch(*:16153)'
                            .')'
                        .')'
                    .')'
                    .'|shlist/(?'
                        .'|product/delete/([^/]++)(*:16199)'
                        .'|add(?'
                            .'|/([^/]++)(*:16224)'
                            .'|\\-after\\-login/([^/]++)(*:16257)'
                        .')'
                        .'|remove/([^/]++)(*:16283)'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout/line\\-item/(?'
                        .'|delete/([^/]++)(*:16337)'
                        .'|change\\-quantity/([^/]++)(*:16372)'
                    .')'
                    .'|ustomer\\-group\\-registration/([^/]++)(*:16420)'
                .')'
                .'|/landingPage/([^/]++)(*:16452)'
                .'|/maintenance/singlepage/([^/]++)(*:16494)'
                .'|/navigation/([^/]++)(*:16524)'
                .'|/detail/([^/]++)(?'
                    .'|(*:16553)'
                    .'|/switch(*:16570)'
                .')'
                .'|/quickview/([^/]++)(*:16600)'
                .'|/product/([^/]++)/r(?'
                    .'|ating(*:16637)'
                    .'|eviews(*:16653)'
                .')'
            .')/?$}sDu',
        16653 => '{^(?'
                .'|/api/(?'
                    .'|search(?'
                        .'|/(?'
                            .'|d(?'
                                .'|e(?'
                                    .'|ad\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16753)'
                                    .'|livery\\-time(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16831)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16907)'
                                    .')'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:16982)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17065)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17144)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17215)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17291)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|event\\-action(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17374)'
                                .'|\\-(?'
                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17446)'
                                    .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17523)'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17595)'
                                .'|\\-sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17668)'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17758)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17824)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17897)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:17973)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18051)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18120)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18207)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18289)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18358)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18431)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18502)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18577)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18653)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18725)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18822)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18898)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:18973)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19046)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19123)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19192)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19268)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19347)'
                                .')'
                                .'|e(?'
                                    .'|dia(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19421)'
                                        .'|\\-(?'
                                            .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19504)'
                                            .'|folder(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19576)'
                                                .'|\\-configuration(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19657)'
                                                    .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19744)'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19815)'
                                                .'|humbnail(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19889)'
                                                    .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:19958)'
                                                .')'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20032)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ssage\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20117)'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20209)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20277)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20352)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20430)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20515)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20582)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20660)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20729)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20805)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20881)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:20956)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21027)'
                                    .'|delivery(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21101)'
                                        .'|\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21174)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|\\-ids/(?'
                            .'|d(?'
                                .'|e(?'
                                    .'|ad\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21269)'
                                    .'|livery\\-time(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21347)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21423)'
                                    .')'
                                .')'
                                .'|ocument(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21498)'
                                    .'|\\-(?'
                                        .'|base\\-config(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21581)'
                                            .'|\\-sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21660)'
                                        .')'
                                        .'|type(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21731)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21807)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|event\\-action(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21890)'
                                .'|\\-(?'
                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:21962)'
                                    .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22039)'
                                .')'
                            .')'
                            .'|flow(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22111)'
                                .'|\\-sequence((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22184)'
                            .')'
                            .'|i(?'
                                .'|mport\\-export\\-(?'
                                    .'|file((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22274)'
                                    .'|log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22340)'
                                    .'|profile(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22413)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22489)'
                                    .')'
                                .')'
                                .'|ntegration(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22567)'
                                    .'|\\-role((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22636)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|an(?'
                                    .'|ding\\-page(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22723)'
                                        .'|\\-(?'
                                            .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22805)'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22874)'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:22947)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|guage((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23018)'
                                .')'
                                .'|o(?'
                                    .'|cale(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23093)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23169)'
                                    .')'
                                    .'|g\\-entry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23241)'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ai(?'
                                    .'|l\\-(?'
                                        .'|header\\-footer(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23338)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23414)'
                                        .')'
                                        .'|template(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23489)'
                                            .'|\\-(?'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23562)'
                                                .'|t(?'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23639)'
                                                    .'|ype(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23708)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23784)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|n\\-category((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23863)'
                                .')'
                                .'|e(?'
                                    .'|dia(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:23937)'
                                        .'|\\-(?'
                                            .'|default\\-folder((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24020)'
                                            .'|folder(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24092)'
                                                .'|\\-configuration(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24173)'
                                                    .'|\\-media\\-thumbnail\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24260)'
                                                .')'
                                            .')'
                                            .'|t(?'
                                                .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24331)'
                                                .'|humbnail(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24405)'
                                                    .'|\\-size((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24474)'
                                                .')'
                                                .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24548)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ssage\\-queue\\-stats((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24633)'
                                .')'
                            .')'
                            .'|n(?'
                                .'|ewsletter\\-recipient(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24725)'
                                    .'|\\-tag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24793)'
                                .')'
                                .'|otification((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24868)'
                                .'|umber\\-range(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:24946)'
                                    .'|\\-(?'
                                        .'|s(?'
                                            .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25031)'
                                            .'|tate((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25098)'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25176)'
                                            .'|ype(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25245)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25321)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|order(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25397)'
                                .'|\\-(?'
                                    .'|address((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25472)'
                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25543)'
                                    .'|delivery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25614)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|d(?'
                        .'|e(?'
                            .'|ad\\-message((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:25700)'
                            .'|livery\\-time(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:25794)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:25861)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:25957)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:26024)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ocument(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:26117)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:26184)'
                            .')'
                            .'|\\-(?'
                                .'|base\\-config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:26284)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:26351)'
                                    .')'
                                    .'|\\-sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:26450)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:26517)'
                                        .')'
                                    .')'
                                .')'
                                .'|type(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:26606)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:26673)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:26769)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:26836)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|event\\-action(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:26937)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:27004)'
                        .')'
                        .'|\\-(?'
                            .'|rule(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:27096)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:27163)'
                                .')'
                            .')'
                            .'|sales\\-channel(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:27261)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:27328)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|flow(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:27418)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:27485)'
                        .')'
                        .'|\\-sequence(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:27578)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:27645)'
                            .')'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export\\-(?'
                            .'|file(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:27756)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:27823)'
                                .')'
                            .')'
                            .'|log(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:27910)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:27977)'
                                .')'
                            .')'
                            .'|profile(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:28068)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:28135)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:28231)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:28298)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ntegration(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:28394)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:28458)'
                            .'|\\-role(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:28546)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:28613)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|l(?'
                        .'|an(?'
                            .'|ding\\-page(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:28718)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:28785)'
                                .')'
                                .'|\\-(?'
                                    .'|sales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:28887)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:28954)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:29044)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:29111)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:29205)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:29272)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|guage(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:29364)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:29431)'
                                .')'
                            .')'
                        .')'
                        .'|o(?'
                            .'|cale(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:29524)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:29591)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:29687)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:29754)'
                                    .')'
                                .')'
                            .')'
                            .'|g\\-entry(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:29847)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:29914)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|m(?'
                        .'|ai(?'
                            .'|l\\-(?'
                                .'|header\\-footer(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:30029)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:30096)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:30192)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:30259)'
                                        .')'
                                    .')'
                                .')'
                                .'|template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:30352)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:30419)'
                                    .')'
                                    .'|\\-(?'
                                        .'|media(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:30512)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:30579)'
                                            .')'
                                        .')'
                                        .'|t(?'
                                            .'|ranslation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:30677)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:30744)'
                                                .')'
                                            .')'
                                            .'|ype(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:30831)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:30898)'
                                                .')'
                                                .'|\\-translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:30994)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:31061)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|n\\-category(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:31161)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:31228)'
                                .')'
                            .')'
                        .')'
                        .'|e(?'
                            .'|dia(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:31320)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:31387)'
                                .')'
                                .'|\\-(?'
                                    .'|default\\-folder(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:31490)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:31557)'
                                        .')'
                                    .')'
                                    .'|folder(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:31647)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:31714)'
                                        .')'
                                        .'|\\-configuration(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:31812)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:31879)'
                                            .')'
                                            .'|\\-media\\-thumbnail\\-size(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:31986)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:32053)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:32145)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:32212)'
                                            .')'
                                        .')'
                                        .'|humbnail(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:32304)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:32371)'
                                            .')'
                                            .'|\\-size(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:32460)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:32527)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:32622)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:32689)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|ssage\\-queue\\-stats(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:32795)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:32862)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|n(?'
                        .'|ewsletter\\-recipient(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:32972)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:33039)'
                            .')'
                            .'|\\-tag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:33127)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:33194)'
                                .')'
                            .')'
                        .')'
                        .'|otification(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:33290)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:33357)'
                            .')'
                        .')'
                        .'|umber\\-range(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:33453)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:33520)'
                            .')'
                            .'|\\-(?'
                                .'|s(?'
                                    .'|ales\\-channel(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:33625)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:33692)'
                                        .')'
                                    .')'
                                    .'|tate(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:33780)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:33847)'
                                        .')'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:33946)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:34013)'
                                        .')'
                                    .')'
                                    .'|ype(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:34100)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:34167)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:34263)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:34330)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|order(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:34424)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:34491)'
                        .')'
                        .'|\\-(?'
                            .'|address(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:34586)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:34653)'
                                .')'
                            .')'
                            .'|customer(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:34745)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:34812)'
                                .')'
                            .')'
                            .'|delivery(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:34904)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:34971)'
                                .')'
                                .'|\\-position(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:35064)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35128)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        35128 => '{^(?'
                .'|/api/(?'
                    .'|s(?'
                        .'|earch(?'
                            .'|\\-ids/(?'
                                .'|order\\-(?'
                                    .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35245)'
                                    .'|line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35318)'
                                    .'|t(?'
                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35387)'
                                        .'|ransaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35460)'
                                    .')'
                                .')'
                                .'|p(?'
                                    .'|ayment\\-method(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35546)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35622)'
                                    .')'
                                    .'|lugin(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35694)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35770)'
                                    .')'
                                    .'|ro(?'
                                        .'|duct(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35846)'
                                            .'|\\-(?'
                                                .'|c(?'
                                                    .'|ategory(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35928)'
                                                        .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:35997)'
                                                    .')'
                                                    .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36081)'
                                                    .'|ross\\-selling(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36160)'
                                                        .'|\\-(?'
                                                            .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36246)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36320)'
                                                        .')'
                                                    .')'
                                                    .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36402)'
                                                .')'
                                                .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36472)'
                                                .'|feature\\-set(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36550)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36626)'
                                                .')'
                                                .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36709)'
                                                .'|m(?'
                                                    .'|anufacturer(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36790)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36866)'
                                                    .')'
                                                    .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:36934)'
                                                .')'
                                                .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37004)'
                                                .'|pr(?'
                                                    .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37075)'
                                                    .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37144)'
                                                .')'
                                                .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37214)'
                                                .'|s(?'
                                                    .'|earch\\-(?'
                                                        .'|config(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37300)'
                                                            .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37370)'
                                                        .')'
                                                        .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37441)'
                                                    .')'
                                                    .'|orting(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37514)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37590)'
                                                    .')'
                                                    .'|tream(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37662)'
                                                        .'|\\-(?'
                                                            .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37736)'
                                                            .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37806)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37880)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:37952)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38025)'
                                                .')'
                                                .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38099)'
                                            .')'
                                        .')'
                                        .'|motion(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38173)'
                                            .'|\\-(?'
                                                .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38251)'
                                                .'|discount(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38325)'
                                                    .'|\\-(?'
                                                        .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38399)'
                                                        .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38466)'
                                                    .')'
                                                .')'
                                                .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38547)'
                                                .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38621)'
                                                .'|persona\\-(?'
                                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38704)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38771)'
                                                .')'
                                                .'|s(?'
                                                    .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38852)'
                                                    .'|etgroup(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38925)'
                                                        .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:38994)'
                                                    .')'
                                                .')'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39070)'
                                            .')'
                                        .')'
                                        .'|perty\\-group(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39150)'
                                            .'|\\-(?'
                                                .'|option(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39227)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39303)'
                                                .')'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39378)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|rule(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39452)'
                                    .'|\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39526)'
                                .')'
                            .')'
                            .'|/(?'
                                .'|order\\-(?'
                                    .'|line\\-item((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39615)'
                                    .'|t(?'
                                        .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39684)'
                                        .'|ransaction((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39757)'
                                    .')'
                                .')'
                                .'|p(?'
                                    .'|ayment\\-method(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39843)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39919)'
                                    .')'
                                    .'|lugin(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:39991)'
                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40067)'
                                    .')'
                                    .'|ro(?'
                                        .'|duct(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40143)'
                                            .'|\\-(?'
                                                .'|c(?'
                                                    .'|ategory(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40225)'
                                                        .'|\\-tree((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40294)'
                                                    .')'
                                                    .'|onfigurator\\-setting((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40378)'
                                                    .'|ross\\-selling(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40457)'
                                                        .'|\\-(?'
                                                            .'|assigned\\-products((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40543)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40617)'
                                                        .')'
                                                    .')'
                                                    .'|ustom\\-field\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40699)'
                                                .')'
                                                .'|export((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40769)'
                                                .'|feature\\-set(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40847)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:40923)'
                                                .')'
                                                .'|keyword\\-dictionary((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41006)'
                                                .'|m(?'
                                                    .'|anufacturer(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41087)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41163)'
                                                    .')'
                                                    .'|edia((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41231)'
                                                .')'
                                                .'|option((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41301)'
                                                .'|pr(?'
                                                    .'|ice((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41372)'
                                                    .'|operty((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41441)'
                                                .')'
                                                .'|review((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41511)'
                                                .'|s(?'
                                                    .'|earch\\-(?'
                                                        .'|config(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41597)'
                                                            .'|\\-field((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41667)'
                                                        .')'
                                                        .'|keyword((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41738)'
                                                    .')'
                                                    .'|orting(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41811)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41887)'
                                                    .')'
                                                    .'|tream(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:41959)'
                                                        .'|\\-(?'
                                                            .'|filter((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42033)'
                                                            .'|mapping((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42103)'
                                                            .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42177)'
                                                        .')'
                                                    .')'
                                                .')'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42249)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42322)'
                                                .')'
                                                .'|visibility((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42396)'
                                            .')'
                                        .')'
                                        .'|motion(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42470)'
                                            .'|\\-(?'
                                                .'|cart\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42548)'
                                                .'|discount(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42622)'
                                                    .'|\\-(?'
                                                        .'|prices((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42696)'
                                                        .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42763)'
                                                    .')'
                                                .')'
                                                .'|individual\\-code((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42844)'
                                                .'|order\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:42918)'
                                                .'|persona\\-(?'
                                                    .'|customer((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43001)'
                                                    .'|rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43068)'
                                                .')'
                                                .'|s(?'
                                                    .'|ales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43149)'
                                                    .'|etgroup(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43222)'
                                                        .'|\\-rule((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43291)'
                                                    .')'
                                                .')'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43367)'
                                            .')'
                                        .')'
                                        .'|perty\\-group(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43447)'
                                            .'|\\-(?'
                                                .'|option(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43524)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43600)'
                                                .')'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43675)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|rule(?'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43749)'
                                    .'|\\-condition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43823)'
                                .')'
                            .')'
                        .')'
                        .'|ales\\-channel(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:43921)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:43985)'
                        .')'
                    .')'
                    .'|order\\-(?'
                        .'|delivery\\-position((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:44078)'
                        .'|line\\-item(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44170)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:44237)'
                            .')'
                        .')'
                        .'|t(?'
                            .'|ag(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:44327)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:44394)'
                                .')'
                            .')'
                            .'|ransaction(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:44488)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:44555)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|p(?'
                        .'|ayment\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44659)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:44726)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:44822)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:44889)'
                                .')'
                            .')'
                        .')'
                        .'|lugin(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:44979)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:45046)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:45142)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:45209)'
                                .')'
                            .')'
                        .')'
                        .'|ro(?'
                            .'|duct(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:45303)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:45370)'
                                .')'
                                .'|\\-(?'
                                    .'|c(?'
                                        .'|ategory(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:45469)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:45536)'
                                            .')'
                                            .'|\\-tree(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:45625)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:45692)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|onfigurator\\-setting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:45797)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:45864)'
                                            .')'
                                        .')'
                                        .'|ross\\-selling(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:45961)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:46028)'
                                            .')'
                                            .'|\\-(?'
                                                .'|assigned\\-products(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:46134)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:46201)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:46296)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:46363)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ustom\\-field\\-set(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:46466)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:46533)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|export(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:46624)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:46691)'
                                        .')'
                                    .')'
                                    .'|feature\\-set(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:46787)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:46854)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:46950)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:47017)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|keyword\\-dictionary(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:47121)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:47188)'
                                        .')'
                                    .')'
                                    .'|m(?'
                                        .'|anufacturer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:47287)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:47354)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:47450)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:47517)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|edia(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:47606)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:47673)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|option(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:47764)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:47831)'
                                        .')'
                                    .')'
                                    .'|pr(?'
                                        .'|ice(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:47923)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:47990)'
                                            .')'
                                        .')'
                                        .'|operty(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:48080)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:48147)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|review(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:48238)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:48305)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|earch\\-(?'
                                            .'|config(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:48409)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:48476)'
                                                .')'
                                                .'|\\-field(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:48566)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:48633)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|keyword(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:48725)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:48792)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|orting(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:48883)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:48950)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:49046)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:49113)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|tream(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:49203)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:49270)'
                                            .')'
                                            .'|\\-(?'
                                                .'|filter(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:49364)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:49431)'
                                                    .')'
                                                .')'
                                                .'|mapping(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:49522)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:49589)'
                                                    .')'
                                                .')'
                                                .'|translation(?'
                                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                        .'|(*:49684)'
                                                    .')'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                        .'|(*:49751)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ag(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:49844)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:49911)'
                                            .')'
                                        .')'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:50005)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:50072)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|visibility(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:50167)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:50234)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|motion(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:50326)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:50393)'
                                .')'
                                .'|\\-(?'
                                    .'|cart\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:50491)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:50558)'
                                        .')'
                                    .')'
                                    .'|discount(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:50650)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:50717)'
                                        .')'
                                        .'|\\-(?'
                                            .'|prices(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:50811)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:50878)'
                                                .')'
                                            .')'
                                            .'|rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:50966)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:51033)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|individual\\-code(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:51135)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:51202)'
                                        .')'
                                    .')'
                                    .'|order\\-rule(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:51297)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:51364)'
                                        .')'
                                    .')'
                                    .'|persona\\-(?'
                                        .'|customer(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:51468)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:51535)'
                                            .')'
                                        .')'
                                        .'|rule(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:51623)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:51690)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|ales\\-channel(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:51792)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:51859)'
                                            .')'
                                        .')'
                                        .'|etgroup(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:51950)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:52017)'
                                            .')'
                                            .'|\\-rule(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:52106)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:52173)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:52270)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:52337)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|perty\\-group(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:52435)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:52502)'
                                .')'
                                .'|\\-(?'
                                    .'|option(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:52596)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:52663)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:52759)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:52826)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:52922)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:52989)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|rule(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:53081)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:53148)'
                        .')'
                        .'|\\-condition(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:53242)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:53309)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
        53309 => '{^(?'
                .'|/api/(?'
                    .'|s(?'
                        .'|e(?'
                            .'|arch(?'
                                .'|/(?'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53419)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53496)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53569)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53639)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53709)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53780)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53858)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:53937)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54014)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54083)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54159)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54236)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54312)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54394)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54461)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54535)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54608)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54690)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54763)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54832)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54905)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:54980)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55048)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55128)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55203)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55274)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55350)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55427)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55496)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag\\-paypal\\-pos\\-sales\\-channel(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55597)'
                                            .'|\\-(?'
                                                .'|inventory((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55674)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55742)'
                                                .'|product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55812)'
                                                .'|run(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55881)'
                                                    .'|\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:55949)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56028)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56101)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56168)'
                                                .'|\\-rule(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56240)'
                                                    .'|\\-type(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56312)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56388)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56462)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56535)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56603)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56680)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56754)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56830)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56906)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:56976)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57055)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57124)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57195)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57271)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57345)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57414)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57489)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57564)'
                                    .')'
                                .')'
                                .'|\\-ids/(?'
                                    .'|s(?'
                                        .'|al(?'
                                            .'|es\\-channel(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57661)'
                                                .'|\\-(?'
                                                    .'|analytics((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57738)'
                                                    .'|c(?'
                                                        .'|ountry((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57811)'
                                                        .'|urrency((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57881)'
                                                    .')'
                                                    .'|domain((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:57951)'
                                                    .'|language((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58022)'
                                                    .'|payment\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58100)'
                                                    .'|shipping\\-method((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58179)'
                                                    .'|t(?'
                                                        .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58256)'
                                                        .'|ype(?'
                                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58325)'
                                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58401)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|utation(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58478)'
                                                .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58554)'
                                            .')'
                                        .')'
                                        .'|c(?'
                                            .'|heduled\\-task((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58636)'
                                            .'|ript((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58703)'
                                        .')'
                                        .'|eo\\-url(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58777)'
                                            .'|\\-template((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58850)'
                                        .')'
                                        .'|hipping\\-method(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:58932)'
                                            .'|\\-(?'
                                                .'|price((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59005)'
                                                .'|t(?'
                                                    .'|ag((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59074)'
                                                    .'|ranslation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59147)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|nippet(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59222)'
                                            .'|\\-set((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59290)'
                                        .')'
                                        .'|tate\\-machine(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59370)'
                                            .'|\\-(?'
                                                .'|history((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59445)'
                                                .'|state(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59516)'
                                                    .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59592)'
                                                .')'
                                                .'|trans(?'
                                                    .'|ition((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59669)'
                                                    .'|lation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59738)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|wag\\-paypal\\-pos\\-sales\\-channel(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59839)'
                                            .'|\\-(?'
                                                .'|inventory((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59916)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:59984)'
                                                .'|product((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60054)'
                                                .'|run(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60123)'
                                                    .'|\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60191)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ystem\\-config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60270)'
                                    .')'
                                    .'|t(?'
                                        .'|a(?'
                                            .'|g((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60343)'
                                            .'|x(?'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60410)'
                                                .'|\\-rule(?'
                                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60482)'
                                                    .'|\\-type(?'
                                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60554)'
                                                        .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60630)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|heme(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60704)'
                                            .'|\\-(?'
                                                .'|child((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60777)'
                                                .'|media((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60845)'
                                                .'|sales\\-channel((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60922)'
                                                .'|translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:60996)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|u(?'
                                        .'|nit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61072)'
                                            .'|\\-translation((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61148)'
                                        .')'
                                        .'|ser(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61218)'
                                            .'|\\-(?'
                                                .'|access\\-key((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61297)'
                                                .'|config((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61366)'
                                                .'|recovery((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61437)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|version(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61513)'
                                        .'|\\-commit(?'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61587)'
                                            .'|\\-data((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61656)'
                                        .')'
                                    .')'
                                    .'|webhook(?'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61731)'
                                        .'|\\-event\\-log((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:61806)'
                                    .')'
                                .')'
                            .')'
                            .'|o\\-url(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:61897)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:61964)'
                                .')'
                                .'|\\-template(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:62057)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:62124)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|al(?'
                            .'|es\\-channel(?'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:62210)'
                                .'|\\-(?'
                                    .'|analytics(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:62306)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:62373)'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|ountry(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:62467)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:62534)'
                                            .')'
                                        .')'
                                        .'|urrency(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:62625)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:62692)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|domain(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:62783)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:62850)'
                                        .')'
                                    .')'
                                    .'|language(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:62942)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:63009)'
                                        .')'
                                    .')'
                                    .'|payment\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:63108)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:63175)'
                                        .')'
                                    .')'
                                    .'|shipping\\-method(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:63275)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:63342)'
                                        .')'
                                    .')'
                                    .'|t(?'
                                        .'|ranslation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63440)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63507)'
                                            .')'
                                        .')'
                                        .'|ype(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:63594)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:63661)'
                                            .')'
                                            .'|\\-translation(?'
                                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                    .'|(*:63757)'
                                                .')'
                                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                    .'|(*:63824)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|utation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:63919)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:63986)'
                                .')'
                                .'|\\-translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:64082)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:64149)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|heduled\\-task(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:64252)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:64319)'
                                .')'
                            .')'
                            .'|ript(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:64407)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:64474)'
                                .')'
                            .')'
                        .')'
                        .'|hipping\\-method(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:64574)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:64641)'
                            .')'
                            .'|\\-(?'
                                .'|price(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:64734)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:64801)'
                                    .')'
                                .')'
                                .'|t(?'
                                    .'|ag(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:64891)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:64958)'
                                        .')'
                                    .')'
                                    .'|ranslation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:65052)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:65119)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|nippet(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:65212)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:65279)'
                            .')'
                            .'|\\-set(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:65367)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:65434)'
                                .')'
                            .')'
                        .')'
                        .'|tate\\-machine(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:65532)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:65599)'
                            .')'
                            .'|\\-(?'
                                .'|history(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:65694)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:65761)'
                                    .')'
                                .')'
                                .'|state(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:65850)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:65917)'
                                    .')'
                                    .'|\\-translation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:66013)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:66080)'
                                        .')'
                                    .')'
                                .')'
                                .'|trans(?'
                                    .'|ition(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:66178)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:66245)'
                                        .')'
                                    .')'
                                    .'|lation(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:66335)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:66402)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|wag\\-paypal\\-pos\\-sales\\-channel(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:66521)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:66588)'
                            .')'
                            .'|\\-(?'
                                .'|inventory(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:66685)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:66752)'
                                    .')'
                                .')'
                                .'|media(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:66841)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:66908)'
                                    .')'
                                .')'
                                .'|product(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:66999)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:67066)'
                                    .')'
                                .')'
                                .'|run(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:67153)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:67220)'
                                    .')'
                                    .'|\\-log(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:67308)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:67375)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ystem\\-config(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:67475)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:67542)'
                            .')'
                        .')'
                    .')'
                    .'|t(?'
                        .'|a(?'
                            .'|g(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:67636)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:67703)'
                                .')'
                            .')'
                            .'|x(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:67788)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:67855)'
                                .')'
                                .'|\\-rule(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:67944)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:68011)'
                                    .')'
                                    .'|\\-type(?'
                                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                            .'|(*:68100)'
                                        .')'
                                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                            .'|(*:68167)'
                                        .')'
                                        .'|\\-translation(?'
                                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                                .'|(*:68263)'
                                            .')'
                                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                                .'|(*:68330)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|heme(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:68422)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:68489)'
                            .')'
                            .'|\\-(?'
                                .'|child(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:68582)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:68649)'
                                    .')'
                                .')'
                                .'|media(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:68738)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:68805)'
                                    .')'
                                .')'
                                .'|sales\\-channel(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:68903)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:68970)'
                                    .')'
                                .')'
                                .'|translation(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:69065)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:69132)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|u(?'
                        .'|nit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:69226)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:69293)'
                            .')'
                            .'|\\-translation(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:69389)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:69456)'
                                .')'
                            .')'
                        .')'
                        .'|ser(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(*:69541)'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(*:69604)'
                            .'|\\-(?'
                                .'|access\\-key(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:69702)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:69769)'
                                    .')'
                                .')'
                                .'|config(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:69859)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:69926)'
                                    .')'
                                .')'
                                .'|recovery(?'
                                    .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                        .'|(*:70018)'
                                    .')'
                                    .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                        .'|(*:70085)'
                                    .')'
                                .')'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:70110)'
                                .'|/ac(?'
                                    .'|cess\\-keys/([^/]++)(*:70145)'
                                    .'|l\\-roles/([^/]++)(*:70172)'
                                .')'
                                .'|(*:70183)'
                            .')'
                            .'|(*:70194)'
                        .')'
                    .')'
                    .'|version(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:70285)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:70352)'
                        .')'
                        .'|\\-commit(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:70443)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:70510)'
                            .')'
                            .'|\\-data(?'
                                .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                    .'|(*:70599)'
                                .')'
                                .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                    .'|(*:70666)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|webhook(?'
                        .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                            .'|(*:70759)'
                        .')'
                        .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                            .'|(*:70826)'
                        .')'
                        .'|\\-event\\-log(?'
                            .'|/([0-9a-f]{32}(?:\\/(?:extensions\\/)?[a-zA-Z-]+\\/[0-9a-f]{32})*\\/?)(?'
                                .'|(*:70921)'
                            .')'
                            .'|((?:\\/[0-9a-f]{32}\\/(?:extensions\\/)?[a-zA-Z-]+)*\\/?)(?'
                                .'|(*:70988)'
                            .')'
                        .')'
                    .')'
                    .'|acl\\-role(?'
                        .'|(*:71013)'
                        .'|/([^/]++)(?'
                            .'|(*:71035)'
                        .')'
                    .')'
                    .'|integration(?'
                        .'|(*:71061)'
                        .'|/([^/]++)(*:71080)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        71 => [[['_route' => 'api.clone', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::clone'], ['entity', 'id'], ['POST' => 0], null, false, true, null]],
        130 => [[['_route' => 'api.customer-group.accept', 'customerId' => null, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::accept'], ['customerId'], ['POST' => 0], null, false, true, null]],
        159 => [[['_route' => 'api.customer-group.decline', 'customerId' => null, '_controller' => 'Shopware\\Core\\Checkout\\Customer\\Api\\CustomerGroupRegistrationActionController::decline'], ['customerId'], ['POST' => 0], null, false, true, null]],
        207 => [[['_route' => 'api.createVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::createVersion'], ['entity', 'id'], ['POST' => 0], null, false, true, null]],
        248 => [[['_route' => 'api.mergeVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::mergeVersion'], ['entity', 'versionId'], ['POST' => 0], null, false, true, null]],
        286 => [[['_route' => 'api.deleteVersion', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::deleteVersion'], ['versionId', 'entity', 'entityId'], ['POST' => 0], null, false, true, null]],
        318 => [[['_route' => 'api.action.indexing.iterate', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IndexingController::iterate'], ['indexer'], ['POST' => 0], null, false, true, null]],
        345 => [
            [['_route' => 'api.increment.increment', '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::increment'], ['pool'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api.increment.list', '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::getIncrement'], ['pool'], ['GET' => 0], null, false, true, null],
        ],
        400 => [[['_route' => 'api.action.import_export.file.prepare-download', '_controller' => 'Shopware\\Core\\Content\\ImportExport\\Controller\\ImportExportActionController::prepareDownload'], ['fileId'], ['POST' => 0], null, false, true, null]],
        445 => [[['_route' => 'api.extension.download', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::downloadExtension'], ['technicalName'], ['POST' => 0], null, false, true, null]],
        480 => [[['_route' => 'api.extension.deactivate', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::deactivateExtension'], ['type', 'technicalName'], ['PUT' => 0], null, false, true, null]],
        514 => [[['_route' => 'api.extension.install', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::installExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        552 => [[['_route' => 'api.extension.uninstall', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::uninstallExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        583 => [[['_route' => 'api.extension.update', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::updateExtension'], ['type', 'technicalName'], ['POST' => 0], null, false, true, null]],
        616 => [[['_route' => 'api.extension.remove', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::removeExtension'], ['type', 'technicalName'], ['DELETE' => 0], null, false, true, null]],
        650 => [[['_route' => 'api.extension.activate', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreActionsController::activateExtension'], ['type', 'technicalName'], ['PUT' => 0], null, false, true, null]],
        685 => [[['_route' => 'api.extension.detail', '_controller' => 'SwagExtensionStore\\Controller\\DataController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        709 => [[['_route' => 'api.extension.reviews', '_controller' => 'SwagExtensionStore\\Controller\\DataController::reviews'], ['id'], ['GET' => 0], null, false, false, null]],
        741 => [[['_route' => 'api.custom.updateapi.finish', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Framework\\Update\\Api\\UpdateController::finish'], ['token'], ['GET' => 0], null, false, true, null]],
        770 => [[['_route' => 'api.increment.decrement', '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::decrement'], ['pool'], ['POST' => 0], null, false, true, null]],
        806 => [[['_route' => 'api.action.download.document', '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        820 => [[['_route' => 'api.action.document.upload', '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::uploadToDocument'], ['documentId'], ['POST' => 0], null, false, false, null]],
        855 => [[['_route' => 'api.increment.reset', '_controller' => 'Shopware\\Core\\Framework\\Increment\\Controller\\IncrementApiController::reset'], ['pool'], ['POST' => 0], null, false, true, null]],
        910 => [[['_route' => 'api.action.number-range.reserve', 'saleschannel' => null, '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::reserve'], ['type', 'saleschannel'], ['GET' => 0], null, false, true, null]],
        948 => [[['_route' => 'api.action.number-range.preview-pattern', 'type' => 'default', '_controller' => 'Shopware\\Core\\System\\NumberRange\\Api\\NumberRangeController::previewPattern'], ['type'], ['GET' => 0], null, false, true, null]],
        1001 => [[['_route' => 'api.state_machine.states', '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::getAvailableTransitions'], ['entityName', 'entityId'], ['GET' => 0], null, false, false, null]],
        1019 => [[['_route' => 'api.state_machine.transition_state', '_controller' => 'Shopware\\Core\\System\\StateMachine\\Api\\StateMachineActionController::transitionState'], ['entityName', 'entityId', 'transition'], ['POST' => 0], null, false, true, null]],
        1063 => [[['_route' => 'api.seo-url-template.default', '_controller' => 'Shopware\\Core\\Content\\Seo\\Api\\SeoActionController::getDefaultSeoTemplate'], ['routeName'], ['GET' => 0], null, false, true, null]],
        1108 => [[['_route' => 'api.action.product.combinations', '_controller' => 'Shopware\\Core\\Content\\Product\\Api\\ProductActionController::getCombinations'], ['productId'], ['GET' => 0], null, false, false, null]],
        1152 => [
            [['_route' => 'api.action.promotion.codes', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::getIndividualCodes'], ['promotionId'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api.action.promotion.codes.remove', '_controller' => 'Shopware\\Core\\Checkout\\Promotion\\Api\\PromotionActionController::deleteIndividualCodes'], ['promotionId'], ['DELETE' => 0], null, false, false, null],
        ],
        1213 => [[['_route' => 'api.action.paypal.pos.sync.products', '_controller' => 'Swag\\PayPal\\Pos\\PosSyncController::syncProducts'], ['salesChannelId'], ['POST' => 0], null, false, false, null]],
        1231 => [[['_route' => 'api.action.paypal.pos.sync.images', '_controller' => 'Swag\\PayPal\\Pos\\PosSyncController::syncImages'], ['salesChannelId'], ['POST' => 0], null, false, false, null]],
        1248 => [[['_route' => 'api.action.paypal.pos.sync.inventory', '_controller' => 'Swag\\PayPal\\Pos\\PosSyncController::syncInventory'], ['salesChannelId'], ['POST' => 0], null, false, false, null]],
        1259 => [[['_route' => 'api.action.paypal.pos.sync', '_controller' => 'Swag\\PayPal\\Pos\\PosSyncController::syncAll'], ['salesChannelId'], ['POST' => 0], null, false, true, null]],
        1283 => [[['_route' => 'api.action.paypal.pos.sync.abort', '_controller' => 'Swag\\PayPal\\Pos\\PosSyncController::abortSync'], ['runId'], ['POST' => 0], null, false, true, null]],
        1306 => [[['_route' => 'api.action.paypal.pos.sync.reset', '_controller' => 'Swag\\PayPal\\Pos\\PosSyncController::resetSync'], ['salesChannelId'], ['POST' => 0], null, false, true, null]],
        1336 => [[['_route' => 'api.action.paypal.pos.log.cleanup', '_controller' => 'Swag\\PayPal\\Pos\\PosSyncController::cleanUpLog'], ['salesChannelId'], ['POST' => 0], null, false, true, null]],
        1380 => [
            [['_route' => 'api.action.paypal.pos.webhook.registration.register', '_controller' => 'Swag\\PayPal\\Pos\\Webhook\\WebhookController::registerWebhook'], ['salesChannelId'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api.action.paypal.pos.webhook.registration.unregister', '_controller' => 'Swag\\PayPal\\Pos\\Webhook\\WebhookController::unregisterWebhook'], ['salesChannelId'], ['DELETE' => 0], null, false, true, null],
        ],
        1406 => [[['_route' => 'api.action.paypal.pos.webhook.execute', 'auth_required' => false, '_controller' => 'Swag\\PayPal\\Pos\\Webhook\\WebhookController::executeWebhook'], ['salesChannelId'], ['POST' => 0], null, false, true, null]],
        1459 => [[['_route' => 'api.action.paypal.refund_payment', '_controller' => 'Swag\\PayPal\\PaymentsApi\\Administration\\PayPalPaymentController::refundPayment'], ['resourceType', 'resourceId', 'orderId'], ['POST' => 0], null, false, true, null]],
        1511 => [[['_route' => 'api.action.paypal.catpure_payment', '_controller' => 'Swag\\PayPal\\PaymentsApi\\Administration\\PayPalPaymentController::capturePayment'], ['resourceType', 'resourceId', 'orderId'], ['POST' => 0], null, false, true, null]],
        1560 => [[['_route' => 'api.action.paypal.void_payment', '_controller' => 'Swag\\PayPal\\PaymentsApi\\Administration\\PayPalPaymentController::voidPayment'], ['resourceType', 'resourceId', 'orderId'], ['POST' => 0], null, false, true, null]],
        1597 => [[['_route' => 'api.action.paypal.webhook.register', '_controller' => 'Swag\\PayPal\\Webhook\\WebhookController::registerWebhook'], ['salesChannelId'], ['POST' => 0], null, false, true, null]],
        1625 => [[['_route' => 'api.action.paypal.webhook.deregister', '_controller' => 'Swag\\PayPal\\Webhook\\WebhookController::deregisterWebhook'], ['salesChannelId'], ['DELETE' => 0], null, false, true, null]],
        1686 => [[['_route' => 'api.action.paypal_v2.refund_capture', '_controller' => 'Swag\\PayPal\\OrdersApi\\Administration\\PayPalOrdersController::refundCapture'], ['orderTransactionId', 'captureId', 'paypalOrderId'], ['POST' => 0], null, false, true, null]],
        1735 => [[['_route' => 'api.action.paypal_v2.capture_authorization', '_controller' => 'Swag\\PayPal\\OrdersApi\\Administration\\PayPalOrdersController::captureAuthorization'], ['orderTransactionId', 'authorizationId'], ['POST' => 0], null, false, true, null]],
        1781 => [[['_route' => 'api.action.paypal_v2.void_authorization', '_controller' => 'Swag\\PayPal\\OrdersApi\\Administration\\PayPalOrdersController::voidAuthorization'], ['orderTransactionId', 'authorizationId'], ['POST' => 0], null, false, true, null]],
        1827 => [[['_route' => 'api.action.media-folder.dissolve', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaFolderController::dissolve'], ['folderId'], ['POST' => 0], null, false, false, null]],
        1855 => [[['_route' => 'api.action.media.upload', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::upload'], ['mediaId'], ['POST' => 0], null, false, false, null]],
        1870 => [[['_route' => 'api.action.media.rename', '_controller' => 'Shopware\\Core\\Content\\Media\\Api\\MediaUploadController::renameMediaFile'], ['mediaId'], ['POST' => 0], null, false, false, null]],
        1922 => [[['_route' => 'api.action.order.convert-to-cart', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderConverterController::convertToCart'], ['orderId'], ['POST' => 0], null, true, false, null]],
        1940 => [[['_route' => 'api.action.order.add-credit-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCreditItemToOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1961 => [[['_route' => 'api.action.order.recalculate', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::recalculateOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        1989 => [[['_route' => 'api.action.order.add-product', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addProductToOrder'], ['orderId', 'productId'], ['POST' => 0], null, false, true, null]],
        2010 => [[['_route' => 'api.action.order.add-promotion-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addPromotionItemToOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        2028 => [[['_route' => 'api.action.order.add-line-item', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::addCustomLineItemToOrder'], ['orderId'], ['POST' => 0], null, false, false, null]],
        2062 => [[['_route' => 'api.action.order.toggle-automatic-promotions', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::toggleAutomaticPromotions'], ['orderId'], ['POST' => 0], null, false, false, null]],
        2105 => [[['_route' => 'api.action.document.preview', '_controller' => 'Shopware\\Core\\Checkout\\Document\\Controller\\DocumentController::previewDocument'], ['orderId', 'deepLinkCode', 'documentTypeName'], ['GET' => 0], null, false, false, null]],
        2131 => [[['_route' => 'api.action.document.invoice', '_controller' => 'Shopware\\Core\\Checkout\\Document\\DocumentGeneratorController::createDocument'], ['orderId', 'documentTypeName'], ['POST' => 0], null, false, true, null]],
        2154 => [[['_route' => 'api.action.order.state_machine.order.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderStateTransition'], ['orderId', 'transition'], ['POST' => 0], null, false, true, null]],
        2209 => [[['_route' => 'api.action.order.replace-order-address', '_controller' => 'Shopware\\Core\\Checkout\\Cart\\Order\\Api\\OrderRecalculationController::replaceOrderAddressWithCustomerAddress'], ['orderAddressId', 'customerAddressId'], ['POST' => 0], null, false, true, null]],
        2257 => [[['_route' => 'api.action.order.state_machine.order_transaction.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderTransactionStateTransition'], ['orderTransactionId', 'transition'], ['POST' => 0], null, false, true, null]],
        2298 => [[['_route' => 'api.action.order.state_machine.order_delivery.transition_state', '_controller' => 'Shopware\\Core\\Checkout\\Order\\Api\\OrderActionController::orderDeliveryStateTransition'], ['orderDeliveryId', 'transition'], ['POST' => 0], null, false, true, null]],
        2343 => [[['_route' => 'api.action.theme.configuration', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::configuration'], ['themeId'], ['GET' => 0], null, false, false, null]],
        2367 => [[['_route' => 'api.action.theme.assign', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::assignTheme'], ['themeId', 'salesChannelId'], ['POST' => 0], null, false, true, null]],
        2381 => [[['_route' => 'api.action.theme.reset', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::resetTheme'], ['themeId'], ['PATCH' => 0], null, false, false, null]],
        2408 => [[['_route' => 'api.action.theme.structuredFields', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::structuredFields'], ['themeId'], ['GET' => 0], null, false, false, null]],
        2418 => [[['_route' => 'api.action.theme.update', '_controller' => 'Shopware\\Storefront\\Theme\\Controller\\ThemeController::updateTheme'], ['themeId'], ['PATCH' => 0], null, false, true, null]],
        2467 => [[['_route' => 'api.admin.product-stream-preview', '_controller' => 'Shopware\\Administration\\Controller\\AdminProductStreamController::productStreamPreview'], ['salesChannelId'], ['POST' => 0], null, false, true, null]],
        2510 => [[['_route' => 'api.proxy.store-api', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxy'], ['salesChannelId', '_path'], null, null, false, true, null]],
        2535 => [[['_route' => 'api.proxy-order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\SalesChannelProxyController::proxyCreateOrder'], ['salesChannelId'], null, null, false, true, null]],
        2572 => [[['_route' => 'api.license.cancel', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreLicensesController::cancelSubscription'], ['licenseId'], ['DELETE' => 0], null, false, true, null]],
        2594 => [[['_route' => 'api.license.rate', '_controller' => 'Shopware\\Core\\Framework\\Store\\Api\\ExtensionStoreLicensesController::rateLicensedExtension'], ['extensionId'], ['POST' => 0], null, false, true, null]],
        2657 => [[['_route' => 'api.app_system.action_buttons', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::getActionsPerView'], ['entity', 'view'], ['GET' => 0], null, false, true, null]],
        2678 => [[['_route' => 'api.app_system.action_button.run', '_controller' => 'Shopware\\Core\\Framework\\App\\Api\\AppActionController::runAction'], ['id'], ['POST' => 0], null, false, true, null]],
        2757 => [
            [['_route' => 'api.app.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2823 => [
            [['_route' => 'api.app.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        2924 => [
            [['_route' => 'api.app_action_button.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-action-button'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-action-button'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-action-button'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        2990 => [
            [['_route' => 'api.app_action_button.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-action-button'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-action-button'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3085 => [
            [['_route' => 'api.app_action_button_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-action-button-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-action-button-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-action-button-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3151 => [
            [['_route' => 'api.app_action_button_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-action-button-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_action_button_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-action-button-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3245 => [
            [['_route' => 'api.app_cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-cms-block'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-cms-block'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-cms-block'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3311 => [
            [['_route' => 'api.app_cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-cms-block'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-cms-block'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3406 => [
            [['_route' => 'api.app_cms_block_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-cms-block-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-cms-block-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-cms-block-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3472 => [
            [['_route' => 'api.app_cms_block_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-cms-block-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_cms_block_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-cms-block-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3571 => [
            [['_route' => 'api.app_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-payment-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-payment-method'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-payment-method'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3637 => [
            [['_route' => 'api.app_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-payment-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-payment-method'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3731 => [
            [['_route' => 'api.app_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-template'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-template'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-template'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3797 => [
            [['_route' => 'api.app_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-template'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-template'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        3890 => [
            [['_route' => 'api.app_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'app-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'app-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'app-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        3956 => [
            [['_route' => 'api.app_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'app-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.app_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'app-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4050 => [[['_route' => 'api.acl_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-role'], ['path'], ['GET' => 0], null, false, true, null]],
        4112 => [[['_route' => 'api.acl_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-role'], ['path'], ['GET' => 0], null, false, true, null]],
        4204 => [
            [['_route' => 'api.acl_user_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'acl-user-role'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'acl-user-role'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'acl-user-role'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        4270 => [
            [['_route' => 'api.acl_user_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'acl-user-role'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.acl_user_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'acl-user-role'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        4297 => [[['_route' => 'api.script_endpoint', '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptApiRoute::execute'], ['hook'], ['POST' => 0], null, false, true, null]],
        4386 => [[['_route' => 'api.acl_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-role'], ['path'], ['POST' => 0], null, false, true, null]],
        4458 => [[['_route' => 'api.acl_user_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'acl-user-role'], ['path'], ['POST' => 0], null, false, true, null]],
        4526 => [[['_route' => 'api.app.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app'], ['path'], ['POST' => 0], null, false, true, null]],
        4610 => [[['_route' => 'api.app_action_button.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button'], ['path'], ['POST' => 0], null, false, true, null]],
        4685 => [[['_route' => 'api.app_action_button_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-action-button-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        4761 => [[['_route' => 'api.app_cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block'], ['path'], ['POST' => 0], null, false, true, null]],
        4836 => [[['_route' => 'api.app_cms_block_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-cms-block-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        4914 => [[['_route' => 'api.app_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-payment-method'], ['path'], ['POST' => 0], null, false, true, null]],
        4987 => [[['_route' => 'api.app_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-template'], ['path'], ['POST' => 0], null, false, true, null]],
        5059 => [[['_route' => 'api.app_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'app-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        5139 => [[['_route' => 'api.category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category'], ['path'], ['POST' => 0], null, false, true, null]],
        5209 => [[['_route' => 'api.category_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        5281 => [[['_route' => 'api.category_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'category-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        5357 => [[['_route' => 'api.cms_block.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-block'], ['path'], ['POST' => 0], null, false, true, null]],
        5426 => [[['_route' => 'api.cms_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page'], ['path'], ['POST' => 0], null, false, true, null]],
        5501 => [[['_route' => 'api.cms_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-page-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        5574 => [[['_route' => 'api.cms_section.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-section'], ['path'], ['POST' => 0], null, false, true, null]],
        5642 => [[['_route' => 'api.cms_slot.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot'], ['path'], ['POST' => 0], null, false, true, null]],
        5717 => [[['_route' => 'api.cms_slot_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'cms-slot-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        5791 => [[['_route' => 'api.country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country'], ['path'], ['POST' => 0], null, false, true, null]],
        5866 => [[['_route' => 'api.country_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state'], ['path'], ['POST' => 0], null, false, true, null]],
        5941 => [[['_route' => 'api.country_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-state-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        6015 => [[['_route' => 'api.country_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'country-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        6092 => [[['_route' => 'api.currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency'], ['path'], ['POST' => 0], null, false, true, null]],
        6176 => [[['_route' => 'api.currency_country_rounding.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-country-rounding'], ['path'], ['POST' => 0], null, false, true, null]],
        6249 => [[['_route' => 'api.currency_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'currency-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        6330 => [[['_route' => 'api.custom_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field'], ['path'], ['POST' => 0], null, false, true, null]],
        6400 => [[['_route' => 'api.custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set'], ['path'], ['POST' => 0], null, false, true, null]],
        6472 => [[['_route' => 'api.custom_field_set_relation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'custom-field-set-relation'], ['path'], ['POST' => 0], null, false, true, null]],
        6541 => [[['_route' => 'api.customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer'], ['path'], ['POST' => 0], null, false, true, null]],
        6615 => [[['_route' => 'api.customer_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-address'], ['path'], ['POST' => 0], null, false, true, null]],
        6685 => [[['_route' => 'api.customer_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group'], ['path'], ['POST' => 0], null, false, true, null]],
        6781 => [[['_route' => 'api.customer_group_registration_sales_channels.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-registration-sales-channels'], ['path'], ['POST' => 0], null, false, true, null]],
        6854 => [[['_route' => 'api.customer_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-group-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        6926 => [[['_route' => 'api.customer_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-recovery'], ['path'], ['POST' => 0], null, false, true, null]],
        6991 => [[['_route' => 'api.customer_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        7064 => [[['_route' => 'api.customer_wishlist.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist'], ['path'], ['POST' => 0], null, false, true, null]],
        7135 => [[['_route' => 'api.customer_wishlist_product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'customer-wishlist-product'], ['path'], ['POST' => 0], null, false, true, null]],
        7228 => [[['_route' => 'api.acl_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-role'], ['path'], ['POST' => 0], null, false, true, null]],
        7300 => [[['_route' => 'api.acl_user_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'acl-user-role'], ['path'], ['POST' => 0], null, false, true, null]],
        7368 => [[['_route' => 'api.app.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app'], ['path'], ['POST' => 0], null, false, true, null]],
        7452 => [[['_route' => 'api.app_action_button.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button'], ['path'], ['POST' => 0], null, false, true, null]],
        7527 => [[['_route' => 'api.app_action_button_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-action-button-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        7603 => [[['_route' => 'api.app_cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block'], ['path'], ['POST' => 0], null, false, true, null]],
        7678 => [[['_route' => 'api.app_cms_block_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-cms-block-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        7756 => [[['_route' => 'api.app_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-payment-method'], ['path'], ['POST' => 0], null, false, true, null]],
        7829 => [[['_route' => 'api.app_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-template'], ['path'], ['POST' => 0], null, false, true, null]],
        7901 => [[['_route' => 'api.app_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'app-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        7981 => [[['_route' => 'api.category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category'], ['path'], ['POST' => 0], null, false, true, null]],
        8051 => [[['_route' => 'api.category_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        8123 => [[['_route' => 'api.category_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'category-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        8199 => [[['_route' => 'api.cms_block.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-block'], ['path'], ['POST' => 0], null, false, true, null]],
        8268 => [[['_route' => 'api.cms_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page'], ['path'], ['POST' => 0], null, false, true, null]],
        8343 => [[['_route' => 'api.cms_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-page-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        8416 => [[['_route' => 'api.cms_section.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-section'], ['path'], ['POST' => 0], null, false, true, null]],
        8484 => [[['_route' => 'api.cms_slot.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot'], ['path'], ['POST' => 0], null, false, true, null]],
        8559 => [[['_route' => 'api.cms_slot_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'cms-slot-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        8633 => [[['_route' => 'api.country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country'], ['path'], ['POST' => 0], null, false, true, null]],
        8708 => [[['_route' => 'api.country_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state'], ['path'], ['POST' => 0], null, false, true, null]],
        8783 => [[['_route' => 'api.country_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-state-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        8857 => [[['_route' => 'api.country_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'country-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        8934 => [[['_route' => 'api.currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency'], ['path'], ['POST' => 0], null, false, true, null]],
        9018 => [[['_route' => 'api.currency_country_rounding.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-country-rounding'], ['path'], ['POST' => 0], null, false, true, null]],
        9091 => [[['_route' => 'api.currency_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'currency-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        9172 => [[['_route' => 'api.custom_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field'], ['path'], ['POST' => 0], null, false, true, null]],
        9242 => [[['_route' => 'api.custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set'], ['path'], ['POST' => 0], null, false, true, null]],
        9314 => [[['_route' => 'api.custom_field_set_relation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'custom-field-set-relation'], ['path'], ['POST' => 0], null, false, true, null]],
        9383 => [[['_route' => 'api.customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer'], ['path'], ['POST' => 0], null, false, true, null]],
        9457 => [[['_route' => 'api.customer_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-address'], ['path'], ['POST' => 0], null, false, true, null]],
        9527 => [[['_route' => 'api.customer_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group'], ['path'], ['POST' => 0], null, false, true, null]],
        9623 => [[['_route' => 'api.customer_group_registration_sales_channels.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-registration-sales-channels'], ['path'], ['POST' => 0], null, false, true, null]],
        9696 => [[['_route' => 'api.customer_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-group-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        9768 => [[['_route' => 'api.customer_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-recovery'], ['path'], ['POST' => 0], null, false, true, null]],
        9833 => [[['_route' => 'api.customer_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        9906 => [[['_route' => 'api.customer_wishlist.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist'], ['path'], ['POST' => 0], null, false, true, null]],
        9977 => [[['_route' => 'api.customer_wishlist_product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'customer-wishlist-product'], ['path'], ['POST' => 0], null, false, true, null]],
        10024 => [[['_route' => 'api.paypal.dispute_details', '_controller' => 'Swag\\PayPal\\Dispute\\Administration\\DisputeController::disputeDetails'], ['disputeId'], ['GET' => 0], null, false, true, null]],
        10062 => [[['_route' => 'api.paypal.pos.product-log', '_controller' => 'Swag\\PayPal\\Pos\\PosSyncController::getProductLog'], ['salesChannelId'], ['GET' => 0], null, false, true, null]],
        10105 => [[['_route' => 'api.paypal.payment_details', '_controller' => 'Swag\\PayPal\\PaymentsApi\\Administration\\PayPalPaymentController::paymentDetails'], ['orderId', 'paymentId'], ['GET' => 0], null, false, true, null]],
        10160 => [[['_route' => 'api.paypal.resource_details', '_controller' => 'Swag\\PayPal\\PaymentsApi\\Administration\\PayPalPaymentController::resourceDetails'], ['resourceType', 'resourceId', 'orderId'], ['GET' => 0], null, false, true, null]],
        10202 => [[['_route' => 'api.paypal_v2.order_details', '_controller' => 'Swag\\PayPal\\OrdersApi\\Administration\\PayPalOrdersController::orderDetails'], ['orderTransactionId', 'paypalOrderId'], ['GET' => 0], null, false, true, null]],
        10243 => [[['_route' => 'api.paypal_v2.authorization_details', '_controller' => 'Swag\\PayPal\\OrdersApi\\Administration\\PayPalOrdersController::authorizationDetails'], ['orderTransactionId', 'authorizationId'], ['GET' => 0], null, false, true, null]],
        10278 => [[['_route' => 'api.paypal_v2.capture_details', '_controller' => 'Swag\\PayPal\\OrdersApi\\Administration\\PayPalOrdersController::captureDetails'], ['orderTransactionId', 'captureId'], ['GET' => 0], null, false, true, null]],
        10312 => [[['_route' => 'api.paypal_v2.refund_details', '_controller' => 'Swag\\PayPal\\OrdersApi\\Administration\\PayPalOrdersController::refundDetails'], ['orderTransactionId', 'refundId'], ['GET' => 0], null, false, true, null]],
        10407 => [
            [['_route' => 'api.category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        10474 => [
            [['_route' => 'api.category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        10565 => [
            [['_route' => 'api.category_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-tag'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-tag'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        10632 => [
            [['_route' => 'api.category_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-tag'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        10726 => [
            [['_route' => 'api.category_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'category-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'category-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'category-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        10793 => [
            [['_route' => 'api.category_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'category-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.category_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'category-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        10891 => [
            [['_route' => 'api.cms_block.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-block'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-block'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-block'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        10958 => [
            [['_route' => 'api.cms_block.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-block'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_block.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-block'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        11046 => [
            [['_route' => 'api.cms_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        11113 => [
            [['_route' => 'api.cms_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        11209 => [
            [['_route' => 'api.cms_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-page-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-page-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-page-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        11276 => [
            [['_route' => 'api.cms_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-page-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-page-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        11371 => [
            [['_route' => 'api.cms_section.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-section'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-section'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-section'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        11438 => [
            [['_route' => 'api.cms_section.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-section'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_section.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-section'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        11525 => [
            [['_route' => 'api.cms_slot.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        11592 => [
            [['_route' => 'api.cms_slot.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        11688 => [
            [['_route' => 'api.cms_slot_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'cms-slot-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'cms-slot-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'cms-slot-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        11755 => [
            [['_route' => 'api.cms_slot_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'cms-slot-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.cms_slot_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'cms-slot-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        11848 => [
            [['_route' => 'api.country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        11915 => [
            [['_route' => 'api.country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12008 => [
            [['_route' => 'api.country_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12075 => [
            [['_route' => 'api.country_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12171 => [
            [['_route' => 'api.country_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-state-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-state-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-state-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12238 => [
            [['_route' => 'api.country_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-state-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-state-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12334 => [
            [['_route' => 'api.country_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'country-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'country-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'country-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12401 => [
            [['_route' => 'api.country_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'country-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.country_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'country-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12497 => [
            [['_route' => 'api.currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12564 => [
            [['_route' => 'api.currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12669 => [
            [['_route' => 'api.currency_country_rounding.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-country-rounding'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-country-rounding'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-country-rounding'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12736 => [
            [['_route' => 'api.currency_country_rounding.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-country-rounding'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_country_rounding.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-country-rounding'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12831 => [
            [['_route' => 'api.currency_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'currency-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'currency-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'currency-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        12898 => [
            [['_route' => 'api.currency_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'currency-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.currency_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'currency-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        12998 => [
            [['_route' => 'api.custom_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13065 => [
            [['_route' => 'api.custom_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13153 => [
            [['_route' => 'api.custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13220 => [
            [['_route' => 'api.custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13313 => [
            [['_route' => 'api.custom_field_set_relation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'custom-field-set-relation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'custom-field-set-relation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'custom-field-set-relation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13380 => [
            [['_route' => 'api.custom_field_set_relation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'custom-field-set-relation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.custom_field_set_relation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'custom-field-set-relation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13468 => [
            [['_route' => 'api.customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13535 => [
            [['_route' => 'api.customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13630 => [
            [['_route' => 'api.customer_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-address'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-address'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-address'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13697 => [
            [['_route' => 'api.customer_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-address'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-address'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13786 => [
            [['_route' => 'api.customer_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        13853 => [
            [['_route' => 'api.customer_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        13970 => [
            [['_route' => 'api.customer_group_registration_sales_channels.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-registration-sales-channels'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-registration-sales-channels'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-registration-sales-channels'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14037 => [
            [['_route' => 'api.customer_group_registration_sales_channels.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-registration-sales-channels'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_registration_sales_channels.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-registration-sales-channels'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14132 => [
            [['_route' => 'api.customer_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-group-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-group-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-group-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14199 => [
            [['_route' => 'api.customer_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-group-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-group-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14293 => [
            [['_route' => 'api.customer_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-recovery'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-recovery'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-recovery'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14360 => [
            [['_route' => 'api.customer_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-recovery'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-recovery'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14447 => [
            [['_route' => 'api.customer_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-tag'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-tag'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14514 => [
            [['_route' => 'api.customer_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-tag'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14606 => [
            [['_route' => 'api.customer_wishlist.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14673 => [
            [['_route' => 'api.customer_wishlist.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14765 => [
            [['_route' => 'api.customer_wishlist_product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'customer-wishlist-product'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'customer-wishlist-product'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'customer-wishlist-product'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14832 => [
            [['_route' => 'api.customer_wishlist_product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'customer-wishlist-product'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.customer_wishlist_product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'customer-wishlist-product'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        14935 => [
            [['_route' => 'api.dead_message.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'dead-message'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'dead-message'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.dead_message.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'dead-message'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        14999 => [[['_route' => 'api.dead_message.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'dead-message'], ['path'], ['GET' => 0], null, false, true, null]],
        15038 => [[['_route' => 'frontend.account.order.single.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderSingleOverview'], ['deepLinkCode'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        15061 => [[['_route' => 'frontend.account.edit-order.page', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::editOrder'], ['orderId'], ['GET' => 0], null, false, true, null]],
        15087 => [[['_route' => 'frontend.account.edit-order.change-payment-method', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::orderChangePayment'], ['orderId'], ['POST' => 0], null, false, true, null]],
        15112 => [[['_route' => 'frontend.account.edit-order.update-order', '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::updateOrder'], ['orderId'], ['POST' => 0], null, false, true, null]],
        15148 => [[['_route' => 'frontend.account.order.single.document', '_controller' => 'Shopware\\Storefront\\Controller\\DocumentController::downloadDocument'], ['documentId', 'deepLinkCode'], ['GET' => 0], null, false, true, null]],
        15178 => [[['_route' => 'frontend.account.address.edit.page', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::accountEditAddress'], ['addressId'], ['GET' => 0], null, false, true, null]],
        15217 => [[['_route' => 'frontend.account.address.set-default-address', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::switchDefaultAddress'], ['type', 'addressId'], ['POST' => 0], null, false, true, null]],
        15240 => [[['_route' => 'frontend.account.address.delete', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::deleteAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        15257 => [[['_route' => 'frontend.account.address.create', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], [], ['POST' => 0], null, false, false, null]],
        15275 => [[['_route' => 'frontend.account.address.edit.save', '_controller' => 'Shopware\\Storefront\\Controller\\AddressController::saveAddress'], ['addressId'], ['POST' => 0], null, false, true, null]],
        15317 => [[['_route' => 'store-api.script_endpoint', '_controller' => 'Shopware\\Core\\Framework\\Script\\Api\\ScriptStoreApiRoute::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        15369 => [[['_route' => 'store-api.product.export', 'auth_required' => false, '_controller' => 'Shopware\\Core\\Content\\ProductExport\\SalesChannel\\ExportController::index'], ['accessKey', 'fileName'], ['GET' => 0], null, false, true, null]],
        15395 => [[['_route' => 'store-api.product.listing', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Listing\\ResolveCriteriaProductListingRoute::load'], ['categoryId'], ['POST' => 0], null, false, true, null]],
        15436 => [[['_route' => 'store-api.product.cross-selling', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\CrossSelling\\ProductCrossSellingRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        15456 => [[['_route' => 'store-api.product-review.list', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewRoute::load'], ['productId'], ['POST' => 0], null, false, false, null]],
        15466 => [[['_route' => 'store-api.product-review.save', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Review\\ProductReviewSaveRoute::save'], ['productId'], ['POST' => 0], null, false, false, null]],
        15478 => [[['_route' => 'store-api.product.detail', '_controller' => 'Shopware\\Core\\Content\\Product\\SalesChannel\\Detail\\ProductDetailRoute::load'], ['productId'], ['POST' => 0], null, false, true, null]],
        15530 => [[['_route' => 'store-api.paypal.pui.payment_instructions', '_controller' => 'Swag\\PayPal\\Checkout\\PUI\\SalesChannel\\PUIPaymentInstructionsRoute::getPaymentInstructions'], ['transactionId'], ['GET' => 0], null, false, true, null]],
        15569 => [[['_route' => 'store-api.navigation', '_controller' => 'Shopware\\Core\\Content\\Category\\SalesChannel\\TreeBuildingNavigationRoute::load'], ['activeId', 'rootId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        15601 => [[['_route' => 'store-api.landing-page.detail', '_controller' => 'Shopware\\Core\\Content\\LandingPage\\SalesChannel\\LandingPageRoute::load'], ['landingPageId'], ['POST' => 0], null, false, true, null]],
        15626 => [[['_route' => 'store-api.cms.detail', '_controller' => 'Shopware\\Core\\Content\\Cms\\SalesChannel\\CmsRoute::load'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        15671 => [[['_route' => 'store-api.customer.wishlist.add', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\AddWishlistProductRoute::add'], ['productId'], ['POST' => 0], null, false, true, null]],
        15696 => [[['_route' => 'store-api.customer.wishlist.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\RemoveWishlistProductRoute::delete'], ['productId'], ['DELETE' => 0], null, false, true, null]],
        15744 => [[['_route' => 'store-api.customer-group-registration.config', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\CustomerGroupRegistrationSettingsRoute::load'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        15771 => [[['_route' => 'store-api.category.detail', '_controller' => 'Swag\\PayPal\\Checkout\\ExpressCheckout\\SalesChannel\\ExpressCategoryRoute::load'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        15825 => [[['_route' => 'store-api.account.set.payment-method', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\ChangePaymentMethodRoute::change'], ['paymentMethodId'], ['POST' => 0], null, false, true, null]],
        15854 => [[['_route' => 'store-api.account.address.delete', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\DeleteAddressRoute::delete'], ['addressId'], ['DELETE' => 0], null, false, true, null]],
        15893 => [[['_route' => 'store-api.account.address.change.default.shipping', 'type' => 'shipping', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        15919 => [[['_route' => 'store-api.account.address.change.default.billing', 'type' => 'billing', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\SwitchDefaultAddressRoute::swap'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        15938 => [[['_route' => 'store-api.account.address.update', '_controller' => 'Shopware\\Core\\Checkout\\Customer\\SalesChannel\\UpsertAddressRoute::upsert'], ['addressId'], ['PATCH' => 0], null, false, true, null]],
        15968 => [[['_route' => 'frontend.script_endpoint', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ScriptController::execute'], ['hook'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16023 => [[['_route' => 'widgets.account.order.detail', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\AccountOrderController::ajaxOrderDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        16053 => [[['_route' => 'frontend.cms.page', 'id' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::page'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16094 => [[['_route' => 'frontend.cms.navigation.page', 'navigationId' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::category'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        16120 => [[['_route' => 'frontend.cms.navigation.filter', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::filter'], ['navigationId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        16153 => [[['_route' => 'frontend.cms.buybox.switch', 'productId' => null, 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CmsController::switchBuyBoxVariant'], ['productId'], ['GET' => 0], null, false, false, null]],
        16199 => [[['_route' => 'frontend.wishlist.product.delete', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::remove'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        16224 => [[['_route' => 'frontend.wishlist.product.add', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxAdd'], ['productId'], ['POST' => 0], null, false, true, null]],
        16257 => [[['_route' => 'frontend.wishlist.add.after.login', '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::addAfterLogin'], ['productId'], ['GET' => 0], null, false, true, null]],
        16283 => [[['_route' => 'frontend.wishlist.product.remove', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\WishlistController::ajaxRemove'], ['productId'], ['POST' => 0], null, false, true, null]],
        16337 => [[['_route' => 'frontend.checkout.line-item.delete', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::deleteLineItem'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        16372 => [[['_route' => 'frontend.checkout.line-item.change-quantity', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\CartLineItemController::changeQuantity'], ['id'], ['POST' => 0], null, false, true, null]],
        16420 => [[['_route' => 'frontend.account.customer-group-registration.page', '_controller' => 'Shopware\\Storefront\\Controller\\RegisterController::customerGroupRegistration'], ['customerGroupId'], ['GET' => 0], null, false, true, null]],
        16452 => [[['_route' => 'frontend.landing.page', '_controller' => 'Shopware\\Storefront\\Controller\\LandingPageController::index'], ['landingPageId'], ['GET' => 0], null, false, true, null]],
        16494 => [[['_route' => 'frontend.maintenance.singlepage', 'allow_maintenance' => true, '_controller' => 'Shopware\\Storefront\\Controller\\MaintenanceController::renderSinglePage'], ['id'], ['GET' => 0], null, false, true, null]],
        16524 => [[['_route' => 'frontend.navigation.page', '_controller' => 'Shopware\\Storefront\\Controller\\NavigationController::index'], ['navigationId'], ['GET' => 0], null, false, true, null]],
        16553 => [[['_route' => 'frontend.detail.page', '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::index'], ['productId'], ['GET' => 0], null, false, true, null]],
        16570 => [[['_route' => 'frontend.detail.switch', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::switch'], ['productId'], ['GET' => 0], null, false, false, null]],
        16600 => [[['_route' => 'widgets.quickview.minimal', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::quickviewMinimal'], ['productId'], ['GET' => 0], null, false, true, null]],
        16637 => [[['_route' => 'frontend.detail.review.save', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::saveReview'], ['productId'], ['POST' => 0], null, false, false, null]],
        16653 => [[['_route' => 'frontend.product.reviews', 'XmlHttpRequest' => true, '_controller' => 'Shopware\\Storefront\\Controller\\ProductController::loadReviews'], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        16753 => [[['_route' => 'api.dead_message.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'dead-message'], ['path'], ['POST' => 0], null, false, true, null]],
        16831 => [[['_route' => 'api.delivery_time.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time'], ['path'], ['POST' => 0], null, false, true, null]],
        16907 => [[['_route' => 'api.delivery_time_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'delivery-time-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        16982 => [[['_route' => 'api.document.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document'], ['path'], ['POST' => 0], null, false, true, null]],
        17065 => [[['_route' => 'api.document_base_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config'], ['path'], ['POST' => 0], null, false, true, null]],
        17144 => [[['_route' => 'api.document_base_config_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-base-config-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        17215 => [[['_route' => 'api.document_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type'], ['path'], ['POST' => 0], null, false, true, null]],
        17291 => [[['_route' => 'api.document_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'document-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        17374 => [[['_route' => 'api.event_action.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action'], ['path'], ['POST' => 0], null, false, true, null]],
        17446 => [[['_route' => 'api.event_action_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        17523 => [[['_route' => 'api.event_action_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'event-action-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        17595 => [[['_route' => 'api.flow.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow'], ['path'], ['POST' => 0], null, false, true, null]],
        17668 => [[['_route' => 'api.flow_sequence.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'flow-sequence'], ['path'], ['POST' => 0], null, false, true, null]],
        17758 => [[['_route' => 'api.import_export_file.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-file'], ['path'], ['POST' => 0], null, false, true, null]],
        17824 => [[['_route' => 'api.import_export_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-log'], ['path'], ['POST' => 0], null, false, true, null]],
        17897 => [[['_route' => 'api.import_export_profile.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile'], ['path'], ['POST' => 0], null, false, true, null]],
        17973 => [[['_route' => 'api.import_export_profile_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'import-export-profile-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        18051 => [[['_route' => 'api.integration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration'], ['path'], ['POST' => 0], null, false, true, null]],
        18120 => [[['_route' => 'api.integration_role.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'integration-role'], ['path'], ['POST' => 0], null, false, true, null]],
        18207 => [[['_route' => 'api.landing_page.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page'], ['path'], ['POST' => 0], null, false, true, null]],
        18289 => [[['_route' => 'api.landing_page_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        18358 => [[['_route' => 'api.landing_page_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        18431 => [[['_route' => 'api.landing_page_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'landing-page-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        18502 => [[['_route' => 'api.language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'language'], ['path'], ['POST' => 0], null, false, true, null]],
        18577 => [[['_route' => 'api.locale.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale'], ['path'], ['POST' => 0], null, false, true, null]],
        18653 => [[['_route' => 'api.locale_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'locale-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        18725 => [[['_route' => 'api.log_entry.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'log-entry'], ['path'], ['POST' => 0], null, false, true, null]],
        18822 => [[['_route' => 'api.mail_header_footer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer'], ['path'], ['POST' => 0], null, false, true, null]],
        18898 => [[['_route' => 'api.mail_header_footer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-header-footer-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        18973 => [[['_route' => 'api.mail_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template'], ['path'], ['POST' => 0], null, false, true, null]],
        19046 => [[['_route' => 'api.mail_template_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-media'], ['path'], ['POST' => 0], null, false, true, null]],
        19123 => [[['_route' => 'api.mail_template_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        19192 => [[['_route' => 'api.mail_template_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type'], ['path'], ['POST' => 0], null, false, true, null]],
        19268 => [[['_route' => 'api.mail_template_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'mail-template-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        19347 => [[['_route' => 'api.main_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'main-category'], ['path'], ['POST' => 0], null, false, true, null]],
        19421 => [[['_route' => 'api.media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media'], ['path'], ['POST' => 0], null, false, true, null]],
        19504 => [[['_route' => 'api.media_default_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-default-folder'], ['path'], ['POST' => 0], null, false, true, null]],
        19576 => [[['_route' => 'api.media_folder.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder'], ['path'], ['POST' => 0], null, false, true, null]],
        19657 => [[['_route' => 'api.media_folder_configuration.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration'], ['path'], ['POST' => 0], null, false, true, null]],
        19744 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['path'], ['POST' => 0], null, false, true, null]],
        19815 => [[['_route' => 'api.media_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        19889 => [[['_route' => 'api.media_thumbnail.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail'], ['path'], ['POST' => 0], null, false, true, null]],
        19958 => [[['_route' => 'api.media_thumbnail_size.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-thumbnail-size'], ['path'], ['POST' => 0], null, false, true, null]],
        20032 => [[['_route' => 'api.media_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'media-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        20117 => [[['_route' => 'api.message_queue_stats.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'message-queue-stats'], ['path'], ['POST' => 0], null, false, true, null]],
        20209 => [[['_route' => 'api.newsletter_recipient.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient'], ['path'], ['POST' => 0], null, false, true, null]],
        20277 => [[['_route' => 'api.newsletter_recipient_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'newsletter-recipient-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        20352 => [[['_route' => 'api.notification.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'notification'], ['path'], ['POST' => 0], null, false, true, null]],
        20430 => [[['_route' => 'api.number_range.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range'], ['path'], ['POST' => 0], null, false, true, null]],
        20515 => [[['_route' => 'api.number_range_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        20582 => [[['_route' => 'api.number_range_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-state'], ['path'], ['POST' => 0], null, false, true, null]],
        20660 => [[['_route' => 'api.number_range_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        20729 => [[['_route' => 'api.number_range_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type'], ['path'], ['POST' => 0], null, false, true, null]],
        20805 => [[['_route' => 'api.number_range_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'number-range-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        20881 => [[['_route' => 'api.order.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order'], ['path'], ['POST' => 0], null, false, true, null]],
        20956 => [[['_route' => 'api.order_address.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-address'], ['path'], ['POST' => 0], null, false, true, null]],
        21027 => [[['_route' => 'api.order_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-customer'], ['path'], ['POST' => 0], null, false, true, null]],
        21101 => [[['_route' => 'api.order_delivery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery'], ['path'], ['POST' => 0], null, false, true, null]],
        21174 => [[['_route' => 'api.order_delivery_position.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-delivery-position'], ['path'], ['POST' => 0], null, false, true, null]],
        21269 => [[['_route' => 'api.dead_message.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'dead-message'], ['path'], ['POST' => 0], null, false, true, null]],
        21347 => [[['_route' => 'api.delivery_time.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time'], ['path'], ['POST' => 0], null, false, true, null]],
        21423 => [[['_route' => 'api.delivery_time_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'delivery-time-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        21498 => [[['_route' => 'api.document.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document'], ['path'], ['POST' => 0], null, false, true, null]],
        21581 => [[['_route' => 'api.document_base_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config'], ['path'], ['POST' => 0], null, false, true, null]],
        21660 => [[['_route' => 'api.document_base_config_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-base-config-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        21731 => [[['_route' => 'api.document_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type'], ['path'], ['POST' => 0], null, false, true, null]],
        21807 => [[['_route' => 'api.document_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'document-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        21890 => [[['_route' => 'api.event_action.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action'], ['path'], ['POST' => 0], null, false, true, null]],
        21962 => [[['_route' => 'api.event_action_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        22039 => [[['_route' => 'api.event_action_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'event-action-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        22111 => [[['_route' => 'api.flow.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow'], ['path'], ['POST' => 0], null, false, true, null]],
        22184 => [[['_route' => 'api.flow_sequence.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'flow-sequence'], ['path'], ['POST' => 0], null, false, true, null]],
        22274 => [[['_route' => 'api.import_export_file.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-file'], ['path'], ['POST' => 0], null, false, true, null]],
        22340 => [[['_route' => 'api.import_export_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-log'], ['path'], ['POST' => 0], null, false, true, null]],
        22413 => [[['_route' => 'api.import_export_profile.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile'], ['path'], ['POST' => 0], null, false, true, null]],
        22489 => [[['_route' => 'api.import_export_profile_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'import-export-profile-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        22567 => [[['_route' => 'api.integration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration'], ['path'], ['POST' => 0], null, false, true, null]],
        22636 => [[['_route' => 'api.integration_role.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'integration-role'], ['path'], ['POST' => 0], null, false, true, null]],
        22723 => [[['_route' => 'api.landing_page.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page'], ['path'], ['POST' => 0], null, false, true, null]],
        22805 => [[['_route' => 'api.landing_page_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        22874 => [[['_route' => 'api.landing_page_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        22947 => [[['_route' => 'api.landing_page_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'landing-page-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        23018 => [[['_route' => 'api.language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'language'], ['path'], ['POST' => 0], null, false, true, null]],
        23093 => [[['_route' => 'api.locale.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale'], ['path'], ['POST' => 0], null, false, true, null]],
        23169 => [[['_route' => 'api.locale_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'locale-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        23241 => [[['_route' => 'api.log_entry.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'log-entry'], ['path'], ['POST' => 0], null, false, true, null]],
        23338 => [[['_route' => 'api.mail_header_footer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer'], ['path'], ['POST' => 0], null, false, true, null]],
        23414 => [[['_route' => 'api.mail_header_footer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-header-footer-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        23489 => [[['_route' => 'api.mail_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template'], ['path'], ['POST' => 0], null, false, true, null]],
        23562 => [[['_route' => 'api.mail_template_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-media'], ['path'], ['POST' => 0], null, false, true, null]],
        23639 => [[['_route' => 'api.mail_template_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        23708 => [[['_route' => 'api.mail_template_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type'], ['path'], ['POST' => 0], null, false, true, null]],
        23784 => [[['_route' => 'api.mail_template_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'mail-template-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        23863 => [[['_route' => 'api.main_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'main-category'], ['path'], ['POST' => 0], null, false, true, null]],
        23937 => [[['_route' => 'api.media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media'], ['path'], ['POST' => 0], null, false, true, null]],
        24020 => [[['_route' => 'api.media_default_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-default-folder'], ['path'], ['POST' => 0], null, false, true, null]],
        24092 => [[['_route' => 'api.media_folder.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder'], ['path'], ['POST' => 0], null, false, true, null]],
        24173 => [[['_route' => 'api.media_folder_configuration.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration'], ['path'], ['POST' => 0], null, false, true, null]],
        24260 => [[['_route' => 'api.media_folder_configuration_media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['path'], ['POST' => 0], null, false, true, null]],
        24331 => [[['_route' => 'api.media_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        24405 => [[['_route' => 'api.media_thumbnail.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail'], ['path'], ['POST' => 0], null, false, true, null]],
        24474 => [[['_route' => 'api.media_thumbnail_size.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-thumbnail-size'], ['path'], ['POST' => 0], null, false, true, null]],
        24548 => [[['_route' => 'api.media_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'media-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        24633 => [[['_route' => 'api.message_queue_stats.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'message-queue-stats'], ['path'], ['POST' => 0], null, false, true, null]],
        24725 => [[['_route' => 'api.newsletter_recipient.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient'], ['path'], ['POST' => 0], null, false, true, null]],
        24793 => [[['_route' => 'api.newsletter_recipient_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'newsletter-recipient-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        24868 => [[['_route' => 'api.notification.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'notification'], ['path'], ['POST' => 0], null, false, true, null]],
        24946 => [[['_route' => 'api.number_range.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range'], ['path'], ['POST' => 0], null, false, true, null]],
        25031 => [[['_route' => 'api.number_range_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        25098 => [[['_route' => 'api.number_range_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-state'], ['path'], ['POST' => 0], null, false, true, null]],
        25176 => [[['_route' => 'api.number_range_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        25245 => [[['_route' => 'api.number_range_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type'], ['path'], ['POST' => 0], null, false, true, null]],
        25321 => [[['_route' => 'api.number_range_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'number-range-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        25397 => [[['_route' => 'api.order.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order'], ['path'], ['POST' => 0], null, false, true, null]],
        25472 => [[['_route' => 'api.order_address.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-address'], ['path'], ['POST' => 0], null, false, true, null]],
        25543 => [[['_route' => 'api.order_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-customer'], ['path'], ['POST' => 0], null, false, true, null]],
        25614 => [[['_route' => 'api.order_delivery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery'], ['path'], ['POST' => 0], null, false, true, null]],
        25700 => [[['_route' => 'api.dead_message.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'dead-message'], ['path'], ['POST' => 0], null, false, true, null]],
        25794 => [
            [['_route' => 'api.delivery_time.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        25861 => [
            [['_route' => 'api.delivery_time.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        25957 => [
            [['_route' => 'api.delivery_time_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'delivery-time-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'delivery-time-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'delivery-time-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        26024 => [
            [['_route' => 'api.delivery_time_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'delivery-time-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.delivery_time_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'delivery-time-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        26117 => [
            [['_route' => 'api.document.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        26184 => [
            [['_route' => 'api.document.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        26284 => [
            [['_route' => 'api.document_base_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        26351 => [
            [['_route' => 'api.document_base_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        26450 => [
            [['_route' => 'api.document_base_config_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-base-config-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-base-config-sales-channel'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-base-config-sales-channel'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        26517 => [
            [['_route' => 'api.document_base_config_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-base-config-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_base_config_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-base-config-sales-channel'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        26606 => [
            [['_route' => 'api.document_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        26673 => [
            [['_route' => 'api.document_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        26769 => [
            [['_route' => 'api.document_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'document-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'document-type-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'document-type-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        26836 => [
            [['_route' => 'api.document_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'document-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.document_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'document-type-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        26937 => [
            [['_route' => 'api.event_action.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27004 => [
            [['_route' => 'api.event_action.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        27096 => [
            [['_route' => 'api.event_action_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action-rule'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action-rule'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27163 => [
            [['_route' => 'api.event_action_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action-rule'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        27261 => [
            [['_route' => 'api.event_action_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'event-action-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'event-action-sales-channel'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.event_action_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'event-action-sales-channel'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27328 => [
            [['_route' => 'api.event_action_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'event-action-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.event_action_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'event-action-sales-channel'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        27418 => [
            [['_route' => 'api.flow.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27485 => [
            [['_route' => 'api.flow.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        27578 => [
            [['_route' => 'api.flow_sequence.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'flow-sequence'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'flow-sequence'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'flow-sequence'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27645 => [
            [['_route' => 'api.flow_sequence.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'flow-sequence'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.flow_sequence.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'flow-sequence'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        27756 => [
            [['_route' => 'api.import_export_file.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-file'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-file'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-file'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27823 => [
            [['_route' => 'api.import_export_file.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-file'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_file.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-file'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        27910 => [
            [['_route' => 'api.import_export_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-log'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-log'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-log'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        27977 => [
            [['_route' => 'api.import_export_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-log'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-log'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28068 => [
            [['_route' => 'api.import_export_profile.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28135 => [
            [['_route' => 'api.import_export_profile.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28231 => [
            [['_route' => 'api.import_export_profile_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'import-export-profile-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'import-export-profile-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'import-export-profile-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28298 => [
            [['_route' => 'api.import_export_profile_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'import-export-profile-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.import_export_profile_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'import-export-profile-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28394 => [
            [['_route' => 'api.integration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28458 => [[['_route' => 'api.integration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration'], ['path'], ['GET' => 0], null, false, true, null]],
        28546 => [
            [['_route' => 'api.integration_role.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'integration-role'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'integration-role'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'integration-role'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28613 => [
            [['_route' => 'api.integration_role.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'integration-role'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.integration_role.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'integration-role'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28718 => [
            [['_route' => 'api.landing_page.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28785 => [
            [['_route' => 'api.landing_page.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        28887 => [
            [['_route' => 'api.landing_page_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-sales-channel'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-sales-channel'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        28954 => [
            [['_route' => 'api.landing_page_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-sales-channel'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29044 => [
            [['_route' => 'api.landing_page_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-tag'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-tag'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29111 => [
            [['_route' => 'api.landing_page_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-tag'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29205 => [
            [['_route' => 'api.landing_page_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'landing-page-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'landing-page-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'landing-page-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29272 => [
            [['_route' => 'api.landing_page_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'landing-page-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.landing_page_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'landing-page-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29364 => [
            [['_route' => 'api.language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'language'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'language'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'language'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29431 => [
            [['_route' => 'api.language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'language'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'language'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29524 => [
            [['_route' => 'api.locale.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29591 => [
            [['_route' => 'api.locale.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29687 => [
            [['_route' => 'api.locale_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'locale-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'locale-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'locale-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29754 => [
            [['_route' => 'api.locale_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'locale-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.locale_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'locale-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        29847 => [
            [['_route' => 'api.log_entry.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'log-entry'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'log-entry'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'log-entry'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        29914 => [
            [['_route' => 'api.log_entry.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'log-entry'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.log_entry.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'log-entry'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30029 => [
            [['_route' => 'api.mail_header_footer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30096 => [
            [['_route' => 'api.mail_header_footer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30192 => [
            [['_route' => 'api.mail_header_footer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-header-footer-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-header-footer-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-header-footer-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30259 => [
            [['_route' => 'api.mail_header_footer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-header-footer-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_header_footer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-header-footer-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30352 => [
            [['_route' => 'api.mail_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30419 => [
            [['_route' => 'api.mail_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30512 => [
            [['_route' => 'api.mail_template_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-media'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-media'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30579 => [
            [['_route' => 'api.mail_template_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-media'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30677 => [
            [['_route' => 'api.mail_template_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30744 => [
            [['_route' => 'api.mail_template_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30831 => [
            [['_route' => 'api.mail_template_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        30898 => [
            [['_route' => 'api.mail_template_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        30994 => [
            [['_route' => 'api.mail_template_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'mail-template-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'mail-template-type-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'mail-template-type-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31061 => [
            [['_route' => 'api.mail_template_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'mail-template-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.mail_template_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'mail-template-type-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31161 => [
            [['_route' => 'api.main_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'main-category'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'main-category'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.main_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'main-category'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31228 => [
            [['_route' => 'api.main_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'main-category'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.main_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'main-category'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31320 => [
            [['_route' => 'api.media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31387 => [
            [['_route' => 'api.media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31490 => [
            [['_route' => 'api.media_default_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-default-folder'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-default-folder'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-default-folder'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31557 => [
            [['_route' => 'api.media_default_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-default-folder'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_default_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-default-folder'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31647 => [
            [['_route' => 'api.media_folder.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31714 => [
            [['_route' => 'api.media_folder.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31812 => [
            [['_route' => 'api.media_folder_configuration.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        31879 => [
            [['_route' => 'api.media_folder_configuration.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        31986 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32053 => [
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_folder_configuration_media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-folder-configuration-media-thumbnail-size'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32145 => [
            [['_route' => 'api.media_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-tag'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-tag'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32212 => [
            [['_route' => 'api.media_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-tag'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32304 => [
            [['_route' => 'api.media_thumbnail.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32371 => [
            [['_route' => 'api.media_thumbnail.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32460 => [
            [['_route' => 'api.media_thumbnail_size.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-thumbnail-size'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-thumbnail-size'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-thumbnail-size'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32527 => [
            [['_route' => 'api.media_thumbnail_size.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-thumbnail-size'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_thumbnail_size.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-thumbnail-size'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32622 => [
            [['_route' => 'api.media_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'media-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'media-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'media-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32689 => [
            [['_route' => 'api.media_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'media-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.media_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'media-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32795 => [
            [['_route' => 'api.message_queue_stats.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'message-queue-stats'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'message-queue-stats'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'message-queue-stats'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        32862 => [
            [['_route' => 'api.message_queue_stats.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'message-queue-stats'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.message_queue_stats.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'message-queue-stats'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        32972 => [
            [['_route' => 'api.newsletter_recipient.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33039 => [
            [['_route' => 'api.newsletter_recipient.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33127 => [
            [['_route' => 'api.newsletter_recipient_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'newsletter-recipient-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'newsletter-recipient-tag'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'newsletter-recipient-tag'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33194 => [
            [['_route' => 'api.newsletter_recipient_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'newsletter-recipient-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.newsletter_recipient_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'newsletter-recipient-tag'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33290 => [
            [['_route' => 'api.notification.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'notification'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'notification'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.notification.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'notification'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33357 => [
            [['_route' => 'api.notification.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'notification'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.notification.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'notification'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33453 => [
            [['_route' => 'api.number_range.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33520 => [
            [['_route' => 'api.number_range.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33625 => [
            [['_route' => 'api.number_range_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-sales-channel'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-sales-channel'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33692 => [
            [['_route' => 'api.number_range_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-sales-channel'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33780 => [
            [['_route' => 'api.number_range_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-state'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-state'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-state'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        33847 => [
            [['_route' => 'api.number_range_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-state'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-state'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        33946 => [
            [['_route' => 'api.number_range_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34013 => [
            [['_route' => 'api.number_range_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34100 => [
            [['_route' => 'api.number_range_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34167 => [
            [['_route' => 'api.number_range_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34263 => [
            [['_route' => 'api.number_range_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'number-range-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'number-range-type-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'number-range-type-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34330 => [
            [['_route' => 'api.number_range_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'number-range-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.number_range_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'number-range-type-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34424 => [
            [['_route' => 'api.order.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34491 => [
            [['_route' => 'api.order.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34586 => [
            [['_route' => 'api.order_address.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-address'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-address'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_address.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-address'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34653 => [
            [['_route' => 'api.order_address.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-address'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_address.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-address'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34745 => [
            [['_route' => 'api.order_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-customer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-customer'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-customer'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34812 => [
            [['_route' => 'api.order_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-customer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-customer'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        34904 => [
            [['_route' => 'api.order_delivery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        34971 => [
            [['_route' => 'api.order_delivery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        35064 => [
            [['_route' => 'api.order_delivery_position.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-delivery-position'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-delivery-position'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_delivery_position.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-delivery-position'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        35128 => [[['_route' => 'api.order_delivery_position.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-delivery-position'], ['path'], ['GET' => 0], null, false, true, null]],
        35245 => [[['_route' => 'api.order_delivery_position.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-delivery-position'], ['path'], ['POST' => 0], null, false, true, null]],
        35318 => [[['_route' => 'api.order_line_item.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-line-item'], ['path'], ['POST' => 0], null, false, true, null]],
        35387 => [[['_route' => 'api.order_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        35460 => [[['_route' => 'api.order_transaction.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'order-transaction'], ['path'], ['POST' => 0], null, false, true, null]],
        35546 => [[['_route' => 'api.payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method'], ['path'], ['POST' => 0], null, false, true, null]],
        35622 => [[['_route' => 'api.payment_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'payment-method-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        35694 => [[['_route' => 'api.plugin.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin'], ['path'], ['POST' => 0], null, false, true, null]],
        35770 => [[['_route' => 'api.plugin_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'plugin-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        35846 => [[['_route' => 'api.product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product'], ['path'], ['POST' => 0], null, false, true, null]],
        35928 => [[['_route' => 'api.product_category.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category'], ['path'], ['POST' => 0], null, false, true, null]],
        35997 => [[['_route' => 'api.product_category_tree.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-category-tree'], ['path'], ['POST' => 0], null, false, true, null]],
        36081 => [[['_route' => 'api.product_configurator_setting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-configurator-setting'], ['path'], ['POST' => 0], null, false, true, null]],
        36160 => [[['_route' => 'api.product_cross_selling.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling'], ['path'], ['POST' => 0], null, false, true, null]],
        36246 => [[['_route' => 'api.product_cross_selling_assigned_products.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-assigned-products'], ['path'], ['POST' => 0], null, false, true, null]],
        36320 => [[['_route' => 'api.product_cross_selling_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-cross-selling-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        36402 => [[['_route' => 'api.product_custom_field_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-custom-field-set'], ['path'], ['POST' => 0], null, false, true, null]],
        36472 => [[['_route' => 'api.product_export.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-export'], ['path'], ['POST' => 0], null, false, true, null]],
        36550 => [[['_route' => 'api.product_feature_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set'], ['path'], ['POST' => 0], null, false, true, null]],
        36626 => [[['_route' => 'api.product_feature_set_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-feature-set-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        36709 => [[['_route' => 'api.product_keyword_dictionary.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-keyword-dictionary'], ['path'], ['POST' => 0], null, false, true, null]],
        36790 => [[['_route' => 'api.product_manufacturer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer'], ['path'], ['POST' => 0], null, false, true, null]],
        36866 => [[['_route' => 'api.product_manufacturer_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-manufacturer-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        36934 => [[['_route' => 'api.product_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-media'], ['path'], ['POST' => 0], null, false, true, null]],
        37004 => [[['_route' => 'api.product_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-option'], ['path'], ['POST' => 0], null, false, true, null]],
        37075 => [[['_route' => 'api.product_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-price'], ['path'], ['POST' => 0], null, false, true, null]],
        37144 => [[['_route' => 'api.product_property.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-property'], ['path'], ['POST' => 0], null, false, true, null]],
        37214 => [[['_route' => 'api.product_review.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-review'], ['path'], ['POST' => 0], null, false, true, null]],
        37300 => [[['_route' => 'api.product_search_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config'], ['path'], ['POST' => 0], null, false, true, null]],
        37370 => [[['_route' => 'api.product_search_config_field.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-config-field'], ['path'], ['POST' => 0], null, false, true, null]],
        37441 => [[['_route' => 'api.product_search_keyword.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-search-keyword'], ['path'], ['POST' => 0], null, false, true, null]],
        37514 => [[['_route' => 'api.product_sorting.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting'], ['path'], ['POST' => 0], null, false, true, null]],
        37590 => [[['_route' => 'api.product_sorting_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-sorting-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        37662 => [[['_route' => 'api.product_stream.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream'], ['path'], ['POST' => 0], null, false, true, null]],
        37736 => [[['_route' => 'api.product_stream_filter.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-filter'], ['path'], ['POST' => 0], null, false, true, null]],
        37806 => [[['_route' => 'api.product_stream_mapping.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-mapping'], ['path'], ['POST' => 0], null, false, true, null]],
        37880 => [[['_route' => 'api.product_stream_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-stream-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        37952 => [[['_route' => 'api.product_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        38025 => [[['_route' => 'api.product_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        38099 => [[['_route' => 'api.product_visibility.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'product-visibility'], ['path'], ['POST' => 0], null, false, true, null]],
        38173 => [[['_route' => 'api.promotion.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion'], ['path'], ['POST' => 0], null, false, true, null]],
        38251 => [[['_route' => 'api.promotion_cart_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-cart-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        38325 => [[['_route' => 'api.promotion_discount.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount'], ['path'], ['POST' => 0], null, false, true, null]],
        38399 => [[['_route' => 'api.promotion_discount_prices.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-prices'], ['path'], ['POST' => 0], null, false, true, null]],
        38466 => [[['_route' => 'api.promotion_discount_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-discount-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        38547 => [[['_route' => 'api.promotion_individual_code.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-individual-code'], ['path'], ['POST' => 0], null, false, true, null]],
        38621 => [[['_route' => 'api.promotion_order_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-order-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        38704 => [[['_route' => 'api.promotion_persona_customer.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-customer'], ['path'], ['POST' => 0], null, false, true, null]],
        38771 => [[['_route' => 'api.promotion_persona_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-persona-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        38852 => [[['_route' => 'api.promotion_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        38925 => [[['_route' => 'api.promotion_setgroup.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup'], ['path'], ['POST' => 0], null, false, true, null]],
        38994 => [[['_route' => 'api.promotion_setgroup_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-setgroup-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        39070 => [[['_route' => 'api.promotion_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'promotion-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        39150 => [[['_route' => 'api.property_group.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group'], ['path'], ['POST' => 0], null, false, true, null]],
        39227 => [[['_route' => 'api.property_group_option.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option'], ['path'], ['POST' => 0], null, false, true, null]],
        39303 => [[['_route' => 'api.property_group_option_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-option-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        39378 => [[['_route' => 'api.property_group_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'property-group-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        39452 => [[['_route' => 'api.rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule'], ['path'], ['POST' => 0], null, false, true, null]],
        39526 => [[['_route' => 'api.rule_condition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'rule-condition'], ['path'], ['POST' => 0], null, false, true, null]],
        39615 => [[['_route' => 'api.order_line_item.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-line-item'], ['path'], ['POST' => 0], null, false, true, null]],
        39684 => [[['_route' => 'api.order_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        39757 => [[['_route' => 'api.order_transaction.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'order-transaction'], ['path'], ['POST' => 0], null, false, true, null]],
        39843 => [[['_route' => 'api.payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method'], ['path'], ['POST' => 0], null, false, true, null]],
        39919 => [[['_route' => 'api.payment_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'payment-method-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        39991 => [[['_route' => 'api.plugin.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin'], ['path'], ['POST' => 0], null, false, true, null]],
        40067 => [[['_route' => 'api.plugin_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'plugin-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        40143 => [[['_route' => 'api.product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product'], ['path'], ['POST' => 0], null, false, true, null]],
        40225 => [[['_route' => 'api.product_category.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category'], ['path'], ['POST' => 0], null, false, true, null]],
        40294 => [[['_route' => 'api.product_category_tree.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-category-tree'], ['path'], ['POST' => 0], null, false, true, null]],
        40378 => [[['_route' => 'api.product_configurator_setting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-configurator-setting'], ['path'], ['POST' => 0], null, false, true, null]],
        40457 => [[['_route' => 'api.product_cross_selling.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling'], ['path'], ['POST' => 0], null, false, true, null]],
        40543 => [[['_route' => 'api.product_cross_selling_assigned_products.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-assigned-products'], ['path'], ['POST' => 0], null, false, true, null]],
        40617 => [[['_route' => 'api.product_cross_selling_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-cross-selling-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        40699 => [[['_route' => 'api.product_custom_field_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-custom-field-set'], ['path'], ['POST' => 0], null, false, true, null]],
        40769 => [[['_route' => 'api.product_export.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-export'], ['path'], ['POST' => 0], null, false, true, null]],
        40847 => [[['_route' => 'api.product_feature_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set'], ['path'], ['POST' => 0], null, false, true, null]],
        40923 => [[['_route' => 'api.product_feature_set_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-feature-set-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        41006 => [[['_route' => 'api.product_keyword_dictionary.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-keyword-dictionary'], ['path'], ['POST' => 0], null, false, true, null]],
        41087 => [[['_route' => 'api.product_manufacturer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer'], ['path'], ['POST' => 0], null, false, true, null]],
        41163 => [[['_route' => 'api.product_manufacturer_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-manufacturer-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        41231 => [[['_route' => 'api.product_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-media'], ['path'], ['POST' => 0], null, false, true, null]],
        41301 => [[['_route' => 'api.product_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-option'], ['path'], ['POST' => 0], null, false, true, null]],
        41372 => [[['_route' => 'api.product_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-price'], ['path'], ['POST' => 0], null, false, true, null]],
        41441 => [[['_route' => 'api.product_property.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-property'], ['path'], ['POST' => 0], null, false, true, null]],
        41511 => [[['_route' => 'api.product_review.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-review'], ['path'], ['POST' => 0], null, false, true, null]],
        41597 => [[['_route' => 'api.product_search_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config'], ['path'], ['POST' => 0], null, false, true, null]],
        41667 => [[['_route' => 'api.product_search_config_field.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-config-field'], ['path'], ['POST' => 0], null, false, true, null]],
        41738 => [[['_route' => 'api.product_search_keyword.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-search-keyword'], ['path'], ['POST' => 0], null, false, true, null]],
        41811 => [[['_route' => 'api.product_sorting.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting'], ['path'], ['POST' => 0], null, false, true, null]],
        41887 => [[['_route' => 'api.product_sorting_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-sorting-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        41959 => [[['_route' => 'api.product_stream.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream'], ['path'], ['POST' => 0], null, false, true, null]],
        42033 => [[['_route' => 'api.product_stream_filter.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-filter'], ['path'], ['POST' => 0], null, false, true, null]],
        42103 => [[['_route' => 'api.product_stream_mapping.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-mapping'], ['path'], ['POST' => 0], null, false, true, null]],
        42177 => [[['_route' => 'api.product_stream_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-stream-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        42249 => [[['_route' => 'api.product_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        42322 => [[['_route' => 'api.product_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        42396 => [[['_route' => 'api.product_visibility.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'product-visibility'], ['path'], ['POST' => 0], null, false, true, null]],
        42470 => [[['_route' => 'api.promotion.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion'], ['path'], ['POST' => 0], null, false, true, null]],
        42548 => [[['_route' => 'api.promotion_cart_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-cart-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        42622 => [[['_route' => 'api.promotion_discount.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount'], ['path'], ['POST' => 0], null, false, true, null]],
        42696 => [[['_route' => 'api.promotion_discount_prices.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-prices'], ['path'], ['POST' => 0], null, false, true, null]],
        42763 => [[['_route' => 'api.promotion_discount_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-discount-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        42844 => [[['_route' => 'api.promotion_individual_code.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-individual-code'], ['path'], ['POST' => 0], null, false, true, null]],
        42918 => [[['_route' => 'api.promotion_order_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-order-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        43001 => [[['_route' => 'api.promotion_persona_customer.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-customer'], ['path'], ['POST' => 0], null, false, true, null]],
        43068 => [[['_route' => 'api.promotion_persona_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-persona-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        43149 => [[['_route' => 'api.promotion_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        43222 => [[['_route' => 'api.promotion_setgroup.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup'], ['path'], ['POST' => 0], null, false, true, null]],
        43291 => [[['_route' => 'api.promotion_setgroup_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-setgroup-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        43367 => [[['_route' => 'api.promotion_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'promotion-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        43447 => [[['_route' => 'api.property_group.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group'], ['path'], ['POST' => 0], null, false, true, null]],
        43524 => [[['_route' => 'api.property_group_option.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option'], ['path'], ['POST' => 0], null, false, true, null]],
        43600 => [[['_route' => 'api.property_group_option_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-option-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        43675 => [[['_route' => 'api.property_group_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'property-group-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        43749 => [[['_route' => 'api.rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule'], ['path'], ['POST' => 0], null, false, true, null]],
        43823 => [[['_route' => 'api.rule_condition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'rule-condition'], ['path'], ['POST' => 0], null, false, true, null]],
        43921 => [
            [['_route' => 'api.sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        43985 => [[['_route' => 'api.sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel'], ['path'], ['GET' => 0], null, false, true, null]],
        44078 => [[['_route' => 'api.order_delivery_position.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-delivery-position'], ['path'], ['POST' => 0], null, false, true, null]],
        44170 => [
            [['_route' => 'api.order_line_item.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-line-item'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-line-item'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-line-item'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44237 => [
            [['_route' => 'api.order_line_item.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-line-item'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_line_item.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-line-item'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44327 => [
            [['_route' => 'api.order_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-tag'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-tag'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44394 => [
            [['_route' => 'api.order_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-tag'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44488 => [
            [['_route' => 'api.order_transaction.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'order-transaction'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'order-transaction'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'order-transaction'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44555 => [
            [['_route' => 'api.order_transaction.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'order-transaction'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.order_transaction.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'order-transaction'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44659 => [
            [['_route' => 'api.payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44726 => [
            [['_route' => 'api.payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44822 => [
            [['_route' => 'api.payment_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'payment-method-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'payment-method-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'payment-method-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        44889 => [
            [['_route' => 'api.payment_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'payment-method-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.payment_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'payment-method-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        44979 => [
            [['_route' => 'api.plugin.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45046 => [
            [['_route' => 'api.plugin.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45142 => [
            [['_route' => 'api.plugin_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'plugin-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'plugin-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'plugin-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45209 => [
            [['_route' => 'api.plugin_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'plugin-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.plugin_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'plugin-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45303 => [
            [['_route' => 'api.product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45370 => [
            [['_route' => 'api.product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45469 => [
            [['_route' => 'api.product_category.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45536 => [
            [['_route' => 'api.product_category.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45625 => [
            [['_route' => 'api.product_category_tree.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-category-tree'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-category-tree'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-category-tree'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45692 => [
            [['_route' => 'api.product_category_tree.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-category-tree'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_category_tree.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-category-tree'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45797 => [
            [['_route' => 'api.product_configurator_setting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-configurator-setting'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-configurator-setting'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-configurator-setting'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        45864 => [
            [['_route' => 'api.product_configurator_setting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-configurator-setting'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_configurator_setting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-configurator-setting'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        45961 => [
            [['_route' => 'api.product_cross_selling.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46028 => [
            [['_route' => 'api.product_cross_selling.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46134 => [
            [['_route' => 'api.product_cross_selling_assigned_products.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-assigned-products'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-assigned-products'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-assigned-products'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46201 => [
            [['_route' => 'api.product_cross_selling_assigned_products.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-assigned-products'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_assigned_products.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-assigned-products'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46296 => [
            [['_route' => 'api.product_cross_selling_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-cross-selling-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-cross-selling-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-cross-selling-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46363 => [
            [['_route' => 'api.product_cross_selling_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-cross-selling-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_cross_selling_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-cross-selling-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46466 => [
            [['_route' => 'api.product_custom_field_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-custom-field-set'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-custom-field-set'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-custom-field-set'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46533 => [
            [['_route' => 'api.product_custom_field_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-custom-field-set'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_custom_field_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-custom-field-set'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46624 => [
            [['_route' => 'api.product_export.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-export'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-export'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_export.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-export'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46691 => [
            [['_route' => 'api.product_export.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-export'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_export.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-export'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46787 => [
            [['_route' => 'api.product_feature_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        46854 => [
            [['_route' => 'api.product_feature_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        46950 => [
            [['_route' => 'api.product_feature_set_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-feature-set-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-feature-set-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-feature-set-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47017 => [
            [['_route' => 'api.product_feature_set_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-feature-set-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_feature_set_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-feature-set-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47121 => [
            [['_route' => 'api.product_keyword_dictionary.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-keyword-dictionary'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-keyword-dictionary'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-keyword-dictionary'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47188 => [
            [['_route' => 'api.product_keyword_dictionary.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-keyword-dictionary'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_keyword_dictionary.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-keyword-dictionary'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47287 => [
            [['_route' => 'api.product_manufacturer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47354 => [
            [['_route' => 'api.product_manufacturer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47450 => [
            [['_route' => 'api.product_manufacturer_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-manufacturer-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-manufacturer-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-manufacturer-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47517 => [
            [['_route' => 'api.product_manufacturer_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-manufacturer-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_manufacturer_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-manufacturer-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47606 => [
            [['_route' => 'api.product_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-media'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-media'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47673 => [
            [['_route' => 'api.product_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-media'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47764 => [
            [['_route' => 'api.product_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-option'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-option'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-option'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47831 => [
            [['_route' => 'api.product_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-option'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-option'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        47923 => [
            [['_route' => 'api.product_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-price'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-price'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-price'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        47990 => [
            [['_route' => 'api.product_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-price'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-price'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48080 => [
            [['_route' => 'api.product_property.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-property'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-property'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_property.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-property'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48147 => [
            [['_route' => 'api.product_property.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-property'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_property.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-property'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48238 => [
            [['_route' => 'api.product_review.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-review'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-review'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_review.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-review'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48305 => [
            [['_route' => 'api.product_review.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-review'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_review.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-review'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48409 => [
            [['_route' => 'api.product_search_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48476 => [
            [['_route' => 'api.product_search_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48566 => [
            [['_route' => 'api.product_search_config_field.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-config-field'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-config-field'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-config-field'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48633 => [
            [['_route' => 'api.product_search_config_field.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-config-field'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_config_field.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-config-field'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48725 => [
            [['_route' => 'api.product_search_keyword.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-search-keyword'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-search-keyword'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-search-keyword'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48792 => [
            [['_route' => 'api.product_search_keyword.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-search-keyword'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_search_keyword.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-search-keyword'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        48883 => [
            [['_route' => 'api.product_sorting.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        48950 => [
            [['_route' => 'api.product_sorting.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49046 => [
            [['_route' => 'api.product_sorting_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-sorting-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-sorting-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-sorting-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49113 => [
            [['_route' => 'api.product_sorting_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-sorting-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_sorting_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-sorting-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49203 => [
            [['_route' => 'api.product_stream.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49270 => [
            [['_route' => 'api.product_stream.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49364 => [
            [['_route' => 'api.product_stream_filter.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-filter'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-filter'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-filter'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49431 => [
            [['_route' => 'api.product_stream_filter.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-filter'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_filter.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-filter'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49522 => [
            [['_route' => 'api.product_stream_mapping.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-mapping'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-mapping'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-mapping'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49589 => [
            [['_route' => 'api.product_stream_mapping.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-mapping'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_mapping.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-mapping'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49684 => [
            [['_route' => 'api.product_stream_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-stream-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-stream-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-stream-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49751 => [
            [['_route' => 'api.product_stream_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-stream-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_stream_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-stream-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        49844 => [
            [['_route' => 'api.product_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-tag'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-tag'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        49911 => [
            [['_route' => 'api.product_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-tag'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50005 => [
            [['_route' => 'api.product_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50072 => [
            [['_route' => 'api.product_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50167 => [
            [['_route' => 'api.product_visibility.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'product-visibility'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'product-visibility'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'product-visibility'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50234 => [
            [['_route' => 'api.product_visibility.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'product-visibility'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.product_visibility.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'product-visibility'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50326 => [
            [['_route' => 'api.promotion.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50393 => [
            [['_route' => 'api.promotion.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50491 => [
            [['_route' => 'api.promotion_cart_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-cart-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-cart-rule'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-cart-rule'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50558 => [
            [['_route' => 'api.promotion_cart_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-cart-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_cart_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-cart-rule'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50650 => [
            [['_route' => 'api.promotion_discount.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50717 => [
            [['_route' => 'api.promotion_discount.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50811 => [
            [['_route' => 'api.promotion_discount_prices.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-prices'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-prices'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-prices'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        50878 => [
            [['_route' => 'api.promotion_discount_prices.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-prices'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_prices.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-prices'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        50966 => [
            [['_route' => 'api.promotion_discount_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-discount-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-discount-rule'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-discount-rule'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51033 => [
            [['_route' => 'api.promotion_discount_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-discount-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_discount_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-discount-rule'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51135 => [
            [['_route' => 'api.promotion_individual_code.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-individual-code'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-individual-code'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-individual-code'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51202 => [
            [['_route' => 'api.promotion_individual_code.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-individual-code'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_individual_code.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-individual-code'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51297 => [
            [['_route' => 'api.promotion_order_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-order-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-order-rule'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-order-rule'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51364 => [
            [['_route' => 'api.promotion_order_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-order-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_order_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-order-rule'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51468 => [
            [['_route' => 'api.promotion_persona_customer.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-customer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-customer'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-customer'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51535 => [
            [['_route' => 'api.promotion_persona_customer.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-customer'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_customer.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-customer'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51623 => [
            [['_route' => 'api.promotion_persona_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-persona-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-persona-rule'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-persona-rule'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51690 => [
            [['_route' => 'api.promotion_persona_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-persona-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_persona_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-persona-rule'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51792 => [
            [['_route' => 'api.promotion_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-sales-channel'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-sales-channel'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        51859 => [
            [['_route' => 'api.promotion_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-sales-channel'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        51950 => [
            [['_route' => 'api.promotion_setgroup.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52017 => [
            [['_route' => 'api.promotion_setgroup.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52106 => [
            [['_route' => 'api.promotion_setgroup_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-setgroup-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-setgroup-rule'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-setgroup-rule'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52173 => [
            [['_route' => 'api.promotion_setgroup_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-setgroup-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_setgroup_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-setgroup-rule'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52270 => [
            [['_route' => 'api.promotion_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'promotion-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'promotion-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'promotion-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52337 => [
            [['_route' => 'api.promotion_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'promotion-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.promotion_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'promotion-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52435 => [
            [['_route' => 'api.property_group.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52502 => [
            [['_route' => 'api.property_group.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52596 => [
            [['_route' => 'api.property_group_option.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52663 => [
            [['_route' => 'api.property_group_option.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52759 => [
            [['_route' => 'api.property_group_option_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-option-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-option-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-option-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52826 => [
            [['_route' => 'api.property_group_option_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-option-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_option_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-option-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        52922 => [
            [['_route' => 'api.property_group_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'property-group-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'property-group-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'property-group-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        52989 => [
            [['_route' => 'api.property_group_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'property-group-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.property_group_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'property-group-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        53081 => [
            [['_route' => 'api.rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        53148 => [
            [['_route' => 'api.rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        53242 => [
            [['_route' => 'api.rule_condition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'rule-condition'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'rule-condition'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'rule-condition'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        53309 => [
            [['_route' => 'api.rule_condition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'rule-condition'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.rule_condition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'rule-condition'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        53419 => [[['_route' => 'api.sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        53496 => [[['_route' => 'api.sales_channel_analytics.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-analytics'], ['path'], ['POST' => 0], null, false, true, null]],
        53569 => [[['_route' => 'api.sales_channel_country.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-country'], ['path'], ['POST' => 0], null, false, true, null]],
        53639 => [[['_route' => 'api.sales_channel_currency.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-currency'], ['path'], ['POST' => 0], null, false, true, null]],
        53709 => [[['_route' => 'api.sales_channel_domain.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-domain'], ['path'], ['POST' => 0], null, false, true, null]],
        53780 => [[['_route' => 'api.sales_channel_language.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-language'], ['path'], ['POST' => 0], null, false, true, null]],
        53858 => [[['_route' => 'api.sales_channel_payment_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-payment-method'], ['path'], ['POST' => 0], null, false, true, null]],
        53937 => [[['_route' => 'api.sales_channel_shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-shipping-method'], ['path'], ['POST' => 0], null, false, true, null]],
        54014 => [[['_route' => 'api.sales_channel_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        54083 => [[['_route' => 'api.sales_channel_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type'], ['path'], ['POST' => 0], null, false, true, null]],
        54159 => [[['_route' => 'api.sales_channel_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'sales-channel-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        54236 => [[['_route' => 'api.salutation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation'], ['path'], ['POST' => 0], null, false, true, null]],
        54312 => [[['_route' => 'api.salutation_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'salutation-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        54394 => [[['_route' => 'api.scheduled_task.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'scheduled-task'], ['path'], ['POST' => 0], null, false, true, null]],
        54461 => [[['_route' => 'api.script.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'script'], ['path'], ['POST' => 0], null, false, true, null]],
        54535 => [[['_route' => 'api.seo_url.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url'], ['path'], ['POST' => 0], null, false, true, null]],
        54608 => [[['_route' => 'api.seo_url_template.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'seo-url-template'], ['path'], ['POST' => 0], null, false, true, null]],
        54690 => [[['_route' => 'api.shipping_method.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method'], ['path'], ['POST' => 0], null, false, true, null]],
        54763 => [[['_route' => 'api.shipping_method_price.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-price'], ['path'], ['POST' => 0], null, false, true, null]],
        54832 => [[['_route' => 'api.shipping_method_tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        54905 => [[['_route' => 'api.shipping_method_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'shipping-method-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        54980 => [[['_route' => 'api.snippet.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet'], ['path'], ['POST' => 0], null, false, true, null]],
        55048 => [[['_route' => 'api.snippet_set.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'snippet-set'], ['path'], ['POST' => 0], null, false, true, null]],
        55128 => [[['_route' => 'api.state_machine.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine'], ['path'], ['POST' => 0], null, false, true, null]],
        55203 => [[['_route' => 'api.state_machine_history.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-history'], ['path'], ['POST' => 0], null, false, true, null]],
        55274 => [[['_route' => 'api.state_machine_state.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state'], ['path'], ['POST' => 0], null, false, true, null]],
        55350 => [[['_route' => 'api.state_machine_state_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-state-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        55427 => [[['_route' => 'api.state_machine_transition.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-transition'], ['path'], ['POST' => 0], null, false, true, null]],
        55496 => [[['_route' => 'api.state_machine_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'state-machine-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        55597 => [[['_route' => 'api.swag_paypal_pos_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-paypal-pos-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        55674 => [[['_route' => 'api.swag_paypal_pos_sales_channel_inventory.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-paypal-pos-sales-channel-inventory'], ['path'], ['POST' => 0], null, false, true, null]],
        55742 => [[['_route' => 'api.swag_paypal_pos_sales_channel_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-paypal-pos-sales-channel-media'], ['path'], ['POST' => 0], null, false, true, null]],
        55812 => [[['_route' => 'api.swag_paypal_pos_sales_channel_product.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-paypal-pos-sales-channel-product'], ['path'], ['POST' => 0], null, false, true, null]],
        55881 => [[['_route' => 'api.swag_paypal_pos_sales_channel_run.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-paypal-pos-sales-channel-run'], ['path'], ['POST' => 0], null, false, true, null]],
        55949 => [[['_route' => 'api.swag_paypal_pos_sales_channel_run_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'swag-paypal-pos-sales-channel-run-log'], ['path'], ['POST' => 0], null, false, true, null]],
        56028 => [[['_route' => 'api.system_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'system-config'], ['path'], ['POST' => 0], null, false, true, null]],
        56101 => [[['_route' => 'api.tag.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tag'], ['path'], ['POST' => 0], null, false, true, null]],
        56168 => [[['_route' => 'api.tax.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax'], ['path'], ['POST' => 0], null, false, true, null]],
        56240 => [[['_route' => 'api.tax_rule.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        56312 => [[['_route' => 'api.tax_rule_type.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type'], ['path'], ['POST' => 0], null, false, true, null]],
        56388 => [[['_route' => 'api.tax_rule_type_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'tax-rule-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        56462 => [[['_route' => 'api.theme.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme'], ['path'], ['POST' => 0], null, false, true, null]],
        56535 => [[['_route' => 'api.theme_child.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-child'], ['path'], ['POST' => 0], null, false, true, null]],
        56603 => [[['_route' => 'api.theme_media.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-media'], ['path'], ['POST' => 0], null, false, true, null]],
        56680 => [[['_route' => 'api.theme_sales_channel.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        56754 => [[['_route' => 'api.theme_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'theme-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        56830 => [[['_route' => 'api.unit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit'], ['path'], ['POST' => 0], null, false, true, null]],
        56906 => [[['_route' => 'api.unit_translation.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'unit-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        56976 => [[['_route' => 'api.user.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user'], ['path'], ['POST' => 0], null, false, true, null]],
        57055 => [[['_route' => 'api.user_access_key.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-access-key'], ['path'], ['POST' => 0], null, false, true, null]],
        57124 => [[['_route' => 'api.user_config.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-config'], ['path'], ['POST' => 0], null, false, true, null]],
        57195 => [[['_route' => 'api.user_recovery.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'user-recovery'], ['path'], ['POST' => 0], null, false, true, null]],
        57271 => [[['_route' => 'api.version.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version'], ['path'], ['POST' => 0], null, false, true, null]],
        57345 => [[['_route' => 'api.version_commit.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit'], ['path'], ['POST' => 0], null, false, true, null]],
        57414 => [[['_route' => 'api.version_commit_data.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'version-commit-data'], ['path'], ['POST' => 0], null, false, true, null]],
        57489 => [[['_route' => 'api.webhook.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook'], ['path'], ['POST' => 0], null, false, true, null]],
        57564 => [[['_route' => 'api.webhook_event_log.search', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::search', 'entityName' => 'webhook-event-log'], ['path'], ['POST' => 0], null, false, true, null]],
        57661 => [[['_route' => 'api.sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        57738 => [[['_route' => 'api.sales_channel_analytics.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-analytics'], ['path'], ['POST' => 0], null, false, true, null]],
        57811 => [[['_route' => 'api.sales_channel_country.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-country'], ['path'], ['POST' => 0], null, false, true, null]],
        57881 => [[['_route' => 'api.sales_channel_currency.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-currency'], ['path'], ['POST' => 0], null, false, true, null]],
        57951 => [[['_route' => 'api.sales_channel_domain.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-domain'], ['path'], ['POST' => 0], null, false, true, null]],
        58022 => [[['_route' => 'api.sales_channel_language.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-language'], ['path'], ['POST' => 0], null, false, true, null]],
        58100 => [[['_route' => 'api.sales_channel_payment_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-payment-method'], ['path'], ['POST' => 0], null, false, true, null]],
        58179 => [[['_route' => 'api.sales_channel_shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-shipping-method'], ['path'], ['POST' => 0], null, false, true, null]],
        58256 => [[['_route' => 'api.sales_channel_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        58325 => [[['_route' => 'api.sales_channel_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type'], ['path'], ['POST' => 0], null, false, true, null]],
        58401 => [[['_route' => 'api.sales_channel_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'sales-channel-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        58478 => [[['_route' => 'api.salutation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation'], ['path'], ['POST' => 0], null, false, true, null]],
        58554 => [[['_route' => 'api.salutation_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'salutation-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        58636 => [[['_route' => 'api.scheduled_task.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'scheduled-task'], ['path'], ['POST' => 0], null, false, true, null]],
        58703 => [[['_route' => 'api.script.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'script'], ['path'], ['POST' => 0], null, false, true, null]],
        58777 => [[['_route' => 'api.seo_url.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url'], ['path'], ['POST' => 0], null, false, true, null]],
        58850 => [[['_route' => 'api.seo_url_template.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'seo-url-template'], ['path'], ['POST' => 0], null, false, true, null]],
        58932 => [[['_route' => 'api.shipping_method.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method'], ['path'], ['POST' => 0], null, false, true, null]],
        59005 => [[['_route' => 'api.shipping_method_price.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-price'], ['path'], ['POST' => 0], null, false, true, null]],
        59074 => [[['_route' => 'api.shipping_method_tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-tag'], ['path'], ['POST' => 0], null, false, true, null]],
        59147 => [[['_route' => 'api.shipping_method_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'shipping-method-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        59222 => [[['_route' => 'api.snippet.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet'], ['path'], ['POST' => 0], null, false, true, null]],
        59290 => [[['_route' => 'api.snippet_set.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'snippet-set'], ['path'], ['POST' => 0], null, false, true, null]],
        59370 => [[['_route' => 'api.state_machine.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine'], ['path'], ['POST' => 0], null, false, true, null]],
        59445 => [[['_route' => 'api.state_machine_history.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-history'], ['path'], ['POST' => 0], null, false, true, null]],
        59516 => [[['_route' => 'api.state_machine_state.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state'], ['path'], ['POST' => 0], null, false, true, null]],
        59592 => [[['_route' => 'api.state_machine_state_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-state-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        59669 => [[['_route' => 'api.state_machine_transition.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-transition'], ['path'], ['POST' => 0], null, false, true, null]],
        59738 => [[['_route' => 'api.state_machine_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'state-machine-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        59839 => [[['_route' => 'api.swag_paypal_pos_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-paypal-pos-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        59916 => [[['_route' => 'api.swag_paypal_pos_sales_channel_inventory.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-paypal-pos-sales-channel-inventory'], ['path'], ['POST' => 0], null, false, true, null]],
        59984 => [[['_route' => 'api.swag_paypal_pos_sales_channel_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-paypal-pos-sales-channel-media'], ['path'], ['POST' => 0], null, false, true, null]],
        60054 => [[['_route' => 'api.swag_paypal_pos_sales_channel_product.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-paypal-pos-sales-channel-product'], ['path'], ['POST' => 0], null, false, true, null]],
        60123 => [[['_route' => 'api.swag_paypal_pos_sales_channel_run.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-paypal-pos-sales-channel-run'], ['path'], ['POST' => 0], null, false, true, null]],
        60191 => [[['_route' => 'api.swag_paypal_pos_sales_channel_run_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'swag-paypal-pos-sales-channel-run-log'], ['path'], ['POST' => 0], null, false, true, null]],
        60270 => [[['_route' => 'api.system_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'system-config'], ['path'], ['POST' => 0], null, false, true, null]],
        60343 => [[['_route' => 'api.tag.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tag'], ['path'], ['POST' => 0], null, false, true, null]],
        60410 => [[['_route' => 'api.tax.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax'], ['path'], ['POST' => 0], null, false, true, null]],
        60482 => [[['_route' => 'api.tax_rule.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule'], ['path'], ['POST' => 0], null, false, true, null]],
        60554 => [[['_route' => 'api.tax_rule_type.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type'], ['path'], ['POST' => 0], null, false, true, null]],
        60630 => [[['_route' => 'api.tax_rule_type_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'tax-rule-type-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        60704 => [[['_route' => 'api.theme.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme'], ['path'], ['POST' => 0], null, false, true, null]],
        60777 => [[['_route' => 'api.theme_child.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-child'], ['path'], ['POST' => 0], null, false, true, null]],
        60845 => [[['_route' => 'api.theme_media.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-media'], ['path'], ['POST' => 0], null, false, true, null]],
        60922 => [[['_route' => 'api.theme_sales_channel.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        60996 => [[['_route' => 'api.theme_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'theme-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        61072 => [[['_route' => 'api.unit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit'], ['path'], ['POST' => 0], null, false, true, null]],
        61148 => [[['_route' => 'api.unit_translation.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'unit-translation'], ['path'], ['POST' => 0], null, false, true, null]],
        61218 => [[['_route' => 'api.user.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user'], ['path'], ['POST' => 0], null, false, true, null]],
        61297 => [[['_route' => 'api.user_access_key.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-access-key'], ['path'], ['POST' => 0], null, false, true, null]],
        61366 => [[['_route' => 'api.user_config.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-config'], ['path'], ['POST' => 0], null, false, true, null]],
        61437 => [[['_route' => 'api.user_recovery.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'user-recovery'], ['path'], ['POST' => 0], null, false, true, null]],
        61513 => [[['_route' => 'api.version.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version'], ['path'], ['POST' => 0], null, false, true, null]],
        61587 => [[['_route' => 'api.version_commit.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit'], ['path'], ['POST' => 0], null, false, true, null]],
        61656 => [[['_route' => 'api.version_commit_data.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'version-commit-data'], ['path'], ['POST' => 0], null, false, true, null]],
        61731 => [[['_route' => 'api.webhook.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook'], ['path'], ['POST' => 0], null, false, true, null]],
        61806 => [[['_route' => 'api.webhook_event_log.search-ids', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::searchIds', 'entityName' => 'webhook-event-log'], ['path'], ['POST' => 0], null, false, true, null]],
        61897 => [
            [['_route' => 'api.seo_url.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        61964 => [
            [['_route' => 'api.seo_url.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62057 => [
            [['_route' => 'api.seo_url_template.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'seo-url-template'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'seo-url-template'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'seo-url-template'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62124 => [
            [['_route' => 'api.seo_url_template.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'seo-url-template'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.seo_url_template.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'seo-url-template'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62210 => [[['_route' => 'api.sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel'], ['path'], ['POST' => 0], null, false, true, null]],
        62306 => [
            [['_route' => 'api.sales_channel_analytics.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-analytics'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-analytics'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-analytics'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62373 => [
            [['_route' => 'api.sales_channel_analytics.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-analytics'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_analytics.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-analytics'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62467 => [
            [['_route' => 'api.sales_channel_country.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-country'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-country'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-country'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62534 => [
            [['_route' => 'api.sales_channel_country.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-country'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_country.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-country'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62625 => [
            [['_route' => 'api.sales_channel_currency.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-currency'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-currency'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-currency'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62692 => [
            [['_route' => 'api.sales_channel_currency.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-currency'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_currency.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-currency'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62783 => [
            [['_route' => 'api.sales_channel_domain.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-domain'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-domain'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-domain'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        62850 => [
            [['_route' => 'api.sales_channel_domain.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-domain'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_domain.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-domain'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        62942 => [
            [['_route' => 'api.sales_channel_language.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-language'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-language'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-language'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63009 => [
            [['_route' => 'api.sales_channel_language.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-language'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_language.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-language'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63108 => [
            [['_route' => 'api.sales_channel_payment_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-payment-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-payment-method'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-payment-method'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63175 => [
            [['_route' => 'api.sales_channel_payment_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-payment-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_payment_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-payment-method'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63275 => [
            [['_route' => 'api.sales_channel_shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-shipping-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-shipping-method'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-shipping-method'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63342 => [
            [['_route' => 'api.sales_channel_shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-shipping-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-shipping-method'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63440 => [
            [['_route' => 'api.sales_channel_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63507 => [
            [['_route' => 'api.sales_channel_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63594 => [
            [['_route' => 'api.sales_channel_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63661 => [
            [['_route' => 'api.sales_channel_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63757 => [
            [['_route' => 'api.sales_channel_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'sales-channel-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'sales-channel-type-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'sales-channel-type-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63824 => [
            [['_route' => 'api.sales_channel_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'sales-channel-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.sales_channel_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'sales-channel-type-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        63919 => [
            [['_route' => 'api.salutation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        63986 => [
            [['_route' => 'api.salutation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64082 => [
            [['_route' => 'api.salutation_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'salutation-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'salutation-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'salutation-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64149 => [
            [['_route' => 'api.salutation_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'salutation-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.salutation_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'salutation-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64252 => [
            [['_route' => 'api.scheduled_task.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'scheduled-task'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'scheduled-task'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'scheduled-task'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64319 => [
            [['_route' => 'api.scheduled_task.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'scheduled-task'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.scheduled_task.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'scheduled-task'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64407 => [
            [['_route' => 'api.script.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'script'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'script'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.script.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'script'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64474 => [
            [['_route' => 'api.script.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'script'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.script.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'script'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64574 => [
            [['_route' => 'api.shipping_method.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64641 => [
            [['_route' => 'api.shipping_method.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64734 => [
            [['_route' => 'api.shipping_method_price.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-price'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-price'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-price'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64801 => [
            [['_route' => 'api.shipping_method_price.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-price'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_price.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-price'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        64891 => [
            [['_route' => 'api.shipping_method_tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-tag'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-tag'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        64958 => [
            [['_route' => 'api.shipping_method_tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-tag'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65052 => [
            [['_route' => 'api.shipping_method_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'shipping-method-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'shipping-method-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'shipping-method-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65119 => [
            [['_route' => 'api.shipping_method_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'shipping-method-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.shipping_method_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'shipping-method-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65212 => [
            [['_route' => 'api.snippet.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65279 => [
            [['_route' => 'api.snippet.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65367 => [
            [['_route' => 'api.snippet_set.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'snippet-set'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'snippet-set'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'snippet-set'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65434 => [
            [['_route' => 'api.snippet_set.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'snippet-set'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.snippet_set.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'snippet-set'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65532 => [
            [['_route' => 'api.state_machine.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65599 => [
            [['_route' => 'api.state_machine.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65694 => [
            [['_route' => 'api.state_machine_history.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-history'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-history'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-history'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65761 => [
            [['_route' => 'api.state_machine_history.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-history'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_history.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-history'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        65850 => [
            [['_route' => 'api.state_machine_state.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        65917 => [
            [['_route' => 'api.state_machine_state.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66013 => [
            [['_route' => 'api.state_machine_state_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-state-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-state-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-state-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66080 => [
            [['_route' => 'api.state_machine_state_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-state-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_state_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-state-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66178 => [
            [['_route' => 'api.state_machine_transition.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-transition'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-transition'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-transition'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66245 => [
            [['_route' => 'api.state_machine_transition.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-transition'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_transition.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-transition'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66335 => [
            [['_route' => 'api.state_machine_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'state-machine-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'state-machine-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'state-machine-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66402 => [
            [['_route' => 'api.state_machine_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'state-machine-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.state_machine_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'state-machine-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66521 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-paypal-pos-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-paypal-pos-sales-channel'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-paypal-pos-sales-channel'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66588 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-paypal-pos-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-paypal-pos-sales-channel'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66685 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_inventory.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-paypal-pos-sales-channel-inventory'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_inventory.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-paypal-pos-sales-channel-inventory'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_inventory.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-paypal-pos-sales-channel-inventory'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66752 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_inventory.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-paypal-pos-sales-channel-inventory'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_inventory.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-paypal-pos-sales-channel-inventory'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66841 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-paypal-pos-sales-channel-media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-paypal-pos-sales-channel-media'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-paypal-pos-sales-channel-media'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        66908 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-paypal-pos-sales-channel-media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-paypal-pos-sales-channel-media'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        66999 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_product.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-paypal-pos-sales-channel-product'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_product.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-paypal-pos-sales-channel-product'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_product.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-paypal-pos-sales-channel-product'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67066 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_product.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-paypal-pos-sales-channel-product'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_product.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-paypal-pos-sales-channel-product'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67153 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_run.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-paypal-pos-sales-channel-run'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_run.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-paypal-pos-sales-channel-run'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_run.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-paypal-pos-sales-channel-run'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67220 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_run.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-paypal-pos-sales-channel-run'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_run.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-paypal-pos-sales-channel-run'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67308 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_run_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'swag-paypal-pos-sales-channel-run-log'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_run_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'swag-paypal-pos-sales-channel-run-log'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_run_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'swag-paypal-pos-sales-channel-run-log'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67375 => [
            [['_route' => 'api.swag_paypal_pos_sales_channel_run_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'swag-paypal-pos-sales-channel-run-log'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.swag_paypal_pos_sales_channel_run_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'swag-paypal-pos-sales-channel-run-log'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67475 => [
            [['_route' => 'api.system_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'system-config'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'system-config'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.system_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'system-config'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67542 => [
            [['_route' => 'api.system_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'system-config'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.system_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'system-config'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67636 => [
            [['_route' => 'api.tag.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tag'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tag.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tag'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67703 => [
            [['_route' => 'api.tag.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tag'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tag.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tag'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67788 => [
            [['_route' => 'api.tax.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        67855 => [
            [['_route' => 'api.tax.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        67944 => [
            [['_route' => 'api.tax_rule.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68011 => [
            [['_route' => 'api.tax_rule.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68100 => [
            [['_route' => 'api.tax_rule_type.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68167 => [
            [['_route' => 'api.tax_rule_type.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68263 => [
            [['_route' => 'api.tax_rule_type_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'tax-rule-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'tax-rule-type-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'tax-rule-type-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68330 => [
            [['_route' => 'api.tax_rule_type_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'tax-rule-type-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.tax_rule_type_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'tax-rule-type-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68422 => [
            [['_route' => 'api.theme.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68489 => [
            [['_route' => 'api.theme.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68582 => [
            [['_route' => 'api.theme_child.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-child'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-child'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-child'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68649 => [
            [['_route' => 'api.theme_child.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-child'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_child.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-child'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68738 => [
            [['_route' => 'api.theme_media.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-media'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-media'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68805 => [
            [['_route' => 'api.theme_media.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-media'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_media.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-media'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        68903 => [
            [['_route' => 'api.theme_sales_channel.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-sales-channel'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-sales-channel'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        68970 => [
            [['_route' => 'api.theme_sales_channel.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-sales-channel'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_sales_channel.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-sales-channel'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69065 => [
            [['_route' => 'api.theme_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'theme-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'theme-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'theme-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69132 => [
            [['_route' => 'api.theme_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'theme-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.theme_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'theme-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69226 => [
            [['_route' => 'api.unit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69293 => [
            [['_route' => 'api.unit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69389 => [
            [['_route' => 'api.unit_translation.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'unit-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'unit-translation'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'unit-translation'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69456 => [
            [['_route' => 'api.unit_translation.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'unit-translation'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.unit_translation.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'unit-translation'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69541 => [[['_route' => 'api.user.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user'], ['path'], ['GET' => 0], null, false, true, null]],
        69604 => [[['_route' => 'api.user.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user'], ['path'], ['GET' => 0], null, false, true, null]],
        69702 => [
            [['_route' => 'api.user_access_key.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-access-key'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-access-key'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-access-key'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69769 => [
            [['_route' => 'api.user_access_key.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-access-key'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_access_key.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-access-key'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        69859 => [
            [['_route' => 'api.user_config.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-config'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-config'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_config.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-config'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        69926 => [
            [['_route' => 'api.user_config.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-config'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_config.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-config'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70018 => [
            [['_route' => 'api.user_recovery.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'user-recovery'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'user-recovery'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'user-recovery'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70085 => [
            [['_route' => 'api.user_recovery.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'user-recovery'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.user_recovery.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'user-recovery'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70110 => [[['_route' => 'api.user.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUser'], ['userId'], ['DELETE' => 0], null, false, true, null]],
        70145 => [[['_route' => 'api.user_access_keys.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserAccessKey'], ['userId', 'id'], ['DELETE' => 0], null, false, true, null]],
        70172 => [[['_route' => 'api.user_role.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteUserRole'], ['userId', 'roleId'], ['DELETE' => 0], null, false, true, null]],
        70183 => [[['_route' => 'api.user.update', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateUser'], ['userId'], ['PATCH' => 0], null, false, true, null]],
        70194 => [[['_route' => 'api.user.create', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertUser'], [], ['POST' => 0], null, false, false, null]],
        70285 => [
            [['_route' => 'api.version.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70352 => [
            [['_route' => 'api.version.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70443 => [
            [['_route' => 'api.version_commit.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70510 => [
            [['_route' => 'api.version_commit.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70599 => [
            [['_route' => 'api.version_commit_data.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'version-commit-data'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'version-commit-data'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'version-commit-data'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70666 => [
            [['_route' => 'api.version_commit_data.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'version-commit-data'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.version_commit_data.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'version-commit-data'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70759 => [
            [['_route' => 'api.webhook.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70826 => [
            [['_route' => 'api.webhook.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        70921 => [
            [['_route' => 'api.webhook_event_log.detail', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::detail', 'entityName' => 'webhook-event-log'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::update', 'entityName' => 'webhook-event-log'], ['path'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.delete', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::delete', 'entityName' => 'webhook-event-log'], ['path'], ['DELETE' => 0], null, false, true, null],
        ],
        70988 => [
            [['_route' => 'api.webhook_event_log.list', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::list', 'entityName' => 'webhook-event-log'], ['path'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api.webhook_event_log.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\ApiController::create', 'entityName' => 'webhook-event-log'], ['path'], ['POST' => 0], null, false, true, null],
        ],
        71013 => [[['_route' => 'api.acl_role.create', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::upsertRole'], [], ['POST' => 0], null, false, false, null]],
        71035 => [
            [['_route' => 'api.acl_role.update', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::updateRole'], ['roleId'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api.acl_role.delete', 'auth_required' => true, '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\UserController::deleteRole'], ['roleId'], ['DELETE' => 0], null, false, true, null],
        ],
        71061 => [[['_route' => 'api.integration.create', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::upsertIntegration'], [], ['POST' => 0], null, false, false, null]],
        71080 => [
            [['_route' => 'api.integration.update', '_controller' => 'Shopware\\Core\\Framework\\Api\\Controller\\IntegrationController::updateIntegration'], ['integrationId'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
