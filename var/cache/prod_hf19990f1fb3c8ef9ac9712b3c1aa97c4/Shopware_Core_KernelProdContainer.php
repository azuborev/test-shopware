<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT9v0atx\Shopware_Core_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT9v0atx/Shopware_Core_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerT9v0atx.legacy');

    return;
}

if (!\class_exists(Shopware_Core_KernelProdContainer::class, false)) {
    \class_alias(\ContainerT9v0atx\Shopware_Core_KernelProdContainer::class, Shopware_Core_KernelProdContainer::class, false);
}

return new \ContainerT9v0atx\Shopware_Core_KernelProdContainer([
    'container.build_hash' => 'T9v0atx',
    'container.build_id' => '3049dfc0',
    'container.build_time' => 1650542810,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT9v0atx');