<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ProductModule\Entities\Product;
use Modules\ProductModule\Entities\ProductCategory;
use Modules\ServiceModule\Entities\ServiceCategory\ServiceCategory;
use Modules\ServiceModule\Entities\ServiceMod\Service;
use Modules\WidgetsModule\Entities\Contactus;
use Modules\WidgetsModule\Entities\Page;
use Modules\WidgetsModule\Entities\Partner;
use Modules\WidgetsModule\Entities\Slider\Slider;
use Modules\WidgetsModule\Entities\Team\Team;
use Modules\WidgetsModule\Entities\WhyUs;

class FrontModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */


    public function index()
    {
//        $s_products = ProductCategory::when($request->search , function ($q) use($request){
//
//           return $q->whereTransalionLike('title','%'.$request->serch.'%');
//
//        })->latest()->paginate(10);


        $sliders = Slider::with('translations')->get();
        $teams = Team::with('translations')->get();
        $why_us = WhyUs::with('translations')->get();
        $products  = Product::with('translations')->take(6)->get();
        $services = Service::with('service_category')->get();

        return view('frontmodule::index',compact('sliders','teams','why_us','products','services'));
    }

    public function partners()
    {
        $partners = Partner::paginate(15);

        return view('frontmodule::pages.partners',compact('partners'));

    }
    public function shop()
    {

        $products = Product::with('translation')->get();
        return view('frontmodule::pages.shop', compact('products'));

    }

    public function show_product($id)
    {

        $products = Product::where('id', '!=', $id)->orderByRaw('RAND()')->take(3)->get();
        $product = Product::with('product_photo')->findOrFail($id);


        return view('frontmodule::pages.product', compact('product', 'products'));

    }

    public function contact_us()
    {

        return view('frontmodule::pages.contact_us');

    }

    public function sendMessage(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
//            'phone' => 'required',
            'message' => 'required',
        ]);

        Contactus::create($request->all());

        return redirect()->route('front.index');


    }

    public function about()
    {
        $about = Page::whereTranslation('title', 'about')->first();
        return view('frontmodule::pages.about', compact('about'));

    }

    public function company_product($id)
    {
        $company = ProductCategory::with('products')->where('id', $id)->first();
        return view('frontmodule::pages.company_products', compact('company'));
    }


}
