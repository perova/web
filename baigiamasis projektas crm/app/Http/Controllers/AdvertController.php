<?php

namespace App\Http\Controllers;

use App\Advert;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAdvertRequest;
use Illuminate\Support\Facades\Auth;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts= Advert::orderBy('created_at','desc')->paginate(1);
        
       
        return view('home',['adverts'=>$adverts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('advert.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdvertRequest $request)
    {
            $advert=Advert::create($request->all());
            $advert->save();
            return redirect()->route('adverts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advert=Advert::find($id);
         return view('advert.show')->with('advert',$advert);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advert = Advert::find($id);

        return view('advert.form')->with('advert',$advert);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAdvertRequest $request, $id)
    {
        $advert=Advert::find($id);
        $advert->update($request->all());
        return redirect()->route('adverts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advert  $advert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advert = Advert::find($id);

      $advert->delete();
      //$request->session()->flash('success_msg','Your file deleted!');
      return redirect()->route('adverts');

    }
}
