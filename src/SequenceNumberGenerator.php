<?php

namespace Abe\UniqueId;

use Illuminate\Database\Eloquent\Model;

class SequenceNumberGenerator implements Contracts\UniqueIdGeneratorInterface
{
    public function __construct(protected Model $model)
    {
    }

    /**
     * Generate a unique id.
     */
    public function generate(): string
    {
        // Get increased sequence number from Redis,
        $redis = app('redis');

        // todo need distributed lock here
        $id = $redis->incr("unique_id:on_table:{$this->model->getTable()}");
        // If the sequence number is not exist, query the next sequence number from database.
        if ($id === 1) {
            $id = $this->model->max('id') + 1;
            $redis->set("unique_id:on_table:{$this->model->getTable()}", $id);
        }

        return $id;
    }
}
