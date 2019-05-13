<?php

namespace DI\DependencyInjection;

class Container implements ContainerInterface
{
    /**
     * @inheritdoc
     */
    public function has(string $id): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function get(string $id): object
    {
        // TODO: Implement get() method.
    }
}