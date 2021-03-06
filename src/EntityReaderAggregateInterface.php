<?php

declare(strict_types=1);

namespace Warp\DataSource;

interface EntityReaderAggregateInterface
{
    /**
     * @template E of object
     * @param class-string<E> $entity
     * @return EntityReaderInterface<E>
     */
    public function getReader(string $entity): EntityReaderInterface;
}
