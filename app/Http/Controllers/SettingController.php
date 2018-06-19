<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;

class SettingController extends Controller
{
    public function __construct()
    {
        if (Session::get('admin_id') == null) return Redirect::to('/backend');;
    }

    // view settings
    public function setting(){
        return view('admin.setting');
    }
}
