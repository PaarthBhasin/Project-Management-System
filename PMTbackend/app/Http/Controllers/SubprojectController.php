<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subproject;

class SubprojectController extends Controller
{
    public function index(){
        return Subproject::all();
    }
    public function postsub(Request $request){
    $subproject = new Subproject;
    $subproject->projectid = $request->input('projectid');
    $subproject->name = $request->input('name');
    $subproject->description = $request->input('description');
    $subproject->expected_start_date = $request->input('expected_start_date');
    $subproject->expected_end_date = $request->input('expected_end_date');
    $subproject->actual_start_date = $request->input('actual_start_date');
    $subproject->actual_end_date = $request->input('actual_end_date');
    $subproject->priority = $request->input('priority');
    $subproject->status = $request->input('status');
    $subproject->createdBy = $request->input('createdBy');
    $subproject->updatedBy = $request->input('updatedBy');
    $subproject->save();
    return $subproject;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $newSubproject = Subproject::create([
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description
        ]);
        if($newSubproject){
            return response()->json(["status" => 200]);
        }
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $subproject = Subproject::find($id);
        return response()->json(['status' => 200, 'subproject' => $subproject]);
    }

    public function update(Request $request, $id)
    {
        $subproject = Subproject::find($id);
        $subproject->id = $request->id;
        $subproject->name = $request->name;
        $subproject->description = $request->description;
        if($subproject -> save()){
            return response()->json(["status" => 200]);
        }
    }

    public function delete($id)
    {
        $subproject = Subproject::find($id);
        if($subproject -> delete()){
            return response()->json(["status" => 200]);
        }
    }

}
