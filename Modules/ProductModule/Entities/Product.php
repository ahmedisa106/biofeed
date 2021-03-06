<?php

namespace Modules\ProductModule\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\OrderModule\Entities\Order;
use Modules\PackageModule\Entities\Package;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Modules\WidgetsModule\Entities\Partner;


class Product extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'products';
    protected $fillable = ['price', 'photo','video','quantity','company_id', 'created_by'];
    public $translatedAttributes = ['title','slug', 'description', 'meta_title', 'meta_desc', 'meta_keywords'];
    public $translationModel = ProductTranslation::class;


    function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category', 'product_id', 'product_category_id')->withTimestamps();
    }

    function packages()
    {
        return $this->belongsToMany(Package::class, 'package_product', 'product_id', 'package_id')->withTimestamps();
    }

    public function product_photo()
    {
        return $this->hasMany(ProductPhoto::class);
    }

    function orders(){
        return $this->belongsToMany(Order::class,"order_products","order_id","product_id");
    }

    function detail()
    {
        return $this->hasOne(ProductDetail::class);
    }


}
