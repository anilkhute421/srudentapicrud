<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    // get
    public function list(){

        $studentlist = StudentModel::all();
        // $studentlist = StudentModel::get();

        return response()->json(['data'=>$studentlist]);
    } 
    
    // post
    public function show(Request $request){

        $studentlist = StudentModel::find($request->id);

        return response()->json(['data'=>$studentlist]);
    }

    // post
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'phone' => 'required|max:50',
            'address' => 'required|max:191',
            'rollno' => 'required|max:244',
        ]);
        // $student = StudentModel::create($request->all());
        // dd($request->name);
       if($request->id){
           $student = StudentModel::find($request->id);
       }else{
           $student = new StudentModel();
       }
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->rollno = $request->rollno;
        $student->save();
        return response()->json(['data'=> $student,'message'=>'data store successfully']);
     }

    //  post
     public function delete(Request $request){
      
         StudentModel::where('id', $request->id)->delete();

         return response()->json(['message'=>'data delete successfully']);

     }

}

