<?php

namespace Modules\PortfolioModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Category_Portfolio_Pivot extends Model
{
    protected $fillable = ['portofilio_id','category_id'];
}
