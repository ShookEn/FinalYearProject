<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Comment;


class CommentController extends Controller
{
    public function add(){
        $r=request();
        if($r->file('image')!=''){
           $image=$r->file('image');  //get uploaded file from HTML      
            $image->move('images',$image->getClientOriginalName());  //image copy to folder under public/images 
            $imageName=$image->getClientOriginalName(); //get uploaded image file name
        }
        else{
            $imageName="empty.jpg";//default image
        }
$addComment=Comment::create([
        'name'=>$r->Name,
        'feedback'=>$r->feedback,
        'image'=>$imageName,
    ]);
    return redirect()->route('viewComment');
    }

    public function view(){
        $viewAll=Comment::all();
        return view('viewComment')->with('comments',$viewAll);
    }
    
    public function delete($id){
        $deleteComment=Comment::find($id);
        $deleteComment->delete();
        return redirect()->route('viewComment');
    }
    public function edit($id){
        $comment=Comment::all()->where('id',$id);
        //select * from categories where id='$id'
        return view('editComment')->with('comments',$comment);
    }

   

}