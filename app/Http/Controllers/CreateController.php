<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Create;
use App\Http\Controllers\CreateController;

class CreateController extends Controller
{
    public function create()
    {
        return view("create");
    }
 
    public function store(Request $req)
    {
        $data = new Create();
        $data->name =$req->name;
        $data->contact=$req->contact;
        $data->address=$req->address;
        $data->save();
        return redirect('create');
    }
}
