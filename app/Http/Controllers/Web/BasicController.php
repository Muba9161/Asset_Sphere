<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Loader;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home()
    {   $loaders = Loader::all();
        return view('web.home',compact('loaders'));
    }
}
