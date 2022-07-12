<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Banner::latest()->get();
        return view('admin.banner.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'banner_image'=>'required',
        ]);
        $data=$request->all();
            if ($request->hasFile('banner_image')) {
    
            $image = $request->file('banner_image');
            $filename = 'banners' . time() . '.'  . $image->getClientOriginalExtension();
            $location = 'uploads/banners/';
            $image->move(public_path($location), $filename);
            $image = $filename;
          
        }
        
          $data['banner_image']=$image;
        Banner::create($data);
        return redirect()->route('banner.index')->with('success', "Banner Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        
        Banner::FindOrFail($banner->id)->delete();
             return redirect()->route('banner.index')->with('success', "Banner deleted Successfully");
    }
}
