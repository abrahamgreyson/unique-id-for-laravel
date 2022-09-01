<?php

namespace UniqueIdForLaravel\Contracts;

/**
 * Interface UniqueIdGeneratorInterface
 * @package UniqueIdForLaravel
 */
interface UniqueIdGeneratorInterface
{
    /**
     * @return string
     */
    public function generate(): string;
}
