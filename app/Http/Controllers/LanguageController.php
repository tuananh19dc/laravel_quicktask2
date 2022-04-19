<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function language($language)
    {
        session()->put('language', $language);

        return redirect()->back();
    }
}
