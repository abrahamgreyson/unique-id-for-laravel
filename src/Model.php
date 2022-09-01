<?php

namespace UniqueIdForLaravel;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    use HasUniqueId;
}
