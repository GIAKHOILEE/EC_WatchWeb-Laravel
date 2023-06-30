<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\CreatFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OperationProduct;

class MainController extends Controller
{

    public function index(){
        return view('admin.main');
    }


    public function home(){
        return view('admin.pages.home');
    }


    public function sanpham(){
        return view('admin.pages.sanpham');
    }

    public function welcome(){
        return view('welcome');
    }
}
