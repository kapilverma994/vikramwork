<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\ProductEnquiry;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::latest()->get();
        return view('admin.category.index', compact('data'));
    }
    public function status($type, $id)
    {
        $res = Category::where('id', $id)->update(['status' => $type]);
        if ($res) {
            return redirect()->back()->with('success', 'Category Updated Successfully');
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
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories,category_name',
        ]);
        $slug = Str::slug($request->category);
        $res = Category::create(['category_name' => $request->category, 'slug' => $slug]);
        if ($res) {
            return redirect()->route('category.index')->with('success', "category Inserted");
        } else {
            return redirect()->back()->with('erros', 'Something went wrong!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    public function getcontactenquiry(){
    $data=Contact::latest()->get();
    return view('admin.contact.contact',compact('data'));
    }
    public function deletecontactenquiry($id){
  $data=Contact::findOrFail($id);
  $data->delete();
  return redirect()->back();

    }

    public function getproductenquiry(){
        $data=ProductEnquiry::latest()->get();
      return view('admin.contact.product_enquiry',compact('data'));
    }
    public function deleteproductenquiry($id){
        $data=ProductEnquiry::find($id);
        $data->delete();
        return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data = Category::findOrFail($category->id);
        return view('admin.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'category' => 'required|unique:categories,category_name,' . $category->id,

        ]);
        $slug = Str::slug($request->category);

        $status = Category::where('id', $category->id)->update(['category_name' => $request->category, 'slug' => $slug]);
        if ($status) {
            return redirect()->route('category.index')->with('success', 'Category Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $res = Category::findOrFail($id);
        $status = $res->delete();
        if ($status) {
            return redirect()->back()->with('success', 'Category Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!!');
        }
    }
}
