<?php

namespace UniqueIdForLaravel;

use Godruoyi\Snowflake\Snowflake;

class SnowflakeGenerator implements Contracts\UniqueIdGeneratorInterface
{
    /**
     * Generate a unique id
     *
     * @throws \Exception
     */
    public function generate(): int
    {
        // The default start time of the snowflake algorithm is 2022-09-09 00:00:00,
        // or you can set the start time yourself after you publish the config file.
        $startTime = config('unique-id.start_time');
        $startTimeTimestamp = strtotime($startTime) * 1000;

        // The default data center and node id is 1,
        // or you can set it in the config file,
        // in distributed scenarios, you need to set different data center and node id for each server / service.
        $dataCenterId = config('unique-id.data_center_id', 31);
        $nodeId = config('unique-id.node_id', 31);

        $snowflake = (new Snowflake(datacenter: $dataCenterId, workerid: $nodeId))
            ->setStartTimeStamp($startTimeTimestamp)
            ->setSequenceResolver(function () {
                return 111111;
                return mt_rand(0, 4095);
            });

        return $snowflake->id();
    }
}
