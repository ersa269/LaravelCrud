<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CreateController;
use App\Models\Create;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        return view ('create');
    }

    public function store(Request $request)
    {
        $data =new Create();
        $data->name=$request->name;
        $data->contact=$request->contact;
        $data->address=$request->address;
        $data->save();
        return redirect ('create');
    }

    public function show()
    {
        $data=Create::all();
        return view ('show',compact('data'));
    }

    public function edit($id)
    {
        $data=Create::find($id);
        return view ('edit',['data'=>$data]);
    }
    public function update(Request $request,$id)
    {
        $data=Create::find($id);
        $data->name=$request->name;
        $data->contact=$request->contact;
        $data->address=$request->address;
        $data->save();
        return redirect ('show');
    }
    public function delete($id)
    {
       $data=Create::find($id);
       $data->delete();
       return redirect('show');
    }
}