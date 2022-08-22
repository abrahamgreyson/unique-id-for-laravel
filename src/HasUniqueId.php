<?php

namespace UniqueIdForLaravel;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

trait HasUniqueId
{
    /**
     * add event listener to generate a unique id for the model
     *
     * @return void
     */
    public static function bootHasUniqueId()
    {
        static::creating(static function (Model $model) {
                $model->{$model->getKeyName()} = static::generateUniqueId();
        });
        static::saving(static function (Model $model) {
            if (!$model->{$model->getKeyName()}) {
                // fill the attribute whether it is fillable or not
                $model->setAttribute($model->getKeyName(), static::generateUniqueId());
            }
        });
    }

    /**
     * generate a unique id
     * @return string
     */
    public static function generateUniqueId(): string
    {
        return Uuid::uuid4()->toString();
    }

    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing(): bool
    {
        return false;
    }

    /**
     * Set the data type for the primary key.
     *
     * @return string
     */
    public function getKeyType(): string
    {
        return 'string';
    }
}