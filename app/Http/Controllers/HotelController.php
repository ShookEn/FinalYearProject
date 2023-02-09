<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Hotel;

class HotelController extends Controller
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
    $addHotel=Hotel::create([
        'name'=>$r->productName,
        'description'=>$r->description,
        'price'=>$r->price,
        'quantity'=>$r->quantity,
        'image'=>$imageName,
        'image'=>$imageName,
        'image'=>$imageName,
        'image'=>$imageName,
        'categoryID'=>$r->categoryID,
    ]);
    return redirect()->route('viewHotel');
    }

    public function view(){
        $viewAll=Hotel::all();
        return view('viewHotel')->with('hotels',$viewAll);
    }
    
    public function delete($id){
        $deleteHotel=Hotel::find($id);
        $deleteHotel->delete();
        return redirect()->route('viewHotel');
    }

    public function show(){
        $viewAll=Hotel::all();
        return view('showHotel')->with('hotels',$viewAll);
    }

    public function edit($id){
        $viewAll=Hotel::all()->where('id',$id);
        //select * from categories where id='$id'
        return view('editHotel')->with('hotels',$viewAll);
    }
    public function showDetail($id){
        $viewAll=Hotel::all()->where('id',$id);
        //SQL select * from Products where id='$id'
        return view('showHotelDetail')->with('hotels',$viewAll);
    }

    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels', compact('hotels'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
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
        $hotel = Hotel::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $hotel->name,
                "quantity" => $hotel->quantity,
                "price" => $hotel->price,
                "image" => $hotel->image,
                
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Hotel added to cart successfully!');
    }

   /*public function update(Request $r){
        $hotel = Hotel::find($r->id);
        $hotel->name = $r->productName;
        $hotel->description=$r->description;
        $hotel->price=$r->price;
        $hotel->quantity=$r->quantity;
       // $hotel->image=$imageName;
        $hotel->categoryID = $r->categoryID;
        $hotel->save();
        return redirect('/viewHotel');
    } */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        return redirect('/viewHotel');
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
        return back();
    }
  
 
}

