<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Web;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $webs = Web::get()->toArray();
        return view('backend.pages.web.index')->with(compact('webs'));
     }
     public function add(Request $request){
         if($request->isMethod('post')){
             $data= $request->all();
              $request->validate([
                 'title'=>'required',
                 'code'=>'required',
                 'details'=>'required',
              ]);
             $web= new web();
             $web->title=$data['title'];
             $web->code=$data['code'];
             $web->details=$data['details'];
             $web->status=1;
             $web->save();
             Toastr::success("Uploaded successfully!",'Success!');
             return redirect('admin/web/index');die;
         }
         return view('backend.pages.web.add');
 
     }
 
     public function edit(Request $request, $id){
       $web= web::find($id);
       if($request->isMethod('post')){
         $data= $request->all();
         $request->validate([
            'title'=>'required',
            'code'=>'required',
            'details'=>'required',
         ]);
         $web->title=$data['title'];
         $web->code=$data['code'];
         $web->details=$data['details'];
         $web->status=1;
         $web->save();
        Toastr::success("Updated successfully!" ,'Success!');
        return redirect('admin/web/index');die;
       }
       return view('backend.pages.web.edit')->with(compact('web'));
     }
     public function updatewebStatus(Request $request){
        if($request->ajax()){
            $data= $request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            web::where('id',$data['web_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id'=>$data['web_id']]);
        }

    }
     public function delete($id){
         web::find($id)->delete();
         Task::where('web_id',$id)->delete();
         Toastr::success("Deleted!",'Success!');
         return redirect()->back();die;
     }
}
