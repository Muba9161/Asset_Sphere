<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class CompilerController extends Controller
{
    public function index()
    {
        $code = DB::table('assetsphere')->latest('id')->first();

        if ($code) {
            $htmlCode = $code->html;
            $cssCode = $code->css;
            $jsCode = $code->js;
        } else {
            $htmlCode = "<h1>Start coding!</h1>"; // Default code
            $cssCode = "";
            $jsCode = "";
        }

        return view('compiler', [
            'htmlCode' => $htmlCode,
            'cssCode' => $cssCode,
            'jsCode' => $jsCode,
        ]);
    }
}
