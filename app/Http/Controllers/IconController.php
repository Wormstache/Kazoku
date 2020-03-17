<?php

namespace App\Http\Controllers;

use App\Icon;
use App\Http\Requests\StoreIcon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.icons.create');
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
                $namefile = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('image/'.$namefile);
                Icon::make($image)->resize(300,300)->save($location);
                $icons->filename = $namefile;
            }
   
            return response()->json([
                'icon'=> $icons['image'],
            ]);

            return $icons;
        });

        return redirect()
            ->route('user.icon.index');
            // ->withSuccess(trans('messages.create_success', [ 'entity' => "Product Class '" . str_limit($productClass->title, 20) . "'" ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function show(Icon $icon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function edit(Icon $icon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Icon $icon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icon $icon)
    {
        //
    }
}