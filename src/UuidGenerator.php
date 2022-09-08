<?php

namespace UniqueIdForLaravel;

use Str;

class TimeOrderedUuidGenerator implements Contracts\UniqueIdGeneratorInterface
{
    /**
     * Generate a unique id
     *
     * @throws \Exception
     */
    public function generate(): string
    {
        $uuid = Str::orderedUuid()->toString();

        return \str_replace(search: '-', replace: '', subject: $uuid);
    }
}
