<?php

namespace DI\DependencyInjection;

use DI\Exception\ServiceNotFoundException;

interface ContainerInterface
{
    /**
     * If service exists by id
     *
     * @param string $id Service ID
     * @return bool 'true' if service exists, 'false' otherwise
     */
    public function has(string $id): bool;

    /**
     * Get the service by id
     *
     * @param string $id Service ID
     *
     * @throws ServiceNotFoundException if service is not found by id
     *
     * @return object Service instance
     */
    public function get(string $id): object;
}