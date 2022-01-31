<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Admin\Services;
use App\Models\Frontend;
use App\Models\News;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $services=Services::latest()->take(8)->get();
        $about=About::first();
        $newses=News::latest()->take(6)->get()->toArray();
        // dd($newses);
        return view('frontend.pages.index')->with(compact('services','about','newses'));
    }
    public function subscription(Request $request){
        if($request->isMethod('post')){
            $data= $request->all();
             $request->validate([
                'name'=>'required',
                'organization'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'masssage'=>'required',
             ]);
            $subs= new Frontend();
            $subs->name=$data['name'];
            $subs->organization=$data['organization'];
            $subs->email=$data['email'];
            $subs->phone=$data['phone'];
            $subs->masssage=$data['masssage'];
            $subs->save();
            Toastr::success("We will response you soon!",'Massage sent!');
            return redirect()->back();die;
    }
 }
}
