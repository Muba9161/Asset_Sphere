<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Loader;
use App\Models\Poetry;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home()
    {   $loaders = Loader::all();
        $poetrys = Poetry::all();
        return view('web.home',compact('loaders', 'poetrys'));
    }
}
