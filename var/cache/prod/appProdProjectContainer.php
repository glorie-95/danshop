<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFy1hbkh\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFy1hbkh/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerFy1hbkh.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerFy1hbkh\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerFy1hbkh\appProdProjectContainer([
    'container.build_hash' => 'Fy1hbkh',
    'container.build_id' => 'c11fa0cf',
    'container.build_time' => 1564599981,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFy1hbkh');
