<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->get();

        return view('admin.product.index', compact('data'));
    }
    public function status($type, $id)
    {

        $res = Product::where('id', $id)->update(['status' => $type]);
        if ($res) {
            return redirect()->back()->with('success', 'Product Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Oops Something Went Wrong!!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::latest()->get();


        return view('admin.product.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $image = '';
        $pro = new Product();
        $pro->name = $request->name;
        $pro->slug = Str::slug($pro->name);
        $pro->category_id = $request->category;
        $pro->description = $request->description;
        $image = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'products' . time() . '.'  . $image->getClientOriginalExtension();
            $location = 'uploads/product/';
            $image->move(public_path($location), $filename);
            $image = $filename;
        }
        $pro->image = $image;
        $pro->price = $request->price;
        $pro->discount_price =$request->discounted_price ?? $request->price;
        $res = $pro->save();
        if ($res) {
            return redirect()->route('product.index')->with('success', "Product Created Successfully");
        } else {
            return redirect()->back()->with('erros', 'Something went wrong!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
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
        $data = Product::findOrFail($product->id);
        $cats = Category::latest()->get();
        return view('admin.product.edit', compact('data', 'cats'));
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
      
        $request->validate([

            'name' => 'required|unique:coupons,name,' . $product->id,
            'code' => 'required|unique:coupons,code,' . $product->id,
            'value' => 'required'
        ]);

        $status = Coupon::where('id', $coupon->id)->update(['name' => $request->name, 'code' => $request->code, 'value' => $request->value]);
        if ($status) {
            return redirect()->route('coupon.index')->with('success', 'Coupon Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $res = Coupon::findOrFail($coupon->id);
        $status = $res->delete();
        if ($status) {
            return redirect()->back()->with('success', 'Coupon Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!!');
        }
    }
}
