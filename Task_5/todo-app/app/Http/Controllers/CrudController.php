<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class CrudController extends Controller
{
    public function index(){
        $todo=Todo::all();
        $data=compact('todo');
        return view('todo')->with($data);
    }
    public function create(Request $request){
        $todo=new Todo;
        $todo->description= $request['description'];
        $todo->save();
        return $this->index();
    }
    public function onUpdate(Request $request,$id){
        $todo=Todo::find($id);
        $data=compact('todo');
        return view('update')->with($data);
    }
    public function update(Request $request,$id){
        $todo=Todo::find($id);
        $todo->description= $request['description'];
        $todo->save();
        return redirect('/');
    }
    public function delete(Request $request,$id){
        $todo=Todo::find($id)->delete();
        return redirect()->back();
    }
}
