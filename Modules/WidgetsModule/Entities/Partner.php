<?php

namespace Modules\WidgetsModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\ProductModule\Entities\Product;

class Partner extends Model
{
    protected $fillable = ['link', 'photo', 'created_by'];


}
