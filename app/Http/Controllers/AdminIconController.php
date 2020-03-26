<?php

namespace App\Http\Controllers;

use App\Icon;
use Image;
use App\Http\Requests\StoreIcon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminIconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icons = Icon::all();
        return view('admin.icons.index', compact('icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.icons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIcon $request)
    {
        $icons = DB::transaction(function () use ($request) {
            $icons = Icon::create($request->data());

            if ($image = $request->file('icon')) {
                $ImageUpload = Image::make($image);
                $originalPath = public_path('images/');
                $ImageUpload->save($originalPath.time().$image->getClientOriginalName());
                $icons->image = time().$image->getClientOriginalName();
            }

            return $icons;
        });

        return redirect()
            ->route('adminIcon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreIcon $request, Icon $icon)
    {
        $icon = DB::transaction(function () use ($request, $icon) {
            $icon->update($request->data());

            if ($image = $request->file('icon')) {
                $ImageUpload = Image::make($image);
                $originalPath = public_path('images/');
                $ImageUpload->save($originalPath.time().$image->getClientOriginalName());
                $icons->image = time().$image->getClientOriginalName();
            }
            return $icon;
        });
        
        return redirect()
            ->route('adminIcon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icon $icon)
    {
        $icon->delete();

        return redirect()
            ->route('icon.index');
    }
}
