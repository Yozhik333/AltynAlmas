<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    function category() {
        return $this->hasOne("App\Category", "id", "category_id");
    }
}
