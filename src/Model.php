<?php

namespace Abe\UniqueId;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    use HasUniqueId;

    // todo 解决时钟回拨问题
}
