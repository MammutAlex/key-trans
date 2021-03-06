<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 01.08.17
 * Time: 9:58
 */

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function lang($locale)
    {
        if (array_key_exists($locale, trans('web.localeList'))) {
            app('translator')->setLocale($locale);
        }
        return view('index');
    }
}