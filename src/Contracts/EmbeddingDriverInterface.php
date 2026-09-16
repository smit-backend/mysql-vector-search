<?php

declare(strict_types=1);

namespace SmitBackend\VectorSQL\Contracts;

/**
 * Interface EmbeddingDriverInterface
 *
 * @package SmitBackend\VectorSQL
 */
interface EmbeddingDriverInterface
{
    public function execute(array $payload = []): mixed;
}
