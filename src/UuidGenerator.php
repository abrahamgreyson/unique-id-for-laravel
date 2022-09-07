<?php

namespace UniqueIdForLaravel;

use Str;

class UuidGenerator implements Contracts\UniqueIdGeneratorInterface
{
    /**
     * {@inheritDoc}
     */
    public function generate(): string
    {
        return Str::orderedUuid()->toString();
    }
}
