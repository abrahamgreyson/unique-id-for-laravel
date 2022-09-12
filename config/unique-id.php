<?php

return [
    // The strategy to generate unique id.
    // Available values:
    // - 'sequence' : Sequence number, required Redis.
    // - 'snowflake': Twitter snowflake algorithm.
    // - 'uuid': Time ordered uuid version 4 (COMB) without dashes.
    // - 'auto': Auto increasing id by database.
    // The default value is 'snowflake'.
    'strategy' => 'snowflake',

    // The node id of both snowflake and uuid.
    'node_id' => env('UNIQUE_ID_NODE_ID', 1),

    // The start time of both snowflake and uuid.
    'start_time' => env('UNIQUE_ID_START_TIME', '2022-09-09 00:00:00'),
];
