<?php

namespace App\Http\Controllers;

use App\Models\Cameron;
use Illuminate\Http\Request;
use DB;

class CameronController extends Controller

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
            $r=request();
            if($r->file('image_a')!=''){
               $image_a=$r->file('image_a');  //get uploaded file from HTML      
                $image_a->move('images',$image_a->getClientOriginalName());  //image copy to folder under public/images 
                $imageName=$image_a->getClientOriginalName(); //get uploaded image file name
            }
            else{
                $imageName="empty.jpg";//default image
            }
            $r=request();
            if($r->file('image_b')!=''){
               $image_b=$r->file('image_b');  //get uploaded file from HTML      
                $image_b->move('images',$image_b->getClientOriginalName());  //image copy to folder under public/images 
                $imageName=$image_b->getClientOriginalName(); //get uploaded image file name
            }
            else{
                $imageName="empty.jpg";//default image
            }
    
            $r=request();
            if($r->file('image_c')!=''){
               $image_c=$r->file('image_c');  //get uploaded file from HTML      
                $image_c->move('images',$image_c->getClientOriginalName());  //image copy to folder under public/images 
                $imageName=$image_c->getClientOriginalName(); //get uploaded image file name
            }
    
            else{
                $imageName="empty.jpg";//default image
            }
          $addCameron=Cameron::create([
        'name'=>$r->productName,
        'description'=>$r->description,
        'price'=>$r->price,
        'quantity'=>$r->quantity,
        'image'=>$imageName,
        'image_a'=>$imageName,
        'image_b'=>$imageName,
        'image_c'=>$imageName,
        'categoryID'=>$r->categoryID,
            
        ]);
        return redirect()->route('viewCameron');
        }
    
        public function view(){
            $viewAll=Cameron::all();
            return view('viewCameron')->with('camerons',$viewAll);
        }
        
        public function delete($id){
            $deleteCameron=Cameron::find($id);
            $deleteCameron->delete();
            return redirect()->route('viewCameron');
        }
    
        public function show(){
            $viewAll=Cameron::all();
            return view('showCameron')->with('camerons',$viewAll);
        }
    
        public function showDetail($id){
            $viewAll=Cameron::all()->where('id',$id);
            return view('showCameronDetail')->with('camerons',$viewAll);
        }
    
    
    public function getDate(Request $request){
        $posts = DB::table('camerons')
                ->whereBetween('created_at', [$request->fdate, $request->sdate])
                ->get();
  
        return view('result', ['camerons' => $posts]);
        }

        public function index()
        {
            $camerons = Cameron::all();
            return view('camerons', compact('camerons'));
        }

        public function cart()
    {
        return view('cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $hotel = Cameron::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Hotel added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Hotel removed successfully');
        }
    }
}


    
      
