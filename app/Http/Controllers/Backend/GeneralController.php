<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerStoreRequest;
use App\Http\Requests\MembershipStoreRequest;
use App\Models\Banner;
use App\Models\Membership;
use App\Services\GeneralServices;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    protected $generalServices;

    public function __construct(GeneralServices $generalServices)
    {
        $this->generalServices = $generalServices;
    }

    public function bannerShow()
    {
        $banners = Banner::all();
        return view('frontend.home.index', compact('banners'));
    }

    public function bannerStore(BannerStoreRequest $request)
    {
        $this->generalServices->bannerStore($request);

        $this->setMassege('success', 'Your new banner has been added');
        return redirect()->back();
    }
    
    public function bannerDelete($id)
    {
        $product = Banner::find($id);
        $product->delete();

        $this->setMassege('success', 'Banner has been deleted');
        return redirect()->back();
    }

    public function membershipShow()
    {
        $memberships = Membership::all();
        return view('frontend.home.index', compact('memberships'));
    }

    public function membershipStore(MembershipStoreRequest $request)
    {
        $this->generalServices->membershipStore($request);

        $this->setMassege('success', 'Your new membership has been added');
        return redirect()->back();
    }
    
    public function membershipDelete($id)
    {
        $product = Membership::find($id);
        $product->delete();
        
        $this->setMassege('success', 'A membership has been deleted');
        return redirect()->back();
    }

}
