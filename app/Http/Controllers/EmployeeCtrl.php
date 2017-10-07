<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeCtrl extends Controller
{
    public function index()
    {
        $data = Employee::all();
        return response()->json(['result' => $data],200);
    }

    public function destroy($id)
    {
        $query = Employee::findOrFail($id);
        $query->delete();
        if($query){
            return response()->json(['result' => true],200);
        }
    }

    public function add(Request $request)
    {
        $input = $request->all();
        $create = Employee::create($input);
        if($create){
            return response()->json(['result'=> true],200);
        }
    }

    public function single_fetch($id)
    {
        $query = Employee::findOrFail($id);
        return response()->json(['result' => $query],200);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $query = Employee::findOrFail($id);
        $input = $request->all();
        $qry = $query->fill($input)->save();
        if($qry){
            return response()->json(['result' => true],200);
        }
    }
}
