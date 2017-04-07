<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LangController extends Controller
{
    public function index(Request $request, $locale)
    {
    	app()->setlocale($locale);
    	echo trans('language.message');
    }
}
