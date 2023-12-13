<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //從Model拿資料
       $areas = Area::all();
       //把資料送給view
       return view('areas.index')->with('areas',$areas);
   }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $position = $request->input('position');
        $element = $request->input('element');
        $belief = $request->input('belief');
        $god = $request->input('god');
        $ruler = $request->input('ruler');
        Area::create([
            'name' => $name,
            'position' => $position,
            'element' => $element,
            'belief' => $belief,
            'god' => $god,
            'ruler' => $ruler
        ]);
        return redirect('areas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //從Model拿資料
        $area = Area::findOrFail($id);
        $roles=$area->roles;
        //把資料送給view
        return view('areas.show',['area'=>$area,'roles'=>$roles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = Area::findOrFail($id);
        return view('areas.edit', ['area' =>$area]);
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
        $area = Area::findOrFail($id);

        $area->name = $request->input('name');
        $area->position = $request->input('position');
        $area->element = $request->input('element');
        $area->belief = $request->input('belief');
        $area->god = $request->input('god');
        $area->ruler = $request->input('ruler');
        $area->save();
        
        return redirect('areas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();
        return redirect('areas');
    }
}
