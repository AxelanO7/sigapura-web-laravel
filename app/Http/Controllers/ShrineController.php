<?php

namespace App\Http\Controllers;
use App\Models\Shrine;


use Illuminate\Http\Request;


class ShrineController extends  Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $shrines = Shrine::latest()->paginate(5);
      
                return view('shrine/retrieve',compact('shrines'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shrine/create');
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
                'name_object' => 'required',
                'description_detail' => 'required',
                'description_visual' => 'required',
                'year_of_creation' => 'required',
                'period_of_creation' => 'required',
                'name_creator' => 'required',
                'creator_style' => 'required',
                'main_material' => 'required',
                'additional_material' => 'required',
                'creation_technique' => 'required',
                'ornament' => 'required',
                'length' => 'required',
                'height' => 'required',
                'width' => 'required',
                'weight' => 'required',
                'volume' => 'required',
                'physical_condition' => 'required',
                'level_of_damage' => 'required',
                'country_location' => 'required',
                'district_location' => 'required',
                'subdistrict_location' => 'required',
                'village_location' => 'required',
                'functional' => 'required',
                'ownership' => 'required',
                'ownership_history' => 'required',
                'historical_value' => 'required',
                'cultural_value' => 'required',
                'aesthetic_value' => 'required',
                'economic_value' => 'required',
        ]);
      
        Shrine::create($request->all());
       
        return redirect()->route('shrines.index')
                        ->with('success','data berhasil ditambah');
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
    public function edit(Shrine $shrine)
    {
        return view('shrine/update',compact('shrine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shrine $shrine)
    {
        $request->validate([
            'name_object' => 'required',
            'description_detail' => 'required',
            'description_visual' => 'required',
            'year_of_creation' => 'required',
            'period_of_creation' => 'required',
            'name_creator' => 'required',
            'creator_style' => 'required',
            'main_material' => 'required',
            'additional_material' => 'required',
            'creation_technique' => 'required',
            'ornament' => 'required',
            'length' => 'required',
            'height' => 'required',
            'width' => 'required',
            'weight' => 'required',
            'volume' => 'required',
            'physical_condition' => 'required',
            'level_of_damage' => 'required',
            'country_location' => 'required',
            'district_location' => 'required',
            'subdistrict_location' => 'required',
            'village_location' => 'required',
            'functional' => 'required',
            'ownership' => 'required',
            'ownership_history' => 'required',
            'historical_value' => 'required',
            'cultural_value' => 'required',
            'aesthetic_value' => 'required',
            'economic_value' => 'required',
        ]);
      
        $shrine->update($request->all());
      
        return redirect()->route('shrines.index')
                        ->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shrine $shrine)
    {
        $shrine->delete();
       
        return redirect()->route('shrines.index')
                        ->with('success','data berhasil dihapus');
    }
}
