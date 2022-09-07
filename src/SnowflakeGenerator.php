<?php

namespace UniqueIdForLaravel;

use Godruoyi\Snowflake\Snowflake;

class SnowflakeGenerator implements Contracts\UniqueIdGeneratorInterface
{
    /**
     * The default start time of the snowflake algorithm
     */
    protected string $startTime = '2022-09-09 00:00:00';

    /**
     * Generate a unique id
     *
     * @throws \Exception
     */
    public function generate(): int|string
    {
        // The default start time of the snowflake algorithm is 2022-09-09 00:00:00,
        // or you can set the start time yourself.
        $startTime = config('unique-id.start_time', $this->startTime);
        $startTimeTimestamp = strtotime($startTime);

        // The default data center and node id is 1,
        // or you can set it in the config file,
        // in distributed scenarios, you need to set different data center and node id for each server / service.
        $dataCenterId = config('unique-id.data_center_id', 1);
        $nodeId = config('unique-id.node_id', 1);

        $snowflake = (new Snowflake(datacenter: $dataCenterId, workerId: $nodeId))
            ->setStartTimeStamp($startTimeTimestamp);

        return $snowflake->id();
    }
}
