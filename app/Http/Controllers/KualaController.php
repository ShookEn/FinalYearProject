<?php

namespace App\Http\Controllers;

use App\Models\Kuala;
use Illuminate\Http\Request;
use DB;

class KualaController extends Controller
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
      $addKuala=Kuala::create([
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
    return redirect()->route('viewPenang');
    }

    public function view(){
        $viewAll=Kuala::all();
        return view('viewKuala')->with('kualas',$viewAll);
    }
    
    public function delete($id){
        $deleteKuala=Kuala::find($id);
        $deleteKuala->delete();
        return redirect()->route('viewKuala');
    }

    public function show(){
        $viewAll=Kuala::all();
        return view('showKuala')->with('kualas',$viewAll);
    }

    public function showDetail($id){
        $viewAll=Kuala::all()->where('id',$id);
        return view('showKualaDetail')->with('kualas',$viewAll);
    }
    public function index()
    {
        $kualas = Kuala::all();
        return view('kualas', compact('kualas'));
    }

public function getDate(Request $request){
    $posts = DB::table('penangs')
            ->whereBetween('created_at', [$request->fdate, $request->sdate])
            ->get();

    return view('result', ['camerons' => $posts]);
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
        $kuala = Kuala::findOrFail($id);
          
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
