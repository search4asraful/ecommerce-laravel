<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendContoller extends Controller
{
    public function adminSetting()
    {
        return view('backend.pages.user.setting');
    }

    public function bannerManage()
    {
        return view('backend.pages.general.banner');
    }

    public function dealsOutlet()
    {
        return view('backend.pages.general.dealsOutlet');
    }

    public function trendingBanner()
    {
        return view('backend.pages.general.trending');
    }

    public function membershipManage()
    {
        return view('backend.pages.general.brand-membership');
    }
}
