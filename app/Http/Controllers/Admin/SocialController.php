<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\social;
use App\Models\Task;
use Brian2694\Toastr\Facades\Toastr;

class SocialController extends Controller
{
    public function index(){
        $socials = social::get()->toArray();
        return view('backend.pages.social.index')->with(compact('socials'));
     }
     public function add(Request $request){
         if($request->isMethod('post')){
             $data= $request->all();
              $request->validate([
                 'name'=>'required',
                 'parent_id'=>'required',
                 'details'=>'required',
              ]);
             $social= new Social();
             $social->name=$data['name'];
             $social->parent_id=$data['parent_id'];
             $social->details=$data['details'];
             $social->status=1;
             $social->save();
             Toastr::success("Uploaded successfully!",'Success!');
             return redirect('admin/social/index');die;
         }
         return view('backend.pages.social.add');
 
     }
 
     public function edit(Request $request, $id){
       $social= social::find($id);
       if($request->isMethod('post')){
         $data= $request->all();
         $request->validate([
            'name'=>'required',
            'parent_id'=>'required',
            'details'=>'required',
         ]);
         $social->name=$data['name'];
         $social->parent_id=$data['parent_id'];
         $social->details=$data['details'];
         $social->status=1;
         $social->save();
        Toastr::success("Updated successfully!" ,'Success!');
        return redirect('admin/social/index');die;
       }
       return view('backend.pages.social.edit')->with(compact('social'));
     }
     public function updateSocialStatus(Request $request){
        if($request->ajax()){
            $data= $request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            social::where('id',$data['social_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id'=>$data['social_id']]);
        }

    }
     public function delete($id){
         social::find($id)->delete();
         Task::where('social_id',$id)->delete();
         Toastr::success("Deleted!",'Success!');
         return redirect()->back();die;
     }
}
