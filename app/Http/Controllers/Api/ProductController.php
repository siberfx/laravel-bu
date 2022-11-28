<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\Product;
use Validator;
use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResources;


class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return $this->sendResponse(ProductResources::collection($products), 'Products fetched.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $product = Product::create($input);
        return $this->sendResponse(new ProductResources($product), 'Product created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return $this->sendError('Product does not exist.');
        }
        return $this->sendResponse(new ProductResources($product), 'Product fetched.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();

        $product->name = $input['name'];
        $product->description = $input['description'];
        $product->sku = $input['sku'];
        $product->category = $input['category'];
        $product->sub_categories = $input['sub_categories'];
        $product->brand = $input['brand'];
        $product->stock_amount = $input['stock_amount'];
        $product->stock_type = $input['stock_type'];
        $product->net_quantity = $input['net_quantity'];
        $product->quantity_type = $input['quantity_type'];
        $product->image = $input['image'];
        $product->active = $input['active'];
        $product->save();

        return $this->sendResponse(new ProductResources($product), 'Product updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return $this->sendResponse([], 'Product deleted.');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }
}
