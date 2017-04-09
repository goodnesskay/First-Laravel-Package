<?php

namespace Codebag\Doodle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoodleController extends Controller
{
    public function add($a,$b)
    {
        $result =  $a + $b;
        return view('doodle::add',compact('result'));
    }

    public function subtract($a,$b)
    {
        return $a - $b;
    }
}
