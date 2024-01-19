<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LanguageController extends Controller
{
    public function change(Request $request, $language){
        App::setLocale($language);
        session()->put('locale', $language);
        return redirect()->back();
    }
}
