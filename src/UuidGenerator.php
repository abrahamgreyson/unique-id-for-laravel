<?php

namespace UniqueIdForLaravel;

class UuidGenerator implements Contracts\UniqueIdGeneratorInterface
{
    /**
     * {@inheritDoc}
     */
    public function generate(): string
    {
        // TODO: Implement generate() method.
        return 'uuid';
    }
}
