<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = AdminProductModel::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_title' => 'required',
            'product_price' => 'required',
            'product_link' => 'required',
            'product_level' => 'required',
            'product_des' => 'required',
            'product_img' => 'required',
        ]);

        $image = $validated['product_img'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $product = new AdminProductModel();
        $product->product_title = $validated['product_title'];
        $product->product_price = $validated['product_price'];
        $product->product_link = $validated['product_link'];
        $product->product_level = $validated['product_level'];
        $product->product_des = $validated['product_des'];
        $product->product_img = $imageName;
        $product->save();
        return redirect()->back()->with('success', 'Product Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $product = AdminProductModel::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = AdminProductModel::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = AdminProductModel::find($id);

        // check image

        if ($request->product_img) {
            $image = $request->product_img;
            $imageName = rand(111111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->product_img = $imageName;
        }
        $product->product_title = $request->product_title;
        $product->product_price = $request->product_price;
        $product->product_link = $request->product_link;
        $product->product_level = $request->product_level;
        $product->product_des = $request->product_des;
        $product->save();
        return redirect()->back()->with('success', 'Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = AdminProductModel::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Product Deleted successfully');
    }
}
