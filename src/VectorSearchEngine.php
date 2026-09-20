<?php

declare(strict_types=1);

namespace SmitBackend\VectorSQL;

use SmitBackend\VectorSQL\Contracts\EmbeddingDriverInterface;

/**
 * Class VectorSearchEngine
 *
 * @package SmitBackend\VectorSQL
 */
class VectorSearchEngine implements EmbeddingDriverInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
