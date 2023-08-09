<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ChangeLanguageController extends Controller
{
    public function changeLanguage($locale)
    {
        $locale = app()->setLocale($locale);
        dd($locale);
        // $locale = LaravelLocalization::setLocale('ar');
        // dd(Session::get('locale'));
        // $locale = App::setLocale(Session::get('locale'));
        // dd($locale);
        return redirect()->back()->withSuccess("Language Changed");
        //Gets the translated message and displays it
        // echo trans('lang.msg');
    }
}
