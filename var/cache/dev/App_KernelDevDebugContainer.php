<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerO1tex4a\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerO1tex4a/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerO1tex4a.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerO1tex4a\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerO1tex4a\App_KernelDevDebugContainer([
    'container.build_hash' => 'O1tex4a',
    'container.build_id' => 'e2c7e29d',
    'container.build_time' => 1667395574,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerO1tex4a');