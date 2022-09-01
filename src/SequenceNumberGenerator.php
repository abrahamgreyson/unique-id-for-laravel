<?php

namespace UniqueIdForLaravel;

class SequenceNumberGenerator implements Contracts\UniqueIdGeneratorInterface
{

    /**
     * @inheritDoc
     */
    public function generate(): string
    {
        // TODO: Implement generate() method.
        return '1';
    }
}
