<?php

namespace Abe\UniqueId;

use Ramsey\Uuid\Codec\TimestampFirstCombCodec;
use Ramsey\Uuid\Generator\CombGenerator;
use Ramsey\Uuid\UuidFactory;

class UuidGenerator implements Contracts\UniqueIdGeneratorInterface
{
    /**
     * Generate a unique id
     */
    public function generate(): string
    {
        $factory = new UuidFactory();
        $codec = new TimestampFirstCombCodec($factory->getUuidBuilder());

        $factory->setRandomGenerator(
            new CombGenerator(
                $factory->getRandomGenerator(),
                $factory->getNumberConverter()
            )
        );

        $factory->setCodec($codec);
        $timestampFirstComb = $factory->uuid4();

        return bin2hex($timestampFirstComb->getBytes());
    }
}
