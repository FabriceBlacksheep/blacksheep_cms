<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTfBNE3f\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTfBNE3f/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTfBNE3f.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTfBNE3f\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTfBNE3f\App_KernelDevDebugContainer([
    'container.build_hash' => 'TfBNE3f',
    'container.build_id' => '26dad173',
    'container.build_time' => 1677677790,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTfBNE3f');
