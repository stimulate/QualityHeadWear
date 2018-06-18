<?php

namespace App\Http\Controllers;

use App\Http\Models\Cap;
use App\Http\Models\Category;
use App\Http\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SupplierController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        return view('/admin/suppliers');
    }
}