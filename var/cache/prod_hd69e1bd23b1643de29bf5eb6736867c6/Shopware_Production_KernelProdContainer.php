<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRWZMJBc\Shopware_Production_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRWZMJBc/Shopware_Production_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerRWZMJBc.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelProdContainer::class, false)) {
    \class_alias(\ContainerRWZMJBc\Shopware_Production_KernelProdContainer::class, Shopware_Production_KernelProdContainer::class, false);
}

return new \ContainerRWZMJBc\Shopware_Production_KernelProdContainer([
    'container.build_hash' => 'RWZMJBc',
    'container.build_id' => 'b5252c65',
    'container.build_time' => 1650544659,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRWZMJBc');
