<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Stuffs;
use Illuminate\View\View;

class StuffController extends Controller
{

    public function createStuffModal()
    {
        return view('create-stuff-modal');
    }

    public function show(Stuffs $stuff)
    {
        $stuff = Stuffs::find($stuff->id)->with(['class'])->get()->first();
        session()->put('stuff', $stuff);
        return view('stuff.show', ['stuff' => $stuff]);
    }
}
