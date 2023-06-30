<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserProductController extends Controller
{

    public function viewproduct(){
        $product = DB::table('products')->get();
        return view('user.pages.sanpham',compact('product'));
    }


    public function search(Request $request){
        $keyword = $request->input('keyword');

        $product = DB::table('products')
                    ->where('namesp', 'LIKE', '%'.$keyword.'%')
                    ->get();
        return view('user.pages.sanpham',compact('product'));
    }


    public function filter(Request $request){
        $category = $request->input('type');
        $product = DB::table('products')->where('type_product', $category)->get();
        if ($category == ''){
            $product = DB::table('products')->get();
        }
        return view('user.pages.sanpham',compact('product'));
    }


    public function chitietsanpham($idsp){
        $product = DB::table('products')->where('idsp',$idsp )->get();
        return view('user.pages.chitietsanpham',compact('product'));
    }
}
