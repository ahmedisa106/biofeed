<?php

namespace Modules\ProductModule\Http\Controllers;

use CKSource\CKFinder\Image;
use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\ProductModule\Entities\Product;
use Modules\ProductModule\Entities\ProductPhoto;
use Modules\ProductModule\Repository\ProductRepository;
use Modules\ProductModule\Repository\ProductPhotoRepository;
use Modules\ProductModule\Repository\ProductCategoryRepository;

class ProductController extends Controller
{
    use UploaderHelper;

    private $productRepo, $categoryRepo, $productPicRepo;

    public function __construct(
        ProductRepository $productRepo,
        ProductCategoryRepository $categoryRepo,
        ProductPhotoRepository $productPicRepo
    )
    {

        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
        $this->productPicRepo = $productPicRepo;
        // $this->serviceCategRepo = $serviceCategRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $products = $this->productRepo->findAll();

        return view('productmodule::product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = $this->categoryRepo->findAllParent();
        $cats = $this->categoryRepo->findAll();
        return view('productmodule::product.create', ['categories' => $categories, 'cats' => $cats]);
    }

    public function show($id)
    {

        $product = Product::with('product_photo')->find($id);

        return view('productmodule::product.show', compact('product'));

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
//         dd($request->all());
        $productData = $request->except('_token', 'product_categ', 'photo', 'photos', 'volume', 'measure', 'num_of_item', 'item_cost');
        $product_categ = $request->get('product_categ');
        $productData['created_by'] = auth()->user()->id;


        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'products', true); // resize option executed.
            $productData['photo'] = $imageName;
        }

        # Loop through product_photos_many to save photos first.
        $product_pics = [];
        if ($request->hasFile('photos')) {
            $photos = $request->file('photos');
            $product_pics = $this->uploadAlbum($photos, 'products');
        }

        if ($request->hasFile('video')) {

            $video = $request->video;
            $videoName = time() . '.' . $request->video->getClientOriginalExtension();
            $path = public_path('/images/products/video/');

            $video->move($path, $videoName);

            $productData['video'] = $videoName;


        }

        $this->productRepo->save($productData, $product_pics, $product_categ);

        return redirect('admin-panel/product')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepo->find($id);
        $categories = $this->categoryRepo->findAllParent();

        foreach ($product->categories as $value) {
            $product_categ_ids[] = $value->id;
        }

        return view('productmodule::product.edit', [
            'product' => $product,
            'categories' => $categories,
            'selected_categ_ids' => $product_categ_ids,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $productPic = $this->productRepo->find($id);
        $product = $request->except('_token', 'photo','video', '_method', 'product_categ', 'ar', 'en', 'volume', 'measure', 'num_of_item', 'item_cost');
        $product_categ = $request->get('product_categ');

        $activeLangCode = \LanguageHelper::getLangCode();

        $product_trans = $request->only($activeLangCode);

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $thumbnail_path = public_path() . '/images/products/thumb/' . $productPic->photo;
            File::delete($thumbnail_path);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'products', true);
            $product['photo'] = $imageName;
        }
        if($request->hasFile('video')){

            $video_path = public_path('/images/products/video/'.$productPic->video);
            File::delete($video_path);
            $video = $request->file('video');

            $videoName = time() . '.' . $request->video->getClientOriginalExtension();
            $path = public_path('/images/products/video/');

            $video->move($path, $videoName);

            $product['video'] = $videoName;



        }




        $this->productRepo->update($id, $product, $product_trans, $product_categ);

        return redirect('/admin-panel/product')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepo->find($id);
        //delete video
        $file_path = public_path().'/images/products/video/'.$product->video;
        File::delete($file_path);

        # Get The product photo album, then pass it to repo to delete it
        $this->productPicRepo->delete($product);

        # Delete the Main photo and Thumbnail.
        $this->productRepo->delete($product);

        return redirect()->back();
    }

    public function deletepic($id)
    {
        $pic = ProductPhoto::where('id', $id)->first();
        $path = public_path('/images/products/' . $pic->photo);
        File::delete($path);

        ProductPhoto::destroy($pic->id);

        return redirect()->back();

    }

    public function storeAlbum(Request $request)
    {
        $productData = $request->except(['_token','photos']);

        $product_photos = [];
        if ($request->hasFile('photos')) {

            $photos = $request->file('photos');
            $product_photos = $this->uploadAlbum($photos, 'products');

            $this->productPicRepo->updateAlbumPhotos($productData, $product_photos);

            return redirect()->back();




        }


    }
}
