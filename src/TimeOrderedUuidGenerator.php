<?php

namespace UniqueIdForLaravel;

use Str;

class TimeOrderedUuidGenerator implements Contracts\UniqueIdGeneratorInterface
{
    /**
     * Generate a unique id
     */
    public function generate(): string
    {
        $uuid = Str::orderedUuid();

        return bin2hex($uuid->getBytes());
    }
}
