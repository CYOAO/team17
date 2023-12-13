<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\Area;



use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //從Model拿資料
          $roles = Role::all();
          //把資料送給view
          //to-do
          return view('roles.index')->with('roles',$roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $areas = Area::orderBy('areas.id', 'asc')->pluck('areas.name', 'areas.id');
        return view('roles.create', ['areas' =>$areas, 'areaSelected' => null]);
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
        $aid = $request->input('aid');
        $stars  = $request->input('stars');
        $property = $request->input('property');
        $gender = $request->input('gender');
        $weapon = $request->input('weapon');
        $constellation = $request->input('constellation');
        $permanent_limited  = $request->input('permanent_limited');
        $race= $request->input('race');
        $birthdate = $request->input('birthdate');
        $height  = $request->input('height');
        $version= $request->input('version');

        $role = Role::create([
            'name'=>$name,
            'aid'=>$aid,
            'stars'=>$stars,
            'property'=>$property,
            'gender'=>$gender,
            'weapon'=>$weapon,
            'constellation'=>$constellation,
            'permanent_limited'=>$permanent_limited,
            'race'=>$race,
            'birthdate'=>$birthdate,
            'height'=>$height,
            'version'=>$version]);
        return redirect('roles');


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
       $role = Role::findOrFail($id);
       //把資料送給view
       //to-do
       return view('roles.show')->with('role',$role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $areas = Area::orderBy('areas.id', 'asc')->pluck('areas.name', 'areas.id');
        $selected_tags = $role->area->id;
        return view('roles.edit', ['role' =>$role, 'areas' => $areas, 'areaSelected' => $selected_tags]);
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
        $role = Role::findOrFail($id);

        $role->name = $request->input('name');
        $role->aid = $request->input('aid');
        $role->stars  = $request->input('stars ');
        $role->property = $request->input('property');
        $role->gender = $request->input('gender');
        $role->weapon = $request->input('weapon');
        $role->constellation = $request->input('constellation');
        $role->permanent_limited  = $request->input('permanent_limited ');
        $role->race= $request->input('race');
        $role->birthdate = $request->input('birthdate');
        $role->height  = $request->input('height ');
        $role->version= $request->input('version');
        $role->save();

        return redirect('roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect('roles');  
    }
}
