<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Arr;


class SiteSettingController extends Controller
{
    public function index(SiteSetting $siteSetting)
    {
        $siteSetting = $siteSetting->all();
        return view('admin.sitesetting.index' , compact('siteSetting'));
    }

    public function store(Request $request , SiteSetting $siteSetting)
    {
        foreach (Arr::except($request->toArray() , ['_token','submit']) as $key=>$req){
            $siteSettingUpdate = $siteSetting->where('namsetting' , $key)->get()[0];
            $siteSettingUpdate->fill(['value' => $req])->save();
        }
        return Redirect::back()->withFlashMessage('تم التعديل على الاعدادات بنجاح');
    }


}
