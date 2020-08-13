<?php


namespace Modules\FrontModule\Helper;

use Modules\ConfigModule\Entities\Config;
use Modules\ProductModule\Entities\ProductCategory;
use Modules\WidgetsModule\Entities\Partner;

class sharedData
{

    public static function getconfig()
    {

        $configArr = [];
        $all = Config::all();
        foreach ($all as $item) {

            if ($item->is_static == 1) {
                $configArr[$item->var] = $item->static_value;

            } else {
                $configArr[$item->var] = $item->value;
            }

        }

        return $configArr;
    }

    public static function getCompanies(){

        return  ProductCategory::with('products')->get();

    }


}
