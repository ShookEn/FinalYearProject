<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use DB;

class FlightController extends Controller
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
      $addFlight=Flight::create([
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
    return redirect()->route('viewFlight');
    }

    public function view(){
        $viewAll=Flight::all();
        return view('viewFlight')->with('flights',$viewAll);
    }
    
    public function delete($id){
        $deleteFlight=Flight::find($id);
        $deleteFlight->delete();
        return redirect()->route('viewFlight');
    }

    public function show(){
        $viewAll=Flight::all();
        return view('showFlight')->with('flights',$viewAll);
    }

    public function showDetail($id){
        $viewAll=Flight::all()->where('id',$id);
        return view('showFlightDetail')->with('flights',$viewAll);
    }
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels', compact('hotels'));
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
        $hotel = Flight::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $flight->name,
                "quantity" => 10,
                "price" => $flight->price,
                "image" => $imageName,
                
            ];
        }
          
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



  
