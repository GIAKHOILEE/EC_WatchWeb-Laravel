<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatFormRequest;
use App\Http\Service\AdminService;
use Illuminate\Support\Facades\Session;
use App\Models\OperationProduct;
use Illuminate\Support\Facades\DB;


class OperationProductController extends Controller
{


// CreatFormRequest
    public function store(CreatFormRequest  $request){

        $OperationProduct = new OperationProduct();
        if($request ->has('imgsp')){
            $file = $request -> imgsp;
            $ext = $request -> imgsp ->extension();
            $file_name = time(). '.'.$ext;
            $file -> move(public_path('imgproduct'),$file_name);
        }

        $OperationProduct['namesp']= $request->namesp;
        $OperationProduct['giasp']= $request->giasp;
        $OperationProduct['giagoc']= $request->giagoc;
        $OperationProduct['soluong']= $request->soluong;
        $OperationProduct['imgsp']= $file_name;
        $OperationProduct['chitietsp']= $request->chitietsp;
        $OperationProduct['type_product'] = $request->loaisp;

        $OperationProduct -> save();
        Session::flash('success', "Thêm sản phẩm thành công");
        return redirect()->back();
    }

    // View
    public function viewproduct(){
        $product = DB::table('products')->get();
        return view('admin.pages.sanpham',compact('product'));
    }

    // update
    public function edit($idsp){
        $updateProduct = DB::select('select * from products where idsp = ?',[$idsp]);
        return view('admin.pages.updateProduct',['news'=>$updateProduct]);
    }

    public function update(Request $request, $idsp){
        $namesp = $request->input('namesp');
        $giasp = $request->input('giasp');
        $giagoc = $request->input('giagoc');
        $soluong = $request->input('soluong');
        $chitietsp = $request->input('chitietsp');
        if($request ->has('imgsp')){
            $file = $request -> imgsp;
            $ext = $request -> imgsp ->extension();
            $file_name = time(). '.'.$ext;
            $file -> move(public_path('imgproduct'),$file_name);
        }
        $imgsp = $file_name;

        DB::table('products')
            ->where('idsp', $idsp)
            ->update(['namesp' => $namesp,'giasp' => $giasp,
            'giagoc' => $giagoc,'soluong' => $soluong,
            'chitietsp' => $chitietsp,'imgsp' => $imgsp]
        );
        return redirect('admin/pages/sanpham/');
    }

    // delete
    public function delete($idsp){
        DB::table('products')->where('idsp', $idsp)->delete();
        return redirect('admin/pages/sanpham/');
    }

}
