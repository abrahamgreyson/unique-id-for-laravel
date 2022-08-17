<?php

namespace UniqueIdForLaravel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Str;

class UniqueIdForLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Model::booted(static function (Model $model): void {
            Model::saving(static function (Model $model): void {
                dd('saving');
                if (!$model->id) {
                    $model->id = Str::uuid();
                }
            });
            Model::creating(static function(Model $model): void {
                dd('creating');
                $model->id = Str::uuid();
            });
        });

    }
}
