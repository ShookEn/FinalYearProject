<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function index()
    {
        $data = \DB::table('hotel')->paginate(10);
        return view('search', compact('data'));
    }
    public function simple(Request $request)
    {
        $data = \DB::table('hotel');
        if( $request->input('search')){
            $data = $data->where('name', 'LIKE', "%" . $request->search . "%");
        }
        $data = $data->paginate(10);
        return view('hotel', compact('data'));
    }
    public function advance(Request $request)
    {
        $data = \DB::table('hotel');
        if( $request->name){
            $data = $data->where('name', 'LIKE', "%" . $request->name . "%");
        }
        if( $request->address){
            $data = $data->where('price', 'LIKE', "%" . $request->price . "%");
        }
        if( $request->categoryID ){
            $data = $data->where('categoryID', 'LIKE', "%" . $request->categoryID . "%");
        }
        $data = $data->paginate(10);
        return view('search', compact('data'));
    }
}
